<?php
include 'db_connect.php';
//$result_2 = mysql_query("SELECT * FROM tbl_product_submenu");
$result = mysql_query("SELECT * FROM tbl_page_article");
//$result2= mysql_query("SELECT * FROM tbl_product_submenu WHERE tbl_product_submenu.id==tbl_image.category)");


//$row_2=  mysql_fetch_array($result_2['id']==$result['category']);

?>




<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title> View Page </title>
        <link href="css/bootstrap.css" rel="stylesheet">

        <!-- Add custom CSS here -->
        <link href="css/sb-admin.css" rel="stylesheet">
        <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
        <!-- Page Specific CSS -->
        <link rel="stylesheet" href="http://cdn.oesmith.co.uk/morris-0.4.3.min.css">
        <link rel="stylesheet" href="http://cdn.oesmith.co.uk/morris-0.4.3.min.css">
        <link rel="stylesheet" href="css/dataTables.bootstrap.css">
        <link rel="stylesheet" href="css/dataTables.responsive.css">
        <link rel="stylesheet" href="">
    </head>

    <body>
        <div id="wrapper">
            <?php include 'include/menu.php'; ?>
            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Page View Tables
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="dataTable_wrapper">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th> Sl No</th>
                                                <th> Category </th>
                                                <th> Action </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $i=1;
                                            while($row = mysql_fetch_array($result)) { ?>
                                                <tr class="odd gradeX">

                                                     <td> <?php echo $i++;?>  </td>
                                                    <td>

                                                        <?php if($row['category']=='h_w_t'){?>
                                                        <b> Home Welcome Text </b>                                                        
                                                        <?php }  ?>
                                                        
                                                        <?php if($row['category']=='a_w_t'){?>
                                                        <b> About Us Text </b>                                                        
                                                        <?php }  ?>
                                                        
                                                        <?php if ($row['category'] == 'md_mess') { ?>
                                                            <b> CEO Message Text </b>                                                        
                                                        <?php } ?>
                                                    </td>
                                                    
                                                    <td> <a href="page_edit.php?id=<?php echo $row['id'];?>" class="btn btn-success"> Edit </a> </td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
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

        <script src="js/jquery.min.js"></script>
        <script src="js/dataTables.bootstrap.min.js"></script>
        <script src="js/jquery.dataTables.min.js"></script>



        <script>
            $(document).ready(function () {
                $('#dataTables-example').DataTable({
                    responsive: true
                });
            });
        </script>

    </body>
</html>
