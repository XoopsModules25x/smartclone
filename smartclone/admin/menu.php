<?php

/**
 * $Id: menu.php,v 1.1 2006/11/02 17:25:04 marcan Exp $
 * Module: SmartClone
 * Author: The SmartFactory <www.smartfactory.ca>
 * Licence: GNU
 */

defined("XOOPS_ROOT_PATH") or die("XOOPS root path not defined");

$path = dirname(dirname(dirname(dirname(__FILE__))));
include_once $path . '/mainfile.php';

$dirname         = basename(dirname(dirname(__FILE__)));
$module_handler  = xoops_gethandler('module');
$module          = $module_handler->getByDirname($dirname);
$pathIcon32      = $module->getInfo('icons32');
$pathModuleAdmin = $module->getInfo('dirmoduleadmin');
$pathLanguage    = $path . $pathModuleAdmin;

if (!file_exists($fileinc = $pathLanguage . '/language/' . $GLOBALS['xoopsConfig']['language'] . '/' . 'main.php')) {
    $fileinc = $pathLanguage . '/language/english/main.php';
}

include_once $fileinc;

$adminmenu = array();
$i=0;
$adminmenu[$i]["title"] = _AM_MODULEADMIN_HOME;
$adminmenu[$i]['link'] = "admin/index.php";
$adminmenu[$i]["icon"]  = $pathIcon32 . '/home.png';
$i++;
$adminmenu[$i]['title'] = _MI_SCLONE_ADMENU1;
$adminmenu[$i]['link'] = "admin/main.php";
$adminmenu[$i]["icon"]  = $pathIcon32 . '/manage.png';

$i++;
$adminmenu[$i]['title'] = _AM_MODULEADMIN_ABOUT;
$adminmenu[$i]["link"]  = "admin/about.php";
$adminmenu[$i]["icon"]  = $pathIcon32 . '/about.png';
//$i++;
//$adminmenu[$i]['title'] = _AM_MODULEADMIN_ABOUT;
//$adminmenu[$i]['link'] =  "admin/about2.php";
//$adminmenu[$i]["icon"]  = $pathIcon32 . '/about.png';

//-----------------------------
//$i++;
//$adminmenu[$i]['title'] = _MI_SCLONE_CLONE_A_MODULE;
//$adminmenu[$i]['link'] = "admin/index.php";
//
//if (isset($xoopsModule) && $xoopsModule->getVar('dirname') == 'smartclone') {
//    $i++;
//    $headermenu[$i]['title'] = _PREFERENCES;
//    $headermenu[$i]['link'] = '../../system/admin.php?fct=preferences&amp;op=showmod&amp;mod=' . $xoopsModule->getVar('mid');
//    $i++;
//    $headermenu[$i]['title'] = _CO_SOBJECT_UPDATE_MODULE;
//    $headermenu[$i]['link'] = XOOPS_URL . "/modules/system/admin.php?fct=modulesadmin&op=update&module=" . $xoopsModule->getVar('dirname');
//    $i++;
//    $headermenu[$i]['title'] = _AM_SOBJECT_ABOUT;
//    $headermenu[$i]['link'] = SMARTCLONE_URL . "admin/about2.php";
//}
//;
