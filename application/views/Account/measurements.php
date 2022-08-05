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
            <h4>My Measurements</h4>

            <!-- Breadcrumb -->
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Profile</li>
            </ol>
        </div>
    </div>
</section>



<!-- Content -->
<div ng-controller="PreMeasurementCheck">
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

                            <table class="table">
                                <tr>
                                    <th>
                                        Profile ID
                                    </th>

                                    <th>
                                        Recent Used
                                    </th>
                                    <th>
                                        Created On
                                    </th>
                                    <th></th>
                                </tr>
                                <tr ng-repeat="(meskey, mesval) in customizationDict.premeasurements">
                                    <th>
                                        <h3 style="font-size: 20px">{{mesval.name}}</h3><br/>
                                        <button type="button" ng-click="viewMeasurementOnly(mesval.name, mesval.measurements)" class="btn btn-default  btn-small-xs"  >View</button>

                                        <button type="button" ng-click="setAsFavorite(mesval.meausrement_data.id, mesval.meausrement_data.status)" class="btn btn-default btn-small-xs"  title ="Favorite Profile"><i class="text-danger fa {{mesval.meausrement_data.status=='f'?'fa-heart':'fa-heart-o'}}"></i></button>

                                    </th>
                                    <td>
                                        {{mesval.order_no}}

                                    </td>


                                    <td>{{mesval.meausrement_data.datetime}}</td>
                                    <td>                                
                                        <a href="<?php echo ADMINURL . "index.php/Order/selectPreviouseMeasurementProfilesReport/"; ?>/{{mesval.meausrement_data.id}}/1" class="btn btn-default btn-small-sm greencolorbg"  title ="Dowload Profile"><i class="fa fa-download"></i></a>
                                        &nbsp;
                                        <button type="button" ng-click="askForEmail(mesval.meausrement_data.id)" class="btn btn-default btn-small-sm"  title ="Email Profile"><i class="fa fa-envelope"></i></button>
                                        &nbsp;
                                        <!--<button type="button" ng-click="addToCartCustomeFromPre(style.cart_data.id, false, true)" class="btn btn-warning"  title ="Update Profile"><i class="fa fa-edit"></i></button>-->
                                        <!--&nbsp;-->
                                        <a href="<?php echo site_url("Account/editMeasurement"); ?>/{{mesval.meausrement_data.id}}" class="btn btn-default btn-small-sm yellocolorbg"  title ="Edit Profile"><i class="fa fa-edit"></i></a>
                                        &nbsp;
                                        <button type="button" ng-click="askForDelete(mesval.meausrement_data.id)" class="btn btn-danger btn-small-sm"  title ="Delte Profile"><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>

                            </table>
                        </div>



                    </div>
                </div>
        </section>
    </div>
</div>
<!-- End Content --> 




<script>
    var user_id = <?php echo $user_id; ?>;
    var product_id = <?php echo $product_id; ?>;
    var item_id = <?php echo $item_id; ?>;
    var itemarrays = "";
    ;
</script>
<script src="<?php echo base_url(); ?>assets/theme/angular/preMeasurementCheckController.js"></script>
<?php
$this->load->view('layout/footer');
?>

<script>
    $(function () {
        $(".woocommerce-MyAccount-navigation-link--dashboard").removeClass("active");
        $(".orderlist_page").addClass("active");
    })
</script>