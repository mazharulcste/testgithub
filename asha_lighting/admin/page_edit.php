<?php
include 'db_connect.php';
$id=$_GET['id'];

$result=  mysql_query("SELECT * FROM tbl_page_article WHERE id=$id");
$row= mysql_fetch_array($result);
        
if(isset($_POST['submit'])){
    $header=$_POST['header'];
    $text=str_replace("'", "\'", $_POST['editor1']);
    $category=$_POST['category'];
    $save=mysql_query("UPDATE tbl_page_article SET header='$header',text='$text' WHERE id='$id'");
    header("location:page_view.php");
    exit();	
      
 }

?>


<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title> Edit Page Article  </title>
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
                          <h2> Edit Page Article </h2>
                          <div class="table-responsive">
                              <form action="" method="post" enctype="multipart/form-data">
                                  <table class="table table-bordered table-hover tablesorter">

                                      <tbody>  
                                          <tr>
                                              <td> Header: </td>
                                              <td> <input type="text" name="header" value="<?php echo $row['header'];?>" class="form-control"> </td>
                                          </tr>
                                        <tr>
                                            <td style="width:150px;"> Add Description:</td>
                                            <td> 
                                                <textarea class="form-control" rows="3" name="editor1" >
                                                       <?php echo $row['text'];?>
                                                </textarea>
                                                <script>
                                                    CKEDITOR.replace('editor1');
                                                </script>
                                            </td>
                                        </tr>
                                        
<!--                                        <tr>
                                            <td> </td>
                                            <td>
                                                <select class="form-control" name="category">
                                                    <option> --- SELECT --- </option>
                                                    <option value="h_w_t"> Home Welcome Text </option>
                                                    <option value="a_w_t"> About Welcome Text </option>
                                                    <option value="md_mess"> MD Message  </option>
                                                    
                                                </select>
                                            </td>
                                        </tr>-->
                                                                               
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
