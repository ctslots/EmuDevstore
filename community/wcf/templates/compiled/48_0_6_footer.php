<?php
/**
* WoltLab Community Framework
* Template: footer
* Compiled at: Tue, 13 Aug 2013 11:36:42 +0000
* 
* DO NOT EDIT THIS FILE
*/
$this->v['tpl']['template'] = 'footer';
?>
<?php
if (!isset($this->pluginObjects['TemplatePluginFunctionHtmloptions'])) {
require_once(WCF_DIR.'lib/system/template/plugin/TemplatePluginFunctionHtmloptions.class.php');
$this->pluginObjects['TemplatePluginFunctionHtmloptions'] = new TemplatePluginFunctionHtmloptions;
}
if (!isset($this->pluginObjects['TemplatePluginModifierFulldate'])) {
require_once(WCF_DIR.'lib/system/template/plugin/TemplatePluginModifierFulldate.class.php');
$this->pluginObjects['TemplatePluginModifierFulldate'] = new TemplatePluginModifierFulldate;
}
?><?php if (isset($this->v['additionalFooterContents'])) { ?><?php echo $this->v['additionalFooterContents']; ?><?php } ?>
</div>
<div id="footerContainer">
	<div id="footer">
		<?php
$outerTemplateName671c269050a9fbbaf4deca8dcb8f8bb941d52109 = $this->v['tpl']['template'];
$this->includeTemplate('footerMenu', array(), (1 ? 1 : 0));
$this->v['tpl']['template'] = $outerTemplateName671c269050a9fbbaf4deca8dcb8f8bb941d52109;
$this->v['tpl']['includedTemplates']['footerMenu'] = 1;
?>
		<div id="footerOptions" class="footerOptions">
			<div class="footerOptionsInner">
				<ul>
					<?php if (isset($this->v['additionalFooterOptions'])) { ?><?php echo $this->v['additionalFooterOptions']; ?><?php } ?>
					
					<?php if (count($this->v['stylePickerOptions']) > 1) { ?>
						<li class="stylePicker<?php if ( ! SHOW_CLOCK) { ?> last<?php } ?>">
							<a id="changeStyle" class="hidden"><img src="<?php echo StyleManager::getStyle()->getIconPath('styleOptionsS.png'); ?>" alt="" /> <span>Change style</span></a>
							<div class="hidden" id="changeStyleMenu">
								<ul>
									<?php
if (count($this->v['stylePickerOptions']) > 0) {
foreach ($this->v['stylePickerOptions'] as $this->v['styleID'] => $this->v['style']) {
?>
										<li<?php if ($this->v['styleID'] == $this->v['this']->style->styleID) { ?> class="active"<?php } ?>><a rel="nofollow" href="<?php if ($this->v['this']->session->requestURI && $this->v['this']->session->requestMethod == 'GET') { ?><?php echo StringUtil::encodeHTML($this->v['this']->session->requestURI); ?><?php if (strpos($this->v['this']->session->requestURI,'?')) { ?>&amp;<?php } else { ?>?<?php } ?><?php } else { ?>index.php?<?php } ?>styleID=<?php echo StringUtil::encodeHTML($this->v['styleID']); ?><?php echo SID_ARG_2ND; ?>"><span><?php echo StringUtil::encodeHTML($this->v['style']); ?></span></a></li>
									<?php } } ?>
								</ul>
							</div>
							
							<script type="text/javascript">
								//<![CDATA[
								onloadEvents.push(function() { document.getElementById('changeStyle').className=''; });
								popupMenuList.register('changeStyle');
								//]]>
							</script>
							
							<noscript>
								<form method="get" action="index.php" class="quickJump">
									<div>
										<input type="hidden" name="page" value="Index" />
										<select name="styleID" onchange="if (this.options[this.selectedIndex].value != 0) this.form.submit()">
											<option value="0">Change style</option>
											<option value="0">-----------------------</option>
											<?php echo $this->pluginObjects['TemplatePluginFunctionHtmloptions']->execute(array('options' => $this->v['stylePickerOptions'], 'selected' => $this->v['this']->style->styleID), $this); ?>
										</select>
										<?php echo SID_INPUT_TAG; ?>
										<input type="image" class="inputImage" src="<?php echo StyleManager::getStyle()->getIconPath('submitS.png'); ?>" alt="Submit" />
									</div>
								</form>
							</noscript>
						</li>
					<?php } ?>
					<?php if (SHOW_CLOCK) { ?>
						<li id="date" class="date last" title="<?php echo $this->pluginObjects['TemplatePluginModifierFulldate']->execute(array(TIME_NOW), $this); ?> UTC<?php if ($this->v['timezone'] > 0) { ?>+<?php echo $this->v['timezone']; ?><?php } elseif ($this->v['timezone'] < 0) { ?><?php echo $this->v['timezone']; ?><?php } ?>"><em><img src="<?php echo StyleManager::getStyle()->getIconPath('dateS.png'); ?>" alt="" /> <span><?php echo $this->pluginObjects['TemplatePluginModifierFulldate']->execute(array(TIME_NOW), $this); ?></span></em></li>
					<?php } ?>
					<li id="toTopLink" class="last extraButton"><a href="#top" title="Go to the top of the page"><img src="<?php echo StyleManager::getStyle()->getIconPath('upS.png'); ?>" alt="Go to the top of the page" /> <span class="hidden">Go to the top of the page</span></a></li>
				</ul>
			</div>
		</div>
		<p class="copyright"><a href="http://www.woltlab.com">Forum Software: <strong>Burning Board&reg;<?php if (SHOW_VERSION_NUMBER) { ?> <?php echo PACKAGE_VERSION; ?><?php } ?></strong>, developed by <strong>WoltLab&reg; GmbH</strong></a></p>
	</div>
</div>
<?php if ( ! $this->v['this']->user->userID &&  ! LOGIN_USE_CAPTCHA) { ?>
	<div class="border loginPopup hidden" id="quickLoginBox">
		<form method="post" action="index.php?form=UserLogin" class="container-1">
			<div>
				<input tabindex="1" type="text" class="inputText" id="quickLoginUsername" name="loginUsername" value="Username" title="Username" />
				<input tabindex="2" type="password" class="inputText" id="quickLoginPassword" name="loginPassword" value="" title="Password" />
				<?php if ($this->v['this']->session->requestMethod == "GET") { ?><input type="hidden" name="url" value="<?php echo StringUtil::encodeHTML($this->v['this']->session->requestURI); ?>" /><?php } ?>
				<?php echo SID_INPUT_TAG; ?>
				<input tabindex="4" type="image" class="inputImage" src="<?php echo StyleManager::getStyle()->getIconPath('submitS.png'); ?>" alt="Submit" />
			</div>
			<p><label><input tabindex="3" type="checkbox" id="useCookies" name="useCookies" value="1" /> Remember me?</label></p>
		</form>
	</div>
<?php } ?>