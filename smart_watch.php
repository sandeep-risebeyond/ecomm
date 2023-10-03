<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce / Smart Watches</title>
    <!-- Bootstrap CSS -->
    <link rel="icon" href="img/fevicon.png" type="image/png" />
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="vendors/linericon/style.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/themify-icons.css" />
    <link rel="stylesheet" href="css/flaticon.css" />
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css" />
    <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css" />
    <link rel="stylesheet" href="vendors/animate-css/animate.css" />
    <link rel="stylesheet" href="vendors/jquery-ui/jquery-ui.css" />
    <!-- main css -->
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/responsive.css" />
    <link rel="stylesheet" href="css/styling.css" />
    <link rel="stylesheet" href="css/footwear/menstyle.css" />
    <script src="css/footwear/menscript.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>
    <!-- material icon -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <style type="text/css">
    .accordion {
        border-radius: 3px;
        width: 100%;
        /* box-shadow: rgba(136, 165, 191, 0.48) 6px 2px 16px 0px, rgba(255, 255, 255, 0.8) -6px -2px 16px 0px; */
        background: white;
        color: black;
        overflow: hidden;
    }

    .accordion-header {
        border-bottom: 1px solid #ccc;
        position: relative;
        overflow: hidden;
        z-index: 1;
    }

    .accordion-header-content {
        padding: 10px;
        overflow: hidden;
        position: relative;
        z-index: 9;
    }

    .accordion-header-content-label {
        color: #ccc;
    }

    .accordion-header-content-title {
        margin-top: 10px;
    }

    .accordion-content {
        padding: 10px;
        position: relative;
        overflow: hidden;
    }

    .accordion-content-text {
        color: #ccc;
    }

    /* accordion open effect */

    details summary {
        cursor: pointer;
        transition: all 225ms ease-out;
        position: relative;
    }

    details[open] summary {
        margin-bottom: 100px;
        overflow: hidden;
        position: relative;
        background: white;
    }

    details[open] .accordion-content {
        padding: 10px;
        margin-top: -100px;
    }

    details[open] .accordion-header-content-label {
        color: black;
    }

    /* remove marker */

    details>summary {
        list-style: none;
    }

    details>summary::-webkit-details-marker {
        display: none;
    }

    /* custom marker */

    summary::after {
        content: '+';
        position: absolute;
        top: 10px;
        right: 10px;
        font-size: 26px;
    }

    details[open] summary::after {
        content: '-';
        font-size: 36px;
    }

    .scroll_container {
        width: 100%;
    }

    .border-secondary:focus {
        background-color: cyan;
    }

    .side_bar {
        padding: 0px;
        margin: 0px;
    }

    .product_image {
        height: 240px;
    }
    </style>

</head>

<body>
    <?php
include 'navbar.php';
?>

    <div class="container-fluid" style="margin-top:118px;">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item" aria-current="page"><a href="electronic.php">Electronic</a></li>
                <li class="breadcrumb-item active" aria-current="page">Smartwatches</li>
            </ol>
        </nav>
    </div>
    <div class="container-fluid">
        Men Shoes - 35 items
        <div class="row">
            <div class="col-md-3 col-lg-3 col-sm-3">
                FILTERS
            </div>
            <div class="col-md-7 col-lg-7 col-sm-7">
                <ul class="d-flex">
                    <li class="p-1"><a href="#">Men Chappals</a></li>
                    <li class="p-1"><a href="#">Men Sandals</a></li>
                    <li class="p-1"><a href="#">Men Sneakers</a></li>
                    <li class="p-1"><a href="#">Men Loafers</a></li>
                    <li class="p-1"><a href="#">Men Jutis</a></li>
                </ul>
            </div>
            <div class="col-sm-2 main-dropdown">
                <div class="form-group">
                    <select class="from-select">
                        <option selected disabled>Sort By : Popularity</option>
                        <option>Price : Low to High</option>
                        <option>Price : High to Low</option>
                        <option>Discount</option>
                        <option>Popularity</option>
                        <option>Newest</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <!-- body sidebar property content code-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 side_bar">
                <div id="accordion">
                     <details class="accordion border border-0 mb-2 p-1">
                        <summary class="accordion-header">
                            <div class="accordion-header-content">
                                <span class="accordion-header-content-label text-dark">Category</span>
                            </div>
                        </summary>
                        <div class="accordion-content">
                            <div class="card-body">

                                <span class="d-flex">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <span class="ml-2">Smart Watches</span>
                                </span>
                                <span class="d-flex">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <span class="ml-2">Watches</span>
                                </span>
                            </div>
                        </div>
                    </details>
                     <details class="accordion border border-0 mb-2 p-1">
                        <summary class="accordion-header">
                            <div class="accordion-header-content">
                                <span class="accordion-header-content-label text-dark">Colours</span>
                            </div>
                        </summary>
                        <div class="accordion-content">
                            <div class="card-body color_container scroll_container">
                                <span class="d-flex">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <span class="dot_black mt-2 ml-2"></span><span class="d-inline p-1">Black</span>
                                </span>
                                <span class="d-flex">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <span class="dot_white mt-2 ml-2"></span><span class="d-inline p-1">White</span>
                                </span>
                                <span class="d-flex">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <span class="dot_gray mt-2 ml-2"></span><span class="d-inline p-1">Gray</span>
                                </span>
                                <span class="d-flex">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <span class="dot_red mt-2 ml-2"></span><span class="d-inline p-1">Gray</span>
                                </span>
                                <span class="d-flex">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <span class="dot_green mt-2 ml-2"></span><span class="d-inline p-1">Gray</span>
                                </span>
                                <span class="d-flex">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <span class="dot_blue mt-2 ml-2"></span><span class="d-inline p-1">Blue</span>
                                </span>
                                <span class="d-flex">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <span class="dot_yellow mt-2 ml-2"></span><span class="d-inline p-1">Yellow</span>
                                </span>
                                <span class="d-flex">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <span class="dot_orange mt-2 ml-2"></span><span class="d-inline p-1">Orange</span>
                                </span>
                                <span class="d-flex">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <span class="dot_violet mt-2 ml-2"></span><span class="d-inline p-1">Violet</span>
                                </span>
                                <span class="d-flex">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <span class="dot_tomato mt-2 ml-2"></span><span class="d-inline p-1">Tomato
                                        Color</span>
                                </span>
                                <span class="d-flex">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <span class="dot_dodgerblue mt-2 ml-2"></span><span class="d-inline p-1">Dodger
                                        Blue</span>
                                </span>
                                <span class="d-flex">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <span class="dot_slateblue mt-2 ml-2"></span><span class="d-inline p-1">Slate
                                        Blue</span>
                                </span>
                                <span class="d-flex">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <span class="dot_lightgray mt-2 ml-2"></span><span class="d-inline p-1">Light
                                        Gray</span>
                                </span>
                                <span class="d-flex">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <span class="dot_aqua mt-2 ml-2"></span><span class="d-inline p-1">Aqua</span>
                                </span>
                                <span class="d-flex">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <span class="dot_gold mt-2 ml-2"></span><span class="d-inline p-1">Gold</span>
                                </span>
                                <span class="d-flex">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <span class="dot_olive mt-2 ml-2"></span><span class="d-inline p-1">Olive</span>
                                </span>
                            </div>
                        </div>
                    </details>
                         <details class="accordion border border-0 mb-2 p-1">
                        <summary class="accordion-header">
                            <div class="accordion-header-content">
                                <span class="accordion-header-content-label text-dark">Price</span>
                            </div>
                        </summary>
                        <div class="accordion-content">
                            <div class="card-body">

                                <span class="d-flex">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <span class="ml-2">Under &#8377; 149</span>
                                </span> 
                                <span class="d-flex">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <span class="ml-2">Under &#8377; 199</span>
                                </span>
                                <span class="d-flex">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <span class="ml-2">Under &#8377; 249</span>
                                </span>
                                <span class="d-flex">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <span class="ml-2">Under &#8377; 299</span>
                                </span>
                                <span class="d-flex">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <span class="ml-2">Under &#8377; 349.</span>
                                </span>
                                <span class="d-flex">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <span class="ml-2">Under &#8377; 399</span>
                                </span>
                                <span class="d-flex">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <span class="ml-2">Under &#8377; 449</span>
                                </span>
                                <span class="d-flex">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <span class="ml-2">Under &#8377; 499</span>
                                </span>
                                <span class="d-flex">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <span class="ml-2">Under &#8377; 99</span>
                                </span>
                                <span class="d-flex">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <span class="ml-2">&#8377; 100 - &#8377; 149</span>
                                </span>
                                <span class="d-flex">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <span class="ml-2">&#8377; 150 - &#8377; 199</span>
                                </span>
                            </div>
                        </div>
                    </details>
                    <details class="accordion border border-0 mb-2 p-1">
                        <summary class="accordion-header">
                            <div class="accordion-header-content">
                                <span class="accordion-header-content-label text-dark">Discount</span>
                            </div>
                        </summary>
                        <div class="accordion-content">
                            <div class="card-body">

                                <span class="d-flex">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <span class="ml-2">10% and above</span>
                                </span>
                                <span class="d-flex">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <span class="ml-2">All discounted</span>
                                </span>
                                <span class="d-flex">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <span class="ml-2">Deals</span>
                                </span>
                            </div>
                        </div>
                    </details>
                    <details class="accordion border border-0 mb-2 p-1">
                        <summary class="accordion-header">
                            <div class="accordion-header-content">
                                <span class="accordion-header-content-label text-dark">Rating</span>
                            </div>
                        </summary>
                        <div class="accordion-content">
                            <div class="card-body">

                                <span class="d-flex">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <span class="ml-2">2.0 and above</span>
                                </span>
                                <span class="d-flex">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <span class="ml-2">3.0 and above</span>
                                </span>
                                <span class="d-flex">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <span class="ml-2">3.5 and above</span>
                                </span>
                                <span class="d-flex">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <span class="ml-2">4.0 and above</span>
                                </span>
                                <span class="d-flex">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <span class="ml-2">M-Trusted</span>
                                </span>
                            </div>
                        </div>
                    </details>
                    <details class="accordion border border-0 mb-2 p-1">
                        <summary class="accordion-header">
                            <div class="accordion-header-content">
                                <span class="accordion-header-content-label text-dark">Size</span>
                            </div>
                        </summary>
                        <div class="accordion-content">
                            <div class="card-body">

                                <span class="d-flex">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <span class="ml-2">Free Size</span>
                                </span>
                            </div>
                        </div>
                    </details>
                    <details class="accordion border border-0 mb-2 p-1">
                        <summary class="accordion-header">
                            <div class="accordion-header-content">
                                <span class="accordion-header-content-label text-dark">Combo</span>
                            </div>
                        </summary>
                        <div class="accordion-content">
                            <div class="card-body">

                                <span class="d-flex">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <span class="ml-2">Combos</span>
                                </span>
                                <span class="d-flex">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <span class="ml-2">Pack of 1</span>
                                </span>
                                <span class="d-flex">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <span class="ml-2">Pack of 2</span>
                                </span>
                                <span class="d-flex">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <span class="ml-2">Pack of 3</span>
                                </span>
                                <span class="d-flex">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <span class="ml-2">Pack of 4</span>
                                </span>
                                <span class="d-flex">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <span class="ml-2">Pack of 5</span>
                                </span>
                                <span class="d-flex">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <span class="ml-2">Single</span>
                                </span>
                            </div>
                        </div>
                    </details>
                    <details class="accordion border border-0 mb-2 p-1">
                        <summary class="accordion-header">
                            <div class="accordion-header-content">
                                <span class="accordion-header-content-label text-dark">Warrenty period</span>
                            </div>
                        </summary>
                        <div class="accordion-content">
                            <div class="card-body">

                                <span class="d-flex">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <span class="ml-2">1 Month</span>
                                </span>
                                <span class="d-flex">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <span class="ml-2">3 Months</span>
                                </span>
                                <span class="d-flex">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <span class="ml-2">6 Months</span>
                                </span>
                            </div>
                        </div>
                    </details>
                    <details class="accordion border border-0 mb-2 p-1">
                        <summary class="accordion-header">
                            <div class="accordion-header-content">
                                <span class="accordion-header-content-label text-dark">Dial Design</span>
                            </div>
                        </summary>
                        <div class="accordion-content">
                            <div class="card-body">

                                <span class="d-flex">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <span class="ml-2">Solid</span>
                                </span>
                                <span class="d-flex">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <span class="ml-2">Square</span>
                                </span>
                            </div>
                        </div>
                    </details>
                </div>
            </div>
            <div class="col-md-10">

                <section class="inspired_product_area section_gap_bottom_custom">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12 col-xl-3">
                                <div class="single-product card_section">
                                    <div class="product-img product_image">
                                        <a href="smart_watch_desc.php"><img class="img-fluid w-100"
                                                src="img/product/inspired-product/i3.jpg" alt="" /></a>
                                        <div class="p_icon w-100 p-1">
                                            <div class="row justify-content-center">
                                                <a href="smart_watch_desc.php">
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
                                    </div>
                                    <div class="product-btm">
                                        <a href="smart_watch_desc.php" class="d-block">
                                            <h4>Latest men’s sneaker</h4>
                                        </a>
                                        <div class="mt-3">
                                            <span class="mr-4">&#8377;25.00</span>
                                            <del>&#8377;35.00</del>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12 col-xl-3">
                                <div class="single-product card_section">
                                    <div class="product-img product_image">
                                        <img class="img-fluid w-100" src="img/product/inspired-product/i3.jpg" alt="" />
                                        <div class="p_icon w-100 p-1">
                                            <div class="row justify-content-center">
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
                                </div>
                            </div>
                            <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12 col-xl-3">
                                <div class="single-product card_section">
                                    <div class="product-img product_image">
                                        <img class="img-fluid w-100" src="img/product/inspired-product/i3.jpg" alt="" />
                                        <div class="p_icon w-100 p-1">
                                            <div class="row justify-content-center">
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
                                </div>
                            </div>
                            <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12 col-xl-3">
                                <div class="single-product card_section">
                                    <div class="product-img product_image">
                                        <img class="img-fluid w-100" src="img/product/inspired-product/i3.jpg" alt="" />
                                        <div class="p_icon w-100 p-1">
                                            <div class="row justify-content-center">
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
                                </div>
                            </div>
                            <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12 col-xl-3">
                                <div class="single-product card_section">
                                    <div class="product-img product_image">
                                        <img class="img-fluid w-100" src="img/product/inspired-product/i3.jpg" alt="" />
                                        <div class="p_icon w-100 p-1">
                                            <div class="row justify-content-center">
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
                                </div>
                            </div>
                            <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12 col-xl-3">
                                <div class="single-product card_section">
                                    <div class="product-img product_image">
                                        <img class="img-fluid w-100" src="img/product/inspired-product/i3.jpg" alt="" />
                                        <div class="p_icon w-100 p-1">
                                            <div class="row justify-content-center">
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
                                </div>
                            </div>
                            <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12 col-xl-3">
                                <div class="single-product card_section">
                                    <div class="product-img product_image">
                                        <img class="img-fluid w-100" src="img/product/inspired-product/i3.jpg" alt="" />
                                        <div class="p_icon w-100 p-1">
                                            <div class="row justify-content-center">
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
                                </div>
                            </div>
                            <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12 col-xl-3">
                                <div class="single-product card_section">
                                    <div class="product-img product_image">
                                        <img class="img-fluid w-100" src="img/product/inspired-product/i3.jpg" alt="" />
                                        <div class="p_icon w-100 p-1">
                                            <div class="row justify-content-center">
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
                                </div>
                            </div>
                            <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12 col-xl-3">
                                <div class="single-product card_section">
                                    <div class="product-img product_image">
                                        <img class="img-fluid w-100" src="img/product/inspired-product/i3.jpg" alt="" />
                                        <div class="p_icon w-100 p-1">
                                            <div class="row justify-content-center">
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
                                </div>
                            </div>
                            <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12 col-xl-3">
                                <div class="single-product card_section">
                                    <div class="product-img product_image">
                                        <img class="img-fluid w-100" src="img/product/inspired-product/i3.jpg" alt="" />
                                        <div class="p_icon w-100 p-1">
                                            <div class="row justify-content-center">
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
                                </div>
                            </div>
                            <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12 col-xl-3">
                                <div class="single-product card_section">
                                    <div class="product-img product_image">
                                        <img class="img-fluid w-100" src="img/product/inspired-product/i3.jpg" alt="" />
                                        <div class="p_icon w-100 p-1">
                                            <div class="row justify-content-center">
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
                                </div>
                            </div>
                            <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12 col-xl-3">
                                <div class="single-product card_section">
                                    <div class="product-img product_image">
                                        <img class="img-fluid w-100" src="img/product/inspired-product/i3.jpg"
                                            alt="" />
                                        <div class="p_icon w-100 p-1">
                                            <div class="row justify-content-center">
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
                                </div>
                            </div>

                        </div>
                    </div>
                </section>
            </div>
        </div>

    </div>

    <?php
include 'footer.php';
?>

</body>

</html>