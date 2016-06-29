<?php
include 'db_connect.php';
$view_product= mysql_query("SELECT * FROM tbl_gallery");
?>


<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title> Edit Home Article </title>
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <!-- Page Specific CSS -->
    <link rel="stylesheet" href="http://cdn.oesmith.co.uk/morris-0.4.3.min.css">
	
	<link rel="stylesheet" href="css/admin_style.css">
	<script type="text/javascript" src="tinymce/js/tinymce/tinymce.min.js"></script>
	

	
	<!--
	<script src="js/config.js"></script>
	<link rel="stylesheet" href="css/samples.css">
	<link rel="stylesheet" href="css/neo.css">
	-->
	
  </head>

  <body id="main">
      <div id="wrapper">
        <?php include 'include/menu.php';?>
              <div id="page-wrapper">
                  <div class="row">
                      
					  <!--------------------->
					  <div style="margin-top:100px;">
					  <script>
        tinymce.init({selector:'textarea'});
</script>
<script type="text/javascript">
function validate()
{
	
		   
if( document.about_insert.uploaded_file.value == "" )
		   {
			 alert( "Please Insert A Image!" );
			 document.about_insert.uploaded_file.focus() ;
			 return false;
		   }
		    
if( document.about_insert.content_body.value == "" )
		   {
			 alert( "Please provide Header of Product!" );
			 document.about_insert.content_body.focus() ;
			 return false;
		   }		   
		   
		   
 return( true );
 
}
</script>
<div class="table-responsive">
<form action="upload_home.php" method="post" enctype="multipart/form-data">
<table class="table table-bordered table-hover tablesorter">
<tr>
	<td> Profile Picture: </td>
	<td> <input type="file" name="image"> </td>
</tr>

<tr>
<td> Description: </td>
	<td>
        <textarea name="details" style="width:100%; height:500px;"></textarea>
    </td>

</tr>
<tr> 
	<td> </td>
	<td> <input type="submit" class="btn btn-success"> </td>
</tr> 
	
</table>
</form>
</div>
 <script type="text/javascript">
			if (document.location.protocol == 'file:') {
				alert("The examples might not work properly on the local file system due to security settings in your browser. Please use a real webserver.");
			}
			</script>
			</div>
					  <!--------------------->
					  
					  
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
