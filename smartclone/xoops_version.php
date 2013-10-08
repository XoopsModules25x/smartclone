<?php

/**
 * $Id: xoops_version.php,v 1.1 2006/11/02 17:25:04 marcan Exp $
 * Module: SmartClone
 * Author: The SmartFactory <www.smartfactory.ca>
 * Licence: GNU
 */

if (!defined('XOOPS_ROOT_PATH')) {
	die('XOOPS root path not defined');
}

$modversion['name'] = "SmartClone";
$modversion['version'] = 1.10;
$modversion['author'] = "The SmartFactory";
$modversion['description']	= _MI_SCLONE_MODULE_DESC;
$modversion['credits'] = "Sudhaker, Solo";
$modversion['help']        = 'page=help';
$modversion['license']     = 'GNU GPL 2.0 or later';
$modversion['license_url'] = "www.gnu.org/licenses/gpl-2.0.html";
$modversion['official']	= 0;
$modversion['image'] = "images/module_logo.png";
$modversion['dirname']	= "smartclone";

$modversion['dirmoduleadmin'] = '/Frameworks/moduleclasses/moduleadmin';
$modversion['icons16']        = '../../Frameworks/moduleclasses/icons/16';
$modversion['icons32']        = '../../Frameworks/moduleclasses/icons/32';
//about
$modversion['release_date']        = '2012/07/30';
$modversion["module_website_url"]  = "www.xoops.org";
$modversion["module_website_name"] = "XOOPS";
$modversion["module_status"]       = "Beta 1";
$modversion['min_php']             = '5.2';
$modversion['min_xoops']           = "2.5.5";
$modversion['min_admin']           = '1.1';
$modversion['min_db']              = array(
    'mysql'  => '5.0.7',
    'mysqli' => '5.0.7'
);

// Added by marcan for the About page in admin section
$modversion['developer_lead'] = "marcan [Marc-André Lanciault]";
$modversion['developer_contributor'] = "Sudhaker, Solo";
$modversion['developer_website_url'] = "http://smartfactory.ca";
$modversion['developer_website_name'] = "The SmartFactory";
$modversion['developer_email'] = "marcan@smartfactory.ca";
$modversion['status_version'] = "Beta";
$modversion['status'] = "Beta";
$modversion['date'] = "Unreleased";

$modversion['warning'] = _MI_SCLONE_WARNING_BETA;

$modversion['demo_site_url'] = "";
$modversion['demo_site_name'] = "";
$modversion['support_site_url'] = "";
$modversion['support_site_name'] = "";
$modversion['submit_bug'] = "";
$modversion['submit_feature'] = "";

$modversion['author_word'] = "This module was made possible by 2 great developers. The original cloning script was developed by Sudhaker for the SmartSection module. It was then improved by Solo who encapsulated Sudhaker's code into an easy web form interface for his Edito module. It was only after Solo have shown me his latest Edito that I had the idea to create a module that could clone any module in a '1 click operation'. Many thanks to Sudhaker and Solo for they made this module possible!";

// Admin things
$modversion['hasAdmin']	= 1;
$modversion['system_menu'] = 1;
$modversion['adminindex'] = "admin/index.php";
$modversion['adminmenu'] = "admin/menu.php";

// Search
$modversion['hasSearch'] = 0;

// Menu
$modversion['hasMain'] = 0;

// Templates
$modversion['templates'][1]['file']	= 'smartclone_index.html';
$modversion['templates'][1]['description'] = 'Help main page';

$modversion['templates'][2]['file']	= 'smartclone_register.html';
$modversion['templates'][2]['description'] = 'Page to inform user that he needs to be a member to use Live Help';

// Config options
$i = 0;
/*
 $i++;
 $modversion['config'][$i]['name'] = 'smartclone_intro_message';
 $modversion['config'][$i]['title'] = '_MI_SCLONE_INTRO_MSG';
 $modversion['config'][$i]['description'] = '_MI_SCLONE_INTRO_MSG_DSC';
 $modversion['config'][$i]['formtype'] = 'textarea';
 $modversion['config'][$i]['valuetype'] = 'text';
 $modversion['config'][$i]['default'] = '';

 $i++;
 $modversion['config'][$i]['name'] = 'smartclone_register_title';
 $modversion['config'][$i]['title'] = '_MI_SCLONE_REGISTER_TITLE';
 $modversion['config'][$i]['description'] = '_MI_SCLONE_REGISTER_TITLE_DSC';
 $modversion['config'][$i]['formtype'] = 'textbox';
 $modversion['config'][$i]['valuetype'] = 'text';
 $modversion['config'][$i]['default'] = '';

 $i++;
 $modversion['config'][$i]['name'] = 'smartclone_register_image';
 $modversion['config'][$i]['title'] = '_MI_SCLONE_REGISTER_IMAGE';
 $modversion['config'][$i]['description'] = '_MI_SCLONE_REGISTER_IMAGE_DSC';
 $modversion['config'][$i]['formtype'] = 'textbox';
 $modversion['config'][$i]['valuetype'] = 'text';
 $modversion['config'][$i]['default'] = '';

 $i++;
 $modversion['config'][$i]['name'] = 'smartclone_register_text';
 $modversion['config'][$i]['title'] = '_MI_SCLONE_REGISTER_TEXT';
 $modversion['config'][$i]['description'] = '_MI_SCLONE_REGISTER_TEXT_DSC';
 $modversion['config'][$i]['formtype'] = 'textarea';
 $modversion['config'][$i]['valuetype'] = 'text';
 $modversion['config'][$i]['default'] = '';

 $i++;
 $modversion['config'][$i]['name'] = 'smartclone_register_footer';
 $modversion['config'][$i]['title'] = '_MI_SCLONE_REGISTER_FOOTER';
 $modversion['config'][$i]['description'] = '_MI_SCLONE_REGISTER_FOOTER_DSC';
 $modversion['config'][$i]['formtype'] = 'textarea';
 $modversion['config'][$i]['valuetype'] = 'text';
 $modversion['config'][$i]['default'] = '';

 $i++;
 $modversion['config'][$i]['name'] = 'smartclone_block_header';
 $modversion['config'][$i]['title'] = '_MI_SCLONE_BLOCK_HEADER';
 $modversion['config'][$i]['description'] = '_MI_SCLONE_BLOCK_HEADER_DSC';
 $modversion['config'][$i]['formtype'] = 'textarea';
 $modversion['config'][$i]['valuetype'] = 'text';
 $modversion['config'][$i]['default'] = '';

 $i++;
 $modversion['config'][$i]['name'] = 'smartclone_block_footer';
 $modversion['config'][$i]['title'] = '_MI_SCLONE_BLOCK_FOOTER';
 $modversion['config'][$i]['description'] = '_MI_SCLONE_BLOCK_FOOTER_DSC';
 $modversion['config'][$i]['formtype'] = 'textarea';
 $modversion['config'][$i]['valuetype'] = 'text';
 $modversion['config'][$i]['default'] = '';

 $i++;
 $modversion['config'][$i]['name'] = 'inquiero_url';
 $modversion['config'][$i]['title'] = '_MI_SCLONE_INQUIERO_URL';
 $modversion['config'][$i]['description'] = '_MI_SCLONE_INQUIERO_URLDSC';
 $modversion['config'][$i]['formtype'] = 'textbox';
 $modversion['config'][$i]['valuetype'] = 'text';
 $modversion['config'][$i]['default'] = 'http://www.inquiero.com';

 $i++;
 $modversion['config'][$i]['name'] = 'inquiero_login';
 $modversion['config'][$i]['title'] = '_MI_SCLONE_INQUIERO_LOGIN';
 $modversion['config'][$i]['description'] = '_MI_SCLONE_INQUIERO_LOGINDSC';
 $modversion['config'][$i]['formtype'] = 'textbox';
 $modversion['config'][$i]['valuetype'] = 'text';
 $modversion['config'][$i]['default'] = '';

 $i++;
 $modversion['config'][$i]['name'] = 'inquiero_bgcolor';
 $modversion['config'][$i]['title'] = '_MI_SCLONE_INQUIERO_BGCOLOR';
 $modversion['config'][$i]['description'] = '_MI_SCLONE_INQUIERO_BGCOLORDSC';
 $modversion['config'][$i]['formtype'] = 'textbox';
 $modversion['config'][$i]['valuetype'] = 'text';
 $modversion['config'][$i]['default'] = '';

 $i++;
 $modversion['config'][$i]['name'] = 'inquiero_txtcolor';
 $modversion['config'][$i]['title'] = '_MI_SCLONE_INQUIERO_TXTCOLOR';
 $modversion['config'][$i]['description'] = '_MI_SCLONE_INQUIERO_TXTCOLORDSC';
 $modversion['config'][$i]['formtype'] = 'textbox';
 $modversion['config'][$i]['valuetype'] = 'text';
 $modversion['config'][$i]['default'] = '';

 $i++;
 $modversion['config'][$i]['name'] = 'inquiero_button';
 $modversion['config'][$i]['title'] = '_MI_SCLONE_INQUIERO_BUTTON';
 $modversion['config'][$i]['description'] = '_MI_SCLONE_INQUIERO_BUTTONSC';
 $modversion['config'][$i]['formtype'] = 'textbox';
 $modversion['config'][$i]['valuetype'] = 'text';
 $modversion['config'][$i]['default'] = '';

 $i++;
 $modversion['config'][$i]['name'] = 'inquiero_mode';
 $modversion['config'][$i]['title'] = '_MI_SCLONE_INQUIERO_MODE';
 $modversion['config'][$i]['description'] = '_MI_SCLONE_INQUIERO_MODESC';
 $modversion['config'][$i]['formtype'] = 'textbox';
 $modversion['config'][$i]['valuetype'] = 'text';
 $modversion['config'][$i]['default'] = '';

 $i++;
 $modversion['config'][$i]['name'] = 'allow_anonymous';
 $modversion['config'][$i]['title'] = '_MI_SCLONE_INQUIERO_ANONYMOUS';
 $modversion['config'][$i]['description'] = '_MI_SCLONE_INQUIERO_ANONYMOUSDSC';
 $modversion['config'][$i]['formtype'] = 'yesno';
 $modversion['config'][$i]['valuetype'] = 'int';
 $modversion['config'][$i]['default'] = true;

 */

?>