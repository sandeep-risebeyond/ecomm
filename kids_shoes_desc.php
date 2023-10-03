<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce / Kids Shoes Details</title>
    <!-- Bootstrap CSS -->
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
    <link rel="stylesheet" href="css/footwear/shoes_description.css" />
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
</head>

<body>
    <?php
    include 'navbar.php';
?>

    <div class="container-fluid" style="margin-top:118px;">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item"><a href="footwear.php">Footwear</a></li>
                <li class="breadcrumb-item"><a href="kids_shoes.php">Kids Shoes</a></li>
                <li class="breadcrumb-item active" aria-current="page">Shoes Details</li>
            </ol>
        </nav>

        <div class="row main_section">
            <div class="col-md-2">
                <div class="row p-5">
                    <img class='slideshow-thumbnails active m-1 img-fluid' src='img/kids_shoes/ks1.jpg'>
                    <img class='slideshow-thumbnails m-1 img-fluid' src='img/kids_shoes/ks1.1.jpg'>
                    <img class='slideshow-thumbnails m-1 img-fluid' src='img/kids_shoes/ks1.2.jpg'>
                    <img class='slideshow-thumbnails m-1 img-fluid' src='img/kids_shoes/ks1.3.jpg'>
                </div>
            </div>
            <div class="col-md-5">

                <div id='lens'></div>

                <div id='slideshow-items-container'>
                    <a href="#" data-toggle="modal" data-target=".bd-example-modal-lg">
                        <img class='slideshow-items active img-fluid' src='img/kids_shoes/ks1.jpg'>
                        <img class='slideshow-items img-fluid' src='img/kids_shoes/ks1.1.jpg'>
                        <img class='slideshow-items img-fluid' src='img/kids_shoes/ks1.2.jpg'>
                        <img class='slideshow-items img-fluid' src='img/kids_shoes/ks1.3.jpg'>
                    </a>
                    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"
                        aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-md">
                            <div class="modal-content">
                                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="img/shoes2.jpg" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="img/shoes3.jpg" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="img/shoes4.jpg" class="d-block w-100" alt="...">
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev border border-white" type="button"
                                        data-target="#carouselExampleControls" data-slide="prev">
                                        <span class="carousel-control-prev-icon bg-secondary" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </button>
                                    <button class="carousel-control-next border border-white" type="button"
                                        data-target="#carouselExampleControls" data-slide="next">
                                        <span class="carousel-control-next-icon bg-secondary" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id='result'></div>
            </div>
            <div class="col-md-5">
                <div class="row">
                    <h2>Shoes</h2>
                </div>
                <div class="row mt-3">
                    <!-- <strong>Men Black Formal Lace Up</strong> --->
                    <strong>Boys Black Casual Sneakers</strong>
                    <h4 class="pl-3"><span class="badge badge-danger">Deal of the Day</span></h4>
                </div>
                <div class="row mt-3">
                    <span class="rupees"><span class="text-danger"> - 20%
                        </span><strong>Rs.4,000.00</strong></span><small><del>₹4,800.00</del></small><br>
                </div>
                <div class="row">
                    <small>(Inclusive of all taxes)</small>
                </div>
                <div class="row">
                    <div class="badge badge-success badge-pill p-2">3.5 <i class="fa fa-star"></i></div>
                </div>
                <div class="row mt-3">
                    <span class="size">SELECT SIZE (UK / India)</span>
                    <!-- <span class="flex-end">Size Chart</span> ---->
                </div>
                <div class="row mt-3">
                    <div class="size_section">
                        <input label="1" type="radio" name="gender" value="1">
                        <input label="2" type="radio" name="gender" value="2">
                        <input label="3" type="radio" name="gender" value="3">
                        <input label="5" type="radio" name="gender" value="5">
                        <input label="11" type="radio" name="gender" value="11">
                        <input label="12" type="radio" name="gender" value="12">
                        <input label="13" type="radio" name="gender" value="13">
                    </div>

                </div>
                <div class="row mt-4">
                    <span class="size">AVIALABLE COLORS</span>
                </div>
                <div class="container-fluid">

                </div>
                <div class="row mt-1">
                    <div class="p-1">
                        <a href="#">
                            <div class="card rounded-circle color_image img_card">
                                <img src="img/shoes_image/img2.jpg" title="color image" alt="image"
                                    class="img-thumbnail img-fluid rounded-circle">
                            </div>
                        </a>
                    </div>
                    <div class="p-1">
                        <a href="#">
                            <div class="card rounded-circle color_image img_card">
                                <img src="img/shoes_image/color_image.jpg" title="color image" alt="image"
                                    class="img-fluid img-thumbnail rounded-circle">
                            </div>
                        </a>
                    </div>
                    <div class="p-1">
                        <a href="#">
                            <div class="card rounded-circle color_image img_card">
                                <img src="img/shoes_image/img2.jpg" title="color image" alt="image"
                                    class="img-thumbnail img-fluid rounded-circle">
                            </div>
                        </a>
                    </div>

                </div>
                <div class="row mt-5">
                    <button class="btn btn-light btn-lg border-secondary" title="add to cart">ADD TO CART</button>
                    <button class="btn btn-success btn-lg mx-4" title="buy now">BUY NOW</button>
                </div>
                <div class="row mt-5">
                    <span class="size">DELIVERY OPTIONS</span>
                </div>
                <div class="row mt-3">
                    <form action="">
                        <div class="d-flex">
                            <input class="form-control input-lg" id="inputlg" type="text" placeholder="Check Pincode"
                                size="30">
                            <button class="btn btn-success btn-md text-center">CHECK</button>
                        </div>
                    </form>
                </div>
                <div class="row mt-5 icon-section">
                    <i class="fa fa-truck" aria-hidden="true"></i>
                    <span class="ml-2">Free shipping on above Rs. 600</span>
                </div>
                <div class="row mt-2 icon-section">
                    <i class="fa fa-repeat" aria-hidden="true"></i>
                    <span class="ml-2">15 days free returns</span>
                </div>
                <div class="row mt-2 icon-section">
                    <i class="fa fa-shield" aria-hidden="true"></i>
                    <span class="ml-2">100% Originals</span>
                </div>
                <div class="row mt-2 icon-section">
                    <i class="fa fa-truck" aria-hidden="true"></i>
                    <span class="ml-2">Usually Ships in 3-4 Days</span>
                </div>
                <div class="row mt-4">
                    <span class="product_detail"><strong>PRODUCT DETAILS</strong></span>
                </div>
                <div class="row">
                    <div class="product_name mt-2">Formal Shoes</div>
                </div>
                <div class="row">
                    <div class="card border border-white">
                        <span>Type</span>
                        <h3>Lace Up</h3>
                    </div>
                    <div class="card border border-white product_card1">
                        <span>Upper Material</span>
                        <h3>Leather</h3>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="card border border-white">
                        <span>Occasion</span>
                        <h3>Formal</h3>
                    </div>
                    <div class="card border border-white product_card2">
                        <span>Gender</span>
                        <h3>Men</h3>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="card border border-white">
                        <span>Colour</span>
                        <h3>Black</h3>
                    </div>
                    <div class="card border border-white product_card3">
                        <span>Brand</span>
                        <h3>Mochi</h3>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="card border border-white">
                        <span>Country of Origin</span>
                        <h3>India</h3>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-md-11 p-0">
                        <div id="accordion" class="accordion">
                            <div class="card mb-0">
                                <div class="card-header collapsed" data-toggle="collapse" href="#collapseOne">
                                    <a class="card-title">
                                        Care Instruction
                                    </a>
                                </div>
                                <div id="collapseOne" class="card-body collapse" data-parent="#accordion">
                                    <p>Keep your product dry avoid gettign it wet or damp. to clean it, simply wipe with
                                        a dry cloth. Keep fasteners and zip running smoothly by running pencil leads
                                        over the open teeth.
                                    </p>
                                </div>
                                <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion"
                                    href="#collapseTwo">
                                    <a class="card-title">
                                        Return And Shipping Policy
                                    </a>
                                </div>
                                <div id="collapseTwo" class="card-body collapse" data-parent="#accordion">
                                    <p>The return/replacement/refund policy is customer friendly so that you will feel
                                        more comfortable in making online buying decision. Only unused merchandise will
                                        be eligible for return within 15 days from the date of delivery. No
                                        return/refund/replacement on SALE products. You can return the merchandise via
                                        courier by raising the return request through the website My Account section by
                                        providing a valid reason. Please return to us the unused merchandise in original
                                        packing (Same box in which the merchandise was sent to you) for inspection.
                                        Replacement, if available will be couriered to you or a refund will be available
                                        for unhampered products.
                                    </p>
                                </div>
                                <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion"
                                    href="#collapseThree">
                                    <a class="card-title">
                                        Other Details
                                    </a>
                                </div>
                                <div id="collapseThree" class="collapse" data-parent="#accordion">
                                    <div class="card-body"><strong>Manufactured by : </strong>C 15/3 AND 4, C 15/3 AND
                                        4, UPSIDC SITE C
                                        INDUSTRIAL AREA, MA SIKANDARA,UP 282007
                                    </div>
                                </div>
                                <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion"
                                    href="#collapseFour">
                                    <a class="card-title">
                                        Consumer Complain Contact
                                    </a>
                                </div>
                                <div id="collapseFour" class="card-body collapse" data-parent="#accordion">
                                    <p>For customer complaint contact at marketer address
                                        <strong>Email: </strong>customercare@gmail.com<br>
                                        <strong>Phone: </strong>+91-1234567890
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 similar_product">
                <h1 class="text-center">SIMILAR PRODUCTS</h1>
            </div>
        </div>
        <div class="row">
            <div class="container-fluid similar-product">
                <div class="product-item d-flex pt-5">
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
        </div>
        <div class="row mb-5 pb-5">
            <div class="col-md-12 similar_product">
                <h1 class="text-center">CUSTOMER REVIEWS</h1>
            </div>
            <div class="col-md-6 text-center mt-5">
                <button type="button" class="btn btn-secondary bg-success btn-sm">0<i
                        class="fa fa-star"></i></button><span>0 reviews</span>
                <h4 class="mt-3">No Review Found</h4>
            </div>
            <div class="col-md-6 mt-5">
                <div class="row mb-5">
                    <div class="col-md-3 your_rating">
                        Your Rating<sup>*</sup>
                    </div>
                    <div class="col-md-9">
                        <div class="rating">
                            <input type="radio" name="rating" value="5" id="5"><label for="5">☆</label>
                            <input type="radio" name="rating" value="4" id="4"><label for="4">☆</label>
                            <input type="radio" name="rating" value="3" id="3"><label for="3">☆</label>
                            <input type="radio" name="rating" value="2" id="2"><label for="2">☆</label>
                            <input type="radio" name="rating" value="1" id="1"><label for="1">☆</label>
                        </div>
                    </div>
                </div>


                <div class="col-md-12">
                    <form action="">
                        <div class="form-group your_rating">
                            <label for="name">Name <sup>*</sup></label>
                            <input type="text" class="form-control" name="name" placeholder="Name">
                        </div>
                        <div class="form-group your_rating">
                            <label for="title">Title <sup>*</sup></label>
                            <input type="text" class="form-control" name="title" placeholder="Title">
                        </div>
                        <div class="form-group your_rating">
                            <label for="">Your Review <sup>*</sup></label>
                            <input type="text" class="form-control" name="your_review"
                                placeholder="Your Review Description">
                        </div>
                        <div class="form-group mt-5 your_rating">
                            <input type="submit" class="btn btn-success btn-lg" name="submit">
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <?php
    include 'footer.php';
    ?>
    <script>
    $(document).ready(function() {

        $('.slideshow-thumbnails').hover(function() {
            changeSlide($(this));
        });

        $(document).mousemove(function(e) {
            var x = e.clientX;
            var y = e.clientY;

            var x = e.clientX;
            var y = e.clientY;

            var imgx1 = $('.slideshow-items.active').offset().left;
            var imgx2 = $('.slideshow-items.active').outerWidth() + imgx1;
            var imgy1 = $('.slideshow-items.active').offset().top;
            var imgy2 = $('.slideshow-items.active').outerHeight() + imgy1;

            if (x > imgx1 && x < imgx2 && y > imgy1 && y < imgy2) {
                $('#lens').show();
                $('#result').show();
                imageZoom($('.slideshow-items.active'), $('#result'), $('#lens'));
            } else {
                $('#lens').hide();
                $('#result').hide();
            }

        });

    });

    function imageZoom(img, result, lens) {

        result.width(img.innerWidth());
        result.height(img.innerHeight());
        lens.width(img.innerWidth() / 2);
        lens.height(img.innerHeight() / 2);

        result.offset({
            top: img.offset().top,
            left: img.offset().left + img.outerWidth() + 10
        });

        var cx = img.innerWidth() / lens.innerWidth();
        var cy = img.innerHeight() / lens.innerHeight();

        result.css('backgroundImage', 'url(' + img.attr('src') + ')');
        result.css('backgroundSize', img.width() * cx + 'px ' + img.height() * cy + 'px');

        lens.mousemove(function(e) {
            moveLens(e);
        });
        img.mousemove(function(e) {
            moveLens(e);
        });
        lens.on('touchmove', function() {
            moveLens();
        })
        img.on('touchmove', function() {
            moveLens();
        })

        function moveLens(e) {
            var x = e.clientX - lens.outerWidth() / 2;
            var y = e.clientY - lens.outerHeight() / 2;
            if (x > img.outerWidth() + img.offset().left - lens.outerWidth()) {
                x = img.outerWidth() + img.offset().left - lens.outerWidth();
            }
            if (x < img.offset().left) {
                x = img.offset().left;
            }
            if (y > img.outerHeight() + img.offset().top - lens.outerHeight()) {
                y = img.outerHeight() + img.offset().top - lens.outerHeight();
            }
            if (y < img.offset().top) {
                y = img.offset().top;
            }
            lens.offset({
                top: y,
                left: x
            });
            result.css('backgroundPosition', '-' + (x - img.offset().left) * cx + 'px -' + (y - img.offset().top) * cy +
                'px');
        }
    }


    function changeSlide(elm) {
        $('.slideshow-items').removeClass('active');
        $('.slideshow-items').eq(elm.index()).addClass('active');
        $('.slideshow-thumbnails').removeClass('active');
        $('.slideshow-thumbnails').eq(elm.index()).addClass('active');
    }
    </script>
</body>

</html>