<?php 

    $footer_one = get_field('footer_one', 'option');


?>

<footer>
       <!-- Footer Start-->
       <div class="footer-area footer-padding">
           <div class="container">
               <div class="row d-flex justify-content-between">
                   <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                      <div class="single-footer-caption mb-50">
                        <div class="single-footer-caption mb-30">

                             <!-- logo -->
                            <div class="footer-logo">
                                <img src="<?php echo $footer_one['footer_logo']['url']?>" alt="<?php echo $footer_one['footer_logo']['name']?>">
                            </div>
                            <div class="footer-tittle">
                                <div class="footer-pera">
                                    <p><?php echo $footer_one['footer_description']?></p>
                               </div>
                            </div>
                            <!-- social -->
                            <div class="footer-social">
                                <?php 
                                
                                    foreach ($footer_one['footer_socials_links'] as $foots){
                                    ?>
                                        <a href="<?php echo $foots['links']?>"><i class="<?php echo $foots['icons']?>"></i></a>
                                    <?php }
                                
                                ?>
                            </div>
                        </div>
                      </div>
                   </div>
                   <div class="col-xl-2 col-lg-2 col-md-4 col-sm-5">
                       <div class="single-footer-caption mb-50">
                           <div class="footer-tittle">
                               <h4>Company</h4>
                               <ul>
                                   <li><a href="index.html">Home</a></li>
                                   <li><a href="about.html">About Us</a></li>
                                   <li><a href="single-blog.html">Services</a></li>
                                   <li><a href="#">Cases</a></li>
                                   <li><a href="contact.html">  Contact Us</a></li>
                               </ul>
                           </div>
                       </div>
                   </div>
                   <div class="col-xl-3 col-lg-3 col-md-4 col-sm-7">
                       <div class="single-footer-caption mb-50">
                           <div class="footer-tittle">
                               <h4>Services</h4>
                               <ul>
                                   <li><a href="#">Commercial Cleaning</a></li>
                                   <li><a href="#">Office Cleaning</a></li>
                                   <li><a href="#">Building Cleaning</a></li>
                                   <li><a href="#">Floor Cleaning</a></li>
                                   <li><a href="#">Apartment Cleaning</a></li>
                               </ul>
                           </div>
                       </div>
                   </div>
                   <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                       <div class="single-footer-caption mb-50">
                           <div class="footer-tittle">
                               <h4>Get in Touch</h4>
                               <ul>
                                <li><a href="#">152-515-6565</a></li>
                                <li><a href="#"> Demomail@gmail.com</a></li>
                                <li><a href="#">New Orleans, USA</a></li>
                            </ul>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
       <!-- footer-bottom aera -->
       <div class="footer-bottom-area footer-bg">
           <div class="container">
               <div class="footer-border">
                    <div class="row d-flex align-items-center">
                        <div class="col-xl-12 ">
                            <div class="footer-copy-right text-center">
                                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                            </div>
                        </div>
                    </div>
               </div>
           </div>
       </div>
       <!-- Footer End-->
   </footer>
   
	<!-- JS here -->
	
		<!-- Jquery, Popper, Bootstrap -->
		<script src="./assets/js/jquery-1.12.4.min.js"></script>
        <script src="./assets/js/popper.min.js"></script>
        <script src="./assets/js/bootstrap.min.js"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="./assets/js/jquery.slicknav.min.js"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="./assets/js/owl.carousel.min.js"></script>
        <script src="./assets/js/slick.min.js"></script>

		<!-- sticky -->
		<script src="./assets/js/jquery.sticky.js"></script>
        
		<!-- main Jquery -->	
        <script src="./assets/js/main.js"></script>

        <?php wp_footer();?>
    </body>
</html>