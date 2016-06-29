<?php
include 'admin/db_connect.php';

//$result=  mysql_query("SELECT * FROM  tbl_product_menu WHERE id='5'");
//$light= mysql_fetch_array($result);
//$result_light=  mysql_query("SELECT * FROM  tbl_product_submenu WHERE menu_name='5'");
//$qurey_light=  mysql_fetch_array($result_light);
//$r=mysql_query("SELECT * FROM  tbl_product_submenu WHERE menu_name='5'");
//
//$result_2=  mysql_query("SELECT * FROM  tbl_product_menu WHERE id='6'");
//$fan= mysql_fetch_array($result_2);
//$result_fan=  mysql_query("SELECT * FROM  tbl_product_submenu WHERE menu_name='6'");
//$qurey_fan=  mysql_fetch_array($result_fan);
//$r_2=  mysql_query("SELECT * FROM  tbl_product_submenu WHERE menu_name='6'");
//
//
//$result_3=  mysql_query("SELECT * FROM  tbl_product_menu WHERE id='7'");
//$blub= mysql_fetch_array($result_3);
//$result_blub=  mysql_query("SELECT * FROM  tbl_product_submenu WHERE menu_name='7'");
//$qurey_blub=  mysql_fetch_array($result_blub);
//$r_3=  mysql_query("SELECT * FROM  tbl_product_submenu WHERE menu_name='7'");
//
//
//$result_4=  mysql_query("SELECT * FROM  tbl_product_menu WHERE id='8'");
//$mainswitch= mysql_fetch_array($result_4);
//$result_mainswitch=  mysql_query("SELECT * FROM  tbl_product_submenu WHERE menu_name='8'");
//$qurey_mainswitch=  mysql_fetch_array($result_mainswitch);
//$r_4=  mysql_query("SELECT * FROM  tbl_product_submenu WHERE menu_name='8'");
//
//$result_5=  mysql_query("SELECT * FROM  tbl_product_menu WHERE id='9'");
//$meter= mysql_fetch_array($result_5);
//$result_meter=  mysql_query("SELECT * FROM  tbl_product_submenu WHERE menu_name='9'");
//$qurey_meter=  mysql_fetch_array($result_meter);
//$r_5=  mysql_query("SELECT * FROM  tbl_product_submenu WHERE menu_name='9'");


$result_1=  mysql_query("SELECT * FROM view_menusubmenu");

$result_2=  mysql_query("SELECT * FROM tbl_product_menu ORDER BY menu_id ASC");

//$result_3=  mysql_query("SELECT * FROM view_menusubmenu");
//$row_3=  mysql_fetch_array($result_3);

?>

<div class="nav_wi">
    <!--navigation-starts-->
    <nav role="navigation">
    <div id="cssmenu">
        <!-- Sample menu definition -->
        <!--<ul id="main-menu" class="sm sm-blue">-->
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="#">About</a>
                <ul>
                    <li><a href="about-us.php">About Us</a></li>
                    <li><a href="ceo-message.php">CEO Message </a></li>
                </ul>
            </li>
            <li><a href="#">Our Product</a>
                <ul>      
                    
                    <?php while($row_2=mysql_fetch_array($result_2)){?>
                    <li>
                        <a href="page.php?id=<?php echo $row_2['menu_id'] ;?>"> <?php echo $row_2['product_menu'] ;?> </a>
                    </li>
                    <?php }?>
<!--                    <li>
                        <a> <?php echo $light['product_menu'];?> </a>
                        <ul>   
                            <?php while($row=  mysql_fetch_array($result_light)){?>
                            <li>
                                <a href="product_page.php?id=<?php echo $row['id'];?>"> <?php echo $row['submenu_name'];?>  </a>
                            </li>  
                            <?php }?>
                        </ul>
                    </li>-->
                    
<!--                    <li>
                        <a> <?php echo $fan['product_menu']; ?> </a>
                        <?php if($qurey_fan['menu_name']!=0){?>
                        <ul>   
                            <?php while 
                                ($row = mysql_fetch_array($r_2)) { ?>
                                <li>
                                    <a> <?php echo $row['submenu_name']; ?>  </a>
                                </li>  
                            <?php } ?>
                        </ul>
                        <?php } ?>
                       
                    </li>-->
                    
<!--                    <li>
                        <a> <?php echo $blub['product_menu']; ?> </a>
                         <?php if($qurey_blub['menu_name']!=0){?>
                        <ul>   
                            <?php while ($row = mysql_fetch_array($r_3)) { ?>
                                <li>
                                    <a> <?php echo $row['submenu_name']; ?> </a>
                                </li>  
                            <?php } ?>
                        </ul>
                         <?php } ?>
                    </li>-->
                    
<!--                    <li>
                        <a> <?php echo $mainswitch['product_menu']; ?> </a>
                         <?php if($qurey_mainswitch['menu_name']!=0){?>
                        <ul>   
                            <?php while ($row = mysql_fetch_array($r_4)) { ?>
                                <li>
                                    <a> <?php echo $row['submenu_name']; ?>  </a>
                                </li>  
                            <?php } ?>
                        </ul>
                         <?php }?>
                    </li>-->
                    
<!--                    <li>
                        <a> <?php echo $meter['product_menu']; ?> </a>
                        <?php if($qurey_meter['menu_name']!=0){?>
                        <ul>   
                            <?php while ($row = mysql_fetch_array($r_5)) { ?>
                                <li>
                                    <a> <?php echo $row['submenu_name']; ?>  </a>
                                </li>  
                            <?php } ?>
                        </ul>
                        <?php }?>
                    </li>-->
                   
                </ul>


            </li>

        
          
            <li><a href="gallery.php">Gallery</a></li>
            <li><a href="contact.php">Contact Us </a></li>

        </ul>
    </nav>
</div>
