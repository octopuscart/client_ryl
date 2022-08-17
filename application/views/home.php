<?php
$this->load->view('layout/header');

function truncate($str, $len) {
    $tail = max(0, $len - 10);
    $trunk = substr($str, 0, $tail);
    $trunk .= strrev(preg_replace('~^..+?[\s,:]\b|^...~', '...', strrev(substr($str, $tail, $len - $tail))));
    return $trunk;
}
?>
<style>
    .product_image_back {
        background-size: contain!important;
        background-repeat: no-repeat!important;
        height: 300px!important;
        background-position-x: center!important;
        background-position-y: center!important;
    }

    .productblock{
        padding: 10px;
        border: 1px solid rgb(255, 214, 88);
        margin-bottom: 30px;
    }
</style>
<!-- Slider -->
<section class="home-slider">
    <div class="tp-banner-container">
        <div class="tp-banner">
            <ul>


                <!-- Slider 1 -->
                <li data-transition="random" data-slotamount="7">
                    <!--<img src="<?php echo base_url(); ?>assets/theme/images/mountainscene.jpg" data-bgposition="center top" alt="" />--> 

                    <!-- Layer -->
                    <div class="tp-caption sft font-montserrat tp-resizeme rs-parallaxlevel-4 oleofont" 
                         data-x="center" 
                         data-hoffset="0" 
                         data-y="center" 
                         data-voffset="-150" 
                         data-speed="700" 
                         data-start="1000" 
                         data-easing="easeOutBack"
                         data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 
                         data-splitin="none" 
                         data-splitout="none" 
                         data-elementdelay="0.1" 
                         data-endelementdelay="0.1" 
                         data-endspeed="300" 
                         data-captionhidden="on"
                         style="color: #252839; font-size: 36px; font-weight:900; text-transform: uppercase;"> </div>

                    <!-- Layer -->
                    <div class="tp-caption customin font-playfair tp-resizeme rs-parallaxlevel-4" 
                         data-x="center" data-hoffset="0" 
                         data-y="center" data-voffset="150" 
                         data-speed="720" 
                         data-start="1200" 
                         data-easing="easeOutBack"
                         data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 
                         data-splitin="none" 
                         data-splitout="none" 
                         data-elementdelay="0.1" 
                         data-endelementdelay="0.1" 
                         data-endspeed="300" 
                         data-captionhidden="on" 
                         style="color: #252839; text-transform: uppercase; font-weight:900; font-size: 130px;">
                        <img src="<?php echo base_url(); ?>assets/theme/images/mountainscene.jpg" >
                             <!--<img src="<?php echo base_url(); ?>assets/images/logo732.png" style="height: 200px;"/>-->
                    </div>

                    <!-- Layer -->
                    <div class="tp-caption customin font-playfair tp-resizeme rs-parallaxlevel-6" 
                         data-x="center" data-hoffset="0" 
                         data-y="center" data-voffset="200" 
                         data-speed="720" 
                         data-start="1200" 
                         data-easing="easeOutBack"
                         data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 
                         data-splitin="none" 
                         data-splitout="none" 
                         data-elementdelay="0.1" 
                         data-endelementdelay="0.1" 
                         data-endspeed="300" 
                         data-captionhidden="on" 
                         style="color: #252839; text-transform: uppercase; font-weight:900; font-size: 130px;">
                        <img src="<?php echo base_url(); ?>assets/theme/images/slides/shopbg_6.png" >
                    </div>

                    <!-- Layer -->
                    <div class="tp-caption customin font-playfair tp-resizeme rs-parallaxlevel-7" 
                         data-x="center" data-hoffset="0" 
                         data-y="center" data-voffset="150" 
                         data-speed="720" 
                         data-start="1200" 
                         data-easing="easeOutBack"
                         data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 
                         data-splitin="none" 
                         data-splitout="none" 
                         data-elementdelay="0.1" 
                         data-endelementdelay="0.1" 
                         data-endspeed="300" 
                         data-captionhidden="on" 
                         style="color: #252839; text-transform: uppercase; font-weight:900; font-size: 130px;">
                        <img src="<?php echo base_url(); ?>assets/theme/images/mountainpng-1.png" style="height:500px">
                             <!--<img src="<?php echo base_url(); ?>assets/images/logo732.png" style="height: 200px;"/>-->
                    </div>

                    <!-- Layer -->
                    <div class="tp-caption customin font-playfair tp-resizeme rs-parallaxlevel-5" 
                         data-x="center" data-hoffset="0" 
                         data-y="center" data-voffset="50" 
                         data-speed="720" 
                         data-start="1200" 
                         data-easing="easeOutBack"
                         data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 
                         data-splitin="none" 
                         data-splitout="none" 
                         data-elementdelay="0.1" 
                         data-endelementdelay="0.1" 
                         data-endspeed="300" 
                         data-captionhidden="on" 
                         style="color: #252839; text-transform: uppercase; font-weight:900; font-size: 130px;">
                        <img src="<?php echo base_url(); ?>assets/theme/images/cloud2.png" >
                             <!--<img src="<?php echo base_url(); ?>assets/images/logo732.png" style="height: 200px;"/>-->
                    </div>
                    <!-- Layer -->
                    <div class="tp-caption sfb tp-resizeme rs-parallaxlevel-4" 
                         data-x="center" data-hoffset="0" 
                         data-y="center" data-voffset="150"
                         data-speed="700" 
                         data-start="2000" 
                         data-easing="easeOutBack"
                         data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 
                         data-splitin="none" 
                         data-splitout="none" 
                         data-elementdelay="0.1" 
                         data-endelementdelay="0.1" 
                         data-endspeed="300" 
                         data-captionhidden="on"> <a href="<?php echo site_url('Product/ProductList/2/0') ?>" class="btn">Shop Now</a> &nbsp; &nbsp; &nbsp; &nbsp; <a href="<?php echo site_url('Shop/appointment') ?>" class="btn btn-1">Discover</a> </div>
                </li>


                <!-- Slider 1 -->
                <li data-transition="random" data-slotamount="7">
                    <img src="<?php echo base_url(); ?>assets/theme/images/slides/shop_b1.jpg" data-bgposition="center top" alt="" /> 

                    <!-- Layer -->
                    <div class="tp-caption sft font-montserrat tp-resizeme rs-parallaxlevel-4 oleofont" 
                         data-x="center" 
                         data-hoffset="-50" 
                         data-y="center" 
                         data-voffset="-290" 
                         data-speed="700" 
                         data-start="1000" 
                         data-easing="easeOutBack"
                         data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 
                         data-splitin="none" 
                         data-splitout="none" 
                         data-elementdelay="0.1" 
                         data-endelementdelay="0.1" 
                         data-endspeed="300" 
                         data-captionhidden="on"
                         style="color: #252839; font-size: 36px; font-weight:900; text-transform: uppercase;">
                        <img src="<?php echo base_url(); ?>assets/theme/images/slides/shop_b4.png" style="width:500px">
                    </div>

                    <!-- Layer -->
                    <div class="tp-caption customin font-playfair tp-resizeme rs-parallaxlevel-4" 
                         data-x="center" data-hoffset="0" 
                         data-y="center" data-voffset="150" 
                         data-speed="720" 
                         data-start="1200" 
                         data-easing="easeOutBack"
                         data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 
                         data-splitin="none" 
                         data-splitout="none" 
                         data-elementdelay="0.1" 
                         data-endelementdelay="0.1" 
                         data-endspeed="300" 
                         data-captionhidden="on" 
                         style="color: #252839; text-transform: uppercase; font-weight:900; font-size: 130px;">

                        <img src="<?php echo base_url(); ?>assets/images/logo732.png" style="height: 200px;"/>
                    </div>
                    <!-- Layer -->
                    <div class="tp-caption customin font-playfair tp-resizeme rs-parallaxlevel-5" 
                         data-x="center" data-hoffset="-200" 
                         data-y="center" data-voffset="50" 
                         data-speed="720" 
                         data-start="1200" 
                         data-easing="easeOutBack"
                         data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 
                         data-splitin="none" 
                         data-splitout="none" 
                         data-elementdelay="0.1" 
                         data-endelementdelay="0.1" 
                         data-endspeed="300" 
                         data-captionhidden="on" 
                         style="color: #252839; text-transform: uppercase; font-weight:900; font-size: 130px;">
                        <img src="<?php echo base_url(); ?>assets/theme/images/slides/shop_b3.png" >
                    </div>

                    <!-- Layer -->
                    <div class="tp-caption customin font-playfair tp-resizeme rs-parallaxlevel-7" 
                         data-x="center" data-hoffset="0" 
                         data-y="center" data-voffset="100" 
                         data-speed="720" 
                         data-start="1200" 
                         data-easing="easeOutBack"
                         data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 
                         data-splitin="none" 
                         data-splitout="none" 
                         data-elementdelay="0.1" 
                         data-endelementdelay="0.1" 
                         data-endspeed="300" 
                         data-captionhidden="on" 
                         style="color: #252839; text-transform: uppercase; font-weight:900; font-size: 130px;">
                        <img src="<?php echo base_url(); ?>assets/theme/images/slides/shop_b2.png" >
                    </div>


                    <!-- Layer -->
                    <div class="tp-caption sfb tp-resizeme rs-parallaxlevel-4" 
                         data-x="center" data-hoffset="0" 
                         data-y="center" data-voffset="150"
                         data-speed="700" 
                         data-start="2000" 
                         data-easing="easeOutBack"
                         data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 
                         data-splitin="none" 
                         data-splitout="none" 
                         data-elementdelay="0.1" 
                         data-endelementdelay="0.1" 
                         data-endspeed="300" 
                         data-captionhidden="on"> </div>
                </li>



                <!-- Slider 2 -->
                <li data-transition="random" data-slotamount="7"> 
                    <img src="<?php echo base_url(); ?>assets/theme/images/shop-slider-bg-22.jpg" data-bgposition="center center" alt="" />
                    <div class="overlay"></div>

                    <!-- Layer -->
                    <div class="tp-caption sft tp-resizeme font-montserrat rs-parallaxlevel-4" 
                         data-x="center" data-hoffset="0" 
                         data-y="center" data-voffset="0" 
                         data-speed="700" 
                         data-start="1700" 
                         data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 
                         data-easing="Back.easeOut" 
                         data-splitin="none" 
                         data-splitout="none" 
                         data-elementdelay="0.1" 
                         data-endelementdelay="0.1" 
                         data-endspeed="300" 
                         data-captionhidden="on"
                         style="color: #fff; font-size: 25px; text-transform: uppercase; font-weight: bold;  letter-spacing:3px;"> Worlds Best Italian Fabrics </div>

                    <!-- Layer -->
                    <div class="tp-caption sft tp-resizeme rs-parallaxlevel-4" 
                         data-x="center" data-hoffset="0" 
                         data-y="center" data-voffset="100" 
                         data-speed="700" 
                         data-start="2400"
                         data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 
                         data-easing="Back.easeOut" 
                         data-splitin="none" 
                         data-splitout="none" 
                         data-elementdelay="0.1" 
                         data-endelementdelay="0.1" 
                         data-endspeed="300" 
                         data-captionhidden="on"> 
                        <a href="<?php echo site_url('Product/ProductList/4/0') ?>" class="btn btn-1">CUSTOMIZE NOW</a> </div>
                </li>




                <!-- Slider 4 -->
                <li data-transition="random" data-slotamount="7"> 
                    <img src="<?php echo base_url(); ?>assets/theme/images/slides/slider5.jpg" >                    <!-- Layer -->
                    <div class="tp-caption font-montserrat customin tp-resizeme rs-parallaxlevel-4" 
                         data-x="center" 
                         data-hoffset="0" 
                         data-y="center" 
                         data-voffset="-100"
                         data-speed="700" 
                         data-start="1000" 
                         data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 
                         data-easing="Back.easeOut" 
                         data-splitin="none" 
                         data-splitout="none" 
                         data-elementdelay="0.1" 
                         data-endelementdelay="0.1" 
                         data-endspeed="300" 
                         data-captionhidden="on"
                         style="color: #fff; font-size: 60px; text-transform: uppercase; font-weight: 900; letter-spacing:3px;"> NEW ARRIVAL </div>

                    <!-- Layer -->
                    <div class="tp-caption sfb tp-resizeme  font-playfair text-center rs-parallaxlevel-4" 
                         data-x="center" 
                         data-hoffset="0" 
                         data-y="center" 
                         data-voffset="-20"
                         data-speed="700" 
                         data-start="1700" 
                         data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 
                         data-easing="Back.easeOut" 
                         data-splitin="none" 
                         data-splitout="none" 
                         data-elementdelay="0.1" 
                         data-endelementdelay="0.1" 
                         data-endspeed="300" 
                         data-captionhidden="on"
                         style="color: #fff; font-size: 18px; line-height:36px; font-weight: 500; letter-spacing:0px;">We Have Worlds Best Italian Fabrics.<br></div>

                    <!-- Layer -->
                    <div class="tp-caption sfb tp-resizeme rs-parallaxlevel-4" 
                         data-x="center" 
                         data-hoffset="0" 
                         data-y="center"
                         data-voffset="100"
                         data-speed="700" 
                         data-start="2400"
                         data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 
                         data-easing="Back.easeOut" 
                         data-splitin="none" 
                         data-splitout="none" 
                         data-elementdelay="0.1" 
                         data-endelementdelay="0.1" 
                         data-endspeed="300" 
                         data-captionhidden="on"
                         style="z-index: 10;"> <a href="<?php echo site_url("Shop/appointment"); ?>" class="btn">Book An Appointment</a> </div>
                </li>


                <!-- Slider 4 -->
                <li data-transition="random" data-slotamount="7"> 
                    <img src="<?php echo base_url(); ?>assets/theme/images/slides/slider6.jpg" >                    <!-- Layer -->
                    <div class="tp-caption font-montserrat customin tp-resizeme rs-parallaxlevel-4" 
                         data-x="center" 
                         data-hoffset="0" 
                         data-y="center" 
                         data-voffset="-100"
                         data-speed="700" 
                         data-start="1000" 
                         data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 
                         data-easing="Back.easeOut" 
                         data-splitin="none" 
                         data-splitout="none" 
                         data-elementdelay="0.1" 
                         data-endelementdelay="0.1" 
                         data-endspeed="300" 
                         data-captionhidden="on"
                         style="color: #fff; font-size: 60px; text-transform: uppercase; font-weight: 900; letter-spacing:3px;"> FEEL ROYAL LIFE STYLE </div>

                    <!-- Layer -->
                    <div class="tp-caption sfb tp-resizeme  font-playfair text-center rs-parallaxlevel-4" 
                         data-x="center" 
                         data-hoffset="0" 
                         data-y="center" 
                         data-voffset="-20"
                         data-speed="700" 
                         data-start="1700" 
                         data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 
                         data-easing="Back.easeOut" 
                         data-splitin="none" 
                         data-splitout="none" 
                         data-elementdelay="0.1" 
                         data-endelementdelay="0.1" 
                         data-endspeed="300" 
                         data-captionhidden="on"
                         style="color: #fff; font-size: 18px; line-height:36px; font-weight: 500; letter-spacing:0px;">We Have Worlds Best Italian Fabrics.<br></div>

                    <!-- Layer -->
                    <div class="tp-caption sfb tp-resizeme rs-parallaxlevel-4" 
                         data-x="center" 
                         data-hoffset="0" 
                         data-y="center"
                         data-voffset="100"
                         data-speed="700" 
                         data-start="2400"
                         data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 
                         data-easing="Back.easeOut" 
                         data-splitin="none" 
                         data-splitout="none" 
                         data-elementdelay="0.1" 
                         data-endelementdelay="0.1" 
                         data-endspeed="300" 
                         data-captionhidden="on"
                         style="z-index: 10;"> <a href="<?php echo site_url('Product/ProductList/2/0') ?>" class="btn">Shop Now</a> &nbsp; &nbsp; &nbsp; &nbsp; <a href="<?php echo site_url("Shop/appointment"); ?>" class="btn btn-1">Discover</a> </div>
                </li>

                <!-- Slider 3 -->
                <li data-transition="random" data-slotamount="7"> 
                    <img src="<?php echo base_url(); ?>assets/theme/images/slides/slider8.jpg" >                       <!-- Layer -->
                    <div class="tp-caption font-montserrat customin tp-resizeme rs-parallaxlevel-4" 
                         data-x="center" 
                         data-hoffset="0" 
                         data-y="center" 
                         data-voffset="-100"
                         data-speed="700" 
                         data-start="1000" 
                         data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 
                         data-easing="Back.easeOut" 
                         data-splitin="none" 
                         data-splitout="none" 
                         data-elementdelay="0.1" 
                         data-endelementdelay="0.1" 
                         data-endspeed="300" 
                         data-captionhidden="on"
                         style="color: #fff; font-size: 60px; text-transform: uppercase; font-weight: 900; letter-spacing:3px;">Our Look Book</div>

                    <!-- Layer -->
                    <div class="tp-caption sfb tp-resizeme  font-playfair text-center rs-parallaxlevel-4" 
                         data-x="center" 
                         data-hoffset="0" 
                         data-y="center" 
                         data-voffset="-20"
                         data-speed="700" 
                         data-start="1700" 
                         data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 
                         data-easing="Back.easeOut" 
                         data-splitin="none" 
                         data-splitout="none" 
                         data-elementdelay="0.1" 
                         data-endelementdelay="0.1" 
                         data-endspeed="300" 
                         data-captionhidden="on"
                         style="color: #fff; font-size: 18px; line-height:36px; font-weight: 500; letter-spacing:0px;"> Choose the perfect style for your jacket and pants.<br></div>

                    <!-- Layer -->
                    <div class="tp-caption sfb tp-resizeme rs-parallaxlevel-4" 
                         data-x="center" 
                         data-hoffset="0" 
                         data-y="center"
                         data-voffset="100"
                         data-speed="700" 
                         data-start="2400"
                         data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 
                         data-easing="Back.easeOut" 
                         data-splitin="none" 
                         data-splitout="none" 
                         data-elementdelay="0.1" 
                         data-endelementdelay="0.1" 
                         data-endspeed="300" 
                         data-captionhidden="on"
                         style="z-index: 10;"> <a href="<?php echo site_url("Shop/lookbook"); ?>" class="btn">Look Book</a>  </div>
                </li>


                <!-- Slider 4 -->
                <li data-transition="random" data-slotamount="7"> 
                    <img src="<?php echo base_url(); ?>assets/theme/images/slides/slider9.jpg" >                    <!-- Layer -->
                    <div class="tp-caption font-montserrat customin tp-resizeme rs-parallaxlevel-4" 
                         data-x="center" 
                         data-hoffset="0" 
                         data-y="center" 
                         data-voffset="-100"
                         data-speed="700" 
                         data-start="1000" 
                         data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 
                         data-easing="Back.easeOut" 
                         data-splitin="none" 
                         data-splitout="none" 
                         data-elementdelay="0.1" 
                         data-endelementdelay="0.1" 
                         data-endspeed="300" 
                         data-captionhidden="on"
                         style="color: #fff; font-size: 60px; text-transform: uppercase; font-weight: 900; letter-spacing:3px;"> FEEL ROYAL LIFE STYLE </div>

                    <!-- Layer -->
                    <div class="tp-caption sfb tp-resizeme  font-playfair text-center rs-parallaxlevel-4" 
                         data-x="center" 
                         data-hoffset="0" 
                         data-y="center" 
                         data-voffset="-20"
                         data-speed="700" 
                         data-start="1700" 
                         data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 
                         data-easing="Back.easeOut" 
                         data-splitin="none" 
                         data-splitout="none" 
                         data-elementdelay="0.1" 
                         data-endelementdelay="0.1" 
                         data-endspeed="300" 
                         data-captionhidden="on"
                         style="color: #fff; font-size: 18px; line-height:36px; font-weight: 500; letter-spacing:0px;">We Have Worlds Best Italian Fabrics.<br></div>

                    <!-- Layer -->
                    <div class="tp-caption sfb tp-resizeme rs-parallaxlevel-4" 
                         data-x="center" 
                         data-hoffset="0" 
                         data-y="center"
                         data-voffset="100"
                         data-speed="700" 
                         data-start="2400"
                         data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 
                         data-easing="Back.easeOut" 
                         data-splitin="none" 
                         data-splitout="none" 
                         data-elementdelay="0.1" 
                         data-endelementdelay="0.1" 
                         data-endspeed="300" 
                         data-captionhidden="on"
                         style="z-index: 10;"> <a href="<?php echo site_url('Product/ProductList/2/0') ?>" class="btn">Shop Now</a> </div>
                </li>


                <!-- Slider 3 -->
                <li data-transition="random" data-slotamount="7"> 
                    <img src="<?php echo base_url(); ?>assets/theme/images/shop-slider-bg-11.jpg" >                       <!-- Layer -->
                    <div class="tp-caption font-montserrat customin tp-resizeme rs-parallaxlevel-4" 
                         data-x="center" 
                         data-hoffset="0" 
                         data-y="center" 
                         data-voffset="-100"
                         data-speed="700" 
                         data-start="1000" 
                         data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 
                         data-easing="Back.easeOut" 
                         data-splitin="none" 
                         data-splitout="none" 
                         data-elementdelay="0.1" 
                         data-endelementdelay="0.1" 
                         data-endspeed="300" 
                         data-captionhidden="on"
                         style="color: #fff; font-size: 60px; text-transform: uppercase; font-weight: 900; letter-spacing:3px;"> Our Style Blog </div>

                    <!-- Layer -->
                    <div class="tp-caption sfb tp-resizeme  font-playfair text-center rs-parallaxlevel-4" 
                         data-x="center" 
                         data-hoffset="0" 
                         data-y="center" 
                         data-voffset="-20"
                         data-speed="700" 
                         data-start="1700" 
                         data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 
                         data-easing="Back.easeOut" 
                         data-splitin="none" 
                         data-splitout="none" 
                         data-elementdelay="0.1" 
                         data-endelementdelay="0.1" 
                         data-endspeed="300" 
                         data-captionhidden="on"
                         style="color: #fff; font-size: 18px; line-height:36px; font-weight: 500; letter-spacing:0px;">Get the latest fashion and style trends.<br></div>

                    <!-- Layer -->
                    <div class="tp-caption sfb tp-resizeme rs-parallaxlevel-4" 
                         data-x="center" 
                         data-hoffset="0" 
                         data-y="center"
                         data-voffset="100"
                         data-speed="700" 
                         data-start="2400"
                         data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 
                         data-easing="Back.easeOut" 
                         data-splitin="none" 
                         data-splitout="none" 
                         data-elementdelay="0.1" 
                         data-endelementdelay="0.1" 
                         data-endspeed="300" 
                         data-captionhidden="on"
                         style="z-index: 10;"> <a href="<?php echo site_url("Shop/stylingTips"); ?>" class="btn">Explore Now</a> </div>
                </li>



            </ul>
        </div>
    </div>
</section>

<div style="clear: both"></div>




<!-- About US -->
<section class="light-gray-bg pad-t-b-30" style="background: url(<?php echo base_url(); ?>assets/images/spacial/middle3.jpg)">



    <div class="container">
        <center>

            <img src="<?php echo base_url(); ?>assets/images/spacial/middle.png" class="spacial_text">      
        </center>


    </div> 

    <div class="goldline2 " style="margin-bottom: 30px;"></div>




    <div class="container"> 

        <!-- Heading -->
        <div class="heading-block margin-bottom-10">
            <h3>Best Sellers</h3>
            <hr>
        </div>
        <div class="intro-small col-md-8 center-auto margin-bottom-10">
            <p>

                Different suits and shirts style and cutting. 
            </p>
        </div>

        <!-- Images Sec -->
        <div class="img-sec margin-bottom-30">
            <div class="shop-content">
                <div id="new-arrival-slide"> 
                    <?php
                    $testdev = 1;
                    foreach ($product_home_slider_bottom['home_bottom'] as $key => $value) {
                        if ($testdev == 1) {
                            ?>
                            <!-- Item -->
                            <div class="item">
                                <article class="shop-artical"> 
                                    <div class="imagblock">
                                        <img class="img-responsive" src="http://bespoketailorsadmin.costcointernational.com/assets_main/productimages/<?php echo $value['file_name']; ?>" alt="" >
                                    </div>
                                    <div class="item-hover"> <a href="#." class="btn">add to cart</a>  </div>
                                </article>
                                <div class="info"> <a href="#.">Winkle Free Cotton </a> <span class="price">US$ 1010.00</span> </div>
                            </div>
                            <?php
                        }
                    }
                    ?>

                </div>
            </div>
        </div>
    </div>
</section>

<div class="goldline2 " style="margin-bottom: 30px;"></div>
<div style="clear: both"></div>
<!-- Content -->
<div id="content" class="home-shop"> 

    <!-- About Sec -->
    <section class="acces-ser margin-top-30 " >
        <div class="container"> 

            <!-- Heading -->
            <div class="heading-block margin-bottom-30">
                <h3>We Are Tailoring Artist</h3>
                <hr>
            </div>
            <div class="intro-small1 col-md-8 center-auto">
                <p> The Prestigious, Bespoke tailoring in Hong Kong</p>
            </div>
            <div class="row"> 


                <!-- Bags -->
                <div class="col-sm-4">
                    <article> 
                        <p>
                        <h3> LUXURY FABRICS </h3>
                        Browse our range of premium Italian fabrics
                        </p>
                        <div class="goldline "></div>

                        <img class="img-responsive" src="<?php echo base_url(); ?>assets/theme/images/fabrics.jpg" alt="" >
                        <div class="position-center-center">
                            <h6></h6>
                        </div>
                        <a href="<?php echo site_url('Product/ProductList/2/0') ?>" class="btn by">Shop NOW</a> 
                    </article>
                </div>

                <div class="col-sm-4">
                    <article> 
                        <p>
                        <h3> IMPECCABLE FIT </h3>
                        Find the perfect fit off-the-rack
                        </p>
                        <div class="goldline "></div>
                        <img class="img-responsive" src="<?php echo base_url(); ?>assets/theme/images/shirts.jpg" alt="" >
                        <div class="position-center-center">
                            <h6></h6>
                        </div>
                        <a href="<?php echo site_url('Product/ProductList/1/0') ?>" class="btn by">Shop NOW</a> 
                    </article>
                </div>


                <div class="col-sm-4">
                    <article> 
                        <p>
                        <h3>PERFECT STYLE </h3>
                        Find the perfect fit off-the-rack
                        </p>
                        <div class="goldline "></div>
                        <img class="img-responsive" src="<?php echo base_url(); ?>assets/theme/images/perfectsuit.jpg" alt="" >
                        <div class="position-center-center">
                            <h6></h6>
                        </div>
                        <a href="<?php echo site_url('Product/ProductList/2/0') ?>" class="btn by">Shop NOW</a> 
                    </article>
                </div>






            </div>
        </div>
    </section>


    <div class="intro-small1 col-md-8 center-auto">
        <div class="goldline3 " ></div>
    </div>

    <div style="clear: both"></div>
    <!-- About US -->


    <section class="lookin-pro">
        <div class="container"> 

            <!-- Heading -->
            <div class="heading-block white margin-bottom-20">
                <h4>- We are Professionals - </h4>
                <h5 style="font-size: 35px;color:white;">We are tailoring artists</h5>

            </div>
            <div class="intro-small col-md-11 center-auto margin-bottom-0">
                <p>
                    We always listen to the expressed and unexpressed wish of our guests. We have over 6000 fabric choices to attire different style and need. We tailor-made every lining color and detail for each unique and personalized character.
                </p>
            </div>
            <div class="text-center"> <a href="<?php echo site_url("Shop/appointment"); ?>" class="btn">Book An Appointment</a> </div>
        </div>
    </section>

    <div style="clear: both"></div>



    <div class="goldline3 " ></div>
    <div style="clear: both"></div>
    <!-- OUR SERVICES -->
    <section class="client-sec" style="    padding: 0;margin-top: 30px;
             background: none;">
        <div class="container margin-bottom-00"> 

            <!-- Heading -->
            <div class="heading-block " style="    margin-bottom: 10px;">
                <h3>our Best Brands</h3>
                <hr>
            </div>
            <div class="intro-small col-md-9 center-auto margin-bottom-0">
                <p>
                    We will offer you with world-famous brands and 6000 kinds of different fabrics.                </p>
            </div>
            <ul class="nolist-style">
                <li style="padding: 25px;"><img src="<?php echo base_url(); ?>assets/brand/1.jpg"  alt="" ><div class="goldline " style="margin-bottom: 30px;"></div></li>
                <li style="padding: 25px;"><img src="<?php echo base_url(); ?>assets/brand/2.jpg"  alt="" ><div class="goldline " style="margin-bottom: 30px;"></div></li>
                <li style="padding: 25px;"><img src="<?php echo base_url(); ?>assets/brand/3.jpg"  alt="" ><div class="goldline " style="margin-bottom: 30px;"></div></li>
                <li style="padding: 25px;"><img src="<?php echo base_url(); ?>assets/brand/4.jpg"  alt="" ><div class="goldline " style="margin-bottom: 30px;"></div></li>
                <li style="padding: 25px;"><img src="<?php echo base_url(); ?>assets/brand/5.jpg"  alt="" ><div class="goldline " style="margin-bottom: 30px;"></div></li>
            </ul>

            <div class="goldline2 " style="margin-bottom: 30px;"></div>
            <div style="clear: both"></div>
        </div>


    </section>


    <!-- Testimonial -->
    <section class="testimonial white-bg light-gry" data-stellar-background-ratio="0.5" style="padding: 30px 0px">
        <div class="container"> 

            <!-- Heading -->
            <div class="heading-block">
                <h3>What Our Customers Say</h3>
                <hr>
            </div>

            <!-- Slider -->
            <div class="slider-sec">
                <div id="testi-slide"> 
                    <?php foreach ($content_testimonial as $key => $value) {
                        ?>
                        <!-- Slide -->
                        <div class="item">
                            <div class="tesi-text">
                                <div class="avatar"> <img src="<?php echo base_url(); ?>assets/theme/images/comments-avatar-2.jpg" alt="" > </div>
                                <p><?php echo $value["review"]; ?></p>
                                <h6>-  <?php echo $value["name"]; ?> -</h6>
                                <span><?php
                                    echo $value["source"];
                                    ?></span> </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>


</div>
<!-- End Content --> 

<?php
$this->load->view('layout/footer');
?>