<?php
// wcf imports
if (!defined('NO_IMPORTS')) {
	require_once(WCF_DIR.'lib/system/template/TemplatePluginFunction.class.php');
	require_once(WCF_DIR.'lib/system/template/Template.class.php');
}

/**
 * The 'smallpages' template function is used to generate simple sliding pagers.
 * 
 * Usage:
 * {smallpages pages=10 link='page-%d.html'}
 * 
 * assign to variable 'output'; do not print: 
 * {smallpages pages=10 link='page-%d.html' assign='output'}
 * 
 * assign to variable 'output' and do print also:
 * {smallpages pages=10 link='page-%d.html' assign='output' print=true}
 * 
 * @author 	Marcel Werk
 * @copyright	2001-2009 WoltLab GmbH
 * @license	GNU Lesser General Public License <http://opensource.org/licenses/lgpl-license.php>
 * @package	com.woltlab.wcf
 * @subpackage	system.template.plugin
 * @category 	Community Framework
 */
class TemplatePluginFunctionSmallpages implements TemplatePluginFunction {
	const SHOW_LINKS = 5;
	
	/**
	 * Inserts the page number into the link.
	 * 
	 * @param 	string		$link
	 * @param 	integer		$pageNo
	 * @return	string		final link
	 */
	protected static function insertPageNumber($link, $pageNo) {
		$startPos = StringUtil::indexOf($link, '%d');
		if ($startPos !== null) $link = StringUtil::substring($link, 0, $startPos) . $pageNo . StringUtil::substring($link, $startPos + 2);
		return $link;
	}
	
	/**
	 * Generates html code of a link.
	 * 
	 * @param 	string		$link
	 * @param 	integer		$pageNo
	 * @return	string
	 */
	protected function makeLink($link, $pageNo) {
		return '<li><a href="'.$this->insertPageNumber($link, $pageNo).'" title="' . WCF::getLanguage()->getDynamicVariable('wcf.page.pageNo', array('pageNo' => $pageNo)) . '">'.StringUtil::formatInteger($pageNo).'</a></li>'."\n";
	}
	
	/**
	 * @see TemplatePluginFunction::execute()
	 */
	public function execute($tagArgs, Template $tplObj) {
		// needed params: link, pages
		if (!isset($tagArgs['link'])) throw new SystemException("missing 'link' argument in pages tag", 12001);
		if (!isset($tagArgs['pages'])) {
			if (($tagArgs['pages'] = $tplObj->get('pages')) === null) {
				throw new SystemException("missing 'pages' argument in pages tag", 12001);
			}
		}
		
		$html = '';
		if ($tagArgs['pages'] > 1) {
			// encode link
			$link = StringUtil::encodeHTML($tagArgs['link']);
		
			// open div and ul
			$html .= "<div class=\"pageNavigation\">\n<ul>\n";
			
			// generate simple links
			$simpleLinks = $tagArgs['pages'];
			if ($simpleLinks > self::SHOW_LINKS) {
				$simpleLinks = self::SHOW_LINKS - 2;
			}
			
			for ($i = 1; $i <= $simpleLinks; $i++) {
				$html .= $this->makeLink($link, $i);
			}
			
			if ($tagArgs['pages'] > self::SHOW_LINKS) {
				// jumper
				$html .= '<li><a onclick="var result = prompt(\''.WCF::getLanguage()->get('wcf.global.page.input').'\', \''.$tagArgs['pages'].'\'); if (typeof(result) != \'object\' &amp;&amp; typeof(result) != \'undefined\') document.location.href = fixURL((\''.StringUtil::replace("'", "\'", $link).'\').replace(/%d/, result));">&hellip;</a></li>'."\n";

				// last page
				$html .= $this->makeLink($link, $tagArgs['pages']);
			}
			
			// close div and ul
			$html .= "</ul></div>\n";
		}
		
		// assign html output to template var
		if (isset($tagArgs['assign'])) {
			$tplObj->assign($tagArgs['assign'], $html);
			if (!isset($tagArgs['print']) || !$tagArgs['print']) return '';
		}
		
		return $html;
	}
}
?>