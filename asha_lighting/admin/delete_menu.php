<?php
include_once '../admin/db_connect.php';
if(isset($_GET['remove_id']))
{
	$res=mysql_query("SELECT product_menu FROM tbl_product_menu WHERE menu_id=".$_GET['remove_id']);
	$row=mysql_fetch_array($res);
	mysql_query("DELETE FROM tbl_product_menu WHERE menu_id=".$_GET['remove_id']);
//	unlink($row['location']);
	header("Location: view_menu.php");
}
?>