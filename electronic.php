<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce / Men Shoes</title>
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
                <li class="breadcrumb-item active"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item" aria-current="page">Electronics</li>
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
    <!-- body sidebar property content code -->
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
                                    <span class="ml-2">Mobile & Accessories</span>
                                </span>
                                <span class="d-flex">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <span class="ml-2">Smartwatches</span>
                                </span>
                                <span class="d-flex">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <span class="ml-2">Mobile Holders</span>
                                </span>
                                <span class="d-flex">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <span class="ml-2">Laptop Accessories</span>
                                </span>
                                <span class="d-flex">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <span class="ml-2">Mobile Accessories</span>
                                </span>
                                <span class="d-flex">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <span class="ml-2">Powerbank</span>
                                </span>
                                <span class="d-flex">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <span class="ml-2">Storage</span>
                                </span>
                                <span class="d-flex">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <span class="ml-2">Computer Peripherals</span>
                                </span>
                                <span class="d-flex">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <span class="ml-2">Tablets</span>
                                </span>
                                <span class="d-flex">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <span class="ml-2">Speakers</span>
                                </span>
                            </div>
                        </div>
                    </details>
                    <details class="accordion border border-0 mb-2 p-1">
                        <summary class="accordion-header">
                            <div class="accordion-header-content">
                                <span class="accordion-header-content-label text-dark">Brand</span>
                            </div>
                        </summary>
                        <div class="accordion-content">
                            <div class="card-body">
                                <span class="d-flex">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <span class="ml-2">Redme</span>
                                </span>
                                <span class="d-flex">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <span class="ml-2">boAt</span>
                                </span>
                                <span class="d-flex">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <span class="ml-2">Realme</span>
                                </span>
                                <span class="d-flex">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <span class="ml-2">OnePlus</span>
                                </span>
                                <span class="d-flex">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <span class="ml-2">Ambrane</span>
                                </span>
                                <span class="d-flex">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <span class="ml-2">Apple</span>
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
                                    <span class="ml-2">Under Rs. 1,000</span>
                                </span>
                                <span class="d-flex">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <span class="ml-2">Rs. 1,000 - Rs. 5,000</span>
                                </span>
                                <span class="d-flex">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <span class="ml-2">Rs. 5,000 - Rs. 10,000</span>
                                </span>
                                <span class="d-flex">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <span class="ml-2">Over 10,000</span>
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
                                <span class="accordion-header-content-label text-dark">Discount</span>
                            </div>
                        </summary>
                        <div class="accordion-content">
                            <div class="card-body">
                                <span class="d-flex">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <span class="ml-2">10% Off or more</span>
                                </span>
                                <span class="d-flex">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <span class="ml-2">15% Off or more</span>
                                </span>
                                <span class="d-flex">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <span class="ml-2">20% Off or more</span>
                                </span>
                                <span class="d-flex">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <span class="ml-2">25% Off or more</span>
                                </span>
                                <span class="d-flex">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <span class="ml-2">30% Off or more</span>
                                </span>
                                <span class="d-flex">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <span class="ml-2">35% Off or more</span>
                                </span>
                                <span class="d-flex">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <span class="ml-2">40% Off or more</span>
                                </span>
                                <span class="d-flex">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <span class="ml-2">45% Off or more</span>
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
                                        <a href="men_Shoes_desc.php"><img class="img-fluid w-100"
                                                src="img/product/inspired-product/i1.jpg" alt="" /></a>
                                        <div class="p_icon w-100 p-1">
                                            <div class="row justify-content-center">
                                                <a href="men_shoes_desc.php">
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
                                        <a href="men_shoes_desc.php" class="d-block">
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
                                        <img class="img-fluid w-100" src="img/product/inspired-product/i2.jpg" alt="" />
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
                                        <img class="img-fluid w-100" src="img/product/inspired-product/i4.jpg" alt="" />
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
                                        <img class="img-fluid w-100" src="img/product/inspired-product/i5.jpg" alt="" />
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
                                        <img class="img-fluid w-100" src="img/product/inspired-product/i6.jpg" alt="" />
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
                                        <img class="img-fluid w-100" src="img/product/inspired-product/i7.jpg" alt="" />
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
                                        <img class="img-fluid w-100" src="img/product/inspired-product/i8.jpg" alt="" />
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
                                        <img class="img-fluid w-100" src="img/product/inspired-product/i6.jpg" alt="" />
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
                                        <img class="img-fluid w-100" src="img/product/inspired-product/i5.jpg" alt="" />
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
                                        <img class="img-fluid w-100" src="img/product/inspired-product/i5.jpg" alt="" />
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
                                        <img class="img-fluid w-100" src="img/product/inspired-product/shoes.png"
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