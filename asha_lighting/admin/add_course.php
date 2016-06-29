<?php
include 'db_connect.php';
if(isset($_POST['submit'])){
  //  $description=$_POST['description'];
    $month=$_POST['month'];
    $start_date=$_POST['start_date'];
    $graduate_date=$_POST['graduate_date'];
  
  
    $save=mysql_query("INSERT INTO tbl_course (month,start_date,graduate_date) VALUES ('$month','$start_date','$graduate_date')");
      
 }
     //   $sql=mysql_query("SELECT * FROM tbl_language ORDER BY language_id DESC");
	//$row_sql=mysql_fetch_array($sql);

?>


<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title> Language Center Article  </title>
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <!-- Page Specific CSS -->
    <link rel="stylesheet" href="http://cdn.oesmith.co.uk/morris-0.4.3.min.css">
    <script type="text/javascript" src="tinymce/js/tinymce/tinymce.min.js"></script>
  </head>

  <body>
      <div id="wrapper">
        <?php include 'include/menu.php';?>
              <div id="page-wrapper">
                  <div class="row">
                      <script>
                        tinymce.init({selector:'textarea'});
                      </script>
                      <div class="col-lg-12">
                          <h2> Add Course Schedule </h2>
                          <div class="table-responsive">
                              <form action="" method="post" enctype="multipart/form-data">
                                  <table class="table table-bordered table-hover tablesorter">

                                      <tbody>                                                                          
                                        <tr>
                                            <td colspan="2"> <p align="center" style="font-weight:bold;">Course Schedule <p> </td>
                                        </tr>
                                        
                                        <tr>
                                            <td> Months:</td>
                                            <td> <input type="text" name="month" class="form-control">  </td>
                                        </tr>
                                        
                                        <tr>
                                            <td> Starting Date:</td>
                                            <td> <input type="text" name="start_date" class="form-control">   </td>
                                        </tr>
                                        
                                        <tr>
                                            <td> Graduation Date:</td>
                                            <td> <input type="text" name="graduate_date" class="form-control">   </td>
                                        </tr>
                                        
                                        <tr>
                                            <td> </td>
                                            <td> <input type="submit" name="submit" value="Save" class="btn btn-success"> </td>
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
