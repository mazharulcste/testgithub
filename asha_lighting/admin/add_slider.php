<?php
include 'db_connect.php';
if (!isset($_FILES['image']['tmp_name'])){
	echo "";
	}
        else{
	$file=$_FILES['image']['tmp_name'];
	$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name= addslashes($_FILES['image']['name']);
			
			move_uploaded_file($_FILES["image"]["tmp_name"],"uploads/slider/" . $_FILES["image"]["name"]);
			
			//$location="../html/data1/images/" . $_FILES["image"]["name"];
			
			$location="uploads/slider/" . $_FILES["image"]["name"];
			$caption=$_POST['caption'];
			
			$save=mysql_query("INSERT INTO tbl_slider (location,caption) VALUES ('$location','$caption')");
                        
			header("location:add_slider.php");
			exit();					
	}    
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title> Slider Add </title>
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <!-- Page Specific CSS -->
    <link rel="stylesheet" href="http://cdn.oesmith.co.uk/morris-0.4.3.min.css">
  </head>

  <body>
      <div id="wrapper">
        <?php include 'include/menu.php'; ?>
          
              <div id="page-wrapper">
                  <div class="row">
                      <div class="col-lg-12">
                          <h2> Slider Add </h2>
                          <div class="table-responsive">
                              <form action="" method="post" enctype="multipart/form-data">
                                  <table class="table table-bordered table-hover tablesorter">
                                      <thead>
                                          <tr>
                                              
                                              <th> Slider  </th>
											  <th> Caption  </th>
                                              <th> Action </th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                          <tr>
                                              <td> <input type="file" name="image"></td>
											  <td> <input type="text" name="caption" class="form-control"></td>
                                              <td> <input type="submit" name="btn_upload" value="Upload" class=" btn btn-success"> </td>
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
