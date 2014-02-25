<?php
/**
* WoltLab Community Framework
* Template: boardThreads
* Compiled at: Tue, 13 Aug 2013 17:19:26 +0000
* 
* DO NOT EDIT THIS FILE
*/
$this->v['tpl']['template'] = 'boardThreads';
?>
<?php
if (!isset($this->pluginObjects['TemplatePluginFunctionCycle'])) {
require_once(WCF_DIR.'lib/system/template/plugin/TemplatePluginFunctionCycle.class.php');
$this->pluginObjects['TemplatePluginFunctionCycle'] = new TemplatePluginFunctionCycle;
}
if (!isset($this->pluginObjects['TemplatePluginModifierTime'])) {
require_once(WCF_DIR.'lib/system/template/plugin/TemplatePluginModifierTime.class.php');
$this->pluginObjects['TemplatePluginModifierTime'] = new TemplatePluginModifierTime;
}
if (!isset($this->pluginObjects['TemplatePluginModifierEncodejs'])) {
require_once(WCF_DIR.'lib/system/template/plugin/TemplatePluginModifierEncodejs.class.php');
$this->pluginObjects['TemplatePluginModifierEncodejs'] = new TemplatePluginModifierEncodejs;
}
if (!isset($this->pluginObjects['TemplatePluginFunctionSmallpages'])) {
require_once(WCF_DIR.'lib/system/template/plugin/TemplatePluginFunctionSmallpages.class.php');
$this->pluginObjects['TemplatePluginFunctionSmallpages'] = new TemplatePluginFunctionSmallpages;
}
if (!isset($this->pluginObjects['TemplatePluginModifierConcat'])) {
require_once(WCF_DIR.'lib/system/template/plugin/TemplatePluginModifierConcat.class.php');
$this->pluginObjects['TemplatePluginModifierConcat'] = new TemplatePluginModifierConcat;
}
if (!isset($this->pluginObjects['TemplatePluginModifierShorttime'])) {
require_once(WCF_DIR.'lib/system/template/plugin/TemplatePluginModifierShorttime.class.php');
$this->pluginObjects['TemplatePluginModifierShorttime'] = new TemplatePluginModifierShorttime;
}
if (!isset($this->pluginObjects['TemplatePluginModifierDatediff'])) {
require_once(WCF_DIR.'lib/system/template/plugin/TemplatePluginModifierDatediff.class.php');
$this->pluginObjects['TemplatePluginModifierDatediff'] = new TemplatePluginModifierDatediff;
}
?><div class="border titleBarPanel">
	<div class="containerHead">
		<div class="containerIcon">
			<a onclick="openList('<?php echo StringUtil::encodeHTML($this->v['listName']); ?>', { save: true, openTitle: 'Open &quot;<?php echo $this->v['title']; ?>&quot;', closeTitle: 'Close &quot;<?php echo $this->v['title']; ?>&quot;' })"><img src="<?php echo StyleManager::getStyle()->getIconPath('minusS.png'); ?>" id="<?php echo StringUtil::encodeHTML($this->v['listName']); ?>Image" alt="" title="Close &quot;<?php echo $this->v['title']; ?>&quot;" /></a>
		</div>
		<div class="containerContent">
			<h3<?php if ($this->v['listHasNewThreads'] &&  ! $this->v['listStatus']) { ?> class="new"<?php } ?>><?php echo $this->v['title']; ?><?php if ($this->v['listHasNewThreads'] &&  ! $this->v['listStatus']) { ?> (<?php echo StringUtil::formatNumeric($this->v['listHasNewThreads']); ?>)<?php } ?></h3>
		</div>
	</div>
</div>
<div class="border borderMarginRemove" id="<?php echo StringUtil::encodeHTML($this->v['listName']); ?>">
	<table class="tableList">
		<thead>
			<tr class="tableHead">
				<?php if ($this->v['permissions']['canMarkThread']) { ?>
					<th class="columnMark">
						<div>
							<label class="emptyHead">
								<input name="threadMarkAll" type="checkbox" />
							</label>
						</div>
					</th>
				<?php } ?>
				<th colspan="2" class="columnTopic<?php if ($this->v['sortField'] == 'topic') { ?> active<?php } ?>">
					<div><a href="index.php?page=Board&amp;boardID=<?php echo $this->v['board']->boardID; ?>&amp;pageNo=<?php echo $this->v['pageNo']; ?>&amp;sortField=topic&amp;sortOrder=<?php if ($this->v['sortField'] == 'topic' && $this->v['sortOrder'] == 'DESC') { ?>ASC<?php } else { ?>DESC<?php } ?>&amp;daysPrune=<?php echo $this->v['daysPrune']; ?>&amp;status=<?php echo $this->v['status']; ?>&amp;prefix=<?php echo $this->v['encodedPrefix']; ?>&amp;languageID=<?php echo $this->v['languageID']; ?>&amp;tagID=<?php echo $this->v['tagID']; ?><?php echo SID_ARG_2ND; ?>">
						Topic<?php if ($this->v['sortField'] == 'topic') { ?> <img src="<?php ob_start(); ?>sort<?php echo $this->v['sortOrder']; ?>S.png<?php $_icon95de6b718f800e02989fe29c19875ac90fcf155d = ob_get_contents(); ob_end_clean(); echo StyleManager::getStyle()->getIconPath($_icon95de6b718f800e02989fe29c19875ac90fcf155d); ?>" alt="" /><?php } ?>
					</a></div>
				</th>
				<?php if ($this->v['enableRating']) { ?>
					<th class="columnRating<?php if ($this->v['sortField'] == 'ratingResult') { ?> active<?php } ?>">
						<div><a href="index.php?page=Board&amp;boardID=<?php echo $this->v['board']->boardID; ?>&amp;pageNo=<?php echo $this->v['pageNo']; ?>&amp;sortField=ratingResult&amp;sortOrder=<?php if ($this->v['sortField'] == 'ratingResult' && $this->v['sortOrder'] == 'DESC') { ?>ASC<?php } else { ?>DESC<?php } ?>&amp;daysPrune=<?php echo $this->v['daysPrune']; ?>&amp;status=<?php echo $this->v['status']; ?>&amp;prefix=<?php echo $this->v['encodedPrefix']; ?>&amp;languageID=<?php echo $this->v['languageID']; ?>&amp;tagID=<?php echo $this->v['tagID']; ?><?php echo SID_ARG_2ND; ?>">
							Rating<?php if ($this->v['sortField'] == 'ratingResult') { ?> <img src="<?php ob_start(); ?>sort<?php echo $this->v['sortOrder']; ?>S.png<?php $_iconc12aa84c577b2c5b4f823e9f472d588789e8dcb3 = ob_get_contents(); ob_end_clean(); echo StyleManager::getStyle()->getIconPath($_iconc12aa84c577b2c5b4f823e9f472d588789e8dcb3); ?>" alt="" /><?php } ?>
						</a></div>
					</th>
				<?php } ?>
				<th class="columnReplies<?php if ($this->v['sortField'] == 'replies') { ?> active<?php } ?>">
					<div><a href="index.php?page=Board&amp;boardID=<?php echo $this->v['board']->boardID; ?>&amp;pageNo=<?php echo $this->v['pageNo']; ?>&amp;sortField=replies&amp;sortOrder=<?php if ($this->v['sortField'] == 'replies' && $this->v['sortOrder'] == 'DESC') { ?>ASC<?php } else { ?>DESC<?php } ?>&amp;daysPrune=<?php echo $this->v['daysPrune']; ?>&amp;status=<?php echo $this->v['status']; ?>&amp;prefix=<?php echo $this->v['encodedPrefix']; ?>&amp;languageID=<?php echo $this->v['languageID']; ?>&amp;tagID=<?php echo $this->v['tagID']; ?><?php echo SID_ARG_2ND; ?>">
						Replies<?php if ($this->v['sortField'] == 'replies') { ?> <img src="<?php ob_start(); ?>sort<?php echo $this->v['sortOrder']; ?>S.png<?php $_icon7a24614b52cc10ab8bb5cebb8fedab6b585f8580 = ob_get_contents(); ob_end_clean(); echo StyleManager::getStyle()->getIconPath($_icon7a24614b52cc10ab8bb5cebb8fedab6b585f8580); ?>" alt="" /><?php } ?>
					</a></div>
				</th>
				<th class="columnViews<?php if ($this->v['sortField'] == 'views') { ?> active<?php } ?>">
					<div><a href="index.php?page=Board&amp;boardID=<?php echo $this->v['board']->boardID; ?>&amp;pageNo=<?php echo $this->v['pageNo']; ?>&amp;sortField=views&amp;sortOrder=<?php if ($this->v['sortField'] == 'views' && $this->v['sortOrder'] == 'DESC') { ?>ASC<?php } else { ?>DESC<?php } ?>&amp;daysPrune=<?php echo $this->v['daysPrune']; ?>&amp;status=<?php echo $this->v['status']; ?>&amp;prefix=<?php echo $this->v['encodedPrefix']; ?>&amp;languageID=<?php echo $this->v['languageID']; ?>&amp;tagID=<?php echo $this->v['tagID']; ?><?php echo SID_ARG_2ND; ?>">
						Views<?php if ($this->v['sortField'] == 'views') { ?> <img src="<?php ob_start(); ?>sort<?php echo $this->v['sortOrder']; ?>S.png<?php $_iconfb1639d9588e468ecbd83895b2c99ac30e5a80de = ob_get_contents(); ob_end_clean(); echo StyleManager::getStyle()->getIconPath($_iconfb1639d9588e468ecbd83895b2c99ac30e5a80de); ?>" alt="" /><?php } ?>
					</a></div>
				</th>
				<th class="columnLastPost<?php if ($this->v['sortField'] == 'lastPostTime') { ?> active<?php } ?>">
					<div><a href="index.php?page=Board&amp;boardID=<?php echo $this->v['board']->boardID; ?>&amp;pageNo=<?php echo $this->v['pageNo']; ?>&amp;sortField=lastPostTime&amp;sortOrder=<?php if ($this->v['sortField'] == 'lastPostTime' && $this->v['sortOrder'] == 'DESC') { ?>ASC<?php } else { ?>DESC<?php } ?>&amp;daysPrune=<?php echo $this->v['daysPrune']; ?>&amp;status=<?php echo $this->v['status']; ?>&amp;prefix=<?php echo $this->v['encodedPrefix']; ?>&amp;languageID=<?php echo $this->v['languageID']; ?>&amp;tagID=<?php echo $this->v['tagID']; ?><?php echo SID_ARG_2ND; ?>">
						Last post<?php if ($this->v['sortField'] == 'lastPostTime') { ?> <img src="<?php ob_start(); ?>sort<?php echo $this->v['sortOrder']; ?>S.png<?php $_iconeedb4dda7a6bdea94c881da2e070de4195adeabe = ob_get_contents(); ob_end_clean(); echo StyleManager::getStyle()->getIconPath($_iconeedb4dda7a6bdea94c881da2e070de4195adeabe); ?>" alt="" /><?php } ?>
					</a></div>
				</th>
			</tr>
		</thead>
		<tbody>
			<?php echo $this->pluginObjects['TemplatePluginFunctionCycle']->execute(array('values' => 'container-1,container-2', 'name' => 'className', 'print' => false, 'advance' => false), $this); ?>
			<?php
if (count($this->v['threads']) > 0) {
foreach ($this->v['threads'] as $this->v['thread']) {
?>
				<?php $this->assign('threadID', $this->v['thread']->threadID); ?>
				<?php if ($this->v['thread']->isDeleted &&  ! $this->v['board']->getModeratorPermission('canReadDeletedThread')) { ?>
					<tr class="<?php echo $this->pluginObjects['TemplatePluginFunctionCycle']->execute(array('name' => 'className'), $this); ?>">
						<?php if ($this->v['permissions']['canMarkThread']) { ?>
							<td class="columnMark">
								<label></label>
							</td>
						<?php } ?>
						<td class="columnIcon">
							<img src="<?php ob_start(); ?><?php echo $this->v['thread']->getIconName(); ?>M.png<?php $_icon3249d574cf4760346f2186f3f979c432576676b2 = ob_get_contents(); ob_end_clean(); echo StyleManager::getStyle()->getIconPath($_icon3249d574cf4760346f2186f3f979c432576676b2); ?>" alt="" />
						</td>
						<td class="columnTopic" colspan="<?php if ($this->v['enableRating']) { ?>5<?php } else { ?>4<?php } ?>">
							<span>The thread &quot;<?php echo StringUtil::encodeHTML($this->v['thread']->topic); ?>&quot; by &quot;<?php echo StringUtil::encodeHTML($this->v['thread']->username); ?>&quot; (<?php echo $this->pluginObjects['TemplatePluginModifierTime']->execute(array($this->v['thread']->time), $this); ?>) has been deleted by <?php if ($this->v['thread']->userID == $this->v['thread']->deletedByID) { ?>the author himself<?php } else { ?>user &quot;<?php echo StringUtil::encodeHTML($this->v['thread']->deletedBy); ?>&quot;<?php } ?> (<?php echo $this->pluginObjects['TemplatePluginModifierTime']->execute(array($this->v['thread']->deleteTime), $this); ?>)<?php if ($this->v['thread']->deleteReason) { ?> with the following reason: <?php echo StringUtil::encodeHTML($this->v['thread']->deleteReason); ?><?php } ?></span>
						</td>
					</tr>
				<?php } else { ?>
					<tr class="<?php echo $this->pluginObjects['TemplatePluginFunctionCycle']->execute(array('name' => 'className'), $this); ?>" id="threadRow<?php echo $this->v['thread']->threadID; ?>">
						<?php if ($this->v['permissions']['canMarkThread']) { ?>
							<td class="columnMarkTopics">
								<label><input id="threadMark<?php echo $this->v['thread']->threadID; ?>" type="checkbox" /></label>
							</td>
						<?php } ?>
						<td class="columnIcon">
							<?php if ($this->v['permissions']['canHandleThread'] || $this->v['permissions']['canHandlePost']) { ?>
								<?php echo $this->pluginObjects['TemplatePluginFunctionCycle']->execute(array('name' => 'className', 'print' => false), $this); ?>
								<script type="text/javascript">
									//<![CDATA[
									threadData.set(<?php echo $this->v['thread']->threadID; ?>, {
										'isMarked': <?php echo $this->v['thread']->isMarked(); ?>,
										'isDeleted': <?php echo $this->v['thread']->isDeleted; ?>,
										'isDisabled': <?php echo $this->v['thread']->isDisabled; ?>,
										'isClosed': <?php echo $this->v['thread']->isClosed; ?>,
										'isMoved': <?php if ($this->v['thread']->movedThreadID) { ?><?php echo $this->v['thread']->realThreadID; ?><?php } else { ?>0<?php } ?>,
										'isSticky': <?php echo $this->v['thread']->isSticky; ?>,
										'isAnnouncement': <?php echo $this->v['thread']->isAnnouncement; ?>,
										'className': '<?php echo $this->pluginObjects['TemplatePluginFunctionCycle']->execute(array('name' => "className"), $this); ?>',
										'prefix': '<?php echo StringUtil::encodeHTML($this->pluginObjects['TemplatePluginModifierEncodejs']->execute(array($this->v['thread']->prefix), $this)); ?>',
										'isDone': <?php echo $this->v['thread']->isDone; ?>
									});
									//]]>
								</script>
							<?php } ?>
							<img id="threadEdit<?php echo $this->v['thread']->threadID; ?>" src="<?php ob_start(); ?><?php echo $this->v['thread']->getIconName(); ?>M.png<?php $_icone7e9c1ffffb0c37c08e710654094a3c92cd3d613 = ob_get_contents(); ob_end_clean(); echo StyleManager::getStyle()->getIconPath($_icone7e9c1ffffb0c37c08e710654094a3c92cd3d613); ?>" alt="" <?php if ($this->v['thread']->isNew()) { ?>title="Mark thread as read by double click" <?php } ?>/>
							<?php if ($this->v['thread']->isNew()) { ?>
								<script type="text/javascript">
									//<![CDATA[
									threadMarkAsRead.init(<?php echo $this->v['thread']->threadID; ?>);
									//]]>
								</script>
							<?php } ?>
						</td>
						<td class="columnTopic"<?php if (BOARD_THREADS_ENABLE_MESSAGE_PREVIEW && $this->v['board']->getPermission('canReadThread')) { ?> title="<?php echo StringUtil::encodeHTML($this->v['thread']->firstPostPreview); ?>"<?php } ?>>
							<div id="thread<?php echo $this->v['thread']->threadID; ?>" class="topic<?php if ($this->v['thread']->isNew()) { ?> new<?php } ?><?php if ($this->v['thread']->ownPosts || $this->v['thread']->subscribed) { ?> interesting<?php } ?>">
								<?php if ($this->v['thread']->isNew()) { ?>
									<a id="gotoFirstNewPost<?php echo $this->v['thread']->threadID; ?>" href="index.php?page=Thread&amp;threadID=<?php echo $this->v['thread']->threadID; ?>&amp;action=firstNew<?php echo SID_ARG_2ND; ?>"><img class="goToNewPost" src="<?php echo StyleManager::getStyle()->getIconPath('goToFirstNewPostS.png'); ?>" alt="" title="Jump to the first unread post" /></a>
								<?php } ?>
								
								<p id="threadTitle<?php echo $this->v['thread']->threadID; ?>">
									<span<?php if ($this->v['thread']->boardID == $this->v['board']->boardID) { ?> id="threadPrefix<?php echo $this->v['thread']->threadID; ?>"<?php } ?> class="prefix"><strong><?php $this->tagStack[] = array('lang', array()); ob_start(); ?><?php echo StringUtil::encodeHTML($this->v['thread']->prefix); ?><?php $_lang4058fab4ab904449ff17d4adee57d6f28c0282ea = ob_get_contents(); ob_end_clean(); echo WCF::getLanguage()->getDynamicVariable($_lang4058fab4ab904449ff17d4adee57d6f28c0282ea, $this->tagStack[count($this->tagStack) - 1][1]); array_pop($this->tagStack); ?></strong></span>
									<a href="index.php?page=Thread&amp;threadID=<?php echo $this->v['thread']->threadID; ?><?php echo SID_ARG_2ND; ?>"><?php echo StringUtil::encodeHTML($this->v['thread']->topic); ?></a>
								</p>
							</div>
							<div class="statusDisplay">
								<?php if (BOARD_THREADS_ENABLE_SMALL_PAGES) { ?><?php echo $this->pluginObjects['TemplatePluginFunctionSmallpages']->execute(array('pages' => $this->v['thread']->getPages($this->v['board']), 'link' => $this->pluginObjects['TemplatePluginModifierConcat']->execute(array("index.php?page=Thread&threadID={$this->v['threadID']}&pageNo=%d",SID_ARG_2ND_NOT_ENCODED), $this)), $this); ?><?php } ?>
								<div class="statusDisplayIcons">
									<?php if (isset($this->v['additionalSmallPages'][$this->v['threadID']])) { ?><?php echo $this->v['additionalSmallPages'][$this->v['threadID']]; ?><?php } ?>
									<?php if ($this->v['thread']->subscribed) { ?><img src="<?php echo StyleManager::getStyle()->getIconPath('subscribedS.png'); ?>" alt="" title="You have subscribed to this thread." /><?php } ?>
									<?php if ($this->v['thread']->ownPosts) { ?><img src="<?php echo StyleManager::getStyle()->getIconPath('userS.png'); ?>" alt="" title="This thread contains posts from you." /><?php } ?>
									<?php if ($this->v['thread']->polls) { ?><img src="<?php echo StyleManager::getStyle()->getIconPath('pollS.png'); ?>" alt="" title="This thread contains <?php if ($this->v['thread']->polls == 1) { ?>one poll<?php } else { ?><?php echo StringUtil::encodeHTML($this->v['thread']->polls); ?> polls<?php } ?>." /><?php } ?>
									<?php if (MODULE_ATTACHMENT && $this->v['thread']->attachments) { ?><img src="<?php echo StyleManager::getStyle()->getIconPath('attachmentS.png'); ?>" alt="" title="This thread contains <?php if ($this->v['thread']->attachments == 1) { ?>one attachment<?php } else { ?><?php echo StringUtil::encodeHTML($this->v['thread']->attachments); ?> attachments<?php } ?>." /><?php } ?>
									<?php if (BOARD_THREADS_ENABLE_LANGUAGE_FLAG && $this->v['thread']->languageID) { ?><?php echo $this->v['thread']->getLanguageIcon(); ?><?php } ?>
									<?php if (MODULE_THREAD_MARKING_AS_DONE == 1 && $this->v['board']->enableMarkingAsDone == 1) { ?>
										<?php if ($this->v['thread']->isDone) { ?><img id="threadMarking<?php echo $this->v['thread']->threadID; ?>" src="<?php echo StyleManager::getStyle()->getIconPath('doneS.png'); ?>" alt="" title="Thread is done" /><?php } else { ?><img id="threadMarking<?php echo $this->v['thread']->threadID; ?>" src="<?php echo StyleManager::getStyle()->getIconPath('undoneS.png'); ?>" alt="" title="Thread is not done yet" /><?php } ?>
									<?php } ?>
								</div>
							</div>
							<p class="firstPost light">
								By
								<?php if ($this->v['thread']->userID) { ?>
									<a href="index.php?page=User&amp;userID=<?php echo $this->v['thread']->userID; ?><?php echo SID_ARG_2ND; ?>"><?php echo StringUtil::encodeHTML($this->v['thread']->username); ?></a>
								<?php } else { ?>
									<?php echo StringUtil::encodeHTML($this->v['thread']->username); ?>
								<?php } ?>
								(<?php echo $this->pluginObjects['TemplatePluginModifierShorttime']->execute(array($this->v['thread']->time), $this); ?>)
							</p>
														
							<?php if ($this->v['thread']->isDeleted) { ?>
								<p class="deleteNote smallFont">Deleted by <?php if ($this->v['thread']->userID == $this->v['thread']->deletedByID) { ?>the author himself<?php } else { ?>&quot;<?php echo StringUtil::encodeHTML($this->v['thread']->deletedBy); ?>&quot;<?php } ?> (<?php echo $this->pluginObjects['TemplatePluginModifierTime']->execute(array($this->v['thread']->deleteTime), $this); ?>)<?php if ($this->v['thread']->deleteReason) { ?>: <?php echo StringUtil::encodeHTML($this->v['thread']->deleteReason); ?><?php } ?>
		<?php if (THREAD_EMPTY_RECYCLE_BIN_CYCLE > 0) { ?><br />This thread will be deleted finally in <?php echo $this->pluginObjects['TemplatePluginModifierDatediff']->execute(array($this->v['thread']->deleteTime+THREAD_EMPTY_RECYCLE_BIN_CYCLE*86400), $this); ?>.<?php } ?></p>
							<?php } ?>
						</td>
						<?php if ($this->v['enableRating']) { ?>
							<td class="columnRating"><?php echo $this->v['thread']->getRatingOutput(); ?></td>
						<?php } ?>
						<td class="columnReplies<?php if ($this->v['thread']->replies >= BOARD_THREADS_REPLIES_HOT) { ?> hot<?php } ?>"><?php echo StringUtil::formatNumeric($this->v['thread']->replies); ?></td>
						<td class="columnViews<?php if ($this->v['thread']->views > BOARD_THREADS_VIEWS_HOT) { ?> hot<?php } ?>"><?php echo StringUtil::formatNumeric($this->v['thread']->views); ?></td>
						<td class="columnLastPost">
							<?php if ($this->v['thread']->replies != 0) { ?>
								<div class="containerIconSmall">
									<a href="index.php?page=Thread&amp;threadID=<?php echo $this->v['thread']->threadID; ?>&amp;action=lastPost<?php echo SID_ARG_2ND; ?>"><img src="<?php echo StyleManager::getStyle()->getIconPath('goToLastPostS.png'); ?>" alt="" title="Jump to the latest post of this thread" /></a>
								</div>
								<div class="containerContentSmall">
									<p>By <?php if ($this->v['thread']->lastPosterID) { ?><a href="index.php?page=User&amp;userID=<?php echo $this->v['thread']->lastPosterID; ?><?php echo SID_ARG_2ND; ?>"><?php echo StringUtil::encodeHTML($this->v['thread']->lastPoster); ?></a><?php } else { ?><?php echo StringUtil::encodeHTML($this->v['thread']->lastPoster); ?><?php } ?></p>
									<p class="smallFont light">(<?php echo $this->pluginObjects['TemplatePluginModifierShorttime']->execute(array($this->v['thread']->lastPostTime), $this); ?>)</p>
								</div>
							<?php } else { ?>
								<p class="smallFont light">No reply</p>
							<?php } ?>
						</td>
					</tr>
				<?php } ?>
			<?php } } ?>
	
		</tbody>
	</table>
</div>

<script type="text/javascript">
	//<![CDATA[
	initList('<?php echo StringUtil::encodeHTML($this->v['listName']); ?>', <?php echo $this->v['listStatus']; ?>);
	//]]>
</script>