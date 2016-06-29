<?php
include 'db_connect.php';
$id=$_GET['id'];
$row = mysql_query("SELECT * FROM tbl_course WHERE course_id='$id'");
$result=mysql_fetch_array($row);

	if(isset($_POST['submit'])){
		$month=$_POST['month'];
		$start_date=$_POST['start_date'];
		$graduate_date=$_POST['graduate_date'];
				
			$save=mysql_query("UPDATE tbl_course SET month='$month',start_date='$start_date',graduate_date='$graduate_date' where course_id='$id'");
			header("location:edit_course.php");
			exit();					
	}

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
                                            <td> <input type="text" name="month" class="form-control" value="<?php echo $result['month']?>">  </td>
                                        </tr>
                                        
                                        <tr>
                                            <td> Starting Date:</td>
                                            <td> <input type="text" name="start_date" class="form-control" value="<?php echo $result['start_date']?>">   </td>
                                        </tr>
                                        
                                        <tr>
                                            <td> Graduation Date:</td>
                                            <td> <input type="text" name="graduate_date" class="form-control" value="<?php echo $result['graduate_date']?>">   </td>
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
