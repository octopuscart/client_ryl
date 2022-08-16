<?php
$this->load->view('layout/header');
?>
<!-- Slider -->
<section class="sub-bnr" data-stellar-background-ratio="0.5">
    <div class="position-center-center">
        <div class="container">
            <h4>Coupon Offers</h4>

            <!-- Breadcrumb -->
            <ol class="breadcrumb">
                <li><a href="<?php echo site_url("/"); ?>">Home</a></li>
                <li><a href="<?php echo site_url("Shop/offers"); ?>">Coupon Offers</a></li>
            </ol>
        </div>
    </div>
</section>



<!-- end page header -->
<!-- start main container -->
<div class="content main-container" id="site-content">
    <div class="padding-tb-100">
        <div class="container">
            <div class="row text-center">
                <?php
                foreach ($coupons as $key => $value) {
                    ?>
                    <div class="col-md-12">

                        <h2 ><?php echo $value["code"]; ?><input style="display: none"  id="coupon<?php echo $value["id"]; ?>" value="<?php echo $value["code"]; ?>" /> <button class="btn btn-small-xs btn-default" onclick="copyCode('coupon<?php echo $value["id"]; ?>')">Copy now</button></h2>
                        <p style="font-size: 20px;"><?php echo $value["promotion_message"]; ?></p>
                         <p style="font-size: 20px;">Valid Till:    <?php echo $value["valid_till"]; ?></p>
                        
                        <hr/>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>

    </div>
</div>

</div>
<!-- end main container -->

<script>
    function copyCode(codeid) {
        /* Get the text field */
        var copyText = document.getElementById(codeid);

        /* Select the text field */
        copyText.select();
        copyText.setSelectionRange(0, 99999); /* For mobile devices */

        /* Copy the text inside the text field */
        navigator.clipboard.writeText(copyText.value);

        /* Alert the copied text */
        alert("Copied the text: " + copyText.value);
    }
</script>
<?php
$this->load->view('layout/footer');
?>