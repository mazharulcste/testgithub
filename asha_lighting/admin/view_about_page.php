<?php
include 'db_connect.php';
$result= mysql_query("SELECT * FROM tbl_page_article WHERE category='a_w_t'");
?>




<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title> View About Page </title>
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <!-- Page Specific CSS -->
    <link rel="stylesheet" href="http://cdn.oesmith.co.uk/morris-0.4.3.min.css">
  </head>

  <body>
      <div id="wrapper">
        <?php include 'include/menu.php';?>
              <div id="page-wrapper">
                  <div class="row">
                      <div class="col-lg-12">
                          <h2> View About Page </h2>
                          <div class="table-responsive">
                              <form action="" method="post" enctype="multipart/form-data">
                                  <table class="table table-bordered table-hover tablesorter">
                                      <thead>
                                          <tr>
                                              <th> Sl No </th>
                                              <th> Article </th>
                                              <th> MD Image  </th>
                                              <th> Action  </th>
                                             
                                          </tr>
                                      </thead>
                                      <tbody>
                                          <?php
                                          $i=1;
                                          while($row=mysql_fetch_assoc($result)){
                                          ?>
                                          <tr>
                                              <td> <?php echo $i++;?>  </td>
                                              <td> <?php echo $row['text'];?> </td>
                                              <td> 
                                                  <p align="center"> <img src="<?php echo $row['image'];?>" style="height:100px; width:150px;"> </p> 
                                                  <p align="center">
                                                    <a href="" class="btn btn-success"> Edit </a>
                                                    <a href="" class="btn btn-danger"> Delete </a>
                                                  </p>
                                              </td>
                                               <td> 
                                                   <a href="" class="btn btn-success"> Edit </a>
                                                   <a href="" class="btn btn-danger"> Delete </a>
                                               </td>
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
