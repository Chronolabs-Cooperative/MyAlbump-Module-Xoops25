<?php
include_once( 'admin_header.php' ) ;
include_once( 'mygrouppermform.php' ) ;

xoops_loadLanguage('admin', 'system');

if( ! empty( $_POST['submit'] ) ) {
	include( "mygroupperm.php" ) ;
	redirect_header( XOOPS_URL."/modules/".$xoopsModule->dirname()."/admin/groupperm_global.php" , 1 , _AM_ALBM_GPERMUPDATED );
}

xoops_cp_header();
myalbum_adminMenu(basename(__FILE__), 8);
$GLOBALS['xoopsTpl']->assign('admin_title', $GLOBALS['myalbumModule']->name());
$GLOBALS['xoopsTpl']->assign('mydirname', $GLOBALS['mydirname']);
$GLOBALS['xoopsTpl']->assign('photos_url', $GLOBALS['photos_url']);
$GLOBALS['xoopsTpl']->assign('thumbs_url', $GLOBALS['thumbs_url']);
$GLOBALS['xoopsTpl']->assign('form', myalbum_admin_form_groups());
if (isset($result_str))
	$GLOBALS['xoopsTpl']->assign('result_str', $result_str);

$GLOBALS['xoopsTpl']->display('db:'.$GLOBALS['mydirname'].'_cpanel_permissions.html');

myalbum_footer_adminMenu();
xoops_cp_footer();


?>