<?php
include 'db_connect.php';
if(isset($_POST['submit'])){
 //   $description=$_POST['description'];
 
//	$address=$_POST['address'];
        $address=str_replace("'", "\'", $_POST['editor1']);
	$phone_number=$_POST['phone_number'];
//	$mobile_no=$_POST['mobile_no'];
	$mail=$_POST['mail'];
	
  //  $save=mysql_query("INSERT INTO tbl_visa_con(description) VALUES ('$description')");
   $save=mysql_query("INSERT INTO contact(phone,email,address) VALUES ('$phone_number','$mail','$address')");
      
 }
    $sql=mysql_query("SELECT * FROM contact ORDER BY id DESC");
	$row_sql=mysql_fetch_array($sql);
?>


<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title> Contact Us </title>
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
                          <h2> Contact Us </h2>
                          <div class="table-responsive">
                              <form action="" method="post" enctype="multipart/form-data">
                                  <table class="table table-bordered table-hover tablesorter">

                                    <tbody>
                                        <tr>
                                            <td> Address:</td>
                                            <td> 
                                                <textarea class="form-control" rows="3" name="editor1">
                                                       <?php echo $row_sql['address'];?>
                                                </textarea>
                                                <script>
                                                    CKEDITOR.replace('editor1');
                                                </script>
                                            </td>
                                        </tr>
									  

									  
									<tr> 
										<td> Phone: </td>
										<td> <input type="text" name="phone_number" value="<?php echo $row_sql['phone'];?>" class="form-control">  </td>
									</tr>
									
<!--									<tr> 
										<td> Mobile: </td>
										<td> <input type="text" name="mobile_no"  value="<?php echo $row_sql['mobile_no'];?>" class="form-control">  </td>
									</tr>-->
									
									<tr> 
										<td> E-mail: </td>
										<td> <input type="email" name="mail" value="<?php echo $row_sql['email'];?>" class="form-control">  </td>
									</tr>
									<!--									  
                                        <tr>
                                            <td> Add Description:</td>
                                            <td> 
                                                <textarea name="description" style="width:100%; height:500px;">
                                                    <?php echo $row_sql['description'];?>
                                                </textarea> </td>
                                        </tr>
									-->
                                                                               
                                        <tr>
                                            <td> </td>
                                            <td> <input type="submit" name="submit" value="Submit"  class="btn btn-success"> </td>
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
