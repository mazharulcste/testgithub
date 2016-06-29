<?php
include 'db_connect.php';
$result= mysql_query("SELECT * FROM  view_menu_img");
?>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title> View Image </title>
        <link href="css/bootstrap.css" rel="stylesheet">

        <!-- Add custom CSS here -->
        <link href="css/sb-admin.css" rel="stylesheet">
        <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
        <!-- Page Specific CSS -->
        <link rel="stylesheet" href="http://cdn.oesmith.co.uk/morris-0.4.3.min.css">
        <link rel="stylesheet" href="http://cdn.oesmith.co.uk/morris-0.4.3.min.css">
        <link rel="stylesheet" href="css/dataTables.bootstrap.css">
        <link rel="stylesheet" href="css/dataTables.responsive.css">
        <script type="text/javascript">
            function remove(id)
            {
                if(confirm(' Sure to remove file ? '))
                {
                        window.location='delete_image_3.php?remove_id='+id;
                }
            }
        </script>
    </head>

    <body>
        <div id="wrapper">
            <?php include 'include/menu.php'; ?>
            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Image View Tables
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="dataTable_wrapper">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>Image</th>
                                                <th> Caption</th>
                                                <th> Sub menu </th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php while($row = mysql_fetch_array($result)) { ?>
                                                <tr class="odd gradeX">
                                                    <td> <img style="height: 60px; width: 80px;" src="../admin/<?php echo $row['image']; ?>"> </td>
                                                     
                                                    <td> 
                                                        <b> <?php echo $row['caption'];?></b>   
                                                    </td>
                                                    
                                                    <td>

                                                        
                                                        <b> <?php echo $row['submenu_name'];?></b>   
                                                    </td>
                                                    
                                                    <td> <a href="image_3_edit.php?id=<?php echo $row['id'];?>" class="btn btn-success"> Edit </a>  <a href="javascript:remove(<?php echo $row['id'] ?>)" class="btn btn-danger"> Delete </a></td>
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
