<?php
include 'db_connect.php';
if(isset($_POST['submit'])){
    if (!isset($_FILES['image']['tmp_name'])){
	echo "";
	}
        else{
	$file=$_FILES['image']['tmp_name'];
	$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name= addslashes($_FILES['image']['name']);
			
			move_uploaded_file($_FILES["image"]["tmp_name"],"uploads/" . $_FILES["image"]["name"]);
                        move_uploaded_file($_FILES["image2"]["tmp_name"],"uploads/" . $_FILES["image2"]["name"]);
			
			$location="uploads/" . $_FILES["image"]["name"];
                        $location_2="uploads/" . $_FILES["image2"]["name"];
			$description=str_replace("'", "\'", $_POST['description']);
                        $description_2=str_replace("'", "\'", $_POST['description_2']);
                        $name_1=$_POST['name_1'];
                        $name_2=$_POST['name_2'];
                        $designation_1=$_POST['designation_1'];
                        $designation_2=$_POST['designation_2'];
			
			$save=mysql_query("INSERT INTO tbl_home (pro_pic,pro_pic_2,description,name_1,name_2,designation_1,designation_2,description_2) VALUES ('$location','$location_2','$description','$name_1','$name_2','$designation_1','$designation_2','$description_2')");
                        
			//header("location:view_gallery.php");
                       // exit();					
	}      
 }
         $sql=mysql_query("SELECT * FROM tbl_home ORDER BY home_id DESC");
	$row_sql=mysql_fetch_array($sql);

?>


<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title> Home Article  </title>
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
                          <h2> Add Home Article </h2>
                          <div class="table-responsive">
                              <form action="" method="post" enctype="multipart/form-data">
                                  <table class="table table-bordered table-hover tablesorter">

                                      <tbody>                                   
                                          <tr>
                                              <td> Present Image 1 :</td>
                                              <td> <img src="<?php echo $row_sql['pro_pic'];?>" style="height:70px; width:70px;"> </td>                                             
                                          </tr>
                                          
                                        <tr>
                                              <td> Image Add :</td>
                                              <td> <input type="file" name="image"> </td>                                             
                                        </tr>
                                        
                                        <tr>
                                              <td> Name:</td>
                                              <td> <input type="text" name="name_1" value=" <?php echo $row_sql['name_1'];?>"> </td>                                             
                                        </tr>
                                        
                                        <tr>
                                              <td> Designation :</td>
                                              <td> <input type="text" name="designation_1" value=" <?php echo $row_sql['designation_1'];?>"> </td>                                             
                                        </tr>
                                        
                                        <tr>
                                            <td> Add Description:</td>
                                            <td> 
                                                <textarea name="description" style="width:100%; height:500px;">
                                                    <?php echo $row_sql['description'];?>
                                                </textarea> </td>
                                        </tr>
                                        
                                        <tr>
                                              <td> Present Image 2 :</td>
                                              <td> <img src="<?php echo $row_sql['pro_pic_2'];?>" style="height:70px; width:70px;"> </td>                                             
                                        </tr>
                                        
                                        <tr>
                                              <td> Image Add :</td>
                                              <td> <input type="file" name="image2"> </td>                                             
                                        </tr>
                                        
                                        <tr>
                                              <td> Name:</td>
                                              <td> <input type="text" name="name_2" value=" <?php echo $row_sql['name_2'];?>"> </td>                                             
                                        </tr>
                                        
                                        <tr>
                                              <td> Designation :</td>
                                              <td> <input type="text" name="designation_2" value=" <?php echo $row_sql['designation_2'];?>"> </td>                                             
                                        </tr>
                                        
                                        <tr>
                                            <td> Add Description:</td>
                                            <td> 
                                                <textarea name="description_2" style="width:100%; height:500px;">
                                                    <?php echo $row_sql['description_2'];?>
                                                </textarea> </td>
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
