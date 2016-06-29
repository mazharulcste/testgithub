<?php
include 'db_connect.php';;
$id=$_GET['id'];
//$sql="SELECT * FROM tbl_complete_projects WHERE id='$id'";
$row = mysql_query("SELECT * FROM tbl_gallery WHERE gallery_id='$id'");
$result=mysql_fetch_array($row);

	if(isset($_POST['submit'])){
		$location=$_POST['image'];
		$caption=$_POST['caption'];
	
	$file=$_FILES['image']['tmp_name'];	
	if ($file==""){
	//echo "";
         $save_1=mysql_query("UPDATE tbl_gallery SET caption='$caption' where gallery_id='$id'");
         if($save_1){
            	header("location:edit_gallery.php");
		exit();
         }      
	}
	else{
	$file=$_FILES['image']['tmp_name'];
	$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name= addslashes($_FILES['image']['name']);
			
			move_uploaded_file($_FILES["image"]["tmp_name"],"uploads/" . $_FILES["image"]["name"]);
			
			$location="uploads/" . $_FILES["image"]["name"];
			$caption=$_POST['caption'];
			
			$save=mysql_query("UPDATE tbl_gallery SET location='$location',caption='$caption' where gallery_id='$id'");
			header("location:edit_gallery.php");
			exit();					
	   }		
	}
?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title> Edit Product </title>
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
                          <h2> Add Product </h2>
                          <div class="table-responsive">
                              <form action="" method="post" enctype="multipart/form-data">
                                  <table class="table table-bordered table-hover tablesorter">
                                      <!--
                                      <thead>
                                          <tr>
                                              <th>Product Name</th>
                                              <th> Image  </th>
                                              <th> Action </th>
                                          </tr>
                                      </thead>
                                      -->
                                      <tr>
                                          <td> Present Image:</td>
                                          <td> <p align='center'> <img src="<?php echo $result['location'];?>" style="height:200px; width: 200px;"> </p> </td>
                                      </tr>
                                      
                                      <tr>
                                          <td> Chance Image:</td>
										  <td> 
											<input type="file" name="image" value="<?php echo $result['location'];?>">

											
										  </td>  
                                      </tr>
                                      
                                      <tr>
                                          <td> Product Name:</td>
                                          <td> 
											<input type="text" name="caption" value="<?php echo $result['caption'];?>"> 
										  </td>
                                      </tr>
                                      
                                      <tr>
                                          <td> </td>
                                          <td> <input type="submit" value="Upload" name="submit" class="btn btn-success"></td>
                                      </tr>
                                      

                                      
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
