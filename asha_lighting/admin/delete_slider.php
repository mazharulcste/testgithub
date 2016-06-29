<?php
include 'db_connect.php';
$view_product= mysql_query("SELECT * FROM tbl_slider");
?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title> Delete Slider Image </title>
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <!-- Page Specific CSS -->
    <link rel="stylesheet" href="http://cdn.oesmith.co.uk/morris-0.4.3.min.css">
    <script type="text/javascript">
function remove(id)
{
        if(confirm(' Sure to remove file ? '))
        {
                window.location='delete_slider_info.php?remove_id='+id;
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
                          <h2> Delete Slider Image </h2>
                          <div class="table-responsive">
                              <form action="" method="post" enctype="multipart/form-data">
                                  <table class="table table-bordered table-hover tablesorter">
                                      <thead>
                                          <tr>
                                              <th> Sl No</th>                          
                                              <th> Slider Image </th>
											  <th> Caption </th>
                                              <th> Action  </th>
                                             
                                          </tr>
                                      </thead>
                                      <tbody>
                                          <?php
                                          $i=1;
                                          while($row=mysql_fetch_assoc($view_product)){
                                          ?>
                                          <tr>
                                               <td> <?php echo $i++;?>  </td>
                                               <td><img src="<?php echo $row['location'];?>" style="height:80px; width:80px;"> </p> </td>
											   <td> <?php echo $row['caption'];?> </td>
                                               <td> <p align="center"> <a href="javascript:remove(<?php echo $row['slider_id'] ?>)">Delete file</a> </p></td>
                                          </tr>
                                          <?php
                                          }
                                          ?>
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
