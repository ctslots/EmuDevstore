<?php
/**
* WoltLab Community Framework
* language: en
* encoding: UTF-8
* category: wcf.user
* generated at Tue, 13 Aug 2013 11:36:41 +0000
* 
* DO NOT EDIT THIS FILE
*/
$this->items[$this->languageID]['wcf.user.confirmEmail'] = 'Confirm E-mail Address';
$this->items[$this->languageID]['wcf.user.confirmPassword'] = 'Confirm password';
$this->items[$this->languageID]['wcf.user.email'] = 'E-mail Address';
$this->items[$this->languageID]['wcf.user.error.confirmEmail.notEqual'] = 'The given e-mail address and confirmation e-mail address are not identical.';
$this->items[$this->languageID]['wcf.user.error.confirmPassword.notEqual'] = 'The given password and confirmation password are not identical.';
$this->items[$this->languageID]['wcf.user.error.email.notUnique'] = 'The e-mail address you have entered has already been used by another user.';
$this->items[$this->languageID]['wcf.user.error.email.notValid'] = 'The e-mail address you have entered is not valid.';
$this->items[$this->languageID]['wcf.user.error.password.false'] = 'The password is not correct.';
$this->items[$this->languageID]['wcf.user.error.username.notFound'] = 'The user name &quot;{$username}&quot; could not be found.';
$this->dynamicItems[$this->languageID]['wcf.user.error.username.notFound'] = 'The user name &quot;<?php echo StringUtil::encodeHTML($this->v[\'username\']); ?>&quot; could not be found.';
$this->items[$this->languageID]['wcf.user.error.username.notUnique'] = 'The user name you have entered is already in use.';
$this->items[$this->languageID]['wcf.user.error.username.notValid'] = 'The username you have entered is not valid.';
$this->items[$this->languageID]['wcf.user.language'] = 'Language';
$this->items[$this->languageID]['wcf.user.language.description'] = 'Please select the user interface language to be shown in!';
$this->items[$this->languageID]['wcf.user.logout'] = 'Logout';
$this->items[$this->languageID]['wcf.user.password'] = 'Password';
$this->items[$this->languageID]['wcf.user.registrationDate'] = 'Date of registration';
$this->items[$this->languageID]['wcf.user.userID'] = 'User ID';
$this->items[$this->languageID]['wcf.user.username'] = 'Username';
$this->items[$this->languageID]['wcf.user.visibleLanguages'] = 'Show content in the following languages';
$this->items[$this->languageID]['wcf.user.visibleLanguages.description'] = 'Select the content languages that should be shown here.';
$this->items[$this->languageID]['wcf.user.banned'] = 'Your user account has been banned {if $this->user->banReason}with the following reason: {$this->user->banReason}{/if}.';
$this->dynamicItems[$this->languageID]['wcf.user.banned'] = 'Your user account has been banned <?php if ($this->v[\'this\']->user->banReason) { ?>with the following reason: <?php echo StringUtil::encodeHTML($this->v[\'this\']->user->banReason); ?><?php } ?>.';
$this->items[$this->languageID]['wcf.user.edit.success'] = 'Your changes were saved successfully.';
$this->items[$this->languageID]['wcf.user.error.password.notSecure'] = 'For security reasons the password should contain at least {REGISTER_PASSWORD_MIN_LENGTH} characters{if REGISTER_PASSWORD_MUST_CONTAIN_LOWER_CASE || REGISTER_PASSWORD_MUST_CONTAIN_UPPER_CASE || REGISTER_PASSWORD_MUST_CONTAIN_DIGIT || REGISTER_PASSWORD_MUST_CONTAIN_SPECIAL_CHAR}
		and
		{if REGISTER_PASSWORD_MUST_CONTAIN_LOWER_CASE}small letters{/if}{*
		*}{if REGISTER_PASSWORD_MUST_CONTAIN_UPPER_CASE}{if REGISTER_PASSWORD_MUST_CONTAIN_LOWER_CASE}{if REGISTER_PASSWORD_MUST_CONTAIN_DIGIT || REGISTER_PASSWORD_MUST_CONTAIN_SPECIAL_CHAR},{else} and{/if} {/if}capital letters{/if}{*
		*}{if REGISTER_PASSWORD_MUST_CONTAIN_DIGIT}{if REGISTER_PASSWORD_MUST_CONTAIN_LOWER_CASE || REGISTER_PASSWORD_MUST_CONTAIN_UPPER_CASE}{if REGISTER_PASSWORD_MUST_CONTAIN_SPECIAL_CHAR},{else} and{/if} {/if}digits{/if}{*
		*}{if REGISTER_PASSWORD_MUST_CONTAIN_SPECIAL_CHAR}{if REGISTER_PASSWORD_MUST_CONTAIN_LOWER_CASE || REGISTER_PASSWORD_MUST_CONTAIN_UPPER_CASE || REGISTER_PASSWORD_MUST_CONTAIN_DIGIT} and {/if}special characters{/if}
		{/if}.';
$this->dynamicItems[$this->languageID]['wcf.user.error.password.notSecure'] = 'For security reasons the password should contain at least <?php echo StringUtil::encodeHTML(REGISTER_PASSWORD_MIN_LENGTH); ?> characters<?php if (REGISTER_PASSWORD_MUST_CONTAIN_LOWER_CASE || REGISTER_PASSWORD_MUST_CONTAIN_UPPER_CASE || REGISTER_PASSWORD_MUST_CONTAIN_DIGIT || REGISTER_PASSWORD_MUST_CONTAIN_SPECIAL_CHAR) { ?>
		and
		<?php if (REGISTER_PASSWORD_MUST_CONTAIN_LOWER_CASE) { ?>small letters<?php } ?><?php if (REGISTER_PASSWORD_MUST_CONTAIN_UPPER_CASE) { ?><?php if (REGISTER_PASSWORD_MUST_CONTAIN_LOWER_CASE) { ?><?php if (REGISTER_PASSWORD_MUST_CONTAIN_DIGIT || REGISTER_PASSWORD_MUST_CONTAIN_SPECIAL_CHAR) { ?>,<?php } else { ?> and<?php } ?> <?php } ?>capital letters<?php } ?><?php if (REGISTER_PASSWORD_MUST_CONTAIN_DIGIT) { ?><?php if (REGISTER_PASSWORD_MUST_CONTAIN_LOWER_CASE || REGISTER_PASSWORD_MUST_CONTAIN_UPPER_CASE) { ?><?php if (REGISTER_PASSWORD_MUST_CONTAIN_SPECIAL_CHAR) { ?>,<?php } else { ?> and<?php } ?> <?php } ?>digits<?php } ?><?php if (REGISTER_PASSWORD_MUST_CONTAIN_SPECIAL_CHAR) { ?><?php if (REGISTER_PASSWORD_MUST_CONTAIN_LOWER_CASE || REGISTER_PASSWORD_MUST_CONTAIN_UPPER_CASE || REGISTER_PASSWORD_MUST_CONTAIN_DIGIT) { ?> and <?php } ?>special characters<?php } ?>
		<?php } ?>.';
$this->items[$this->languageID]['wcf.user.guest'] = 'Unregistered';
$this->items[$this->languageID]['wcf.user.logout.redirect'] = 'You have been successfully logged out.';
$this->items[$this->languageID]['wcf.user.registrationIpAddress'] = 'Registration IP address';
$this->items[$this->languageID]['wcf.user.style'] = 'Individual style';
$this->items[$this->languageID]['wcf.user.style.description'] = 'Your can select an individual style for the user interface.';
$this->items[$this->languageID]['wcf.user.gender.female'] = 'Female';
$this->items[$this->languageID]['wcf.user.gender.male'] = 'Male';
$this->items[$this->languageID]['wcf.user.lastActivity'] = 'Last activity';
$this->items[$this->languageID]['wcf.user.offline'] = '{$username} is offline';
$this->dynamicItems[$this->languageID]['wcf.user.offline'] = '<?php echo StringUtil::encodeHTML($this->v[\'username\']); ?> is offline';
$this->items[$this->languageID]['wcf.user.online'] = '{$username} is online';
$this->dynamicItems[$this->languageID]['wcf.user.online'] = '<?php echo StringUtil::encodeHTML($this->v[\'username\']); ?> is online';
$this->items[$this->languageID]['wcf.user.rank'] = 'Rank';
$this->items[$this->languageID]['wcf.user.rank.administrator'] = 'Administrator';
$this->items[$this->languageID]['wcf.user.rank.moderator'] = 'Moderator';
$this->items[$this->languageID]['wcf.user.rank.superModerator'] = 'Super Moderator';
$this->items[$this->languageID]['wcf.user.rank.user0'] = 'Beginner';
$this->items[$this->languageID]['wcf.user.rank.user1'] = 'Trainee';
$this->items[$this->languageID]['wcf.user.rank.user2'] = 'Intermediate';
$this->items[$this->languageID]['wcf.user.rank.user3'] = 'Professional';
$this->items[$this->languageID]['wcf.user.rank.user4'] = 'Master';
$this->items[$this->languageID]['wcf.user.rank.user5'] = 'Sage';
$this->items[$this->languageID]['wcf.user.viewProfile'] = 'Open user profile from &quot;{$username}&quot;';
$this->dynamicItems[$this->languageID]['wcf.user.viewProfile'] = 'Open user profile from &quot;<?php echo StringUtil::encodeHTML($this->v[\'username\']); ?>&quot;';
$this->items[$this->languageID]['wcf.user.moderatedBoards'] = 'Moderated forums';
$this->items[$this->languageID]['wcf.user.posts'] = 'Posts';
$this->items[$this->languageID]['wcf.user.postsPerDay'] = '({$posts} Posts per day)';
$this->dynamicItems[$this->languageID]['wcf.user.postsPerDay'] = '(<?php echo StringUtil::encodeHTML($this->v[\'posts\']); ?> Posts per day)';
?>