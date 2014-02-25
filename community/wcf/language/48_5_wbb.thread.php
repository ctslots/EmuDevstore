<?php
/**
* WoltLab Community Framework
* language: de
* encoding: UTF-8
* category: wbb.thread
* generated at Tue, 13 Aug 2013 11:31:08 +0000
* 
* DO NOT EDIT THIS FILE
*/
$this->items[$this->languageID]['wbb.thread.button.reply'] = 'Antworten';
$this->items[$this->languageID]['wbb.thread.button.replyWithQuotes'] = '"Antworten" + (this.count > 0 ? " ("+this.count+" Zitat"+(this.count > 1 ? "e" : "")+")" : "")';
$this->items[$this->languageID]['wbb.thread.deletedPost'] = 'Der Beitrag{if $post->subject} &raquo;{$post->subject}&laquo;{/if} von &raquo;{$post->username}&laquo; ({@$post->time|time}) wurde{if $post->deleteReason} aus folgendem Grund{/if} vom {if $post->userID == $post->deletedByID}Autor selbst{else}Benutzer &raquo;{$post->deletedBy}&laquo;{/if} gelöscht{if $post->deleteReason}: {$post->deleteReason}{/if} ({@$post->deleteTime|time}).';
$this->dynamicItems[$this->languageID]['wbb.thread.deletedPost'] = '<?php
if (!isset($this->pluginObjects[\'TemplatePluginModifierTime\'])) {
require_once(WCF_DIR.\'lib/system/template/plugin/TemplatePluginModifierTime.class.php\');
$this->pluginObjects[\'TemplatePluginModifierTime\'] = new TemplatePluginModifierTime;
}
?>Der Beitrag<?php if ($this->v[\'post\']->subject) { ?> &raquo;<?php echo StringUtil::encodeHTML($this->v[\'post\']->subject); ?>&laquo;<?php } ?> von &raquo;<?php echo StringUtil::encodeHTML($this->v[\'post\']->username); ?>&laquo; (<?php echo $this->pluginObjects[\'TemplatePluginModifierTime\']->execute(array($this->v[\'post\']->time), $this); ?>) wurde<?php if ($this->v[\'post\']->deleteReason) { ?> aus folgendem Grund<?php } ?> vom <?php if ($this->v[\'post\']->userID == $this->v[\'post\']->deletedByID) { ?>Autor selbst<?php } else { ?>Benutzer &raquo;<?php echo StringUtil::encodeHTML($this->v[\'post\']->deletedBy); ?>&laquo;<?php } ?> gelöscht<?php if ($this->v[\'post\']->deleteReason) { ?>: <?php echo StringUtil::encodeHTML($this->v[\'post\']->deleteReason); ?><?php } ?> (<?php echo $this->pluginObjects[\'TemplatePluginModifierTime\']->execute(array($this->v[\'post\']->deleteTime), $this); ?>).';
$this->items[$this->languageID]['wbb.thread.feed'] = 'Beiträge dieses Themas abonnieren';
$this->items[$this->languageID]['wbb.thread.ignoredPost'] = 'Der Beitrag{if $post->subject} &raquo;{$post->subject}&laquo;{/if} von &raquo;{$post->username}&laquo; ({@$post->time|time}) wird nicht angezeigt, weil Sie den Benutzer &raquo;{$post->username}&laquo; ignorieren.';
$this->dynamicItems[$this->languageID]['wbb.thread.ignoredPost'] = '<?php
if (!isset($this->pluginObjects[\'TemplatePluginModifierTime\'])) {
require_once(WCF_DIR.\'lib/system/template/plugin/TemplatePluginModifierTime.class.php\');
$this->pluginObjects[\'TemplatePluginModifierTime\'] = new TemplatePluginModifierTime;
}
?>Der Beitrag<?php if ($this->v[\'post\']->subject) { ?> &raquo;<?php echo StringUtil::encodeHTML($this->v[\'post\']->subject); ?>&laquo;<?php } ?> von &raquo;<?php echo StringUtil::encodeHTML($this->v[\'post\']->username); ?>&laquo; (<?php echo $this->pluginObjects[\'TemplatePluginModifierTime\']->execute(array($this->v[\'post\']->time), $this); ?>) wird nicht angezeigt, weil Sie den Benutzer &raquo;<?php echo StringUtil::encodeHTML($this->v[\'post\']->username); ?>&laquo; ignorieren.';
$this->items[$this->languageID]['wbb.thread.ipAddress'] = 'IP-Adresse des Beitrags: {$ipAddress}';
$this->dynamicItems[$this->languageID]['wbb.thread.ipAddress'] = 'IP-Adresse des Beitrags: <?php echo StringUtil::encodeHTML($this->v[\'ipAddress\']); ?>';
$this->items[$this->languageID]['wbb.thread.ipAddress.otherAddresses'] = 'Weitere IP-Adressen von &raquo;{$post->username}&laquo;';
$this->dynamicItems[$this->languageID]['wbb.thread.ipAddress.otherAddresses'] = 'Weitere IP-Adressen von &raquo;<?php echo StringUtil::encodeHTML($this->v[\'post\']->username); ?>&laquo;';
$this->items[$this->languageID]['wbb.thread.ipAddress.otherUsers'] = 'Andere Benutzer mit der IP-Adresse &raquo;{$ipAddress.ipAddress}&laquo;';
$this->dynamicItems[$this->languageID]['wbb.thread.ipAddress.otherUsers'] = 'Andere Benutzer mit der IP-Adresse &raquo;<?php echo StringUtil::encodeHTML($this->v[\'ipAddress\'][\'ipAddress\']); ?>&laquo;';
$this->items[$this->languageID]['wbb.thread.ipAddress.title'] = 'IP-Adresse von &raquo;{$post->username}&laquo;';
$this->dynamicItems[$this->languageID]['wbb.thread.ipAddress.title'] = 'IP-Adresse von &raquo;<?php echo StringUtil::encodeHTML($this->v[\'post\']->username); ?>&laquo;';
$this->items[$this->languageID]['wbb.thread.markAsReadByDoubleClick'] = 'Thema durch Doppelklick als gelesen markieren';
$this->items[$this->languageID]['wbb.thread.permalink'] = 'Permalink zum {#$startIndex}. Beitrag';
$this->dynamicItems[$this->languageID]['wbb.thread.permalink'] = 'Permalink zum <?php echo StringUtil::formatNumeric($this->v[\'startIndex\']); ?>. Beitrag';
$this->items[$this->languageID]['wbb.thread.post.button.edit'] = 'Bearbeiten';
$this->items[$this->languageID]['wbb.thread.post.button.quote'] = 'Zitieren';
$this->items[$this->languageID]['wbb.thread.post.button.quoteMultiple'] = '"Zitieren" + (this.data[id]["quotes"] > 0 ? " ("+this.data[id]["quotes"]+")" : "")';
$this->items[$this->languageID]['wbb.thread.post.button.report'] = 'Melden';
$this->items[$this->languageID]['wbb.thread.post.deleteNote'] = 'Gelöscht {if $post->userID == $post->deletedByID}vom Autor selbst{else}von &raquo;{$post->deletedBy}&laquo;{/if} ({@$post->deleteTime|time}){if $post->deleteReason}: {$post->deleteReason}{/if}
		{if THREAD_EMPTY_RECYCLE_BIN_CYCLE > 0}<br />Zeit bis zur endgültigen Löschung: {@$post->deleteTime+THREAD_EMPTY_RECYCLE_BIN_CYCLE*86400|datediff}{/if}';
$this->dynamicItems[$this->languageID]['wbb.thread.post.deleteNote'] = '<?php
if (!isset($this->pluginObjects[\'TemplatePluginModifierTime\'])) {
require_once(WCF_DIR.\'lib/system/template/plugin/TemplatePluginModifierTime.class.php\');
$this->pluginObjects[\'TemplatePluginModifierTime\'] = new TemplatePluginModifierTime;
}
if (!isset($this->pluginObjects[\'TemplatePluginModifierDatediff\'])) {
require_once(WCF_DIR.\'lib/system/template/plugin/TemplatePluginModifierDatediff.class.php\');
$this->pluginObjects[\'TemplatePluginModifierDatediff\'] = new TemplatePluginModifierDatediff;
}
?>Gelöscht <?php if ($this->v[\'post\']->userID == $this->v[\'post\']->deletedByID) { ?>vom Autor selbst<?php } else { ?>von &raquo;<?php echo StringUtil::encodeHTML($this->v[\'post\']->deletedBy); ?>&laquo;<?php } ?> (<?php echo $this->pluginObjects[\'TemplatePluginModifierTime\']->execute(array($this->v[\'post\']->deleteTime), $this); ?>)<?php if ($this->v[\'post\']->deleteReason) { ?>: <?php echo StringUtil::encodeHTML($this->v[\'post\']->deleteReason); ?><?php } ?>
		<?php if (THREAD_EMPTY_RECYCLE_BIN_CYCLE > 0) { ?><br />Zeit bis zur endgültigen Löschung: <?php echo $this->pluginObjects[\'TemplatePluginModifierDatediff\']->execute(array($this->v[\'post\']->deleteTime+THREAD_EMPTY_RECYCLE_BIN_CYCLE*86400), $this); ?><?php } ?>';
$this->items[$this->languageID]['wbb.thread.post.editNote'] = 'Dieser Beitrag wurde bereits {#$post->editCount} mal editiert, zuletzt von &raquo;{$post->editor}&laquo; ({@$post->lastEditTime|shorttime}){if $post->editReason} aus folgendem Grund: {$post->editReason}{/if}';
$this->dynamicItems[$this->languageID]['wbb.thread.post.editNote'] = '<?php
if (!isset($this->pluginObjects[\'TemplatePluginModifierShorttime\'])) {
require_once(WCF_DIR.\'lib/system/template/plugin/TemplatePluginModifierShorttime.class.php\');
$this->pluginObjects[\'TemplatePluginModifierShorttime\'] = new TemplatePluginModifierShorttime;
}
?>Dieser Beitrag wurde bereits <?php echo StringUtil::formatNumeric($this->v[\'post\']->editCount); ?> mal editiert, zuletzt von &raquo;<?php echo StringUtil::encodeHTML($this->v[\'post\']->editor); ?>&laquo; (<?php echo $this->pluginObjects[\'TemplatePluginModifierShorttime\']->execute(array($this->v[\'post\']->lastEditTime), $this); ?>)<?php if ($this->v[\'post\']->editReason) { ?> aus folgendem Grund: <?php echo StringUtil::encodeHTML($this->v[\'post\']->editReason); ?><?php } ?>';
$this->items[$this->languageID]['wbb.thread.post.mark'] = 'Beitrag markieren';
$this->items[$this->languageID]['wbb.thread.post.quote.markPostToQuote'] = 'Beitrag zum Zitieren auswählen';
$this->items[$this->languageID]['wbb.thread.post.quote.markTextToQuote'] = 'Textstelle zum Zitieren auswählen';
$this->items[$this->languageID]['wbb.thread.post.quote.quotePostDirectly'] = 'Beitrag direkt zitieren';
$this->items[$this->languageID]['wbb.thread.post.quote.quoteTextDirectly'] = 'Textstelle direkt zitieren';
$this->items[$this->languageID]['wbb.thread.post.quote.removeQuotes'] = 'Ausgewählte Zitate entfernen';
$this->items[$this->languageID]['wbb.thread.quickReply'] = 'Schnellantwort';
$this->items[$this->languageID]['wbb.thread.quickReply.title'] = 'Schnellantwort öffnen und schließen';
$this->items[$this->languageID]['wbb.thread.rate'] = 'Thema bewerten';
$this->items[$this->languageID]['wbb.thread.search.query'] = 'Thema durchsuchen';
$this->items[$this->languageID]['wbb.thread.showPost'] = 'Inhalt des Beitrags anzeigen';
$this->items[$this->languageID]['wbb.thread.similarThreads'] = 'Ähnliche Themen';
$this->items[$this->languageID]['wbb.thread.starter'] = '&raquo;{$username}&laquo; ist der Autor dieses Themas';
$this->dynamicItems[$this->languageID]['wbb.thread.starter'] = '&raquo;<?php echo StringUtil::encodeHTML($this->v[\'username\']); ?>&laquo; ist der Autor dieses Themas';
$this->items[$this->languageID]['wbb.thread.subscribe'] = 'Thema abonnieren';
$this->items[$this->languageID]['wbb.thread.unsubscribe'] = 'Thema abbestellen';
$this->items[$this->languageID]['wbb.thread.usersOnline'] = 'Zurzeit {if $usersOnlineTotal == 1}ist{else}sind{/if} neben Ihnen {#$usersOnlineTotal} Benutzer in diesem Thema unterwegs:';
$this->dynamicItems[$this->languageID]['wbb.thread.usersOnline'] = 'Zurzeit <?php if ($this->v[\'usersOnlineTotal\'] == 1) { ?>ist<?php } else { ?>sind<?php } ?> neben Ihnen <?php echo StringUtil::formatNumeric($this->v[\'usersOnlineTotal\']); ?> Benutzer in diesem Thema unterwegs:';
?>