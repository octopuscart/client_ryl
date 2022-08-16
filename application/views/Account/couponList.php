<?php
$this->load->view('layout/header');
?>


<style>
    .order_box{
        padding: 10px;
        padding-bottom: 11px!important;
        height: 110px;
    }
    .order_box li{
        line-height: 19px!important;
        padding: 7px!important;
        border: none!important;
    }

    .order_box li i{
        float: left!important;
        line-height: 19px!important;
        margin-right: 13px!important;
    }

    .blog-posts article {
        margin-bottom: 10px;
    }
</style>


<section class="sub-bnr" data-stellar-background-ratio="0.5" style="margin-bottom: 10px;">
    <div class="position-center-center">
        <div class="container">
            <h4>Discount Coupons</h4>

            <!-- Breadcrumb -->
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Profile</li>
            </ol>
        </div>
    </div>
</section>



<!-- Content -->
<div id="content" class="my-account-page-area"> 

    <!-- Blog -->
    <section class="new-main blog-posts ">
        <div class="container"> 

            <!-- News Post -->
            <div class="news-post">
                <div class="row"> 

                    <?php
                    $this->load->view('Account/sidebar');
                    ?>


                    <div class="col-md-9 mb-5" style=''>
                        <?php
                        foreach ($orderslist as $key => $value) {
                            ?>
                            <div class="row  " > 


                                <article class="row" style="padding: 10px">
                                    <div class="col-md-12">
                                        <h6>
                                            Order No. #<?php echo $value->order_no; ?>
                                            <br/>
                                            Coupon Code: <?php echo $value->coupon_code; ?>
                                        </h6>
                                    </div>
                                    <div class="col-md-4">
                                         Discount: {{<?php echo $value->discount; ?>}}<br/>
                                        Total Amount: {{<?php echo $value->total_price; ?>|currency:"<?php echo globle_currency; ?> "}}
                                        
                                    </div>
                                    <div class="col-md-4">
                                        Status: <?php echo $value->status; ?><br/>
                                        <span style="margin: 0px">
                                            <i class="fa fa-calendar"></i> <?php echo $value->order_date; ?>  <?php echo $value->order_time; ?>
                                        </span>
                                    </div>
                                    <div class="col-md-4 text-center">
                                        <a href="<?php echo site_url('order/orderdetails/' . $value->order_key); ?>" class="btn btn-warning" style="margin: 0px;    ;">View Order</a>

                                    </div>
                                </article>

                            </div>
                            <?php
                        }
                        ?>
                    </div>



                </div>
                </section>
            </div>
            <!-- End Content --> 



            <?php
            $this->load->view('layout/footer');
            ?>

            <script>
                $(function () {
                    $(".woocommerce-MyAccount-navigation-link--dashboard").removeClass("active");
                    $(".orderlist_page").addClass("active");
                })
            </script>