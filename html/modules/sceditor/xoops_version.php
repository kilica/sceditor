<?php
/**
 * @file
 * @package sceditor
 * @version $Id$
 */

if (!defined('XOOPS_ROOT_PATH')) exit();

//
// Define a basic manifesto.
//
$modversion['name'] = _MI_SCEDITOR_LANG_SCEDITOR;
$modversion['version'] = 0.12;
$modversion['description'] = _MI_SCEDITOR_DESC_SCEDITOR;
$modversion['author'] = "HIKAWA Kilica http://xoopsdev.com/";
$modversion['credits'] = "HIKAWA Kilica";
$modversion['help'] = "help.html";
$modversion['license'] = "GPL";
$modversion['official'] = 0;
$modversion['image'] = "images/module_icon.png";
$modversion['dirname'] = "sceditor";

$modversion['cube_style'] = true;
$modversion['disable_legacy_2nd_installer'] = false;

// TODO After you made your SQL, remove the following comment-out.
// $modversion['sqlfile']['mysql'] = "sql/mysql.sql";
##[cubson:tables]
##[/cubson:tables]

//
// Templates. You must never change [cubson] chunk to get the help of cubson.
//
$modversion['templates'][]['file'] = 'sceditor_textarea.html';
##[cubson:templates]
##[/cubson:templates]

//
// Admin panel setting
//
$modversion['hasAdmin'] = 1;
$modversion['adminindex'] = "index.php";
$modversion['adminmenu'] = array();

//
// Public side control setting
//
$modversion['hasMain'] = 0;
// $modversion['sub'][]['name'] = "";
// $modversion['sub'][]['url'] = "";


//
// Config setting
//
$modversion['config'] = array(
    array(
        'name'          => 'html_config' ,
        'title'         => "_MI_SCEDITOR_LANG_HTML_CONFIG" ,
        'description'   => "_MI_SCEDITOR_DESC_HTML_CONFIG" ,
        'formtype'      => 'textarea' ,
        'valuetype'     => 'text' ,
        'default'       => '
toolbar: "source|bold,font,color|link,unlink|quote|code|" + "bulletlist,orderlist|left,center,right|image,table",
width:500,
height:300
',
        'options'       => array()
    ) ,
	array(
		'name'          => 'bbcode_config' ,
		'title'         => "_MI_SCEDITOR_LANG_BBCODE_CONFIG" ,
		'description'   => "_MI_SCEDITOR_DESC_BBCODE_CONFIG" ,
		'formtype'      => 'textarea' ,
		'valuetype'     => 'text' ,
		'default'       => '
toolbar: "source|bold,font,color|link,unlink|quote|code|" + "bulletlist|left,center,right|image",
width:500,
height:300
',
		'options'       => array()
	) ,
);
?>
