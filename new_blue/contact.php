<?php include 'header.php'; ?>
         <!-- FIRST BLOCK -->
         <!-- CONTACT -->
         <div id="contact">
            <div class="line">
               <h2 class="section-title">Contact Us</h2>
               <div class="margin">
                  <div class="s-12 m-12 l-3 hide-m hide-s margin-bottom right-align">
                    <img src="img/contact.jpg" alt="">
                  </div>
                  <div class="s-12 m-12 l-4 margin-bottom right-align">
                     <h3>Find Us</h3>
                     <address>
                         <p style="font-family:'Comic Sans MS', cursive"><strong>Adress:</strong> House # 15, 
                              Road # 6 ,<br>
                              Nikunjo - 2, 
                              Dhaka,  Bangladesh.</p>
                         
                       <p style="font-family:'Comic Sans MS', cursive"><strong>Mobile:-</strong>+8801615157083</p>
                         <p style="font-family:'Comic Sans MS', cursive"><strong>E-mail:</strong> info@blueocean.com</p>
                     </address>
                     <br />
                     <h3>Social</h3>
                     <p><i class="icon-facebook icon"></i> <a href="https://www.facebook.com/blueocean.seafish/">Facebook</a></p>
                     <p><i class="icon-instagram_circle"></i> <a href="https://www.facebook.com/blueocean.seafish/">Linkedin</a></p>
                     <p class="margin-bottom"><i class="icon-twitter icon"></i> <a href="https://www.facebook.com/blueocean.seafish/"> Twitter</a></p>
                  </div>
                  <div class="s-12 m-12 l-5">
                    <h3>Mail Us</h3>
                    <form class="customform" action="">
                      <div class="s-12"><input name="" placeholder="Your e-mail" title="Your e-mail" type="text" /></div>
                      <div class="s-12"><input name="" placeholder="Your name" title="Your name" type="text" /></div>
                      <div class="s-12"><textarea placeholder="Your massage" name="" rows="5"></textarea></div>
                      <div class="s-12 m-12 l-4"><button class="color-btn" type="submit">Send</button></div>
                    </form>
                  </div>                
               </div>
            </div>
         </div>
         <!-- MAP -->
         <div id="map-block">  	  
            <script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script><div style='overflow:hidden;height:250px;width:1200px;'><div id='gmap_canvas' style='height:250px;width:1200px;'></div><div><small><a href="http://embedgooglemaps.com">                 embed google maps             </a></small></div><div><small><a href="http://freedirectorysubmissionsites.com/">link directories</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><script type='text/javascript'>function init_map(){var myOptions = {zoom:12,center:new google.maps.LatLng(23.844362209459618,90.47430514646919),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(23.844362209459618,90.47430514646919)});infowindow = new google.maps.InfoWindow({content:'<strong>Blue Ocean Sea Fish</strong><br>House # 15,Road # 06,Nikunjo-2,Dhaka<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
         </div>
      </section>
      <!-- FOOTER -->
     <footer>
         <div class="line">
            <div class="s-12 l-6">
               <p>Copyright 2016, Blue Ocean Sea Fish</p>
               <p>All Right Reserved</p>
            </div>
            <div class="s-12 l-6">
               <a class="right" href="http://www.bsdbd.com" >Design By<br> bsdbd.com</a>
            </div>
         </div>
      </footer>
      <script type="text/javascript" src="owl-carousel/owl.carousel.js"></script>
      <script type="text/javascript">
         jQuery(document).ready(function($) {
            var theme_slider = $("#owl-demo");
            $("#owl-demo").owlCarousel({
                navigation: false,
                slideSpeed: 300,
                paginationSpeed: 400,
                autoPlay: 6000,
                addClassActive: true,
             // transitionStyle: "fade",
                singleItem: true
            });
            $("#owl-demo2").owlCarousel({
                slideSpeed: 300,
                autoPlay: true,
                navigation: true,
                navigationText: ["&#xf007","&#xf006"],
                pagination: false,
                singleItem: true
            });
        
            // Custom Navigation Events
            $(".next-arrow").click(function() {
                theme_slider.trigger('owl.next');
            })
            $(".prev-arrow").click(function() {
                theme_slider.trigger('owl.prev');
            })     
        }); 
      </script>
   </body>
</html>
