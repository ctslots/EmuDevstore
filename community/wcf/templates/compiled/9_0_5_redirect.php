<?php
/**
* WoltLab Community Framework
* Template: redirect
* Compiled at: Tue, 13 Aug 2013 11:36:13 +0000
* 
* DO NOT EDIT THIS FILE
*/
$this->v['tpl']['template'] = 'redirect';
?>
<?php
$outerTemplateName2b80e784decea5b6b77d934ceaeb6d75be39219e = $this->v['tpl']['template'];
$this->includeTemplate("documentHeader", array(), (1 ? 1 : 0));
$this->v['tpl']['template'] = $outerTemplateName2b80e784decea5b6b77d934ceaeb6d75be39219e;
$this->v['tpl']['includedTemplates']["documentHeader"] = 1;
?>
<head>
	<title>Weiterleitung - <?php $this->tagStack[] = array('lang', array()); ob_start(); ?><?php echo StringUtil::encodeHTML(PAGE_TITLE); ?><?php $_lang9eb74369a7295b097c9fa973ef5f4facffc4dd75 = ob_get_contents(); ob_end_clean(); echo WCF::getLanguage()->getDynamicVariable($_lang9eb74369a7295b097c9fa973ef5f4facffc4dd75, $this->tagStack[count($this->tagStack) - 1][1]); array_pop($this->tagStack); ?></title>
	<?php
$outerTemplateName7b2f1ebfa4cc488b5dc144bdd2c7caafedf8567f = $this->v['tpl']['template'];
$this->includeTemplate('headInclude', array(), (false ? 1 : 0));
$this->v['tpl']['template'] = $outerTemplateName7b2f1ebfa4cc488b5dc144bdd2c7caafedf8567f;
$this->v['tpl']['includedTemplates']['headInclude'] = 1;
?>
	<meta http-equiv="refresh" content="<?php if (isset($this->v['wait'])) { ?><?php echo $this->v['wait']; ?><?php } else { ?>10<?php } ?>;URL=<?php echo StringUtil::encodeHTML($this->v['url']); ?>" />
</head>
<body<?php if (isset($this->v['templateName'])) { ?> id="tpl<?php echo StringUtil::encodeHTML(ucfirst($this->v['templateName'])); ?>"<?php } ?>>
<?php
$outerTemplateNamed635adaa54dbb8d35200ed191586d044c2ddab50 = $this->v['tpl']['template'];
$this->includeTemplate('header', array(), (false ? 1 : 0));
$this->v['tpl']['template'] = $outerTemplateNamed635adaa54dbb8d35200ed191586d044c2ddab50;
$this->v['tpl']['includedTemplates']['header'] = 1;
?>

<div id="main">
	
	<div class="success">
		<p><?php echo $this->v['message']; ?></p>
		<p><a href="<?php echo StringUtil::encodeHTML($this->v['url']); ?>">Falls die automatische Weiterleitung nicht funktioniert, klicken Sie bitte hier!</a></p>
	</div>

</div>

<?php
$outerTemplateName49bfb12e43ea5acab4fc0bb49d2ca18ea015377a = $this->v['tpl']['template'];
$this->includeTemplate('footer', array(), (false ? 1 : 0));
$this->v['tpl']['template'] = $outerTemplateName49bfb12e43ea5acab4fc0bb49d2ca18ea015377a;
$this->v['tpl']['includedTemplates']['footer'] = 1;
?>
</body>
</html>