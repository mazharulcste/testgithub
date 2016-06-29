<?php
include 'admin/db_connect.php';

$result= mysql_query("SELECT * FROM  tbl_page_article WHERE category='a_w_t'");
$row=  mysql_fetch_array($result);

$result_1= mysql_query("SELECT * FROM  tbl_image WHERE category='about_img'");
$row_2=  mysql_fetch_array($result_1);

?>







<div class="about">
        <div class="container">
            <div class="about-top heading">
                <h2> <?php echo $row['header'];?></h2>
            </div>
            <div class="about-bottom">              
                <div class="col-md-4 about-left">
                    <div style="border: 2px solid Gray;">
                        <img style=" width:100%; height:250px; padding: 20px;"src="admin/<?php echo $row_2['image'];?>" alt="" />
                    </div>
                    
                </div>
                <div class="col-md-7 about-right" style="text-align:justify; margin-left: 40px;" >
                    <?php echo $row['text'];?>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>