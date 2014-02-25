<?php
/**
* WoltLab Community Framework
* Template: header
* Compiled at: Tue, 13 Aug 2013 11:37:05 +0000
* 
* DO NOT EDIT THIS FILE
*/
$this->v['tpl']['template'] = 'header';
?>
<?php
if (!isset($this->pluginObjects['TemplatePluginFunctionCounter'])) {
require_once(WCF_DIR.'lib/system/template/plugin/TemplatePluginFunctionCounter.class.php');
$this->pluginObjects['TemplatePluginFunctionCounter'] = new TemplatePluginFunctionCounter;
}
if (!isset($this->pluginObjects['TemplatePluginFunctionHtmloptions'])) {
require_once(WCF_DIR.'lib/system/template/plugin/TemplatePluginFunctionHtmloptions.class.php');
$this->pluginObjects['TemplatePluginFunctionHtmloptions'] = new TemplatePluginFunctionHtmloptions;
}
if (!isset($this->pluginObjects['TemplatePluginModifierShorttime'])) {
require_once(WCF_DIR.'lib/system/template/plugin/TemplatePluginModifierShorttime.class.php');
$this->pluginObjects['TemplatePluginModifierShorttime'] = new TemplatePluginModifierShorttime;
}
if (!isset($this->pluginObjects['TemplatePluginModifierConcat'])) {
require_once(WCF_DIR.'lib/system/template/plugin/TemplatePluginModifierConcat.class.php');
$this->pluginObjects['TemplatePluginModifierConcat'] = new TemplatePluginModifierConcat;
}
if (!isset($this->pluginObjects['TemplatePluginModifierTime'])) {
require_once(WCF_DIR.'lib/system/template/plugin/TemplatePluginModifierTime.class.php');
$this->pluginObjects['TemplatePluginModifierTime'] = new TemplatePluginModifierTime;
}
if (!isset($this->pluginObjects['TemplatePluginModifierNewlinetobreak'])) {
require_once(WCF_DIR.'lib/system/template/plugin/TemplatePluginModifierNewlinetobreak.class.php');
$this->pluginObjects['TemplatePluginModifierNewlinetobreak'] = new TemplatePluginModifierNewlinetobreak;
}
?><?php if ( ! $this->v['this']->user->userID &&  ! LOGIN_USE_CAPTCHA) { ?>
	<?php echo $this->pluginObjects['TemplatePluginFunctionCounter']->execute(array('name' => 'tabindex', 'start' => 4, 'print' => false), $this); ?>
<?php } else { ?>
	<?php echo $this->pluginObjects['TemplatePluginFunctionCounter']->execute(array('name' => 'tabindex', 'start' => 0, 'print' => false), $this); ?>
<?php } ?>

<div id="headerContainer">
	<a id="top"></a>
	<div id="userPanel" class="userPanel">
		<div class="userPanelInner">
			<p style="display: none;" id="userAvatar">
				<?php if ($this->v['this']->user->userID && $this->v['this']->user->getAvatar()) { ?><a href="index.php?page=User&amp;userID=<?php echo $this->v['this']->user->userID; ?><?php echo SID_ARG_2ND; ?>"><?php echo $this->v['this']->user->getAvatar(); ?></a><?php } else { ?><img src="<?php echo RELATIVE_WCF_DIR; ?>images/avatars/avatar-default.png" alt="" /><?php } ?>
			</p>
			<p id="userNote">
				<?php if ($this->v['this']->user->userID != 0) { ?>Angemeldet als <a href="index.php?page=User&amp;userID=<?php echo $this->v['this']->user->userID; ?><?php echo SID_ARG_2ND; ?>"><?php echo StringUtil::encodeHTML($this->v['this']->user->username); ?></a>.<?php } else { ?>Du bist nicht angemeldet.<?php } ?>
			</p>
			<div id="userMenu">
				<ul>
					<?php if ($this->v['this']->user->userID != 0) { ?>
						<li id="userMenuLogout"><a href="index.php?action=UserLogout&amp;t=<?php echo SECURITY_TOKEN; ?><?php echo SID_ARG_2ND; ?>"><img src="<?php echo StyleManager::getStyle()->getIconPath('logoutS.png'); ?>" alt="" /> <span>Abmelden</span></a></li>
						<li id="userMenuProfileEdit"><a href="index.php?form=UserProfileEdit<?php echo SID_ARG_2ND; ?>"><img src="<?php echo StyleManager::getStyle()->getIconPath('editS.png'); ?>" alt="" /> <span>Profil bearbeiten</span></a></li>
						<?php if (MODULE_PM == 1 && $this->v['this']->user->getPermission('user.pm.canUsePm')) { ?>
							<li <?php if ($this->v['this']->user->pmUnreadCount) { ?> class="new"<?php } ?> id="userMenuPm"><a href="index.php?page=PMList<?php echo SID_ARG_2ND; ?>"><img src="<?php ob_start(); ?>pm<?php if ($this->v['this']->user->pmUnreadCount) { ?>Full<?php } else { ?>Empty<?php } ?>S.png<?php $_icon7a5bfe158e458fd021d16de69d10197b7c31f156 = ob_get_contents(); ob_end_clean(); echo StyleManager::getStyle()->getIconPath($_icon7a5bfe158e458fd021d16de69d10197b7c31f156); ?>" alt="" /> <span>Private Nachrichten<?php if ($this->v['this']->user->pmUnreadCount) { ?> (<?php echo StringUtil::formatNumeric($this->v['this']->user->pmUnreadCount); ?>)<?php } ?></span></a><?php if ($this->v['this']->user->pmTotalCount >= $this->v['this']->user->getPermission('user.pm.maxPm')) { ?> <span class="pmBoxFull">(Postfach voll)</span><?php } ?></li>
						<?php } ?>
						<?php if ($this->v['this']->user->hasSubscriptions()) { ?>
							<li<?php if ($this->v['this']->user->getSubscriptionsUnreadCount()) { ?> class="new"<?php } ?> id="userMenuSubscriptions"><a href="index.php?page=SubscriptionsList<?php echo SID_ARG_2ND; ?>"><img src="<?php echo StyleManager::getStyle()->getIconPath('subscriptionsS.png'); ?>" alt="" /> <span>Abonnements<?php if ($this->v['this']->user->getSubscriptionsUnreadCount()) { ?> (<?php echo StringUtil::formatNumeric($this->v['this']->user->getSubscriptionsUnreadCount()); ?>)<?php } ?></span></a></li>
						<?php } ?>

						<?php if (isset($this->v['additionalUserMenuItems'])) { ?><?php echo $this->v['additionalUserMenuItems']; ?><?php } ?>

						<?php if ($this->v['this']->user->isGroupLeader()) { ?>
							<li id="userMenuGroupManagement"<?php if ($this->v['this']->user->getOutstandingGroupApplications()) { ?> class="new"<?php } ?>><a href="index.php?page=UserGroupLeader<?php echo SID_ARG_2ND; ?>"><img src="<?php echo StyleManager::getStyle()->getIconPath('groupLeaderS.png'); ?>" alt="" /> <span>Gruppenleitung<?php if ($this->v['this']->user->getOutstandingGroupApplications()) { ?> (<?php echo StringUtil::formatNumeric($this->v['this']->user->getOutstandingGroupApplications()); ?>)<?php } ?></span></a></li>
						<?php } ?>
						<?php if ($this->v['this']->user->isModerator()) { ?>
							<li id="userMenuModeration"<?php if ($this->v['this']->user->getOutstandingModerations()) { ?> class="new"<?php } ?>><a href="index.php?page=ModerationOverview<?php echo SID_ARG_2ND; ?>"><img src="<?php echo StyleManager::getStyle()->getIconPath('moderatorS.png'); ?>" alt="" /> <span>Moderation<?php if ($this->v['this']->user->getOutstandingModerations()) { ?> (<?php echo StringUtil::formatNumeric($this->v['this']->user->getOutstandingModerations()); ?>)<?php } ?></span></a></li>
						<?php } ?>
						<?php if ($this->v['this']->user->getPermission('admin.general.canUseAcp')) { ?>
							<li id="userMenuACP"><a href="acp/index.php?packageID=<?php echo PACKAGE_ID; ?>"><img src="<?php echo StyleManager::getStyle()->getIconPath('acpS.png'); ?>" alt="" /> <span>Administration</span></a></li>
						<?php } ?>
					<?php } else { ?>
						<li id="userMenuLogin" class="options"><a href="index.php?form=UserLogin<?php echo SID_ARG_2ND; ?>" id="loginButton"><img src="<?php echo StyleManager::getStyle()->getIconPath('loginS.png'); ?>" alt="" id="loginButtonImage" /> <span>Anmelden</span></a></li>

						<?php if ( ! REGISTER_DISABLED) { ?><li id="userMenuRegistration"><a href="index.php?page=Register<?php echo SID_ARG_2ND; ?>"><img src="<?php echo StyleManager::getStyle()->getIconPath('registerS.png'); ?>" alt="" /> <span>Registrieren</span></a></li><?php } ?>

						<?php if (isset($this->v['additionalUserMenuItems'])) { ?><?php echo $this->v['additionalUserMenuItems']; ?><?php } ?>

						<?php if ($this->v['this']->language->countAvailableLanguages() > 1) { ?>
							<li id="userMenuLanguage" class="languagePicker options"><a id="changeLanguage" class="hidden"><img src="<?php ob_start(); ?>language<?php echo ucfirst($this->v['this']->language->getLanguageCode()); ?>S.png<?php $_icon55cdd5939ad9bf6ee72f5656ec95882f7fb49355 = ob_get_contents(); ob_end_clean(); echo StyleManager::getStyle()->getIconPath($_icon55cdd5939ad9bf6ee72f5656ec95882f7fb49355); ?>" alt="" /> <span>Sprache ändern</span></a>
								<div class="hidden" id="changeLanguageMenu">
									<ul>
										<?php
if (count($this->v['this']->language->getAvailableLanguageCodes()) > 0) {
foreach ($this->v['this']->language->getAvailableLanguageCodes() as $this->v['guestLanguageID'] => $this->v['guestLanguageCode']) {
?>
											<li<?php if ($this->v['guestLanguageID'] == $this->v['this']->language->getLanguageID()) { ?> class="active"<?php } ?>><a rel="nofollow" href="<?php if ($this->v['this']->session->requestURI && $this->v['this']->session->requestMethod == 'GET') { ?><?php echo StringUtil::encodeHTML($this->v['this']->session->requestURI); ?><?php if (strpos($this->v['this']->session->requestURI,'?')) { ?>&amp;<?php } else { ?>?<?php } ?><?php } else { ?>index.php?<?php } ?>l=<?php echo StringUtil::encodeHTML($this->v['guestLanguageID']); ?><?php echo SID_ARG_2ND; ?>"><img src="<?php ob_start(); ?>language<?php echo ucfirst($this->v['guestLanguageCode']); ?>S.png<?php $_icon122a614bdb8569cb12db2655e408a7d9782b853e = ob_get_contents(); ob_end_clean(); echo StyleManager::getStyle()->getIconPath($_icon122a614bdb8569cb12db2655e408a7d9782b853e); ?>" alt="" /> <span><?php $this->tagStack[] = array('lang', array()); ob_start(); ?>wcf.global.language.<?php echo $this->v['guestLanguageCode']; ?><?php $_lang769467ec76d6ee9e9c0c3d4d1080e109111502c1 = ob_get_contents(); ob_end_clean(); echo WCF::getLanguage()->getDynamicVariable($_lang769467ec76d6ee9e9c0c3d4d1080e109111502c1, $this->tagStack[count($this->tagStack) - 1][1]); array_pop($this->tagStack); ?></span></a></li>
										<?php } } ?>
									</ul>
								</div>
								<script type="text/javascript">
									//<![CDATA[
									onloadEvents.push(function() { document.getElementById('changeLanguage').className=''; });
									popupMenuList.register('changeLanguage');
									//]]>
								</script>
								<noscript>
									<form method="get" action="index.php">
										<div>
											<label><img src="<?php ob_start(); ?>language<?php echo ucfirst($this->v['this']->language->getLanguageCode()); ?>S.png<?php $_icon1a96d10162f480a51783487be38e5e958b7ddf57 = ob_get_contents(); ob_end_clean(); echo StyleManager::getStyle()->getIconPath($_icon1a96d10162f480a51783487be38e5e958b7ddf57); ?>" alt="" />
												<select name="l">
													<?php echo $this->pluginObjects['TemplatePluginFunctionHtmloptions']->execute(array('options' => $this->v['this']->language->getLanguages(), 'selected' => $this->v['this']->language->getLanguageID(), 'disableEncoding' => true), $this); ?>
												</select>
											</label>
											<?php echo SID_INPUT_TAG; ?>
											<input type="image" class="inputImage" src="<?php echo StyleManager::getStyle()->getIconPath('submitS.png'); ?>" alt="Absenden" />
										</div>
									</form>
								</noscript>
							</li>
						<?php } ?>
					<?php } ?>
				</ul>
			</div>
		</div>
	</div>

	<?php if ( ! $this->v['this']->user->userID &&  ! LOGIN_USE_CAPTCHA) { ?>
		<script type="text/javascript">
			//<![CDATA[
			document.observe("dom:loaded", function() {
				var loginFormVisible = false;

				var loginBox = $('quickLoginBox');
				var loginButton = $('loginButton');

				if (loginButton && loginBox) {
					function showLoginForm(evt) {
						if (loginBox.hasClassName('hidden')) {
							loginBox.setStyle('display: none');
							loginBox.removeClassName('hidden');
						}

						var top = (loginButton.cumulativeOffset()[1] + loginButton.getHeight() + 5);
						var left = loginButton.cumulativeOffset()[0] > $$('body')[0].getWidth()/2 ? loginButton.cumulativeOffset()[0] - loginBox.getWidth() + loginButton.getWidth() : loginButton.cumulativeOffset()[0];
						loginBox.setStyle('left: ' + left + 'px; top: ' + top + 'px;');
						if (loginBox.visible()) {
							new Effect.Parallel([
								new Effect.BlindUp(loginBox),
								new Effect.Fade(loginBox)
							], { duration: 0.3 });
							loginFormVisible = false;
						}
						else {
							new Effect.Parallel([
								new Effect.BlindDown(loginBox),
								new Effect.Appear(loginBox)
							], { duration: 0.3 });
							loginFormVisible = true;
						}
						evt.stop();
					}

					loginButton.observe('click', showLoginForm);
					loginButton.observe('dblclick', function() { document.location.href = fixURL('index.php?form=UserLogin<?php echo SID_ARG_2ND_NOT_ENCODED; ?>'); });

					document.getElementById('quickLoginUsername').onfocus = function() { if (this.value == 'Benutzername') this.value=''; };
					document.getElementById('quickLoginUsername').onblur = function() { if (this.value == '') this.value = 'Benutzername'; };
					$('loginButtonImage').src = $('loginButtonImage').src.gsub('loginS.png', 'loginOptionsS.png');
				}
			});
			//]]>
		</script>
	<?php } ?>

	<div id="header">

		

		<?php if ( ! isset($this->v['searchScript'])) { ?><?php $this->assign('searchScript', 'index.php?form=Search'); ?><?php } ?>
		<?php if ( ! isset($this->v['searchFieldName'])) { ?><?php $this->assign('searchFieldName', 'q'); ?><?php } ?>
		<?php if ( ! isset($this->v['searchFieldValue']) && isset($this->v['query'])) { ?><?php $this->assign('searchFieldValue', $this->v['query']); ?><?php } ?>
		<?php if ( ! isset($this->v['searchFieldTitle'])) { ?><?php $this->assign('searchFieldTitle', 'Suchbegriffe eingeben'); ?><?php } ?>
		<?php if ( ! isset($this->v['searchFieldOptions'])) { ?>
			<?php ob_start(); ?>
				<li><a href="index.php?form=Search&amp;action=unread<?php echo SID_ARG_2ND; ?>">Ungelesene Beiträge</a></li>
				<li><a href="index.php?form=Search&amp;action=unreplied<?php echo SID_ARG_2ND; ?>">Unbeantwortete Themen</a></li>
				<li><a href="index.php?form=Search&amp;action=24h<?php echo SID_ARG_2ND; ?>">Themen der letzten 24 Stunden</a></li>
				<?php if ($this->v['this']->user->userID) { ?><li><a href="index.php?form=Search&amp;action=newPostsSince&amp;since=<?php echo $this->v['this']->user->boardLastVisitTime; ?><?php echo SID_ARG_2ND; ?>">Neue Beiträge seit <?php echo $this->pluginObjects['TemplatePluginModifierShorttime']->execute(array($this->v['this']->user->boardLastVisitTime), $this); ?></a></li><?php } ?>
			<?php
$this->v['tpl']['capture']['default'] = ob_get_contents();
ob_end_clean();
$this->assign('searchFieldOptions', $this->v['tpl']['capture']['default']);
?>
		<?php } ?>
		<?php if ( ! isset($this->v['searchExtendedLink'])) { ?><?php $this->assign('searchExtendedLink', $this->pluginObjects['TemplatePluginModifierConcat']->execute(array('index.php?form=Search',SID_ARG_2ND), $this)); ?><?php } ?>
		<?php if ( ! isset($this->v['searchShowExtendedLink'])) { ?><?php $this->assign('searchShowExtendedLink', true); ?><?php } ?>

		<div id="search">
			<form method="post" action="<?php echo $this->v['searchScript']; ?>">

				<div class="searchContainer">
					<input type="text" tabindex="<?php echo $this->pluginObjects['TemplatePluginFunctionCounter']->execute(array('name' => 'tabindex'), $this); ?>" id="searchInput" class="inputText" name="<?php echo $this->v['searchFieldName']; ?>" value="<?php if ( ! empty($this->v['searchFieldValue'])) { ?><?php echo StringUtil::encodeHTML($this->v['searchFieldValue']); ?><?php } else { ?><?php echo $this->v['searchFieldTitle']; ?><?php } ?>" />
					<input type="image" tabindex="<?php echo $this->pluginObjects['TemplatePluginFunctionCounter']->execute(array('name' => 'tabindex'), $this); ?>" id="searchSubmit" class="searchSubmit inputImage" src="<?php echo StyleManager::getStyle()->getIconPath('searchSubmitS.png'); ?>" alt="Absenden" />
					<?php echo SID_INPUT_TAG; ?>
					<?php if (isset($this->v['searchHiddenFields'])) { ?><?php echo $this->v['searchHiddenFields']; ?><?php } else { ?><input type="hidden" name="types[]" value="post" /><?php } ?>

					<script type="text/javascript">
						//<![CDATA[
						document.getElementById('searchInput').setAttribute('autocomplete', 'off');
						document.getElementById('searchInput').onfocus = function() { if (this.value == '<?php echo $this->v['searchFieldTitle']; ?>') this.value=''; };
						document.getElementById('searchInput').onblur = function() { if (this.value == '') this.value = '<?php echo $this->v['searchFieldTitle']; ?>'; };
						document.getElementById('searchSubmit').ondblclick = function() { window.location = fixURL('index.php?form=Search<?php echo SID_ARG_2ND_NOT_ENCODED; ?>'); };
						<?php if ($this->v['searchFieldOptions'] || $this->v['searchShowExtendedLink']) { ?>
							popupMenuList.register("searchInput");
							document.getElementById('searchInput').className += " searchOptions";
						<?php } ?>
						//]]>
					</script>
					<?php if ($this->v['searchFieldOptions'] || $this->v['searchShowExtendedLink']) { ?>
						<div class="searchInputMenu">
							<div class="hidden" id="searchInputMenu">
								<div class="pageMenu smallFont">
									<ul>
										<?php echo $this->v['searchFieldOptions']; ?>
										<?php if ($this->v['searchShowExtendedLink']) { ?><li><a href="<?php echo $this->v['searchExtendedLink']; ?><?php if ( ! empty($this->v['searchFieldValue'])) { ?>&amp;defaultQuery=<?php echo StringUtil::encodeHTML(rawurlencode($this->v['searchFieldValue'])); ?><?php } ?>">Erweiterte Suche</a></li><?php } ?>
									</ul>
								</div>
							</div>
						</div>
					<?php } ?>

					<?php if ($this->v['searchShowExtendedLink']) { ?>
						<noscript>
							<p><a href="<?php echo $this->v['searchExtendedLink']; ?>">Erweiterte Suche</a></p>
						</noscript>
					<?php } ?>
				</div>
			</form>
		</div>
		<div id="logo">
			<div class="logoInner">
				<h1 class="pageTitle"><a href="index.php?page=Index<?php echo SID_ARG_2ND; ?>"><?php $this->tagStack[] = array('lang', array()); ob_start(); ?><?php echo StringUtil::encodeHTML(PAGE_TITLE); ?><?php $_langfdf76840421de1492cef21f0db1d61006775bc78 = ob_get_contents(); ob_end_clean(); echo WCF::getLanguage()->getDynamicVariable($_langfdf76840421de1492cef21f0db1d61006775bc78, $this->tagStack[count($this->tagStack) - 1][1]); array_pop($this->tagStack); ?></a></h1>
				<?php if ($this->v['this']->getStyle()->getVariable('page.logo.image')) { ?>
					<a href="index.php?page=Index<?php echo SID_ARG_2ND; ?>" class="pageLogo">
						<img src="<?php echo StringUtil::encodeHTML($this->v['this']->getStyle()->getVariable('page.logo.image')); ?>" title="<?php $this->tagStack[] = array('lang', array()); ob_start(); ?><?php echo StringUtil::encodeHTML(PAGE_TITLE); ?><?php $_lang1c4550e29bf203fc3cae12680a7450187d8e5703 = ob_get_contents(); ob_end_clean(); echo WCF::getLanguage()->getDynamicVariable($_lang1c4550e29bf203fc3cae12680a7450187d8e5703, $this->tagStack[count($this->tagStack) - 1][1]); array_pop($this->tagStack); ?>" alt="" />
					</a>
				<?php } elseif ($this->v['this']->getStyle()->getVariable('page.logo.image.application.use') == 1) { ?>
					<a href="index.php?page=Index<?php echo SID_ARG_2ND; ?>" class="pageLogo">
						<img src="<?php echo RELATIVE_WBB_DIR; ?>images/wbb3-header-logo.png" title="<?php $this->tagStack[] = array('lang', array()); ob_start(); ?><?php echo StringUtil::encodeHTML(PAGE_TITLE); ?><?php $_langd49d7a6a5c3d1f17b02ca6d51b1f2aa676d090eb = ob_get_contents(); ob_end_clean(); echo WCF::getLanguage()->getDynamicVariable($_langd49d7a6a5c3d1f17b02ca6d51b1f2aa676d090eb, $this->tagStack[count($this->tagStack) - 1][1]); array_pop($this->tagStack); ?>" alt="" />
					</a>
				<?php } ?>
			</div>
		</div>
	</div>

	<?php
$outerTemplateNamefe401909038f256d533353df9342e09d792f0cf1 = $this->v['tpl']['template'];
$this->includeTemplate('headerMenu', array(), (1 ? 1 : 0));
$this->v['tpl']['template'] = $outerTemplateNamefe401909038f256d533353df9342e09d792f0cf1;
$this->v['tpl']['includedTemplates']['headerMenu'] = 1;
?>


<?php ob_start(); ?>
	<?php if ($this->v['this']->user->userID) { ?>

		<?php if ($this->v['this']->user->activationCode && REGISTER_ACTIVATION_METHOD == 1) { ?><p class="warning">Dein Benutzerkonto ist noch nicht aktiviert. Du musst den <a href="index.php?page=Register&amp;action=enable<?php echo SID_ARG_2ND; ?>">Aktivierungsvorgang abschließen</a>, um den vollen Funktionsumfang dieser Seite nutzen zu können.</p><?php } ?>

		<?php if ($this->v['this']->session->isNew) { ?><p class="info">Willkommen zurück, <?php echo StringUtil::encodeHTML($this->v['this']->user->username); ?>! <a href="index.php?form=Search&amp;action=newPostsSince&amp;since=<?php echo $this->v['this']->user->boardLastActivityTime; ?><?php echo SID_ARG_2ND; ?>">Neue Beiträge seit deinem letzten Besuch (<?php echo $this->pluginObjects['TemplatePluginModifierTime']->execute(array($this->v['this']->user->boardLastActivityTime), $this); ?>) anzeigen.</a></p><?php } ?>

		<?php if (MODULE_PM == 1 && $this->v['this']->user->showPmPopup && $this->v['this']->user->pmOutstandingNotifications && count($this->v['this']->user->getOutstandingNotifications()) > 0) { ?>
			<div class="info deletable" id="pmOutstandingNotifications">
				<a href="index.php?page=PM&amp;action=disableNotifications&amp;t=<?php echo SECURITY_TOKEN; ?><?php echo SID_ARG_2ND; ?>" class="close deleteButton"><img src="<?php echo StyleManager::getStyle()->getIconPath('closeS.png'); ?>" alt="" title="Benachrichtung ausblenden" longdesc="" /></a>
				<p>Du hast <?php echo StringUtil::formatNumeric(count($this->v['this']->user->getOutstandingNotifications())); ?> ungelesene private Nachricht<?php if (count($this->v['this']->user->getOutstandingNotifications()) > 1) { ?>en<?php } ?>:</p>
				<ul>
					<?php
if (count($this->v['this']->user->getOutstandingNotifications()) > 0) {
foreach ($this->v['this']->user->getOutstandingNotifications() as $this->v['outstandingNotification']) {
?>
						<li title="<?php echo StringUtil::encodeHTML($this->v['outstandingNotification']->getMessagePreview()); ?>">
							<a href="index.php?page=PMView&amp;pmID=<?php echo $this->v['outstandingNotification']->pmID; ?><?php echo SID_ARG_2ND; ?>#pm<?php echo $this->v['outstandingNotification']->pmID; ?>"><?php echo StringUtil::encodeHTML($this->v['outstandingNotification']->subject); ?></a>
							von

							<?php if ($this->v['outstandingNotification']->userID) { ?>
								<a href="index.php?page=User&amp;userID=<?php echo $this->v['outstandingNotification']->userID; ?><?php echo SID_ARG_2ND; ?>"><?php echo StringUtil::encodeHTML($this->v['outstandingNotification']->username); ?></a>
							<?php } elseif ($this->v['outstandingNotification']->username) { ?>
								<?php echo StringUtil::encodeHTML($this->v['outstandingNotification']->username); ?>
							<?php } else { ?>
								System
							<?php } ?>
						</li>
					<?php } } ?>
				</ul>
			</div>
		<?php } ?>

		<?php if ($this->v['this']->user->numberOfInvitations && count($this->v['this']->user->getInvitations())) { ?>
			<div class="info deletable" id="invitationContainer">
				<a href="index.php?action=WhiteListNotificationDisable&amp;ajax=1&amp;t=<?php echo SECURITY_TOKEN; ?><?php echo SID_ARG_2ND; ?>" class="close deleteButton"><img src="<?php echo StyleManager::getStyle()->getIconPath('closeS.png'); ?>" alt="" title="Benachrichtung ausblenden" longdesc="" /></a>
				<p><?php if (count($this->v['this']->user->getInvitations()) == 1) { ?>Von folgendem Benutzer liegt ein Freundschaftsangebot vor:<?php } else { ?>Von folgenden Benutzern liegen Freundschaftsangebote vor:<?php } ?></p>
				<ul class="itemList">
					<?php
if (count($this->v['this']->user->getInvitations()) > 0) {
foreach ($this->v['this']->user->getInvitations() as $this->v['member']) {
?>
						<li class="deletable">
							<div class="buttons">
								<a href="index.php?form=WhiteListEdit&amp;accept=<?php echo $this->v['member']->userID; ?>&amp;t=<?php echo SECURITY_TOKEN; ?><?php echo SID_ARG_2ND; ?>" class="deleteButton" title="Das Freundschaftsangebot dieses Benutzers annehmen"><img src="<?php echo StyleManager::getStyle()->getIconPath('checkS.png'); ?>" alt="Das Freundschaftsangebot dieses Benutzers annehmen" longdesc="Möchtest du die Freundschaft mit &raquo;<?php echo StringUtil::encodeHTML($this->v['member']->username); ?>&laquo; wirklich bestätigen?" /></a>
								<a href="index.php?form=WhiteListEdit&amp;decline=<?php echo $this->v['member']->userID; ?>&amp;t=<?php echo SECURITY_TOKEN; ?><?php echo SID_ARG_2ND; ?>" class="deleteButton" title="Das Freundschaftsangebot dieses Benutzers ablehnen"><img src="<?php echo StyleManager::getStyle()->getIconPath('deleteS.png'); ?>" alt="Das Freundschaftsangebot dieses Benutzers ablehnen" longdesc="Möchtest du die Freundschaft mit &raquo;<?php echo StringUtil::encodeHTML($this->v['member']->username); ?>&laquo; wirklich ablehnen?" /></a>
							</div>
							<p class="itemListTitle"><a href="index.php?page=User&amp;userID=<?php echo $this->v['member']->userID; ?><?php echo SID_ARG_2ND; ?>"><?php echo StringUtil::encodeHTML($this->v['member']->username); ?></a></p>
						</li>
					<?php } } ?>
				</ul>
			</div>
			<script type="text/javascript">
				//<![CDATA[
				document.observe('wcf:inlineDelete', function() {
					if ($('invitationContainer') && !$('invitationContainer').down('li')) {
						inlineDelete($('invitationContainer').down('.close'));
					}
				});
				//]]>
			</script>
		<?php } ?>

	<?php } elseif ( ! $this->v['this']->session->spiderID) { ?>

		<?php if ($this->v['this']->session->isNew) { ?><p class="info">Lieber Besucher, herzlich willkommen bei: <?php $this->tagStack[] = array('lang', array()); ob_start(); ?><?php echo StringUtil::encodeHTML(PAGE_TITLE); ?><?php $_langf10ee86fb6d19b3a051db0fe05fb8d42ba0261aa = ob_get_contents(); ob_end_clean(); echo WCF::getLanguage()->getDynamicVariable($_langf10ee86fb6d19b3a051db0fe05fb8d42ba0261aa, $this->tagStack[count($this->tagStack) - 1][1]); array_pop($this->tagStack); ?>.
Falls dies dein erster Besuch auf dieser Seite ist, lies bitte die <a href="index.php?page=Help<?php echo SID_ARG_2ND; ?>">Hilfe</a> durch. Dort wird dir die Bedienung dieser Seite näher erläutert.
Darüber hinaus solltest du dich registrieren, um alle Funktionen dieser Seite nutzen zu können.
Benutze das <a href="index.php?page=Register<?php echo SID_ARG_2ND; ?>">Registrierungsformular</a>, um dich zu registrieren oder <a href="index.php?page=Help&amp;item=user.login<?php echo SID_ARG_2ND; ?>">informiere dich ausführlich</a> über den Registrierungsvorgang.
Falls du dich bereits zu einem früheren Zeitpunkt registriert hast, kannst du dich <a href="index.php?form=UserLogin<?php echo SID_ARG_2ND; ?>">hier anmelden</a>.</p><?php } ?>

	<?php } ?>
	<?php if (OFFLINE == 1 && $this->v['this']->user->getPermission('user.board.canViewBoardOffline')) { ?>
		<div class="warning">
			Das Forum befindet sich zurzeit <?php if (OFFLINE_MESSAGE != '') { ?>aus folgenden Gründen im Wartungsmodus:<?php } else { ?>im Wartungsmodus.<?php } ?>
			<p><?php if (OFFLINE_MESSAGE_ALLOW_HTML) { ?><?php echo OFFLINE_MESSAGE; ?><?php } else { ?><?php echo $this->pluginObjects['TemplatePluginModifierNewlinetobreak']->execute(array(OFFLINE_MESSAGE), $this); ?><?php } ?></p>
		</div>
	<?php } ?>
<?php
$this->v['tpl']['capture']['default'] = ob_get_contents();
ob_end_clean();
$this->append('userMessages', $this->v['tpl']['capture']['default']);
?>
</div>
<div id="mainContainer">
<?php if (isset($this->v['additionalHeaderContents'])) { ?><?php echo $this->v['additionalHeaderContents']; ?><?php } ?>