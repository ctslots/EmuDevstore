<?php
/**
* WoltLab Community Framework
* Template: headerMenu
* Compiled at: Thu, 15 Aug 2013 01:21:51 +0000
* 
* DO NOT EDIT THIS FILE
*/
$this->v['tpl']['template'] = 'headerMenu';
?>

	<div id="mainMenu" class="mainMenu">
		<div class="mainMenuInner"><?php $this->assign('menuItemCounter', 0); ?><?php $this->assign('menuItemCount', count($this->v['this']->getPageMenu()->getMenuItems())); ?><ul><?php
if (count($this->v['this']->getPageMenu()->getMenuItems()) > 0) {
foreach ($this->v['this']->getPageMenu()->getMenuItems() as $this->v['item']) {
?><?php $this->assign('menuItemCounter', $this->v['menuItemCounter']+1); ?><li id="mainMenuItem<?php echo $this->v['item']['menuItemID']; ?>"<?php if ($this->v['item']['activeMenuItem'] || $this->v['menuItemCounter'] == 1 || $this->v['menuItemCounter'] == $this->v['menuItemCount']) { ?> class="<?php if ($this->v['menuItemCounter'] == 1) { ?>first<?php } elseif ($this->v['menuItemCounter'] == $this->v['menuItemCount']) { ?>last<?php } ?><?php if ($this->v['item']['activeMenuItem']) { ?><?php if ($this->v['menuItemCounter'] == 1 || $this->v['menuItemCounter'] == $this->v['menuItemCount']) { ?>Active<?php } else { ?>active<?php } ?><?php } ?>"<?php } ?>><a href="<?php echo StringUtil::encodeHTML($this->v['item']['menuItemLink']); ?>" title="<?php $this->tagStack[] = array('lang', array()); ob_start(); ?><?php echo $this->v['item']['menuItem']; ?><?php $_lang0ab2f94cf2c85e536619ed1e667a399dfcba2a8e = ob_get_contents(); ob_end_clean(); echo WCF::getLanguage()->getDynamicVariable($_lang0ab2f94cf2c85e536619ed1e667a399dfcba2a8e, $this->tagStack[count($this->tagStack) - 1][1]); array_pop($this->tagStack); ?>"><?php if ($this->v['item']['menuItemIconM']) { ?><img src="<?php echo StringUtil::encodeHTML($this->v['item']['menuItemIconM']); ?>" alt="" /> <?php } ?><span><?php $this->tagStack[] = array('lang', array()); ob_start(); ?><?php echo $this->v['item']['menuItem']; ?><?php $_langefdf7e6d9150c2842f1ec89848206feb6f5ef014 = ob_get_contents(); ob_end_clean(); echo WCF::getLanguage()->getDynamicVariable($_langefdf7e6d9150c2842f1ec89848206feb6f5ef014, $this->tagStack[count($this->tagStack) - 1][1]); array_pop($this->tagStack); ?></span></a></li><?php } } ?></ul>
		</div>
	</div>