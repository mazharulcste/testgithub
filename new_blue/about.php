<?php include 'header.php'; ?>
         <!-- FIRST BLOCK -->
      
         <!-- FEATURES -->
        
         
         <!-- OUR WORK -->
         <div id="our-work">
           
               <h2 class="section-title">About Us</h2>
               <h3 style="padding:0 2em; text-align: center; font-size:26px; font-family:'Comic Sans MS', cursive; color:#FFF">
                 Blue Ocean is a company that was created for the convenience of our customers. We provide unmatched freshness by delivering deep sea fish from the ports of Chittagong straight to our clients door step. 
               </h3>
               <div class="welcome_mess">
               <p style="padding:0 2em; text-align: center;">We deliver huge volumes of Organic (formalin free, chemical free), and halal deep sea fish. You now have direct access to the freshest fish available on the market. Our fish are fresher than the fish you would find at your local grocer. We take the middle-man out, and give you the rare access once reserved only for wholesaler's--providing you with the utmost quality and value. Blue Ocean Cares about the health of you and your family.</p>
               <p style="padding:0 2em; text-align: center;">Freshness is indicative of quality. Quality translates into better tasting fish with more healthful benefits. Consuming fish gives you high content of Omega-3 fatty acids, vitamins and minerals. The sooner the fish goes from the ocean to your plate, the more nutrients you ingest.</p>
               <p style="padding:0 2em; text-align: center;">
                 We at Blue Ocean and our suppliers believe in quality. It is our committment to provide the best for our clients.
               </p>
               </div>
              
             
         </div> 
         
           
               <div style="width:100%;">
               
               <img style=" width:100%;" src="img/img_pro/chairman.jpg">
     </div>
         <!-- SERVICES -->

        

   
         <!-- LATEST NEWS -->
       
         <!-- CONTACT -->
         
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
