<?php
include_once 'db_connect.php';
if(isset($_GET['remove_id']))
{
	$res=mysql_query("SELECT image FROM tbl_image WHERE id=".$_GET['remove_id']);
	$row=mysql_fetch_array($res);
	mysql_query("DELETE FROM tbl_image WHERE id=".$_GET['remove_id']);
	//unlink($row['image']);
	header("Location: image_view.php");
}
?>