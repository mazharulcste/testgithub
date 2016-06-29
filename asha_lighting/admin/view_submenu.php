<?php
include 'db_connect.php';

//$result=  mysql_query("SELECT * FROM  tbl_product_submenu"); 

$result=  mysql_query("SELECT * FROM view_menusubmenu");


?>


<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title> View Submenu </title>
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <!-- Page Specific CSS -->
    <link rel="stylesheet" href="http://cdn.oesmith.co.uk/morris-0.4.3.min.css">
    <script type="text/javascript" src="tinymce/js/tinymce/tinymce.min.js"></script>
    <script src="//cdn.ckeditor.com/4.5.3/full/ckeditor.js"></script>
    
                <script type="text/javascript">
            function remove(id)
            {
                if(confirm(' Sure to remove file ? '))
                {
                        window.location='delete_submenu.php?remove_id='+id;
                }
            }
        </script>
  </head>

  <body>
      <div id="wrapper">
        <?php include 'include/menu.php';?>
              <div id="page-wrapper">
                  <div class="row">
                      <div class="col-lg-12">
                          <h2> View Submenu </h2>
                          <div class="table-responsive">
                              <form action="" method="post" enctype="multipart/form-data">
                                  <table class="table table-bordered table-hover tablesorter">

                                      <tbody>  
                                          <tr>
                                              <td> <b> SL No </b> </td>
                                              <td>  <b> Submenu Name </b> </td>
                                              <td> <b> Action </b> </td>
                                          </tr>
                                          
                                          <?php 
                                          $i=1;
                                          while($row=  mysql_fetch_array($result)){
                                          ?>
                                          <tr> 
                                                <td> <?php echo $i++ ;?> </td>
                                                <td> <?php echo $row['submenu_name'];?>  </td>
                                                <td> <?php echo $row['product_menu'];?>  </td>
                                                <td>
                                                    <a href="edit_submenu.php?id=<?php echo $row['id'];?>" class="btn btn-success"> Edit </a>
                                                    <a href="javascript:remove(<?php echo $row['id'] ?>)" class="btn btn-danger"> Delete </a>
                                                </td>  
                                          </tr>
                                          <?php }?>
                                                                              


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
