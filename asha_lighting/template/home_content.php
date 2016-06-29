<?php
include 'admin/db_connect.php';

$result=  mysql_query("SELECT * FROM tbl_image WHERE category='home_gallery'");

$result_2=  mysql_query("SELECT * FROM  tbl_page_article WHERE category='h_w_t'");
$row_2=  mysql_fetch_array($result_2);
?>


<div class="welcome" id="welcome">
    <div class="container">
        <div class="welcome-top heading">
            <h2 style="margin-bottom: 20px; color:#3daee5;"> <?php echo $row_2['header'];?> </h2>
            <p> <?php echo $row_2['text'];?> </p>
        </div>
        <div class="welcome-bottom">
            <?php while($row=  mysql_fetch_array($result)){?>
            <div class="col-md-4 welcome-left" style="margin-bottom: 20px; border:0px solid gray; height:280px; margin-left: 0px;">
                <img class="img-responsive" style="height:250px; width:100%; border:1px solid gray;" src="admin/<?php echo $row['image'];?>" alt="" />
                <div class="welcome-btm">
                    <a>  <?php echo $row['caption'];?> <span class="arw"> </span> </a>
                </div>
            </div>
            <?php } ?>

           <div class="clearfix"></div>
        </div>
    </div>
</div>


<hr/>
<div class="product" id="product">
    <div class="container">
        <div class="product-top">

            <div class="col-md-12 product-right heading">
                <h3>New Products</h3>
                <iframe src="carousel/index.php" style="width:100%;height:250px;max-width:100%;overflow:hidden;border:none;padding:0;margin:0 auto;display:block;margin-top:15px;" scrolling="no" marginheight="0" marginwidth="0"></iframe>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>

