<?php
/***********************************************
 ** @product OBX:Market Bitrix Module         **
 ** @authors                                  **
 **         Maksim S. Makarov aka pr0n1x      **
 ** @license Affero GPLv3                     **
 ** @mailto rootfavell@gmail.com              **
 ** @copyright 2013 DevTop                    **
 ***********************************************/

require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_admin_before.php");

CModule::IncludeModule("obx.market");

$TabContentController = OBX\Market\Settings::getController("Price");

if( !empty($_REQUEST["obx_price_update"])
	|| !empty($_REQUEST["obx_price_new"])
	|| !empty($_REQUEST["obx_price_delete"])
) {
	$TabContentController->saveTabData();
	$TabContentController->showErrors();
	$TabContentController->showWarnings();
	$TabContentController->showMessages();
}
if( !empty($_REQUEST["obx_price_reload_new_price_tmpl"]) ) {
	$TabContentController->showTabScripts();
}
else {
	$TabContentController->showTabContent();
}


require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_admin_after.php");
?>
