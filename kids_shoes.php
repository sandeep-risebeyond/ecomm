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
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item" aria-current="page"><a href="footwear.php">Footwear</a></li>
                <li class="breadcrumb-item active" aria-current="page">Kids Shoes</li>
            </ol>
        </nav>
    </div>
    <div class="container-fluid">
        Footwear - 120 items
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
                    <li class="p-1"><a href="#">Women Jutis</a></li>
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
                                <span class="accordion-header-content-label text-dark">Gender</span>
                            </div>
                        </summary>
                        <div class="accordion-content">
                            <div class="card-body">
                                <span class="d-flex">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <span class="ml-2">Boys</span>
                                </span>
                                <span class="d-flex">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <span class="ml-2">Girls</span>
                                </span>
                                <span class="d-flex">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <span class="ml-2">Unisex</span>
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
                            <p class="accordion-content-text">
                            <div class="row size_section">
                                <div class="col-xs-3 p-2">
                                    <button class="btn btn-white border border-secondary rounded-0">01</button>
                                </div>
                                <div class="col-xs-3 p-2">
                                    <button class="btn btn-white border border-secondary rounded-0">02</button>
                                </div>
                                <div class="col-xs-3 p-2">
                                    <button class="btn btn-white border border-secondary rounded-0">03</button>
                                </div>
                                <div class="col-xs-3 p-2">
                                    <button class="btn btn-white border border-secondary rounded-0">05</button>
                                </div>
                                <div class="col-xs-3 p-2">
                                    <button class="btn btn-white border border-secondary rounded-0">06</button>
                                </div>
                                <div class="col-xs-3 p-2">
                                    <button class="btn btn-white border border-secondary rounded-0">07</button>
                                </div>
                                <div class="col-xs-3 p-2">
                                    <button class="btn btn-white border border-secondary rounded-0">08</button>
                                </div>
                                <div class="col-xs-3 p-2">
                                    <button class="btn btn-white border border-secondary rounded-0">09</button>
                                </div>
                                <div class="col-xs-3 p-2">
                                    <button class="btn btn-white border border-secondary rounded-0">10</button>
                                </div>
                                <div class="col-xs-3 p-2">
                                    <button class="btn btn-white border border-secondary rounded-0">11</button>
                                </div>
                                <div class="col-xs-3 p-2">
                                    <button class="btn btn-white border border-secondary rounded-0">12</button>
                                </div>
                                <div class="col-xs-3 p-2">
                                    <button class="btn btn-white border border-secondary rounded-0">13</button>
                                </div>
                            </div>
                            </p>
                        </div>
                    </details>
                    <details class="accordion border border-0 mb-2 p-1">
                        <summary class="accordion-header">
                            <div class="accordion-header-content">
                                <span class="accordion-header-content-label text-dark">Brand</span>
                            </div>
                        </summary>
                        <div class="accordion-content">
                            <div class="card-body brand_container scroll_container">
                                <span class="d-flex">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <span class="ml-2">J . Fontini</span>
                                </span>
                                <span class="d-flex">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <span class="ml-2">Mochi</span>
                                </span>
                                <span class="d-flex">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <span class="ml-2">Genx</span>
                                </span>
                                <span class="d-flex">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <span class="ml-2">Language</span>
                                </span>
                                <span class="d-flex">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <span class="ml-2">Von Wellx</span>
                                </span>
                                <span class="d-flex">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <span class="ml-2">ID</span>
                                </span>
                                <span class="d-flex">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <span class="ml-2">Buckaroo</span>
                                </span>
                                <span class="d-flex">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <span class="ml-2">Egoss</span>
                                </span>
                                <span class="d-flex">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <span class="ml-2">Mardi Gras</span>
                                </span>
                                <span class="d-flex">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <span class="ml-2">Activ</span>
                                </span>
                                <span class="d-flex">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <span class="ml-2">Doubleu</span>
                                </span>
                                <span class="d-flex">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <span class="ml-2">Ecco-Gt</span>
                                </span>
                                <span class="d-flex">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <span class="ml-2">Crocs</span>
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
                                    <span class="ml-2">Rs. 0 To Rs. 1000</span>
                                </span>
                                <span class="d-flex">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <span class="ml-2">Rs. 1001 To Rs. 2000</span>
                                </span>
                                <span class="d-flex">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <span class="ml-2">Rs. 2001 To Rs. 3000</span>
                                </span>
                                <span class="d-flex">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <span class="ml-2">Rs. 3001 To Rs. 4000</span>
                                </span>
                                <span class="d-flex">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <span class="ml-2">Rs. 4001 To Rs. 5000</span>
                                </span>
                                <span class="d-flex">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <span class="ml-2">Rs. 5001 To Rs. 6000</span>
                                </span>
                                <span class="d-flex">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <span class="ml-2">Rs. 6001 To Rs. 7000</span>
                                </span>
                                <span class="d-flex">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <span class="ml-2">More Than Rs. 7000</span>
                                </span>
                            </div>
                        </div>
                    </details>
                    <details class="accordion border border-0 mb-2 p-1">
                        <summary class="accordion-header">
                            <div class="accordion-header-content">
                                <span class="accordion-header-content-label text-dark">Heel Type</span>
                            </div>
                        </summary>
                        <div class="accordion-content">
                            <div class="card-body">
                                <span class="d-flex">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <span class="ml-2">Regular</span>
                                </span>
                                <span class="d-flex">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <span class="ml-2">Flats</span>
                                </span>
                                <span class="d-flex">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <span class="ml-2">Block</span>
                                </span>
                                <span class="d-flex">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <span class="ml-2">Wedges</span>
                                </span>
                                <span class="d-flex">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <span class="ml-2">Platform</span>
                                </span>
                            </div>
                        </div>
                    </details>
                    <details class="accordion border border-0 mb-2 p-1">
                        <summary class="accordion-header">
                            <div class="accordion-header-content">
                                <span class="accordion-header-content-label text-dark">Heel height</span>
                            </div>
                        </summary>
                        <div class="accordion-content">
                            <div class="card-body">
                                <span class="d-flex">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <span class="ml-2">1.5</span>
                                </span>
                                <span class="d-flex">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <span class="ml-2">2.0</span>
                                </span>
                            </div>
                        </div>
                    </details>
                    <details class="accordion border border-0 mb-2 p-1">
                        <summary class="accordion-header">
                            <div class="accordion-header-content">
                                <span class="accordion-header-content-label text-dark">Type</span>
                            </div>
                        </summary>
                        <div class="accordion-content">
                            <div class="card-body type_container scroll_container">
                                <span class="d-flex">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <span class="ml-2">Lace Up</span>
                                </span>
                                <span class="d-flex">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <span class="ml-2">Boots</span>
                                </span>
                                <span class="d-flex">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <span class="ml-2">Moccasin</span>
                                </span>
                                <span class="d-flex">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <span class="ml-2">Chappals</span>
                                </span>
                                <span class="d-flex">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <span class="ml-2">Kolhapuris</span>
                                </span>
                                <span class="d-flex">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <span class="ml-2">Sandals</span>
                                </span>
                                <span class="d-flex">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <span class="ml-2">Jutis</span>
                                </span>
                                <span class="d-flex">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <span class="ml-2">Oxford</span>
                                </span>
                                <span class="d-flex">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <span class="ml-2">Brogue</span>
                                </span>
                                <span class="d-flex">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <span class="ml-2">Sneakers</span>
                                </span>
                                <span class="d-flex">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <span class="ml-2">Pathanis</span>
                                </span>
                                <span class="d-flex">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <span class="ml-2">Monk</span>
                                </span>
                                <span class="d-flex">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <span class="ml-2">Comfort</span>
                                </span>
                                <span class="d-flex">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <span class="ml-2">Paduka</span>
                                </span>
                                <span class="d-flex">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <span class="ml-2">Flip Flops</span>
                                </span>
                                <span class="d-flex">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <span class="ml-2">Clogs</span>
                                </span>
                                <span class="d-flex">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <span class="ml-2">Slippers</span>
                                </span>
                                <span class="d-flex">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <span class="ml-2">Slip Ons</span>
                                </span>
                            </div>
                        </div>
                    </details>
                    <details class="accordion border border-0 mb-2 p-1">
                        <summary class="accordion-header">
                            <div class="accordion-header-content">
                                <span class="accordion-header-content-label text-dark">Lining Material</span>
                            </div>
                        </summary>
                        <div class="accordion-content">
                            <div class="card-body">
                                <span class="d-flex">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <span class="ml-2">Leather</span>
                                </span>
                                <span class="d-flex">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <span class="ml-2">Synthetic</span>
                                </span>
                                <span class="d-flex">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <span class="ml-2">Fabric</span>
                                </span>
                                <span class="d-flex">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <span class="ml-2">N/A</span>
                                </span>
                                <span class="d-flex">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <span class="ml-2">Croslite</span>
                                </span>
                            </div>
                        </div>
                    </details>
                    <details class="accordion border border-0 mb-2 p-1">
                        <summary class="accordion-header">
                            <div class="accordion-header-content">
                                <span class="accordion-header-content-label text-dark">Sole Width</span>
                            </div>
                        </summary>
                        <div class="accordion-content">
                            <div class="card-body">
                                <span class="d-flex">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <span class="ml-2">Narrow</span>
                                </span>
                                <span class="d-flex">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <span class="ml-2">Medium</span>
                                </span>
                                <span class="d-flex">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <span class="ml-2">Wide</span>
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
                                    <span class="ml-2">0% And Above</span>
                                </span>
                                <span class="d-flex">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <span class="ml-2">30% And Above</span>
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
                                <span class="accordion-header-content-label text-dark">Occasion</span>
                            </div>
                        </summary>
                        <div class="accordion-content">
                            <div class="card-body">
                                <span class="d-flex">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <span class="ml-2">Formal</span>
                                </span>
                                <span class="d-flex">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <span class="ml-2">Ethnic</span>
                                </span>
                                <span class="d-flex">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <span class="ml-2">Party</span>
                                </span>
                                <span class="d-flex">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <span class="ml-2">Casual</span>
                                </span>
                                <span class="d-flex">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <span class="ml-2">Sports</span>
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
                                        <a href="kids_shoes_desc.php"><img class="img-fluid w-100"
                                                src="img/kids_shoes/ks1.jpg" alt="" /></a>
                                        <div class="p_icon w-100 p-1">
                                            <div class="row justify-content-center">
                                                <a href="kids_shoes_desc.php">
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
                                        <a href="kids_shoes_desc.php" class="d-block">
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
                                        <img class="img-fluid w-100" src="img/kids_shoes/ks1.jpg" alt="" />
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
                                        <img class="img-fluid w-100" src="img/kids_shoes/ks1.jpg" alt="" />
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
                                        <img class="img-fluid w-100" src="img/kids_shoes/ks1.jpg" alt="" />
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
                                        <img class="img-fluid w-100" src="img/kids_shoes/ks1.jpg" alt="" />
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
                                        <img class="img-fluid w-100" src="img/kids_shoes/ks1.jpg" alt="" />
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
                                        <img class="img-fluid w-100" src="img/kids_shoes/ks1.jpg" alt="" />
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
                                        <img class="img-fluid w-100" src="img/kids_shoes/ks1.jpg" alt="" />
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
                                        <img class="img-fluid w-100" src="img/kids_shoes/ks1.jpg" alt="" />
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
                                        <img class="img-fluid w-100" src="img/kids_shoes/ks1.jpg" alt="" />
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
                                        <img class="img-fluid w-100" src="img/kids_shoes/ks1.jpg" alt="" />
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
                                        <img class="img-fluid w-100" src="img/kids_shoes/ks1.jpg"
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