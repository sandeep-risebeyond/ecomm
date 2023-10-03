<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google Fonts (poppins) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <!-- Google material fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <!-- Stylesheet -->
    <link rel="stylesheet" href="demo/style.css">
    <style>
    /* css for  shopping */
    .content_class .row {
        overflow-y: scroll;
        height: 350px;
        width: 400px;
        padding: 0px;
    }

    .dropdown-menu-right {
        width: 410px;
    }

    @media screen and (max-width:600px) {
        .dropdown-menu-right {
            width: 365px;
            margin-right: -95px;

        }

        .dropdown-contents {
            width: 250px;
            ;
        }

        .card img {
            width: 100px;
        }
    }

    /* css for user */
    .dropdowns {
        position: relative;
        display: inline-block;
    }

    .dropdown-contents {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        padding: 12px 16px;
        z-index: 1;
        margin-left: -130px;
        margin-top: 0px;
    }

    .dropdowns:hover .dropdown-contents {
        display: block;
    }

    .carousel_area {
        margin-top: 100px;
    }

    @media screen and (max-width:600px) {
        .carousel_area {
            margin-top: 0px;
        }
    }

    .error {
        color: red;
        size: 80%
    }

    .hidden {
        display: none;
    }

    .error1 {
        color: red;
        size: 80%
    }

    .hidden1 {
        display: none;
    }

    /* css for tracking.php file */
    .tracking_section {
        margin-top: 100px;
    }

    input:focus::placeholder {
        color: transparent;
    }

    .search_bar {
        background-color: #71CD14;
    }

    .continue_btn {
        background-color: #71CD14;
        color: white;
    }
    </style>
</head>

<body>
    <nav class="navbar">
        <div class="container-fluid bg-light" id="top_bar">
            <div class="d-flex flex-row">

                <a href="tel: 91+ 1234567890">
                    <div class="p-1"><small>
                            PHONE: (<i class="fa fa-phone">)</i> 91+ 1234567890<span class="pl-5">|</span>
                        </small></div>
                </a>
                <a href="mailto: info@gmail.com">
                    <div class="p-1"><small>
                            <span class="pr-5"></span>EMAIL: <i class="fa fa-envelope"></i> info@gmail.com<span
                                class="pl-5">|</span>
                        </small></div>
                </a>


                <div class="pl-5 pt-1">
                    <a href="cart.php"><small>GIFT CARD <span class="pl-5">|</span></small></a>
                </div>

                <div class="pl-5 pt-1">
                    <a href="tracking.php"><small>TRACK ORDER <span class="pl-5">|</span></small></a>
                </div>

                <div class="pl-5 pt-1">
                    <a href="contact.php"><small>CONTACT US</small></a>
                </div>

            </div>

        </div>
        <a href="index.php" class="brand">Ecommerce</a>
        <div class="menu-container">
            <ul class="mega-menu">

                <a href="index.php">
                    <li class="dropdown">
                        <div>
                            <span class="text-dark text-uppercase"><strong>Home</strong></span>
                            <span class="material-symbols-outlined">
                                chevron_right
                            </span>
                        </div>

                    </li>
                </a>

                <!-- Mens -->
                <li class="dropdown">
                    <div>
                        <span class="text-dark text-uppercase"><strong>Men</strong></span>
                        <span class="material-symbols-outlined">
                            chevron_right
                        </span>
                    </div>
                    <ul class="menu">
                        <li>
                            <a href="#">Men</a>
                        </li>
                        <li class="sub-dropdown">
                            <div>
                                <span>Top Wear</span>
                                <span class="material-symbols-outlined">
                                    chevron_right
                                </span>
                            </div>
                            <ul class="sub-menu">
                                <li>
                                    <strong>Top Wear</strong>
                                </li>
                                <li>
                                    <a href="all_top_wear.php">All Top Wear</a>
                                </li>
                                <li>
                                    <a href="#">TShirts</a>
                                </li>
                                <li>
                                    <a href="#">Shirts</a>
                                </li>
                            </ul>
                        </li>
                        <li class="sub-dropdown">
                            <div>
                                <span>Bottom Wear</span>
                                <span class="material-symbols-outlined">
                                    chevron_right
                                </span>
                            </div>
                            <ul class="sub-menu">
                                <li><strong>Bottom Wear</strong></li>
                                <li>
                                    <a href="#">Track Paints</a>
                                </li>
                                <li>
                                    <a href="#">Jeans</a>
                                </li>
                                <li>
                                    <a href="#">Trowsers</a>
                                </li>

                            </ul>
                        </li>
                        <li class="sub-dropdown">
                            <div>
                                <span>Men Accessories</span>
                                <span class="material-symbols-outlined">
                                    chevron_right
                                </span>
                            </div>
                            <ul class="sub-menu">
                                <li>
                                    <strong>Men Accessories</strong>
                                </li>
                                <li>
                                    <a href="#">All Men Accessories</a>
                                </li>
                                <li>
                                    <a href="#">Watches</a>
                                </li>
                                <li>
                                    <a href="#">Belts</a>
                                </li>
                                <li>
                                    <a href="#">Wallets</a>
                                </li>
                                <li>
                                    <a href="#">Jewellery</a>
                                </li>
                                <li>
                                    <a href="#">Sunglassess</a>
                                </li>
                                <li>
                                    <a href="#">Bags</a>
                                </li>

                            </ul>
                        </li>
                        <li class="sub-dropdown">
                            <div>
                                <span>Men Footerwear</span>
                                <span class="material-symbols-outlined">
                                    chevron_right
                                </span>
                            </div>
                            <ul class="sub-menu">
                                <li>
                                    <strong>Men Footwear</strong>
                                </li>
                                <li>
                                    <a href="men_shoes.php">Casual Shoes</a>
                                </li>
                                <li>
                                    <a href="#">Sports Shoes</a>
                                </li>
                                <li>
                                    <a href="#">Sandals</a>
                                </li>
                                <li>
                                    <a href="#">Formal Shoes</a>
                                </li>
                            </ul>
                        </li>
                        <li class="sub-dropdown">
                            <div>
                                <span>Ethnic Wear</span>
                                <span class="material-symbols-outlined">
                                    chevron_right
                                </span>
                            </div>
                            <ul class="sub-menu">
                                <li>
                                    <strong>Ethnic Wear</strong>
                                </li>
                                <li>
                                    <a href="#">Men Kurtas</a>
                                </li>
                                <li>
                                    <a href="#">Ethnic Jackets</a>
                                </li>
                            </ul>
                        </li>
                        <li class="sub-dropdown">
                            <div>
                                <span>Inner & Sleep Wear</span>
                                <span class="material-symbols-outlined">
                                    chevron_right
                                </span>
                            </div>
                            <ul class="sub-menu">
                                <li>
                                    <strong>Inner & Sleep Wear</strong>
                                </li>
                                <li>
                                    <a href="#">All Inner & Sleep Wear</a>
                                </li>
                                <li>
                                    <a href="#">Vests</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <!-- Women section -->
                <li class="dropdown">
                    <div>
                        <span class="text-dark text-uppercase"><strong>Women</strong></span>
                        <span class="material-symbols-outlined">
                            chevron_right
                        </span>
                    </div>
                    <ul class="menu">
                        <li>
                            <a href="#">Women</a>
                        </li>
                        <li class="sub-dropdown">
                            <div>
                                <span>Top Wear</span>
                                <span class="material-symbols-outlined">
                                    chevron_right
                                </span>
                            </div>
                            <ul class="sub-menu">
                                <li>
                                    <strong>
                                        Top Wear
                                    </strong>
                                </li>
                                <li>
                                    <a href="#">Tops</a>
                                </li>
                                <li>
                                    <a href="#">Dresses</a>
                                </li>
                                <li>
                                    <a href="# ">Sweters</a>
                                </li>
                                <li>
                                    <a href="#">Jumpsuits</a>
                                </li>
                            </ul>
                        </li>
                        <li class="sub-dropdown">
                            <div>
                                <span>Women Footwear</span>
                                <span class="material-symbols-outlined">
                                    chevron_right
                                </span>
                            </div>
                            <ul class="sub-menu">
                                <li>
                                    <strong>
                                        Women Footwear
                                    </strong>
                                </li>
                                <li>
                                    <a href="women_shoes.php">Flats</a>
                                </li>
                                <li>
                                    <a href="#">Bellies</a>
                                </li>
                                <li>
                                    <a href="# ">Jutties</a>
                                </li>
                            </ul>
                        </li>
                        <li class="sub-dropdown">
                            <div>
                                <span>Bottomwear</span>
                                <span class="material-symbols-outlined">
                                    chevron_right
                                </span>
                            </div>
                            <ul class="sub-menu">
                                <li>
                                    <strong>
                                        Bottomwear
                                    </strong>
                                </li>
                                <li>
                                    <a href="#">Jeans</a>
                                </li>
                                <li>
                                    <a href="#">Jeggings</a>
                                </li>
                                <li>
                                    <a href="#">Palazzos</a>
                                </li>
                                <li>
                                    <a href="#">Shorts</a>
                                </li>
                                <li>
                                    <a href="#">Skirts</a>
                                </li>
                            </ul>
                        </li>
                        <li class="sub-dropdown">
                            <div>
                                <span>Innerwear</span>
                                <span class="material-symbols-outlined">
                                    chevron_right
                                </span>
                            </div>
                            <ul class="sub-menu">
                                <li>
                                    <strong>innerwear</strong>
                                </li>
                                <li>
                                    <a href="#">Bra</a>
                                </li>
                                <li>
                                    <a href="#">briefs</a>
                                </li>

                            </ul>
                        </li>
                        <li class="sub-dropdown">
                            <div>
                                <span>Sleepwear</span>
                                <span class="material-symbols-outlined">
                                    chevron_right
                                </span>
                            </div>
                            <ul class="sub-menu">

                                <li>
                                    <strong>Sleepwear</strong>
                                </li>
                                <li>
                                    <a href="#">Nightsuits</a>
                                </li>
                                <li>
                                    <a href="#">Babydolls</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <!-- Kids section -->
                <li class="dropdown">
                    <div>
                        <span class="text-dark text-uppercase"><strong>Kids</strong></span>
                        <span class="material-symbols-outlined">
                            chevron_right
                        </span>
                    </div>
                    <ul class="menu">
                        <li>
                            <a href="#">Kids</a>
                        </li>
                        <li class="sub-dropdown">
                            <div>
                                <span>Boys & Girls 2+ Years</span>
                                <span class="material-symbols-outlined">
                                    chevron_right
                                </span>
                            </div>
                            <ul class="sub-menu">
                                <li>
                                    <strong>Boys & Girls 2+ Years</strong>
                                </li>
                                <li>
                                    <a href="#">Dresses</a>
                                </li>
                            </ul>
                        </li>
                        <li class="sub-dropdown">
                            <div>
                                <span>Infant 0-2 Years</span>
                                <span class="material-symbols-outlined">
                                    chevron_right
                                </span>
                            </div>
                            <ul class="sub-menu">
                                <li>
                                    <strong>Infant 0-2 Years</strong>
                                </li>
                                <li>
                                    <a href="#">Rompers</a>
                                </li>
                            </ul>
                        </li>
                        <li class="sub-dropdown">
                            <div>
                                <span>Toys & Accessories</span>
                                <span class="material-symbols-outlined">
                                    chevron_right
                                </span>
                            </div>
                            <ul class="sub-menu">
                                <li>
                                    <strong>Toys & Accessories</strong>
                                </li>
                                <li>
                                    <a href="#">Soft Toys</a>
                                </li>
                                <li>
                                    <a href="kids_shoes.php">Footwear</a>
                                </li>
                                <li>
                                    <a href="#">Stationery</a>
                                </li>
                                <li>
                                    <a href="#">Watches</a>
                                </li>
                                <li>
                                    <a href="#">Bags & Backpacks</a>
                                </li>
                            </ul>
                        </li>
                        <li class="sub-dropdown">
                            <div>
                                <span>Baby Care</span>
                                <span class="material-symbols-outlined">
                                    chevron_right
                                </span>
                            </div>
                            <ul class="sub-menu">
                                <li>
                                    <strong>Baby Care</strong>
                                </li>
                                <li>
                                    <a href="#">All Baby Care</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <!-- Home and Kitchen -->
                <li class="dropdown">
                    <div>
                        <span class="text-uppercase text-dark"><strong>Home & Kitchen</strong></span>
                        <span class="material-symbols-outlined">
                            chevron_right
                        </span>
                    </div>
                    <ul class="menu">
                        <li>
                            <a href="#">Home & Kitchen</a>
                        </li>
                        <li class="sub-dropdown">
                            <div>
                                <span>Home Furnishing</span>
                                <span class="material-symbols-outlined">
                                    chevron_right
                                </span>
                            </div>
                            <ul class="sub-menu">
                                <li>
                                    <strong>Home Furnishing</strong>
                                </li>
                                <li>
                                    <a href="#">Bedsheets</a>
                                </li>
                                <li>
                                    <a href="#">Doormats</a>
                                </li>
                                <li>
                                    <a href="#">Curtains & Sheers</a>
                                </li>
                                <li>
                                    <a href="">Cusions & Cusion Covers</a>
                                </li>
                                <li>
                                    <a href="">Mattress Protectors</a>
                                </li>
                            </ul>
                        </li>
                        <li class="sub-dropdown">
                            <div>
                                <span>Home Decor</span>
                                <span class="material-symbols-outlined">
                                    chevron_right
                                </span>
                            </div>
                            <ul class="sub-menu">
                                <li>
                                    <strong>Home Decor</strong>
                                </li>
                                <li>
                                    <a href="#">All Home Decor</a>
                                </li>
                                <li>
                                    <a href="#">Stickers</a>
                                </li>
                                <li>
                                    <a href="#">Clocks</a>
                                </li>
                                <li>
                                    <a href="#">Showpieces</a>
                                </li>

                            </ul>
                        </li>
                        <li class="sub-dropdown">
                            <div>
                                <span>kitchen & Dining</span>
                                <span class="material-symbols-outlined">
                                    chevron_right
                                </span>
                            </div>
                            <ul class="sub-menu">
                                <li>
                                    <strong>Kitchen & Dining</strong>
                                </li>
                                <li>
                                    <a href="#">Kitchen Storage</a>
                                </li>
                                <li>
                                    <a href="#">Cookware & Bakeware</a>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </li>
                <!-- Beauty and Health -->
                <li class="dropdown">
                    <div>
                        <span class="text-dark text-uppercase"><strong>Beauty & Health</strong></span>
                        <span class="material-symbols-outlined">
                            chevron_right
                        </span>
                    </div>
                    <ul class="menu">
                        <li>
                            <a href="#">Beauty & Health</a>
                        </li>
                        <li class="sub-dropdown">
                            <div>
                                <span>Make Up</span>
                                <span class="material-symbols-outlined">
                                    chevron_right
                                </span>
                            </div>
                            <ul class="sub-menu">
                                <li>
                                    <strong>Make Up</strong>
                                </li>
                                <li>
                                    <a href="#">Face</a>
                                </li>
                                <li>
                                    <a href="#">Eyes</a>
                                </li>
                                <li>
                                    <a href="#">Lips</a>
                                </li>
                                <li>
                                    <a href="#">Nails</a>
                                </li>
                            </ul>
                        </li>
                        <li class="sub-dropdown">
                            <div>
                                <span>Wellness</span>
                                <span class="material-symbols-outlined">
                                    chevron_right
                                </span>
                            </div>
                            <ul class="sub-menu">
                                <li>
                                    <strong>Wellness</strong>
                                </li>
                                <li>
                                    <a href="#">Sanitizers</a>
                                </li>
                                <li>
                                    <a href="#">Oral Care</a>
                                </li>
                                <li>
                                    <a href="#">Feminine Hygiene</a>
                                </li>
                            </ul>
                        </li>
                        <li class="sub-dropdown">
                            <div>
                                <span>Skin Care</span>
                                <span class="material-symbols-outlined">
                                    chevron_right
                                </span>
                            </div>
                            <ul class="sub-menu">
                                <li>
                                    <strong>Skin Care</strong>
                                </li>
                                <li>
                                    <a href="#">Deodorants</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <!-- Electronic -->
                <li class="dropdown">
                    <div>
                        <span class="text-dark text-uppercase"><strong>Electronic</strong></span>
                        <span class="material-symbols-outlined">
                            chevron_right
                        </span>
                    </div>
                    <ul class="menu electronic">
                        <li>
                            <a href="#">Electronic</a>
                        </li>
                        <!-- <li class="sub-dropdown">
                            <div>
                                <span>Laptop Accessories</span>
                                <span class="material-symbols-outlined">
                                    chevron_right
                                </span>
                            </div>
                            <ul class="sub-menu">
                                <li><strong>More in Laptop Accessories</strong></li>
                                <li>
                                    <a href="#">All</a>
                                </li>
                                <li>
                                    <a href="#">Mouse</a>
                                </li>
                                <li>
                                    <a href="#">Laptop Keyboards</a>
                                </li>
                                <li>
                                    <a href="">Router</a>
                                </li>
                                <li>
                                    <a href="">
                                        Data Cards
                                    </a>
                                </li>
                                <li>
                                    <a href="">UPS</a>
                                </li>
                                <li>
                                    <a href="">USB Gadgets</a>
                                </li>
                                <li>
                                    <a href="">Security Software</a>
                                </li>
                                <li>
                                    <a href="">Laptop battery</a>
                                </li>
                                <li>
                                    <a href="">Laptop Adapter</a>
                                </li>
                                <li>
                                    <a href="">Wireless USB Adapter</a>
                                </li>
                                <li>
                                    <a href="">Processor</a>
                                </li>
                                <li>
                                    <a href="">Other Accessories</a>
                                </li>
                            </ul>
                        </li>
                        <li class="sub-dropdown">
                            <div>
                                <span>Storage</span>
                                <span class="material-symbols-outlined">
                                    chevron_right
                                </span>
                            </div>
                            <ul class="sub-menu">
                                <li><strong>More in Storage</strong></li>
                                <li>
                                    <a href="#">All</a>
                                </li>
                                <li>
                                    <a href="#">MobileMemoryCard</a>
                                </li>
                                <li>
                                    <a href="#">ComputerStoragePendrive</a>
                                </li>
                                <li>
                                    <a href="#">MobileStoragePendrive</a>
                                </li>
                                <li>
                                    <a href="#">ExternalHardDrive</a>
                                </li>
                                <li>
                                    <a href="#">EnternalHardDrive</a>
                                </li>
                            </ul>
                        </li>
                        <li class="sub-dropdown">
                            <div>
                                <span>Computer Peripherals</span>
                                <span class="material-symbols-outlined">
                                    chevron_right
                                </span>
                            </div>
                            <ul class="sub-menu">
                                <li><strong>More in Computer Peripherals</strong></li>
                                <li>
                                    <a href="#">All</a>
                                </li>
                                <li>
                                    <a href="#">Printers</a>
                                </li>
                                <li>
                                    <a href="#">Monitors</a>
                                </li>
                                <li>
                                    <a href="#">Projectors</a>
                                </li>
                                <li>
                                    <a href="#">Portable Projectors</a>
                                </li>
                                <li>
                                    <a href="#">Toners</a>
                                </li>
                                <li>
                                    <a href="#">Ink Cartridges</a>
                                </li>
                                <li>
                                    <a href="#">Ink Bottles</a>
                                </li>
                                <li>
                                    <a href="#">Reciept Printers</a>
                                </li>
                                <li>
                                    <a href="">Lamination Machines</a>
                                </li>
                                <li>
                                    <a href="">Note Counting Machine</a>
                                </li>
                                <li>
                                    <a href="">Barcode Scanners</a>
                                </li>
                                <li>
                                    <a href="">Currency Dedectors</a>
                                </li>
                            </ul>
                        </li> -->
                        <li class="sub-dropdown">
                            <div>
                                <span>Mobile Accessories</span>
                                <span class="material-symbols-outlined">
                                    chevron_right
                                </span>
                            </div>
                            <ul class="sub-menu">
                                <li><strong>Mobile Accessories</strong></li>
                                <li>
                                    <a href="#">All</a>
                                </li>
                                <li>
                                    <a href="mobile_holders.php">Mobile Holders</a>
                                </li>
                                <li>
                                    <a href="smart_watch.php">SmartWatches</a>
                                </li>
                                <li>
                                    <a href="">Mobile Cases & Covers</a>
                                </li>
                            </ul>
                        </li>
                        <li class="sub-dropdown">
                            <div>
                                <span>Appliances</span>
                                <span class="material-symbols-outlined">
                                    chevron_right
                                </span>
                            </div>
                            <ul class="sub-menu">
                                <li><strong>Appliances</strong></li>
                                <li>
                                    <a href="#">All Appliances</a>
                                </li>
                                <li>
                                    <a href="mobile_holders.php">Grooming</a>
                                </li>
                                <li>
                                    <a href="smart_watch.php">Home Appliances</a>
                                </li>
                                <li>
                                    <a href="">Mobile Cases & Covers</a>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </li>

            </ul>
        </div>
        <div class="buttons">

            <!-- <button class="btn">Contact</button> -->
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for products & more"
                    aria-label="Recipient's username" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <span class="input-group-text search_bar" id="basic-addon2"><i
                            class="fa fa-search fa-lg text-light"></i></span>
                </div>
            </div>
            <a href="wishlist.php"><i class="fa fa-heart-o fa-lg"></i></a>


            <div class="dropdowns">
                <span data-toggle="modal" data-target="#exampleModal"><i class="fa fa-user fa-lg text-dark"
                        title="SignUp"></i></span>


                <div class="dropdown-contents">
                    <div class="row bg-light p-2 border rounded-1">
                        <a href="#">
                            <div class="row border-bottom">
                                <div class="col-md-3">
                                    <i class="fa fa-dashboard text-dark"></i>
                                </div>
                                <div class="col-md-9">
                                    <h4>Dashboard</h4>
                                </div>
                            </div>
                        </a>

                        <a href="#">
                            <div class="row border-bottom">
                                <div class="col-md-3">
                                    <i class="fa fa-shopping-bag fa-lg text-dark"></i>
                                </div>
                                <div class="col-md-9">
                                    <h4>My Orders</h4>
                                </div>
                            </div>
                        </a>

                        <a href="#">
                            <div class="row border-bottom">
                                <div class="col-md-3">
                                    <i class="fa fa-heart fa-lg text-dark"></i>
                                </div>
                                <div class="col-md-9">
                                    <h4>&nbsp;Wishlist</h4>
                                </div>
                            </div>
                        </a>

                        <a href="#">
                            <div class="row border-bottom">
                                <div class="col-md-3">
                                    <i class="fa fa-sign-out fa-lg text-dark"></i>
                                </div>
                                <div class="col-md-9">
                                    <h4>&nbsp;Sign Out</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <a href="#" class="icons" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">
                <i class="fa fa-shopping-bag fa-lg text-dark"><sup
                        class="rounded-circle p-1 text-dark search_bar"><strong>7</strong></sup></i></a>
            <div class="dropdown">
                <div class="dropdown-menu dropdown-menu-right mt-4" aria-labelledby="dropdownMenu2">
                    <div class="container-fluid">
                        <div class="row pb-2">
                            <div class="col-sm-5">Item in Cart: 7 </div>
                            <div class="col-sm-7">Cart Subtotal: Rs 3490.00</div>
                        </div>
                    </div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="content_class">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="card">
                                            <img src="img/shoes4.jpg" alt="image">
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="text-left">
                                            Men Black Shoes<br>
                                            Rs : 1745.00 <span><del>Rs:
                                                    3490.00</del></span><span><small class="text-success">(50%
                                                    OFF)</small></span>
                                            SIZE : 9<br>
                                            QTY : 1<br>
                                            <i class="fa fa-trash-o"></i><a href="#"><small>Remove</small></a></li>
                                        </div>


                                        <hr>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="card">
                                            <img src="img/shoes4.jpg" alt="image">
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="text-left">
                                            Men Black Shoes<br>
                                            Rs : 1745.00 <span><del>Rs:
                                                    3490.00</del></span><span><small class="text-success">(50%
                                                    OFF)</small></span>
                                            SIZE : 9<br>
                                            QTY : 1<br>
                                            <i class="fa fa-trash-o"></i><a href="#"><small>Remove</small></a></li>
                                        </div>


                                        <hr>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="card">
                                            <img src="img/shoes4.jpg" alt="image">
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="text-left">
                                            Men Black Shoes<br>
                                            Rs : 1745.00 <span><del>Rs:
                                                    3490.00</del></span><span><small class="text-success">(50%
                                                    OFF)</small></span>
                                            SIZE : 9<br>
                                            QTY : 1<br>
                                            <i class="fa fa-trash-o"></i><a href="#"><small>Remove</small></a></li>
                                        </div>


                                        <hr>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card">
                                            <img src="img/shoes4.jpg" alt="image">
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="text-left">
                                            Men Black Shoes<br>
                                            Rs : 1745.00 <span><del>Rs:
                                                    3490.00</del></span><span><small class="text-success">(50%
                                                    OFF)</small></span>
                                            SIZE : 9<br>
                                            QTY : 1<br>
                                            <i class="fa fa-trash-o"></i><a href="#"><small>Remove</small></a></li>
                                        </div>


                                        <hr>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="card">
                                            <img src="img/shoes4.jpg" alt="image">
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="text-left">
                                            Men Black Shoes<br>
                                            Rs : 1745.00 <span><del>Rs:
                                                    3490.00</del></span><span><small class="text-success">(50%
                                                    OFF)</small></span>
                                            SIZE : 9<br>
                                            QTY : 1<br>
                                            <i class="fa fa-trash-o"></i><a href="#"><small>Remove</small></a></li>
                                        </div>


                                        <hr>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card">
                                            <img src="img/shoes4.jpg" alt="image">
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="text-left">
                                            Men Black Shoes<br>
                                            Rs : 1745.00 <span><del>Rs:
                                                    3490.00</del></span><span><small class="text-success">(50%
                                                    OFF)</small></span>
                                            SIZE : 9<br>
                                            QTY : 1<br>
                                            <i class="fa fa-trash-o"></i><a href="#"><small>Remove</small></a></li>
                                        </div>
                                        <hr>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card">
                                            <img src="img/shoes4.jpg" alt="image">
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="text-left">
                                            Men Black Shoes<br>
                                            Rs : 1745.00 <span><del>Rs:
                                                    3490.00</del></span><span><small class="text-success">(50%
                                                    OFF)</small></span>
                                            SIZE : 9<br>
                                            QTY : 1<br>
                                            <i class="fa fa-trash-o"></i><a href="#"><small>Remove</small></a></li>
                                        </div>
                                        <hr>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button class="border border-light btn-lg w-100 mb-1"><a href="cart.php"
                                        class="text-dark">VIEW AND EDIT
                                        CART</a></button>
                            </div>
                            <div class="col-md-12">
                                <input type="button" class="main_btn w-100"
                                    onclick="window.location.href='checkout.php';" value="CHECKOUT">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="menu-btn">
                <span class="material-symbols-outlined">
                    menu
                </span>
            </button>
        </div>
    </nav>
    <!-- login modal -->
    <form action="" id="loginform">
        <div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Login</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <figure>
                                <img src="img/login_image.jpg" class="img-fluid img-thumbnail" alt="image">
                            </figure>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon12">IN +91</span>
                                </div>
                                <input type="text" pattern="[7-9]{1}[0-9]{9}" id="myform_phone1" class="form-control"
                                    placeholder="Phone number" aria-label="PnoneNumber" aria-describedby="basic-addon12"
                                    onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))"
                                    minlength="10" maxlength="10" autocomplete="off">
                            </div>
                            <div id="phone_error1" class="error1 hidden1">Please enter a valid phone number</div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn continue_btn">Request OTP</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!-- Modal --->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Sign Up /Sign In</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="" id="myform">
                    <div class="modal-body">
                        <div class="container-fluid">
                            <figure>
                                <img src="img/login_image.jpg" class="img-fluid img-thumbnail" alt="image">
                            </figure>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">IN +91</span>
                                </div>
                                <input type="text" id="myform_phone" pattern="[7-9]{1}[0-9]{9}" class="form-control"
                                    placeholder="Phone number" aria-label="PhoneNumber" aria-describedby="basic-addon1"
                                    onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))"
                                    minlength="10" maxlength="10" autocomplete="off">
                            </div>
                            <div id="phone_error" class="error hidden">Please enter a valid phone number</div>
                            <div class="row">
                                <div class="col-md-7"></div>
                                <div class="col-md-5"><button type="submit" class="btn continue_btn">Continue</button>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <!-- <button type="button">Existing User? Log In </button> -->
                        <button id="openModal2Btn" class="main_btn" id="MybtnModal">Existing User? Log
                            In</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="demo/main.js"></script>

    <!-- script for login form validation for phone number -->
    <script>
    function validatePhoneNumber(input_str) {
        var re = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im;

        return re.test(input_str);
    }

    function validateForm(event) {
        var phone = document.getElementById('myform_phone').value;
        if (!validatePhoneNumber(phone)) {
            document.getElementById('phone_error').classList.remove('hidden');
        } else {
            document.getElementById('phone_error').classList.add('hidden');
            alert("validation success")
        }
        event.preventDefault();
    }

    document.getElementById('myform').addEventListener('submit', validateForm);
    </script>
    <!-- script for login form phone input validation -->
    <script>
    function validatePhoneNumber(input_str) {
        var re = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im;

        return re.test(input_str);
    }

    function validateForm(event) {
        var phone = document.getElementById('myform_phone1').value;
        if (!validatePhoneNumber(phone)) {
            document.getElementById('phone_error1').classList.remove('hidden1');
        } else {
            document.getElementById('phone_error1').classList.add('hidden1');
            alert("validation success")
        }
        event.preventDefault();
    }

    document.getElementById('loginform').addEventListener('submit', validateForm);
    </script>
    <!-- script for modal 2 login section -->
    <script>
    $(document).ready(function() {
        // When the button in Modal 1 is clicked, open Modal 2
        $("#openModal2Btn").click(function() {
            $("#myModal2").modal('show');
        });
    });
    </script>
    <!-- number validation -->
    <script>
    function checkInput(ob) {
        const invalidChars = /[^0-9]/gi;

        if (invalidChars.test(ob.value)) {
            ob.value = ob.value.replace(invalidChars, "");
        }
    };
    </script>
    <script>
    function checkInput1(ob) {
        const invalidChars = /[^0-9]/gi;

        if (invalidChars.test(ob.value)) {
            ob.value = ob.value.replace(invalidChars, "");
        }
    };
    </script>
</body>

</html>