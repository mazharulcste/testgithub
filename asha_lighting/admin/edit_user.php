<?php
include '../admin/db_connect.php';
$result=  mysql_query("SELECT * FROM tbl_login");
$row= mysql_fetch_array($result);


if(isset($_POST['submit'])){
    $user_name=$_POST['user_name'];
    $user_password=$_POST['user_password'];
    $id=$_POST['id'];
    
    $save=  mysql_query("UPDATE tbl_login SET login_name='$user_name', login_password='$user_password' WHERE login_id=$id");  
}


?>


<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title> User Information  </title>
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <!-- Page Specific CSS -->
    <link rel="stylesheet" href="http://cdn.oesmith.co.uk/morris-0.4.3.min.css">
    <script type="text/javascript" src="tinymce/js/tinymce/tinymce.min.js"></script>
    <script src="//cdn.ckeditor.com/4.5.3/full/ckeditor.js"></script>
  </head>

  <body>
      <div id="wrapper">
        <?php include 'include/menu.php';?>
              <div id="page-wrapper">
                  <div class="row">
                      <div class="col-lg-12">
                          <h2> User Information Edit </h2>
                          <div class="table-responsive">
                              <form action="" method="post" enctype="multipart/form-data">
                                  <table class="table table-bordered table-hover tablesorter">

                                      <tbody>  
                                          <tr>
                                              <td> User Name: </td>
                                              <td>
                                                  <input type="text" name="user_name" value="<?php echo $row['login_name'];?>" class="form-control"> 
                                                  <input type="hidden" name="id" value="<?php echo $row['login_id'];?>" class="form-control"> 
                                              </td>
                                          </tr>
                                          <tr>
                                              <td> User Password: </td>
                                              <td> <input type="text" name="user_password" value="<?php echo $row['login_password'];?>" class="form-control"> </td>
                                          </tr>
                                                                               
                                        <tr>
                                            <td> </td>
                                            <td> 
                                                <input type="submit" name="submit" value="Save" class="btn btn-success"> 
                                                <input type="reset" name="reset" value="Reset" class="btn btn-danger"> 
                                            </td>
                                        </tr>

                                      </tbody>
                                  </table>
                              </form>

                          </div>
                      </div>
                  </div>
              </div>
    </div>
    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>

    <!-- Page Specific Plugins -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="http://cdn.oesmith.co.uk/morris-0.4.3.min.js"></script>
    <script src="js/morris/chart-data-morris.js"></script>
    <script src="js/tablesorter/jquery.tablesorter.js"></script>
    <script src="js/tablesorter/tables.js"></script>

  </body>
</html>
