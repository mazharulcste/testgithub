<?php
include_once 'db_connect.php';
if(isset($_GET['remove_id']))
{
	//$res=mysql_query("SELECT location FROM tbl_slider WHERE slider_id=".$_GET['remove_id']);
//$row=mysql_fetch_array($res);
	mysql_query("DELETE FROM tbl_course WHERE course_id=".$_GET['remove_id']);
	//unlink($row['location']);
	header("Location: edit_course.php");
}
?>