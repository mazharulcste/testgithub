<?php
include 'admin/db_connect.php';
$id=$_GET['id'];
$result=mysql_query("SELECT * FROM tbl_image WHERE id=$id");
$row=mysql_fetch_array($result);

?>


<div class="about">
    <div class="container">
        <div class="about-top heading">
            <h2>Product Details</h2>
        </div>
        <div class="about-bottom">				
            <div class="col-md-4 about-left">
                <div class="gallery-bottom">
                    <div class="gallery-grids">
                        <div class="gallery-left">
                            <div class="g-1">
                                <a class="example-image-link" href="admin/<?php echo $row['image'];?>" data-lightbox="example-set" data-title=""><img style="padding: 20px;" class="example-image" src="admin/<?php echo $row['image'];?>" alt=""/></a>
                            </div>
                        </div>
                    </div>
                </div>
               						
<!--                <div>
                    <h3>product name</h3>
                    <p>Light</p>
                </div>-->
            </div>
            <div class="col-md-8 about-right" style="margin-top: 30px;">
                <div style="font-size:16px;">
                    <?php
                    echo $row['details'];
                    ?>

                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>