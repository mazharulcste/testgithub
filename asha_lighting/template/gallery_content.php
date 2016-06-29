<?php
include 'admin/db_connect.php';
$result=  mysql_query("SELECT * FROM tbl_image WHERE category='gallery'");
?>
    <div class="gallery">
        <div class="container">
            <div class="gallery-top heading">
                <h2>Our Gallery</h2>
            </div>
            <div class="gallery-bottom">
                <div class="gallery-grids">
                    <?php while($row=  mysql_fetch_array($result)){?>
                    <div class="col-md-4 gallery-left">
                        
                        <div class="g-2">	
                            <a class="example-image-link" href="admin/<?php echo $row['image'];?>" data-lightbox="example-set" data-title=""><img class="example-image" style="width:100%; height:250px; padding: 20px;" src="admin/<?php echo $row['image'];?>" alt=""/></a>
                        </div>
                        
                    </div>
                    <?php }?>

                    
                    <div class="clearfix"> </div>                   
                </div>
            </div>
        </div>
    </div>
