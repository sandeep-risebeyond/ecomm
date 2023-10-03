<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce / Wishlist</title>

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <link rel="icon" href="img/fevicon.png" type="image/png" />
        <title>Ecommerce</title>
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
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
        </script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    </head>
</head>

<body>
    <?php
include 'navbar.php';
?>
    <div class="container body_container">
        <div class="row">
            <div class="col-md-12 text-center mb-5 mt-5 p-5">
                <h1>Wishlist</h1>
            </div>
            <div class="col-md-3" id="div1">
                <button class="border rounded-circle button1">X</button>
                <div class="card border border-white">
                    <img src="img/wishlist/image1.jpg" alt="">
                </div>
                <div class="text-center wishlist_detail"><a href="men_shoes_desc.php">VIEW DETAIL</a></div>
                <div>Men black Shoes</div>
                <div class="mt-2">Size: 7 8 9 10 11</div>
                <div><strong>Rs. 2490.00</strong></div>
            </div>
            <div class="col-md-3" id="div2">
                <button class="border rounded-circle button2">X</button>
                <div class="card border border-white">
                    <img src="img/wishlist/image1.jpg" alt="">
                </div>
                <div class="text-center wishlist_detail"><a href="men_shoes_desc.php">VIEW DETAIL</a></div>
                <div>Men black Shoes</div>
                <div class="mt-2">Size: 7 8 9 10 11</div>
                <div><strong>Rs. 2490.00</strong></div>
            </div>
            <div class="col-md-3" id="div3">
                <button class="border rounded-circle button3">X</button>
                <div class="card border border-white">
                    <img src="img/wishlist/image1.jpg" alt="">
                </div>
                <div class="text-center wishlist_detail"><a href="men_shoes_desc.php">VIEW DETAIL</a></div>
                <div>Men black Shoes</div>
                <div class="mt-2">Size: 7 8 9 10 11</div>
                <div><strong>Rs. 2490.00</strong></div>
            </div>
            <div class="col-md-3" id="div4">
                <button class="border rounded-circle button4">X</button>
                <div class="card border border-white">
                    <img src="img/wishlist/image1.jpg" alt="">
                </div>
                <div class="text-center wishlist_detail"><a href="men_shoes_desc.php">VIEW DETAIL</a></div>
                <div>Men black Shoes</div>
                <div class="mt-2">Size: 7 8 9 10 11</div>
                <div><strong>Rs. 2490.00</strong></div>
            </div>
        </div>
    </div>
    <?php include 'footer.php' ?>

    <!-- script for remove div section -->
    <script>
    $(document).ready(function() {
        $(".button1").click(function() {
            $("#div1").remove();
        });
    });
    </script>
    <script>
    $(document).ready(function() {
        $(".button2").click(function() {
            $("#div2").remove();
        });
    });
    </script>
    <script>
    $(document).ready(function() {
        $(".button3").click(function() {
            $("#div3").remove();
        });
    });
    </script>
    <script>
    $(document).ready(function() {
        $(".button4").click(function() {
            $("#div4").remove();
        });
    });
    </script>
</body>

</html>