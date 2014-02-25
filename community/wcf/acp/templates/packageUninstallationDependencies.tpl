{include file='header'}

<div class="mainHeadline">
	<img src="{@RELATIVE_WCF_DIR}icon/packageL.png" alt="" />
	<div class="headlineContainer">
		<h2>{lang}wcf.acp.package.uninstall{/lang}: {$packageObj->getName()}</h2>
		<p>{$packageObj->getDescription()}</p>
	</div>
</div>

<fieldset>
	<legend>{lang}wcf.acp.package.view.properties{/lang}</legend>
	<div class="formElement">
		<p class="formFieldLabel">{lang}wcf.acp.package.view.identifier{/lang}</p>
		<p class="formField">{$packageObj->getPackage()}</p>
	</div>
	<div class="formElement">
		<p class="formFieldLabel">{lang}wcf.acp.package.view.version{/lang}</p>
		<p class="formField">{$packageObj->getVersion()}</p>
	</div>
	{if $packageObj->getInstanceNo() > 0}
		<div class="formElement">
			<p class="formFieldLabel">{lang}wcf.acp.package.view.instanceNo{/lang}</p>
			<p class="formField">{$packageObj->getInstanceNo()}</p>
		</div>
	{/if}
	{if $packageObj->getDir() != ''}
		<div class="formElement">
			<p class="formFieldLabel">{lang}wcf.acp.package.view.dir{/lang}</p>
			<p class="formField"><a href="{@RELATIVE_WCF_DIR}{$packageObj->getDir()}">{$packageObj->getDir()}</a></p>
		</div>
	{/if}
	<div class="formElement">
		<p class="formFieldLabel">{lang}wcf.acp.package.view.date{/lang}</p>
		<p class="formField">{@$packageObj->getDate()|date}</p>
	</div>
	{if $packageObj->getUrl() != ''}
		<div class="formElement">
			<p class="formFieldLabel">{lang}wcf.acp.package.view.url{/lang}</p>
			<p class="formField"><a href="{@RELATIVE_WCF_DIR}acp/dereferrer.php?url={$packageObj->getUrl()|rawurlencode}" class="externalURL">{$packageObj->getUrl()}</a></p>
		</div>
	{/if}
	{if $packageObj->getParentPackageID()}
		<div class="formElement">
			<p class="formFieldLabel">{lang}wcf.acp.package.view.parent{/lang}</p>
			<p class="formField"><a href="index.php?page=PackageView&amp;activePackageID={@$packageObj->getParentPackageID()}&amp;packageID={@PACKAGE_ID}{@SID_ARG_2ND}">{$packageObj->getParentPackage()->getName()}</a></p>
		</div>
	{/if}
	<div class="formElement">
		<p class="formFieldLabel">{lang}wcf.acp.package.view.author{/lang}</p>
		<p class="formField">{if $packageObj->getAuthorURL()}<a href="{@RELATIVE_WCF_DIR}acp/dereferrer.php?url={$packageObj->getAuthorURL()|rawurlencode}" class="externalURL">{$packageObj->getAuthor()}</a>{else}{$packageObj->getAuthor()}{/if}</p>
	</div>
	
	{if $additionalFields|isset}{@$additionalFields}{/if}
</fieldset>

{if $dependentPackages|count > 0}
	{if $uninstallAvailable}
		<p class="warning">{lang}wcf.acp.package.uninstall.dependentPackages.warning{/lang}</p>
	{else}
		<p class="error">{lang}wcf.acp.package.uninstall.dependentPackages.error{/lang}</p>
	{/if}

	<div class="border titleBarPanel">
		<div class="containerHead"><h3>{lang}wcf.acp.package.view.dependentPackages{/lang}</h3></div>
	</div>
	<div class="border borderMarginRemove">
		<table class="tableList">
			<thead>
				<tr class="tableHead">
					<th colspan="2"><div><span class="emptyHead">{lang}wcf.acp.package.list.id{/lang}</span></div></th>
					<th colspan="2"><div><span class="emptyHead">{lang}wcf.acp.package.list.name{/lang}</span></div></th>
					<th><div><span class="emptyHead">{lang}wcf.acp.package.list.author{/lang}</span></div></th>
					<th><div><span class="emptyHead">{lang}wcf.acp.package.list.version{/lang}</span></div></th>
					<th><div><span class="emptyHead">{lang}wcf.acp.package.list.date{/lang}</span></div></th>
					
					{if $additionalColumns|isset}{@$additionalColumns}{/if}
				</tr>
			</thead>
			<tbody>
			{foreach from=$dependentPackages item=package}
				<tr class="{cycle values="container-1,container-2"}">
					<td class="columnIcon">
						{if $this->user->getPermission('admin.system.package.canUpdatePackage')}
							<a href="index.php?form=PackageStartInstall&amp;action=update&amp;activePackageID={@$package.packageID}&amp;packageID={@PACKAGE_ID}{@SID_ARG_2ND}"><img src="{@RELATIVE_WCF_DIR}icon/packageUpdateS.png" alt="" title="{lang}wcf.acp.package.view.button.update{/lang}" /></a>
						{else}
							<img src="{@RELATIVE_WCF_DIR}icon/packageUpdateDisabledS.png" alt="" title="{lang}wcf.acp.package.view.button.update{/lang}" />
						{/if}
						{if $this->user->getPermission('admin.system.package.canUninstallPackage') && $package.package != 'com.woltlab.wcf' && $package.packageID != PACKAGE_ID}
							<a onclick="return confirm('{lang}wcf.acp.package.view.button.uninstall.sure{/lang}')" href="index.php?page=Package&amp;action=startUninstall&amp;activePackageID={@$package.packageID}&amp;packageID={@PACKAGE_ID}{@SID_ARG_2ND}"><img src="{@RELATIVE_WCF_DIR}icon/deleteS.png" alt="" title="{lang}wcf.acp.package.view.button.uninstall{/lang}" /></a>
						{else}
							<img src="{@RELATIVE_WCF_DIR}icon/deleteDisabledS.png" alt="" title="{lang}wcf.acp.package.view.button.uninstall{/lang}" />
						{/if}
						
						{if $package.additionalButtons|isset}{@$package.additionalButtons}{/if}
					</td>
					<td class="columnID">{@$package.packageID}</td>
					<td class="columnIcon">
						{if $package.standalone}
							<img src="{@RELATIVE_WCF_DIR}icon/packageTypeStandaloneS.png" alt="" title="{lang}wcf.acp.package.list.standalone{/lang}" />
						{elseif $package.parentPackageID}
							<img src="{@RELATIVE_WCF_DIR}icon/packageTypePluginS.png" alt="" title="{lang}wcf.acp.package.list.plugin{/lang}" />
						{else}
							<img src="{@RELATIVE_WCF_DIR}icon/packageS.png" alt="" title="{lang}wcf.acp.package.list.other{/lang}" />
						{/if}
					</td>
					<td class="columnText" title="{$package.packageDescription}"><a href="index.php?page=PackageView&amp;activePackageID={@$package.packageID}&amp;packageID={@PACKAGE_ID}{@SID_ARG_2ND}">{$package.packageName}{if $package.instanceNo > 1 && $package.instanceName == ''} (#{#$package.instanceNo}){/if}</a></td>
					<td class="columnText">{if $package.authorURL}<a href="{@RELATIVE_WCF_DIR}acp/dereferrer.php?url={$package.authorURL|rawurlencode}" class="externalURL">{$package.author}</a>{else}{$package.author}{/if}</td>
					<td class="columnText">{$package.packageVersion}</td>
					<td class="columnDate">{@$package.packageDate|date}</td>
					
					{if $package.additionalColumns|isset}{@$package.additionalColumns}{/if}
				</tr>
			{/foreach}
			</tbody>
		</table>
	</div>
{/if}

<form method="post" action="index.php?page=Package">
	<div class="formSubmit">
		<input type="hidden" name="packageID" value="{@PACKAGE_ID}" />
	 	{@SID_INPUT_TAG}
	 	<input type="hidden" name="action" value="startUninstall" />
	 	<input type="hidden" name="activePackageID" value="{@$packageObj->getPackageID()}" />
	 	<input type="hidden" name="send" value="1" />
		<input type="button" accesskey="c" value="{lang}wcf.global.button.back{/lang}" onclick="document.location.href=fixURL('index.php?page=PackageView&amp;activePackageID={$activePackageID}&amp;packageID={@PACKAGE_ID}{@SID_ARG_2ND}')" />
		<input type="submit" accesskey="s" name="submitButton" value="{lang}wcf.global.button.next{/lang}" {if !$uninstallAvailable}disabled="disabled" {/if}/>
	</div>
</form>

{include file='footer'}