<?php
include 'db_connect.php';
$result=  mysql_query("SELECT * FROM tbl_product_submenu");
$result_1=  mysql_query("SELECT * FROM tbl_product_menu");
?>


<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>  Add Product Submenu  </title>
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
                          <h2> Add Image: </h2>
                          <div class="table-responsive">
                              <form action="upload.php" method="post" enctype="multipart/form-data">
                                  <table class="table table-bordered table-hover tablesorter">

                                      <tbody>  
                                          <tr>
                                              <td> Image : </td>
                                              <td> 
                                                  <input type="file" name="image">
                                                  <b style="color:red;">*** Slider Image Size : 960 * 400 px *** </b>
                                              </td>
                                          </tr>
                                          
<!--                                          <tr>
                                              <td> Select:</td>
                                              <td> 
                                                  <select class="form-control" name="category_1">
                                                      <option> --- Select --- </option>
                                                    <?php
                                                    while($row_1=mysql_fetch_array($result_1)){
                                                    ?>
                                                    <option value="<?php echo $row_1['menu_id']?>"> 
                                                        <?php echo $row_1['product_menu'];?>
                                                    </option>
                                                    <?php
                                                    }
                                                    ?>
                                                  </select>
                                              </td>
                                          </tr>-->
                                        
                                        <tr>
                                            <td> Category: </td>
                                            <td>
                                                <select class="form-control" name="category">  
                                                    <option> --- Select --- </option>
                                                    <option value="home_gallery"> Home Gallery </option>
                                                    <option value="about_img"> About Image </option>
                                                    <option value="ceo_img"> CEO Image </option>
                                                    <option value="gallery"> Gallery </option>
                                                    <option value="slider"> Slider </option>
                                                    <option value="new_product"> New Product </option>
                                                    
                                                    <?php
                                                    while($row=  mysql_fetch_array($result)){
                                                    ?>
                                                    <option value="<?php echo $row['id']?>"> 
                                                        <?php echo $row['submenu_name'];?>
                                                    </option>
                                                    <?php
                                                    }
                                                    ?>
                                                </select>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <td> Caption: </td>
                                            <td> 
                                                <input type="text" name="caption" class="form-control"> 
                                                <b style="color:red;"> (*** Caption is Only used for Home Gallery & Submenu ***)</b>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <td> Image Description:</td>
                                            <td> 
                                                <textarea class="form-control" rows="3" name="editor1">
                                                       
                                                </textarea>
                                                <script>
                                                    CKEDITOR.replace('editor1');
                                                </script>
                                                
                                                <b style="color:red;"> (*** Description is Only used for Submenu ***)</b>
                                            </td>
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
