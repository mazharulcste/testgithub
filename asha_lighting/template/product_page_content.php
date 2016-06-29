<?php
$id=$_GET['id'];
$result=  mysql_query("SELECT * FROM tbl_image WHERE category=$id");
$row=  mysql_fetch_array($result);

$image_result=  mysql_query("SELECT * FROM tbl_image WHERE category=$id");

?>


<div class="gallery">
    <div class="container">
        <div class="gallery-top heading">
            <h2> <?php echo $row['caption'];?> Gallery</h2>
        </div>
        <div class="gallery-bottom">
            <div class="gallery-grids">
                <?php while($r=mysql_fetch_array($image_result)){?>
                <div class="col-md-4 gallery-left">
                    <div class="g-1">	
                        <a href="product_details.php?id=<?php echo $r['id'];?>"> <img style="padding: 20px; height:250px;"  src="admin/<?php echo $r['image'];?>" alt=""/> </a>						
                    </div>

                </div> 
                <?php }?>
                <div class="clearfix"> </div>					
            </div>
        </div>
    </div>
</div>