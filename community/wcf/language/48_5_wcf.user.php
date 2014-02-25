<?php
/**
* WoltLab Community Framework
* language: de
* encoding: UTF-8
* category: wcf.user
* generated at Tue, 13 Aug 2013 10:14:53 +0000
* 
* DO NOT EDIT THIS FILE
*/
$this->items[$this->languageID]['wcf.user.confirmEmail'] = 'E-Mail-Adresse wiederholen';
$this->items[$this->languageID]['wcf.user.confirmPassword'] = 'Kennwort wiederholen';
$this->items[$this->languageID]['wcf.user.email'] = 'E-Mail-Adresse';
$this->items[$this->languageID]['wcf.user.error.confirmEmail.notEqual'] = 'Die eingegebenen E-Mail-Adressen sind nicht identisch.';
$this->items[$this->languageID]['wcf.user.error.confirmPassword.notEqual'] = 'Die eingegebenen Kennwörter sind nicht identisch.';
$this->items[$this->languageID]['wcf.user.error.email.notUnique'] = 'Diese E-Mail-Adresse ist bereits durch einen anderen Benutzer vergeben.';
$this->items[$this->languageID]['wcf.user.error.email.notValid'] = 'Sie haben eine ungültige E-Mail-Adresse eingegeben.';
$this->items[$this->languageID]['wcf.user.error.password.false'] = 'Dieses Kennwort ist falsch.';
$this->items[$this->languageID]['wcf.user.error.username.notFound'] = 'Der Benutzername &raquo;{$username}&laquo; konnte nicht gefunden werden.';
$this->dynamicItems[$this->languageID]['wcf.user.error.username.notFound'] = 'Der Benutzername &raquo;<?php echo StringUtil::encodeHTML($this->v[\'username\']); ?>&laquo; konnte nicht gefunden werden.';
$this->items[$this->languageID]['wcf.user.error.username.notUnique'] = 'Dieser Benutzername ist bereits vergeben.';
$this->items[$this->languageID]['wcf.user.error.username.notValid'] = 'Sie haben einen ungültigen Benutzernamen eingegeben.';
$this->items[$this->languageID]['wcf.user.language'] = 'Sprache';
$this->items[$this->languageID]['wcf.user.language.description'] = 'Bitte wählen Sie aus, in welcher Sprache die Benutzeroberfläche erscheinen soll!';
$this->items[$this->languageID]['wcf.user.logout'] = 'Abmelden';
$this->items[$this->languageID]['wcf.user.password'] = 'Kennwort';
$this->items[$this->languageID]['wcf.user.registrationDate'] = 'Registrierungsdatum';
$this->items[$this->languageID]['wcf.user.userID'] = 'Benutzer-ID';
$this->items[$this->languageID]['wcf.user.username'] = 'Benutzername';
$this->items[$this->languageID]['wcf.user.visibleLanguages'] = 'Zeige Inhalte in folgenden Sprachen an';
$this->items[$this->languageID]['wcf.user.visibleLanguages.description'] = 'Geben Sie an, in welchen Sprachen erstellte Inhalte angezeigt werden sollen.';
$this->items[$this->languageID]['wcf.user.banned'] = 'Ihr Benutzeraccount wurde {if $this->user->banReason}aus folgendem Grund gesperrt: {$this->user->banReason}.{else}gesperrt.{/if}';
$this->dynamicItems[$this->languageID]['wcf.user.banned'] = 'Ihr Benutzeraccount wurde <?php if ($this->v[\'this\']->user->banReason) { ?>aus folgendem Grund gesperrt: <?php echo StringUtil::encodeHTML($this->v[\'this\']->user->banReason); ?>.<?php } else { ?>gesperrt.<?php } ?>';
$this->items[$this->languageID]['wcf.user.edit.success'] = 'Ihre Einstellungsänderungen wurden erfolgreich gespeichert.';
$this->items[$this->languageID]['wcf.user.error.password.notSecure'] = 'Das Kennwort muss aus Sicherheitsgründen mindestens {REGISTER_PASSWORD_MIN_LENGTH} Zeichen lang sein{if REGISTER_PASSWORD_MUST_CONTAIN_LOWER_CASE || REGISTER_PASSWORD_MUST_CONTAIN_UPPER_CASE || REGISTER_PASSWORD_MUST_CONTAIN_DIGIT || REGISTER_PASSWORD_MUST_CONTAIN_SPECIAL_CHAR}
		und
		{if REGISTER_PASSWORD_MUST_CONTAIN_LOWER_CASE}kleine Buchstaben{/if}{*
		*}{if REGISTER_PASSWORD_MUST_CONTAIN_UPPER_CASE}{if REGISTER_PASSWORD_MUST_CONTAIN_LOWER_CASE}{if REGISTER_PASSWORD_MUST_CONTAIN_DIGIT || REGISTER_PASSWORD_MUST_CONTAIN_SPECIAL_CHAR},{else} und{/if} {/if}große Buchstaben{/if}{*
		*}{if REGISTER_PASSWORD_MUST_CONTAIN_DIGIT}{if REGISTER_PASSWORD_MUST_CONTAIN_LOWER_CASE || REGISTER_PASSWORD_MUST_CONTAIN_UPPER_CASE}{if REGISTER_PASSWORD_MUST_CONTAIN_SPECIAL_CHAR},{else} und{/if} {/if}Zahlen{/if}{*
		*}{if REGISTER_PASSWORD_MUST_CONTAIN_SPECIAL_CHAR}{if REGISTER_PASSWORD_MUST_CONTAIN_LOWER_CASE || REGISTER_PASSWORD_MUST_CONTAIN_UPPER_CASE || REGISTER_PASSWORD_MUST_CONTAIN_DIGIT} und {/if}Sonderzeichen{/if}
		enthalten{/if}.';
$this->dynamicItems[$this->languageID]['wcf.user.error.password.notSecure'] = 'Das Kennwort muss aus Sicherheitsgründen mindestens <?php echo StringUtil::encodeHTML(REGISTER_PASSWORD_MIN_LENGTH); ?> Zeichen lang sein<?php if (REGISTER_PASSWORD_MUST_CONTAIN_LOWER_CASE || REGISTER_PASSWORD_MUST_CONTAIN_UPPER_CASE || REGISTER_PASSWORD_MUST_CONTAIN_DIGIT || REGISTER_PASSWORD_MUST_CONTAIN_SPECIAL_CHAR) { ?>
		und
		<?php if (REGISTER_PASSWORD_MUST_CONTAIN_LOWER_CASE) { ?>kleine Buchstaben<?php } ?><?php if (REGISTER_PASSWORD_MUST_CONTAIN_UPPER_CASE) { ?><?php if (REGISTER_PASSWORD_MUST_CONTAIN_LOWER_CASE) { ?><?php if (REGISTER_PASSWORD_MUST_CONTAIN_DIGIT || REGISTER_PASSWORD_MUST_CONTAIN_SPECIAL_CHAR) { ?>,<?php } else { ?> und<?php } ?> <?php } ?>große Buchstaben<?php } ?><?php if (REGISTER_PASSWORD_MUST_CONTAIN_DIGIT) { ?><?php if (REGISTER_PASSWORD_MUST_CONTAIN_LOWER_CASE || REGISTER_PASSWORD_MUST_CONTAIN_UPPER_CASE) { ?><?php if (REGISTER_PASSWORD_MUST_CONTAIN_SPECIAL_CHAR) { ?>,<?php } else { ?> und<?php } ?> <?php } ?>Zahlen<?php } ?><?php if (REGISTER_PASSWORD_MUST_CONTAIN_SPECIAL_CHAR) { ?><?php if (REGISTER_PASSWORD_MUST_CONTAIN_LOWER_CASE || REGISTER_PASSWORD_MUST_CONTAIN_UPPER_CASE || REGISTER_PASSWORD_MUST_CONTAIN_DIGIT) { ?> und <?php } ?>Sonderzeichen<?php } ?>
		enthalten<?php } ?>.';
$this->items[$this->languageID]['wcf.user.guest'] = 'unregistriert';
$this->items[$this->languageID]['wcf.user.logout.redirect'] = 'Sie haben sich erfolgreich abgemeldet.';
$this->items[$this->languageID]['wcf.user.registrationIpAddress'] = 'IP-Adresse der Registrierung';
$this->items[$this->languageID]['wcf.user.style'] = 'Individueller Stil';
$this->items[$this->languageID]['wcf.user.style.description'] = 'Sie können aus mehreren Stilen Ihren individuellen Stil für die Benutzeroberfläche auswählen.';
$this->items[$this->languageID]['wcf.user.gender.female'] = 'Weiblich';
$this->items[$this->languageID]['wcf.user.gender.male'] = 'Männlich';
$this->items[$this->languageID]['wcf.user.lastActivity'] = 'Letzte Aktivität';
$this->items[$this->languageID]['wcf.user.offline'] = '&raquo;{$username}&laquo; ist offline';
$this->dynamicItems[$this->languageID]['wcf.user.offline'] = '&raquo;<?php echo StringUtil::encodeHTML($this->v[\'username\']); ?>&laquo; ist offline';
$this->items[$this->languageID]['wcf.user.online'] = '&raquo;{$username}&laquo; ist online';
$this->dynamicItems[$this->languageID]['wcf.user.online'] = '&raquo;<?php echo StringUtil::encodeHTML($this->v[\'username\']); ?>&laquo; ist online';
$this->items[$this->languageID]['wcf.user.rank'] = 'Rang';
$this->items[$this->languageID]['wcf.user.rank.administrator'] = 'Administrator';
$this->items[$this->languageID]['wcf.user.rank.moderator'] = 'Moderator';
$this->items[$this->languageID]['wcf.user.rank.superModerator'] = 'Super Moderator';
$this->items[$this->languageID]['wcf.user.rank.user0'] = 'Anfänger';
$this->items[$this->languageID]['wcf.user.rank.user1'] = 'Schüler';
$this->items[$this->languageID]['wcf.user.rank.user2'] = 'Fortgeschrittener';
$this->items[$this->languageID]['wcf.user.rank.user3'] = 'Profi';
$this->items[$this->languageID]['wcf.user.rank.user4'] = 'Meister';
$this->items[$this->languageID]['wcf.user.rank.user5'] = 'Erleuchteter';
$this->items[$this->languageID]['wcf.user.viewProfile'] = 'Benutzerprofil von &raquo;{$username}&laquo; aufrufen';
$this->dynamicItems[$this->languageID]['wcf.user.viewProfile'] = 'Benutzerprofil von &raquo;<?php echo StringUtil::encodeHTML($this->v[\'username\']); ?>&laquo; aufrufen';
$this->items[$this->languageID]['wcf.user.moderatedBoards'] = 'Moderierte Foren';
$this->items[$this->languageID]['wcf.user.posts'] = 'Beiträge';
$this->items[$this->languageID]['wcf.user.postsPerDay'] = '({$posts} Beiträge pro Tag)';
$this->dynamicItems[$this->languageID]['wcf.user.postsPerDay'] = '(<?php echo StringUtil::encodeHTML($this->v[\'posts\']); ?> Beiträge pro Tag)';
?>