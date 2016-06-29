<?php 
 $mess='';
 include_once('db_connect.php');
 if(isset($_POST['admin_name']) && isset($_POST['admin_password']) )
 {
$sql="select * from tbl_login where login_name=trim('".$_POST['admin_name']."') && 
    login_password=trim('".$_POST['admin_password']."')";   
    $result=mysql_query($sql);
	if(mysql_num_rows($result)>=1)
    {
	   $_SESSION['admin_name']=$_POST['admin_name'];
	   $_SESSION['admin_password']=$_POST['admin_password'];
	  header('location:dashbord.php');
	   exit();
	}
    else
    {
	   $mess="Invalid username/password";
	}	
 }
?>


<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Login Form</title>
 
        <link rel="stylesheet" href="css/style_login.css">
  </head>
  <body>
    <span href="#" class="button" id="toggle-login">Log in</span>
<div id="login">
  <div id="triangle"></div>
  <h1>Log in</h1>
  <form action="" method="post">
    <input type="text"  name="admin_name" placeholder="Username" />
    <input type="password"  name="admin_password" placeholder="Password" />
    <input type="submit" value="Log in" />
  </form>
</div>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="js/index.js"></script>
  </body>
</html>
