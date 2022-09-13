<!-- Footer -->
<style>
    .goldergradiant .social-links a{
        border: 1px solid;
        padding: 10px;
        margin-left: 10px;
        float: left;
        width: 40px;
        text-align: center;
    }
    .goldergradiant .social-links{
        float: right;
    }

</style>


<footer class="footer-shop">
    <div class="container"> 
        <div class="row"> 
            <div class="col-md-2">
                <center>

                    <img src="<?php echo base_url(); ?>assets/images/spacial/turismlogo.png" class="spacial_text" style="height: 198px;
                         margin-top: 10px;
                         ">      
                </center>
            </div>

            <!-- Contact -->
            <div class="col-md-3">
                <h4 >Contact Information!</h4>
                <p><b><i class="fa fa-location-arrow"></i></b>Shop 11, 1/F Admiralty Center,<br/>
18 Harcourt Road, Admiralty, Hong Kong</p>
                
                <br/>
                   <p><b><i class="fa fa-location-arrow"></i></b>General Commercial Building,<br/>
G/F, 162 Des Voeux Road, Central, Hong Kong</p>
                <p><b><i class="fa fa-phone"></i></b><a href="tel:85226559778" style="color:white"> +(852) 2655 9778</a></p>
                <p><b><i class="fa fa-fax"></i></b><a href="tel:85226559768"  style="color:white"> +(852) 2655 9768</a></p>
                <p><b><i class="fa fa-envelope"></i></b><a href="mailto:lyra@royaltailor.hk"  style="color:white">lyra@royaltailor.hk</a></p>
            </div>

            <!-- Categories -->
            <div class="col-md-2">
                <h4>Categories</h4>
                <ul class="links-footer">
                    <li><a href="<?php echo site_url('Product/ProductList/1/0') ?>">Shirts</a></li>
                    <li><a href="<?php echo site_url('Product/ProductList/2/0') ?>">Suits</a></li>
                    <li><a href="<?php echo site_url('Product/ProductList/4/0') ?>">Jackets</a></li>
                    <li><a href="<?php echo site_url('Product/ProductList/3/0') ?>">Pants</a></li>
                    <li><a href="<?php echo site_url('Product/ProductList/5/0') ?>">Tuxedo Suits</a></li>
                </ul>
            </div>



            <!-- Categories -->
            <div class="col-md-2">
                <h4>Information</h4>
                <ul class="links-footer">
                    <li><a href="<?php echo site_url("Shop/aboutus"); ?>">About Us</a></li>
                    <li><a href="<?php echo site_url("Shop/faqs"); ?>">FAQs</a></li>
                    <li><a href="<?php echo site_url("terms-condition"); ?>" title="" style="color:white">Terms & Conditions</a></li>
                    <li><a href="<?php echo site_url("privacy-policy"); ?>" title="" style="color:white">Privacy Policy</a></li>
                    <li><a href="<?php echo site_url("return-policy"); ?>" title="" style="color:white">Return Policy</a></li>
                </ul>
            </div>


            <!-- Categories -->
            <div class="col-md-3">
                <h4>Newsletter Subscribe!</h4>

                <dl>
                    <dd style="color:white;">Subscribe to our newsletter and get exclusive deals you wont find anywhere else straight to your inbox!</dd>
                    <div  class=" row" method="post" >

                        
                        <div  class="col-sm-12 text-left" style="    margin-top: 10px;">
                            <button type="button"  ng-click="requestNewsletterSubscription()" class="btn btn-inverse" name="sub" value="Subscribe" >Subscribe Now</button>
                        </div >
                    </div>

                </dl>
            </div>


        </div>
    </div>
</footer>

<!-- Rights -->
<div class="rights goldergradiant">
    <div class="container ">
        <div class="row">
            <div class="col-sm-6 " >
                <p style="color:black">Copyright © <?php echo date('Y') ?> <a href="#." class="ri-li" style="color:black"> www.royaltailor.hk </a>  All rights reserved</p>
            </div>
            <div class="col-sm-6 text-right">                 
                <div class="social-links"> 
                    <a href="https://www.facebook.com/royaltailorhk/" target="_blank"><i class="fa fa-facebook"></i></a> 
                    <a href="https://twitter.com/RoyalTailorHK" target="_blank"><i class="fa fa-twitter"></i></a> 
                    <a href="https://www.instagram.com/royal_tailor_/" target="_blank"><i class="fa fa-instagram"></i></a> 
                    <a href="https://en.tripadvisor.com.hk/Profile/Royaltailor" target="_blank"><i class="fa fa-tripadvisor"></i></a> 
                    <a href="https://www.pinterest.com/royaltailorhk" target="_blank"><i class="fa fa-pinterest"></i></a> 
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Footer -->  

<!-- GO TO TOP  --> 
<a href="#" class="cd-top"><i class="fa fa-angle-up"></i></a> 
<!-- GO TO TOP End --> 
</div>
<!-- End Page Wrapper --> 

<!--angular controllers-->
<script src="<?php echo base_url(); ?>assets/theme/angular/shopController.js"></script>

<!-- JavaScripts --> 
<script src="<?php echo base_url(); ?>assets/theme/js/vendors/wow.min.js"></script> 
<script src="<?php echo base_url(); ?>assets/theme/js/vendors/bootstrap.min.js"></script> 
<script src="<?php echo base_url(); ?>assets/theme/js/vendors/jquery.magnific-popup.min.js"></script> 
<script src="<?php echo base_url(); ?>assets/theme/js/vendors/own-menu.js"></script> 
<script src="<?php echo base_url(); ?>assets/theme/js/vendors/jquery.sticky.js"></script> 
<script src="<?php echo base_url(); ?>assets/theme/js/vendors/owl.carousel.min.js"></script> 

<!-- SLIDER REVOLUTION 4.x SCRIPTS  --> 
<script type="text/javascript" src="<?php echo base_url(); ?>assets/theme/rs-plugin/js/jquery.tp.t.min.js"></script> 
<script type="text/javascript" src="<?php echo base_url(); ?>assets/theme/rs-plugin/js/jquery.tp.min.js"></script> 
<script src="<?php echo base_url(); ?>assets/theme/js/main.js"></script> 

<!-- type ahead-->
<script src="<?php echo base_url(); ?>assets/handlebars.js" type="text/javascript"></script>

<!-- type ahead-->
<script src="<?php echo base_url(); ?>assets/typeahead.bundle.js" type="text/javascript"></script>

</body>

<!-- Mirrored from demos.webicode.com/html/BizTo/html/shop-sidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 Feb 2018 16:18:20 GMT -->
</html>
