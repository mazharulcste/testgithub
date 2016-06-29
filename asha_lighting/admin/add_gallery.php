<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title> Gallery Picture Add </title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://cdn.oesmith.co.uk/morris-0.4.3.min.css">
  </head>

  <body>
      <div id="wrapper">
        <?php include 'include/menu.php'; ?>       
              <div id="page-wrapper">
                  <div class="row">
                      <div class="col-lg-12">
                          <h2> Image Add </h2>
                          <div class="table-responsive">
                              <form action="upload.php" method="post" enctype="multipart/form-data">
                                  <table class="table table-bordered table-hover tablesorter">
                                      <thead>
                                          <tr>
                                              <th>Product Name</th>
                                              <th> Image  </th>
                                              <th> Action </th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                          <tr>
                                              <td> <input type="text" class="form-control" name="caption" placeholder="Product Name"></td>
                                              <td> <input type="file" name="image"></td>
                                              <td> <input type="submit" name="btn_upload" value="Upload" class="btn-success"> </td>
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
