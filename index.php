<?php
include 'header.php';
?>

<body>
<?php
include 'navbar.php';
?>

    <!--================Home Banner Area sec ===================-->

    <!--================End Home Banner Area =================-->

    <div id="carouselExampleIndicators" class="carousel slide carousel_area" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active mb-5">
                <img class="d-block w-100" src="img/banner/banner_image.jpg" height="560" alt="First slide">

            </div>
            <div class="carousel-item mb-5">
                <img class="d-block w-100" src="img/banner/banner_image.jpg" height="560" alt="Second slide">

            </div>
            <div class="carousel-item mb-5">
                <img class="d-block w-100" src="img/banner/banner_image.jpg" height="560" alt="Third slide">

            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- Category ----->
    <div class="container-fluid">
        <h3 class="category"><span>CATEGORIES</span></h3><br>
        <div class="row">
            <div class="product-item d-flex">
                <div class="col-sm-6 col-md-6">
                    <div class="row">
                        <div class="col">
                            <div class="single-product">
                                <a href="#">
                                    <div class="card zoom">
                                        <figure><img class="img-fluid w-100 img-thumbnail"
                                                src="img/accessories/image1.jpg" alt="" />
                                        </figure>
                                        <div class="text-center pb-3 text-dark"><strong>ACCESSORIES</strong></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="single-product">
                                <a href="#">
                                    <div class="card zoom">
                                        <figure><img class="img-fluid w-100 img-thumbnail" src="img/footwear/image1.jpg"
                                                alt="" />
                                        </figure>

                                        <div class="text-center pb-3 text-dark"><strong>FOOTWEAR</strong></div>

                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6">
                    <div class="row">
                        <div class="col">
                            <div class="single-product">
                                <a href="#">
                                    <div class="card zoom">
                                        <figure><img class="img-fluid w-100 img-thumbnail"
                                                src="img/electronic/image1.jpg" alt="" />
                                        </figure>

                                        <div class="text-center pb-3 text-dark"><strong>ELECTRONICS</strong></div>

                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="single-product">
                                <a href="#">
                                    <div class="card zoom">
                                        <figure><img class="img-fluid w-100 img-thumbnail"
                                                src="img/baby_product/image1.jpg" alt="" />
                                        </figure>

                                        <div class="text-center pb-3 text-dark"><strong>BABY PRODUCTS</strong></div>

                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- </div> -->

    <!-- End Category -->

    <!--================ Feature Product Area =================-->
    <section class="feature_product_area">
        <div class="container">

            <?php
            include 'multiple_carousel.php';
            ?>

        </div>
    </section>
    <!--================ End Feature Product Area =================-->

    <!--================ New Product Area ====================-->

    <section class="new_product_area mt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="container">
                        <h3 class="category text-uppercase"><span>new products</span></h3>
                        <p class="text-center">You cannot inspect quality into the product, it is already there.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="new_product">
                        <h5 class="text-uppercase">collection of 2023</h5>
                        <h3 class="text-uppercase">Men’s summer t-shirt</h3>
                        <div class="product-img">
                            <img class="img-fluid" src="img/product/new-product/new-product1.png" alt="image5" />
                        </div>
                        <h4>&#8377;120.70</h4>
                        <a href="#" class="main_btn">Add to cart</a>
                    </div>
                </div>
                <div class="col-sm-6 mt-5 mt-lg-0">
                    <div class="row">
                        <div class="col">
                            <div class="single-product card">
                                <div class="product-img product_img">
                                    <a href="#"><img class="img-fluid w-100" src="img/product/inspired-product/i1.jpg"
                                            alt="image1" /></a>
                                    <div class="p_icon w-100 p-2 product_icon">
                                        <a href="#">
                                            <i class="ti-eye"></i>
                                        </a>
                                        <a href="#">
                                            <i class="ti-heart"></i>
                                        </a>
                                        <a href="#">
                                            <i class="ti-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-btm product_btm">
                                    <a href="#" class="d-block">
                                        <h4>Latest men’s sneaker</h4>
                                    </a>
                                    <div class="mt-3">
                                        <span class="mr-4">&#8377;25.00</span>
                                        <del>&#8377;35.00</del>
                                    </div>
                                </div>
                                <div class="add-to-cart">
                                    <a href="#" class="main_btn w-100">Add to cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="single-product card">
                                <div class="product-img product_img">
                                    <a href="#"><img class="img-fluid w-100" src="img/product/inspired-product/i2.jpg"
                                            alt="image2" /></a>
                                    <div class="p_icon w-100 p-2 product_icon">
                                        <a href="#">
                                            <i class="ti-eye"></i>
                                        </a>
                                        <a href="#">
                                            <i class="ti-heart"></i>
                                        </a>
                                        <a href="#">
                                            <i class="ti-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-btm product_btm">
                                    <a href="#" class="d-block">
                                        <h4>Latest men’s sneaker</h4>
                                    </a>
                                    <div class="mt-3">
                                        <span class="mr-4">&#8377;25.00</span>
                                        <del>&#8377;35.00</del>
                                    </div>
                                </div>
                                <div class="add-to-cart">
                                    <a href="#" class="main_btn w-100">Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="single-product card" style="margin-top:-20%;">
                                <div class="product-img product_img">
                                    <a href="#"><img class="img-fluid w-100" src="img/product/inspired-product/i3.jpg"
                                            alt="image3" /></a>
                                    <div class="p_icon w-100 p-2 product_icon">
                                        <a href="#">
                                            <i class="ti-eye"></i>
                                        </a>
                                        <a href="#">
                                            <i class="ti-heart"></i>
                                        </a>
                                        <a href="#">
                                            <i class="ti-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-btm product_btm">
                                    <a href="#" class="d-block">
                                        <h4>Latest men’s sneaker</h4>
                                    </a>
                                    <div class="mt-3">
                                        <span class="mr-4">&#8377;25.00</span>
                                        <del>&#8377;35.00</del>
                                    </div>

                                </div>
                                <div class="add-to-cart">
                                    <a href="#" class="main_btn w-100">Add to cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="single-product card" style="margin-top:-20%;">
                                <div class="product-img product_img">
                                    <a href="#"><img class="img-fluid w-100" src="img/product/inspired-product/i4.jpg"
                                            alt="image4" /></a>
                                    <div class="p_icon w-100 p-2 product_icon">
                                        <a href="#">
                                            <i class="ti-eye"></i>
                                        </a>
                                        <a href="#">
                                            <i class="ti-heart"></i>
                                        </a>
                                        <a href="#">
                                            <i class="ti-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-btm product_btm">
                                    <a href="#" class="d-block">
                                        <h4>Latest men’s sneaker</h4>
                                    </a>
                                    <div class="mt-3">
                                        <span class="mr-4">&#8377;25.00</span>
                                        <del>&#8377;35.00</del>
                                    </div>

                                </div>
                                <div class="add-to-cart">
                                    <a href="#" class="main_btn w-100">Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End New Product Area =================-->

    <!--================ Inspired Product Area =================-->
    <section class="inspired_product_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="container">
                        <h3 class="category text-uppercase"><span>Inspired products</span></h3>
                        <p class="text-center">Bring called seed first of third give itself now ment</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="product-item d-flex">
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col">
                                <div class="single-product card">
                                    <div class="product-img product_img">
                                        <a href="#"><img class="img-fluid w-100"
                                                src="img/product/inspired-product/i1.jpg" alt="image6" /></a>
                                        <div class="p_icon w-100 p-2 product_icon">
                                            <a href="#">
                                                <i class="ti-eye"></i>
                                            </a>
                                            <a href="#">
                                                <i class="ti-heart"></i>
                                            </a>
                                            <a href="#">
                                                <i class="ti-shopping-cart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-btm product_btm">
                                        <a href="#" class="d-block">
                                            <h4>Latest men’s sneaker</h4>
                                        </a>
                                        <div class="mt-3">
                                            <span class="mr-4">&#8377;25.00</span>
                                            <del>&#8377;35.00</del>
                                        </div>
                                    </div>
                                    <div class="add-to-cart">
                                        <a href="#" class="main_btn w-100">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="single-product card">
                                    <div class="product-img product_img">
                                        <a href="#"><img class="img-fluid w-100"
                                                src="img/product/inspired-product/i2.jpg" alt="image7" /></a>
                                        <div class="p_icon w-100 p-2 product_icon">
                                            <a href="#">
                                                <i class="ti-eye"></i>
                                            </a>
                                            <a href="#">
                                                <i class="ti-heart"></i>
                                            </a>
                                            <a href="#">
                                                <i class="ti-shopping-cart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-btm product_btm">
                                        <a href="#" class="d-block">
                                            <h4>Latest men’s sneaker</h4>
                                        </a>
                                        <div class="mt-3">
                                            <span class="mr-4">&#8377;25.00</span>
                                            <del>&#8377;35.00</del>
                                        </div>
                                    </div>
                                    <div class="add-to-cart">
                                        <a href="#" class="main_btn w-100">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col">
                                <div class="single-product card">
                                    <div class="product-img product_img">
                                        <a href="#"><img class="img-fluid w-100"
                                                src="img/product/inspired-product/i3.jpg" alt="image8" /></a>
                                        <div class="p_icon w-100 p-2 product_icon">
                                            <a href="#">
                                                <i class="ti-eye"></i>
                                            </a>
                                            <a href="#">
                                                <i class="ti-heart"></i>
                                            </a>
                                            <a href="#">
                                                <i class="ti-shopping-cart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-btm product_btm">
                                        <a href="#" class="d-block">
                                            <h4>Latest men’s sneaker</h4>
                                        </a>
                                        <div class="mt-3">
                                            <span class="mr-4">&#8377;25.00</span>
                                            <del>&#8377;35.00</del>
                                        </div>

                                    </div>
                                    <div class="add-to-cart">
                                        <a href="#" class="main_btn w-100">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="single-product card">
                                    <div class="product-img product_img">
                                        <a href="#"><img class="img-fluid w-100"
                                                src="img/product/inspired-product/i4.jpg" alt="image9" /></a>
                                        <div class="p_icon w-100 p-2 product_icon">
                                            <a href="#">
                                                <i class="ti-eye"></i>
                                            </a>
                                            <a href="#">
                                                <i class="ti-heart"></i>
                                            </a>
                                            <a href="#">
                                                <i class="ti-shopping-cart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-btm product_btm">
                                        <a href="#" class="d-block">
                                            <h4>Latest men’s sneaker</h4>
                                        </a>
                                        <div class="mt-3">
                                            <span class="mr-4">&#8377;25.00</span>
                                            <del>&#8377;35.00</del>
                                        </div>

                                    </div>
                                    <div class="add-to-cart">
                                        <a href="#" class="main_btn w-100">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="product-item d-flex">
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col">
                                <div class="single-product card">
                                    <div class="product-img product_img">
                                        <a href="#"><img class="img-fluid w-100"
                                                src="img/product/inspired-product/i5.jpg" alt="image10" /></a>
                                        <div class="p_icon w-100 p-2 product_icon">
                                            <a href="#">
                                                <i class="ti-eye"></i>
                                            </a>
                                            <a href="#">
                                                <i class="ti-heart"></i>
                                            </a>
                                            <a href="#">
                                                <i class="ti-shopping-cart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-btm product_btm">
                                        <a href="#" class="d-block">
                                            <h4>Latest men’s sneaker</h4>
                                        </a>
                                        <div class="mt-3">
                                            <span class="mr-4">&#8377;25.00</span>
                                            <del>&#8377;35.00</del>

                                        </div>
                                    </div>
                                    <div class="add-to-cart">
                                        <a href="#" class="main_btn w-100">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="single-product card">
                                    <div class="product-img product_img">
                                        <a href="#"><img class="img-fluid w-100"
                                                src="img/product/inspired-product/i6.jpg" alt="image11" /></a>
                                        <div class="p_icon w-100 p-2 product_icon">
                                            <a href="#">
                                                <i class="ti-eye"></i>
                                            </a>
                                            <a href="#">
                                                <i class="ti-heart"></i>
                                            </a>
                                            <a href="#">
                                                <i class="ti-shopping-cart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-btm product_btm">
                                        <a href="#" class="d-block">
                                            <h4>Latest men’s sneaker</h4>
                                        </a>
                                        <div class="mt-3">
                                            <span class="mr-4">&#8377;25.00</span>
                                            <del>&#8377;35.00</del>
                                        </div>

                                    </div>
                                    <div class="add-to-cart">
                                        <a href="#" class="main_btn w-100">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col">
                                <div class="single-product card">
                                    <div class="product-img product_img">
                                        <a href="#"><img class="img-fluid w-100"
                                                src="img/product/inspired-product/i7.jpg" alt="image12" /></a>
                                        <div class="p_icon w-100 p-2 product_icon">
                                            <a href="#">
                                                <i class="ti-eye"></i>
                                            </a>
                                            <a href="#">
                                                <i class="ti-heart"></i>
                                            </a>
                                            <a href="#">
                                                <i class="ti-shopping-cart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-btm product_btm">
                                        <a href="#" class="d-block">
                                            <h4>Latest men’s sneaker</h4>
                                        </a>
                                        <div class="mt-3">
                                            <span class="mr-4">&#8377;25.00</span>
                                            <del>&#8377;35.00</del>
                                        </div>

                                    </div>
                                    <div class="add-to-cart">
                                        <a href="#" class="main_btn w-100">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="single-product card">
                                    <div class="product-img product_img">
                                        <a href="#"><img class="img-fluid w-100"
                                                src="img/product/inspired-product/i8.jpg" alt="image13" /></a>
                                        <div class="p_icon w-100 p-2 product_icon">
                                            <a href="#">
                                                <i class="ti-eye"></i>
                                            </a>
                                            <a href="#">
                                                <i class="ti-heart"></i>
                                            </a>
                                            <a href="#">
                                                <i class="ti-shopping-cart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-btm product_btm">
                                        <a href="#" class="d-block">
                                            <h4>Latest men’s sneaker</h4>
                                        </a>
                                        <div class="mt-3">
                                            <span class="mr-4">&#8377;25.00</span>
                                            <del>&#8377;35.00</del>
                                        </div>
                                    </div>
                                    <div class="add-to-cart">
                                        <a href="#" class="main_btn w-100">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-product">
                        <div class="product-img">
                            <a href="#"><img class="img-fluid w-100" src="img/product/feature-product/f-p-1.jpg"
                                    alt="image14" /></a>
                            <div class="p_icon w-100 p-2">
                                <a href="#">
                                    <i class="ti-eye"></i>
                                </a>
                                <a href="#">
                                    <i class="ti-heart"></i>
                                </a>
                                <a href="#">
                                    <i class="ti-shopping-cart"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-btm">
                            <a href="#" class="d-block">
                                <h4>Latest men’s sneaker</h4>
                            </a>
                            <div class="mt-3">
                                <span class="mr-4">&#8377;25.00</span>
                                <del>&#8377;35.00</del>
                            </div>
                        </div>
                        <div class="add-to-cart">
                            <a href="#" class="main_btn w-100">Add to cart</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-product">
                        <div class="product-img">
                            <a href="#"><img class="img-fluid w-100" src="img/product/feature-product/f-p-2.jpg"
                                    alt="image15" /></a>
                            <div class="p_icon w-100 p-2">
                                <a href="#">
                                    <i class="ti-eye"></i>
                                </a>
                                <a href="#">
                                    <i class="ti-heart"></i>
                                </a>
                                <a href="#">
                                    <i class="ti-shopping-cart"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-btm">
                            <a href="#" class="d-block">
                                <h4>Latest men’s sneaker</h4>
                            </a>
                            <div class="mt-3">
                                <span class="mr-4">&#8377;25.00</span>
                                <del>&#8377;35.00</del>
                            </div>
                        </div>
                        <div class="add-to-cart">
                            <a href="#" class="main_btn w-100">Add to cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-product">
                        <div class="product-img">
                            <a href="#"><img class="img-fluid w-100" src="img/product/feature-product/f-p-3.jpg"
                                    alt="image16" /></a>
                            <div class="p_icon w-100 p-2">
                                <a href="#">
                                    <i class="ti-eye"></i>
                                </a>
                                <a href="#">
                                    <i class="ti-heart"></i>
                                </a>
                                <a href="#">
                                    <i class="ti-shopping-cart"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-btm">
                            <a href="#" class="d-block">
                                <h4>Latest men’s sneaker</h4>
                            </a>
                            <div class="mt-3">
                                <span class="mr-4">&#8377;25.00</span>
                                <del>&#8377;35.00</del>
                            </div>
                        </div>
                        <div class="add-to-cart">
                            <a href="#" class="main_btn w-100">Add to cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Inspired Product Area =================-->



    <!--================ Start Blog Area =================-->
    <section class="blog_section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="container">
                        <h3 class="category text-uppercase"><span>latest blog</span></h3>
                        <p class="text-center">I think of us as journalists,the medium we work in is blogging.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog">
                        <div class="thumb">
                            <img class="img-fluid" src="img/b1.jpg" alt="image17">
                        </div>
                        <div class="short_details">
                            <div class="meta-top d-flex">
                                <a href="#">By Admin</a>
                                <a href="#"><i class="ti-comments-smiley"></i>2 Comments</a>
                            </div>
                            <a class="d-block" href="single-blog.html">
                                <h4>Ford clever bed stops your sleeping
                                    partner hogging the whole</h4>
                            </a>
                            <div class="text-wrap">
                                <p>
                                    Let one fifth i bring fly to divided face for bearing the divide unto seed winged
                                    divided light
                                    Forth.
                                </p>
                            </div>
                            <a href="#" class="blog_btn">Learn More <span class="ml-2 ti-arrow-right"></span></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-blog">
                        <div class="thumb">
                            <img class="img-fluid" src="img/b2.jpg" alt="image18">
                        </div>
                        <div class="short_details">
                            <div class="meta-top d-flex">
                                <a href="#">By Admin</a>
                                <a href="#"><i class="ti-comments-smiley"></i>2 Comments</a>
                            </div>
                            <a class="d-block" href="single-blog.html">
                                <h4>Ford clever bed stops your sleeping
                                    partner hogging the whole</h4>
                            </a>
                            <div class="text-wrap">
                                <p>
                                    Let one fifth i bring fly to divided face for bearing the divide unto seed winged
                                    divided light
                                    Forth.
                                </p>
                            </div>
                            <a href="#" class="blog_btn">Learn More <span class="ml-2 ti-arrow-right"></span></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-blog">
                        <div class="thumb">
                            <img class="img-fluid" src="img/b3.jpg" alt="image19">
                        </div>
                        <div class="short_details">
                            <div class="meta-top d-flex">
                                <a href="#">By Admin</a>
                                <a href="#"><i class="ti-comments-smiley"></i>2 Comments</a>
                            </div>
                            <a class="d-block" href="single-blog.html">
                                <h4>Ford clever bed stops your sleeping
                                    partner hogging the whole</h4>
                            </a>
                            <div class="text-wrap">
                                <p>
                                    Let one fifth i bring fly to divided face for bearing the divide unto seed winged
                                    divided light
                                    Forth.
                                </p>
                            </div>
                            <a href="#" class="blog_btn">Learn More <span class="ml-2 ti-arrow-right"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Blog Area ===================-->

    <!-- Start feature Area -->
    <section class="feature-area section_gap_bottom_custom">
        <div class="container">
            <div class="container">
                <h3 class="category text-uppercase"><span>Unmissable Deals</span></h3>
                <p class="text-center">We connect buyers and sellers</p>
            </div>
            <div class="row justify-content-center">
                <div class="product-item d-flex">
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col">
                                <div class="col-md-12">
                                    <div class="single-feature border-white">
                                        <a href="#" class="title">
                                            <i class="flaticon-money"></i>
                                            <h3>Money back gurantee</h3>
                                        </a>
                                        <p class="text-lowercase">15 DAYS FREE RETURNS</p>
                                    </div>
                                </div>

                            </div>
                            <div class="col">
                                <div class="col-md-12">
                                    <div class="single-feature border-white">
                                        <a href="#" class="title">
                                            <i class="flaticon-truck"></i>
                                            <h3>Free Delivery</h3>
                                        </a>
                                        <p>Know your margins.</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col">
                                <div class="col-md-12">
                                    <div class="single-feature border-white">
                                        <a href="#" class="title">
                                            <i class="flaticon-support"></i>
                                            <h3>Alway support</h3>
                                        </a>
                                        <p>Thank you as always</p>
                                    </div>
                                </div>

                            </div>
                            <div class="col">
                                <div class="col-md-12">
                                    <div class="single-feature border-white">
                                        <a href="#" class="title">
                                            <i class="flaticon-blockchain"></i>
                                            <h3>Secure payment</h3>
                                        </a>
                                        <p>Support streamlined authentication</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- End feature Area -->

    <!--================ start footer Area  =================-->
    <?php
include 'footer.php';
?>
    <!-- =================end footer area===================== -->
</body>


</html>