<?php
include 'db_connect.php';
$result=  mysql_query("SELECT * FROM tbl_product_menu");
if(isset($_POST['submit'])){
    $submenu=$_POST['submenu'];
    $menu=$_POST['menu'];
    $save=mysql_query("INSERT INTO tbl_product_submenu(submenu_name,menu_name) VALUES ('$submenu','$menu')");
      
 }

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
                          <h2> Add Product Sub Menu: </h2>
                          <div class="table-responsive">
                              <form action="" method="post" enctype="multipart/form-data">
                                  <table class="table table-bordered table-hover tablesorter">

                                      <tbody>  
                                          <tr>
                                              <td> Submenu Name: </td>
                                              <td> <input type="text" name="submenu" class="form-control"> </td>
                                          </tr>
                                        
                                        <tr>
                                            <td> </td>
                                            <td>
                                                <select class="form-control" name="menu">  
                                                    <?php
                                                    while($row=  mysql_fetch_array($result)){
                                                    ?>
                                                    <option value="<?php echo $row['menu_id']?>"> 
                                                        <?php echo $row['product_menu'];?>
                                                    </option>
                                                    <?php
                                                    }
                                                    ?>
                                                </select>
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
