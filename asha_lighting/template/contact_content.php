<?php
include 'admin/db_connect.php';
$result=  mysql_query("SELECT * FROM contact ORDER BY id DESC");
$row= mysql_fetch_array($result);
?>


<div class="contact">
        <div class="container">
            <div class="contact-top heading">
                <h3>Contact Us</h3>
            </div>
<!--            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d47753.14235372253!2d-87.8390792!3d41.57851990000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1skohl&#39;s!5e0!3m2!1sen!2sin!4v1436335323316" style="border:0" allowfullscreen></iframe>
            </div>-->
            <div class="contact-bottom">
                <div class="col-md-4 contact-left">
                    
                   
                    <div class="add">                       
                        <h5>Address</h5>
                        <address>
                            <strong>ASHA CORPORATION.</strong><br>
                            <?php echo $row['address'];?>
                            <br><br>
                            
                            Mobile: <?php echo $row['phone'];?> <br>
                            
                            E-mail: <?php echo $row['email'];?>

                        </address>                  
                    </div>
                </div>
                <div class="col-md-8 contact-right">
                    <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d47753.14235372253!2d-87.8390792!3d41.57851990000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1skohl&#39;s!5e0!3m2!1sen!2sin!4v1436335323316" style="border:0" allowfullscreen></iframe>
                    </div>
<!--                    <form>  
                    <div class="col-md-6 c-left">
                        <input type="text" placeholder="Name">
                        <input type="text" placeholder="Email">
                        <input type="text" placeholder="Phone">                                         
                    </div>
                    <div class="col-md-6 c-left">                   
                            <textarea placeholder="Message" required></textarea>
                    </div>
                    <div class="clearfix"></div>
                    <div class="submit-btn">
                            <input type="submit" value="SUBMIT">
                    </div>
                    </form>-->
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>