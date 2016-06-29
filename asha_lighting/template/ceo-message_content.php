<?php
include 'admin/db_connect.php';

$result= mysql_query("SELECT * FROM  tbl_page_article WHERE category='md_mess'");
$row=  mysql_fetch_array($result);

$result_1= mysql_query("SELECT * FROM  tbl_image WHERE category='ceo_img'");
$row_2=  mysql_fetch_array($result_1);

?>

<div class="about">
    <div class="container">
        <div class="about-top heading">
            <h2> <?php echo $row['header']; ?> </h2>
        </div>
        <div class="about-bottom">              
            <div class="col-md-4 about-left">
                <div style="border: 2px solid Gray; margin-bottom:20px;">
                    <img  style="width:100%; height:250px; padding:20px;" src="admin/<?php echo $row_2['image']; ?>" alt="" />
                </div>
                <p align="center"> Shah Md. Sazzad Hossain </p> <br/>
                <p> CEO </p>

            </div>
           
            <div class="col-md-8 about-right" style="text-align:justify">
                <?php echo $row['text']; ?>
            </div>
            <div class="clearfix"></div>
            
            
        </div>
    </div>
</div>