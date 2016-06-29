<?php
include 'admin/db_connect.php';
$id=$_GET['id'];
$result=mysql_query("SELECT * FROM tbl_menu_image WHERE category=$id");
$result_2=mysql_query("SELECT * FROM view_menusubmenu WHERE menu_id=$id");
$row_2=  mysql_fetch_array($result_2);

//$result_3=  mysql_query("SELECT * FROM view_menusubmenu");
//$row_3=  mysql_fetch_array($result_3);
//

?>


<div class="about">
    <div class="container">
        <div class="about-top heading">
            <h2> <?php echo $row_2['product_menu'];?>  </h2>
        </div>
        <div class="about-bottom">
            <?php while($row=mysql_fetch_array($result)){?>
            <div class="col-md-4 about-left">
                <div class="gallery-bottom">
                    <div class="gallery-grids">
                        <div class="gallery-left">
                            <div class="g-1">
                                <a class="example-image-link" href="admin/<?php echo $row['image'];?>" data-lightbox="example-set" data-title=""><img style="padding: 20px; height:250px;" class="example-image" src="admin/<?php echo $row['image'];?>" alt=""/></a>
                            </div>
                        </div>
                    </div>
                </div>
               						
                <div>
                    <h3> 
                        <a href="product_page.php?id=<?php echo $row['submenu_id'];?>"> <?php  echo $row['caption']; ?> </a>

                    </h3>
                    
                </div>
            </div>
            <?php }?>

            <div class="clearfix"></div>
        </div>
    </div>
</div>