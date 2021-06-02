<?php require('top.php') ?>
<div class="body__overlay"></div>

<!-- Start Slider Area -->
<div class="slider__container slider--one bg__cat--3">
    <div class="slide__container slider__activation__wrap owl-carousel">
        <!-- Start Single Slide -->
        <div class="single__slide animation__style01 slider__fixed--height">
            <div class="container">
                <div class="row align-items__center">
                    <div class="col-md-7 col-sm-7 col-xs-12 col-lg-6">
                        <div class="slide">
                            <div class="slider__inner">
                                <h2>Gold,Silver & Diamond</h2>
                                <h1>NICE JEWELLERY</h1>
                                <div class="cr__btn">
                                    <a href="cart.html">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-5 col-xs-12 col-md-5">
                        <div class="slide__thumb">
                            <img src="images/slider/fornt-img/1.png" alt="slider images">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Single Slide -->
        <!-- Start Single Slide -->
        <div class="single__slide animation__style01 slider__fixed--height">
            <div class="container">
                <div class="row align-items__center">
                    <div class="col-md-7 col-sm-7 col-xs-12 col-lg-6">
                        <div class="slide">
                            <div class="slider__inner">
                                <h2>collection 2021</h2>
                                <h1>NICE Design</h1>
                                <div class="cr__btn">
                                    <a href="cart.html">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-5 col-xs-12 col-md-5">
                        <div class="slide__thumb">
                            <img src="images/slider/fornt-img/2.png" alt="slider images">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Single Slide -->
    </div>
</div>
<!-- Start Slider Area -->
<!-- Start Product Area -->
<section class="ftr__product__area ptb--100">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="section__title--2 text-center">
                    <h2 class="title__line">Best Seller</h2>
                    <p>But I must explain to you how all this mistaken idea</p>
                </div>
            </div>
        </div>
        <div class="row" style="overflow: hidden;">
            <div class="product__wrap clearfix">
                <!-- Start Single Category -->
                <?php
                $get_product = get_product($con, 10);
                foreach ($get_product as $list) {
                ?>
                    <!-- Start Single Category -->
                    <div class="col-md-4 col-lg-3 col-sm-4 col-xs-12">
                        <div class="category">
                            <div class="ht__cat__thumb">
                                <a href="product.php?id=<?php echo $list['id'] ?>">
                                    <!--   <img src="<?php echo PRODUCT_IMAGE_SITE_PATH . $list['image'] ?>" alt="product images"> -->
                                    <img src="images/product/12.jpg" alt="product images">
                                </a>
                            </div>
                            <div class="fr__hover__info">
                                <ul class="product__action">
                                    <li><a href="javascript:void(0)" onclick="wishlist_manage('<?php echo $list['id'] ?>','add')"><i class="icon-heart icons"></i></a></li>
                                    <li><a href="javascript:void(0)" onclick="manage_cart('<?php echo $list['id'] ?>','add')"><i class="icon-handbag icons"></i></a></li>
                                    <li><a href="https://api.whatsapp.com/send?text=Hi%20,I%20Need%20Service&phone=+91855445454545"><i class="icon-phone icons"></i></a></li>
                                </ul>
                            </div>
                            <div class="fr__product__inner">
                                <h4><a href="product.php?id=<?php echo $list['id'] ?>"><?php echo $list['name'] ?></a></h4>
                                <ul class="fr__pro__prize">
                                    <li class="old__prize"><?php echo $list['mrp'] ?></li>
                                    <li class="new_prize"><?php echo $list['price'] ?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Category -->
                <?php } ?>
                <!-- End Single Category -->

            </div>
        </div>
    </div>
</section>
<!-- End Product Area -->




<!-- Start Product Area -->
<section class="ftr__product__area ptb--100">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="section__title--2 text-center">
                    <h2 class="title__line">Best Seller</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="product__list clearfix mt--30">
                <?php
                $get_product = get_product($con, 4, '', '', '', '', 'yes');
                foreach ($get_product as $list) {
                ?>
                    <!-- Start Single Category -->
                    <div class="col-md-4 col-lg-3 col-sm-4 col-xs-12">
                        <div class="category">
                            <div class="ht__cat__thumb">
                                <a href="product.php?id=<?php echo $list['id'] ?>">
                                    <img src="<?php echo PRODUCT_IMAGE_SITE_PATH . $list['image'] ?>" alt="product images">
                                </a>
                            </div>
                            <div class="fr__hover__info">
                                <ul class="product__action">
                                    <li><a href="javascript:void(0)" onclick="wishlist_manage('<?php echo $list['id'] ?>','add')"><i class="icon-heart icons"></i></a></li>
                                    <li><a href="javascript:void(0)" onclick="manage_cart('<?php echo $list['id'] ?>','add')"><i class="icon-handbag icons"></i></a></li>
                                </ul>
                            </div>
                            <div class="fr__product__inner">
                                <h4><a href="product.php?id=<?php echo $list['id'] ?>"><?php echo $list['name'] ?></a></h4>
                                <ul class="fr__pro__prize">
                                    <li class="old__prize"><?php echo $list['mrp'] ?></li>
                                    <li><?php echo $list['price'] ?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Category -->
                <?php } ?>
            </div>
        </div>
    </div>
</section>
<!-- End Product Area -->

<!--------------------start----------------------->

<!-- group product start -->
<section class="section-padding ptb--100">
    <div class="container-fluid">
        <div class="row" style="position: relative;">
            <div class="col-md-9"> <img class="img-fluid imagetext-right" alt="Responsive image" src="images/home/side1.webp"></div>
            <div class="image-over-textbox" style=" background-color: #ffffff; padding: 2rem;">
                <h1 class="pb-3">sanjeev kumar sahoo</h1>
                <p>collaboration with celebrity stylists Rob Zangardi and Mariel Haenn, we bring you a collection of fine jewelry that adds inspiration to each day with pieces of significance and purpose.Shop now</p>
            </div>
        </div>
    </div>
</section>
<!-- group product end -->

<!-- group product start -->
<section class="section-padding ptb--100">
    <div class="container-fluid">
        <div class="row" style="position: relative;">
            <div class="col-md-12"> <img class="img-fluid imagetext-right" alt="Responsive image" src="images/home/s2.jpg"></div>
            <div class="image-over-text-right">
                <h1 class="pb-3">sanjeev kumar sahoo</h1>
                <p>collaboration with celebrity stylists Rob Zangardi and Mariel Haenn, we bring you a collection of fine jewelry that adds inspiration to each day with pieces of significance and purpose.Shop now</p>
            </div>
        </div>
    </div>
</section>
<!-- group product end -->

<!-- group product start -->
<section class="section-padding ptb--100">
    <div class="container-fluid">
        <div class="row" style="position: relative;">
            <div class="col-md-12"><img class="img-fluid imagetext-right" alt="Responsive image" src="images/home/s3.webp"></div>
            <div class="image-over-text-left">
                <h1 class="pb-3">sanjeev kumar sahoo</h1>
                <p>collaboration with celebrity stylists Rob Zangardi and Mariel Haenn, we bring you a collection of fine jewelry that adds inspiration to each day with pieces of significance and purpose.Shop now</p>
            </div>
        </div>
    </div>
</section>
<!-- group product end -->


<!-- group product start -->
<section class="section-padding ptb--100">
    <div class="container-fluid">
        <div class="row" style="position: relative;">
            <img class="img-fluid imagetext-right" alt="Responsive image" src="images/home/s4.jpg">
            <div class="image-over-text-right text-light">
                <h1 class="pb-3 text-light">sanjeev kumar sahoo</h1>
                <p>collaboration with celebrity stylists Rob Zangardi and Mariel Haenn, we bring you a collection of fine jewelry that adds inspiration to each day with pieces of significance and purpose.Shop now</p>
            </div>
        </div>
    </div>
</section>

<section class="section-padding ptb--100">
    <div class="container">
        <div class="row  justify-content-center">
            <center>
                <h1 class="m-1">Up close and personal</h1>
                <p>Meet our sustainable engagement rings & VRAI created diamonds in real life.</p>
                <a href="#" class="btn btn-hero" tabindex="0">Book an appointment</a>
            </center>
        </div>
    </div>
</section>

<section class="section-padding ptb--100">
    <div class="container-fluid">
        <div class="row" style="position: relative;">
            <div class="col-md-9"> <img class="img-fluid imagetext-right" alt="Responsive image" src="images/home/s5.jpg"></div>
            <div class="image-over-textbox" style=" background-color: #ffffff; padding: 2rem;">
                <h1 class="pb-3">sanjeev kumar sahoo</h1>
                <p>collaboration with celebrity stylists Rob Zangardi and Mariel Haenn, we bring you a collection of fine jewelry that adds inspiration to each day with pieces of significance and purpose.Shop now</p>
            </div>
        </div>
    </div>
</section>
<!---------------------end----------------------->

<input type="hidden" id="qty" value="1" />
<?php require('footer.php') ?>