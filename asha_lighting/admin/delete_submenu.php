<?php
include_once '../admin/db_connect.php';
if(isset($_GET['remove_id']))
{
	$res=mysql_query("SELECT submenu_name FROM tbl_product_submenu WHERE id=".$_GET['remove_id']);
	$row=mysql_fetch_array($res);
	mysql_query("DELETE FROM tbl_product_submenu WHERE id=".$_GET['remove_id']);
	header("Location: view_submenu.php");
}
?>