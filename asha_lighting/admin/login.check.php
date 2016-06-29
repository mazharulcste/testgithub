<?php 
ini_set('session.use_trans_sid',"1");
ini_set("session.gc_maxlifetime", "5414154000"); 

session_start();

$user_name= $_SESSION["admin_name"];
//$sess_uservalid = $_SESSION["sess_uservalid"];


if (!isset($user_name ))
{
   session_destroy();
  header('location:index.php');
}

?>
