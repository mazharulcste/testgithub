<?php
include 'db_connect.php';
$row = mysql_query("SELECT * FROM tbl_course");

?>


<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title> Language Center Article  </title>
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <!-- Page Specific CSS -->
    <link rel="stylesheet" href="http://cdn.oesmith.co.uk/morris-0.4.3.min.css">
    <script type="text/javascript" src="tinymce/js/tinymce/tinymce.min.js"></script>
	    <script type="text/javascript">
			function remove(id)
			{
					if(confirm(' Sure to remove file ? '))
					{
							window.location='delete_course.php?remove_id='+id;
					}
			}
		</script>
  </head>

  <body>
      <div id="wrapper">
        <?php include 'include/menu.php';?>
              <div id="page-wrapper">
                  <div class="row">
                      <script>
                        tinymce.init({selector:'textarea'});
                      </script>
                      <div class="col-lg-12">
                          <h2> Edit Course Schedule </h2>
                          <div class="table-responsive">
                              <form action="" method="post" enctype="multipart/form-data">
                                  <table class="table table-bordered table-hover tablesorter">

                                      <tbody>                                                                          
                                        <tr>
                                            <td colspan="4"> <p align="center" style="font-weight:bold;"> Edit Course Schedule <p> </td>
                                        </tr>
                                        
                                        <tr>
                                            <td> Months:</td>
											<td> Starting Date:</td>
											<td> Graduation Date:</td>
											<td> Action  </td>
                                            
                                        </tr>
										<?php
										while($result=mysql_fetch_array($row)){
										?>                                        
                                        <tr>
											<td> <?php echo $result['month']?> </td> 
											<td> <?php echo $result['start_date']?> </td> 
											<td> <?php echo $result['graduate_date']?> </td> 
											<td> 
												<a href="edit_course_info.php?id=<?php echo $result['course_id'] ?>" class="btn btn-success"> Edit</a>
												<a href="javascript:remove(<?php echo $result['course_id'] ?>)" class="btn btn-danger"> Delete </a>  
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
