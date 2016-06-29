<?php
include_once 'db_connect.php';
if(isset($_GET['remove_id']))
{
	$res=mysql_query("SELECT image FROM tbl_menu_image WHERE submenu_id=".$_GET['remove_id']);
	$row=mysql_fetch_array($res);
	mysql_query("DELETE FROM tbl_menu_image WHERE submenu_id=".$_GET['remove_id']);
	unlink($row['image']);
	header("Location: image_view_3.php");
}
?>