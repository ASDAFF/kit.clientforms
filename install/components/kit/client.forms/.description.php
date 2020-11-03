<?
/**
 * Copyright (c) 30/1/2020 Created By/Edited By ASDAFF asdaff.asad@yandex.ru
 */

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arComponentDescription = array(
        "NAME" => GetMessage("CLIENT_COMPONENT_NAME"),
        "DESCRIPTION" => GetMessage("CLIENT_COMPONENT_DESCRIPTION"),
        "ICON" => "/images/icon.gif",
        "CACHE_PATH" => "Y",
        "PATH" => array(
                "ID" => GetMessage("CLIENT_PATH_ID"),
                "NAME" => GetMessage("CLIENT_PATH_NAME"),
        ),
);

?>
