<?php
include_once 'db_connect.php';
if(isset($_GET['remove_id']))
{
	$res=mysql_query("SELECT location FROM tbl_gallery WHERE gallery_id=".$_GET['remove_id']);
	$row=mysql_fetch_array($res);
	mysql_query("DELETE FROM tbl_gallery WHERE gallery_id=".$_GET['remove_id']);
	unlink($row['location']);
	header("Location: delete_gallery.php");
}
?>