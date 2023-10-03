<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="icon" href="img/fevicon.png" type="image/png" />
    <title>Ecommerce / Cart</title>
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
    <!-- increment quantity script for product2 -->
    <script type="text/javascript">
    function incrementValue2() {
        var value = parseInt(document.getElementById('number2').value, 10);
        value = isNaN(value) ? 0 : value;
        if (value < 10) {
            value++;
            document.getElementById('number2').value = value;
        }
    }

    function decrementValue2() {
        var value = parseInt(document.getElementById('number2').value, 10);
        value = isNaN(value) ? 0 : value;
        if (value > 1) {
            value--;
            document.getElementById('number2').value = value;
        }
    }
    </script>
    <style>
        .coupan_button{
            background-color:#71CD14;
        }
    </style>
</head>

<body>
    <?php
include 'navbar.php';
?>
    <div class="container main_section" style="margin-top:110px;">
        <div class="row">
            <div class="col-md-12 mb-5">
                <h1 class="shopping_cart">Shopping Cart</h1>
            </div>
            <div class="col-md-8">
                <div class="row mb-1">
                    <div class="col-md-7">
                        <span>Items(2)</span>
                    </div>
                    <div class="col-md-3">
                        <span>Qty</span>
                    </div>
                    <div class="col-md-2">
                        <span>Subtotal</span>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-7">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card">
                                    <img src="img/shoes4.jpg" alt="image">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <ul>
                                    <li>Men Black Shoes</li>
                                    <li class="mt-1">Rs : 1745.00 <span><del>Rs:
                                                3490.00</del></span><span><small class="text-success">(50%
                                                OFF)</small></span></li>
                                    <li class="mt-1"><span class="text-info">(Inclusive of all taxes)</span></li>
                                    <li>
                                        <div class="row">
                                            <span class="font-medium mt-2 pl-3">SIZE: </span>
                                            <select class="size border border-white" id="sel1">
                                                <option>6</option>
                                                <option>7</option>
                                                <option>8</option>
                                                <option>9</option>
                                                <option>10</option>
                                                <option>11</option>
                                            </select>
                                        </div>
                                    </li>
                                    <li><i class="fa fa-trash-o"></i><a href="#"><small>Remove</small></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <form id='myform' method='POST' action='#'>
                            <input type='button' value='-' class='qtyminus' field='quantity' />
                            <input type='text' id="input-number" name='quantity' value='1' class='qty' size="1" max="10"
                                readonly />
                            <input type='button' value='+' class='qtyplus' field='quantity' />
                        </form>
                    </div>
                    <div class="col-md-2">
                        <span class="span product-total-price" data-price="1745.00">Rs. 1745.00</span>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-7">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card">
                                    <img src="img/shoes4.jpg" alt="image">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <ul>
                                    <li>Men Black Shoes</li>
                                    <li class="mt-1">Rs : 1745.00 <span><del>Rs:
                                                3490.00</del></span><span><small class="text-success">(50%
                                                OFF)</small></span></li>
                                    <li class="mt-1"><span class="text-info">(Inclusive of all taxes)</span></li>
                                    <li>
                                        <div class="row">
                                            <span class="font-medium mt-2 pl-3">SIZE: </span>
                                            <select class="size mx-1 border border-white" id="sel1">
                                                <option>6</option>
                                                <option>7</option>
                                                <option>8</option>
                                                <option>9</option>
                                                <option>10</option>
                                                <option>11</option>
                                            </select>
                                        </div>
                                    </li>

                                    <li><i class="fa fa-trash-o"></i><a href="#"><small>Remove</small></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="item">
                            <input type="button" onclick="decrementValue2()" value="-" />
                            <input type="text" name="quantity" value="1" maxlength="2" max="10" size="1" id="number2"
                                readonly />
                            <input type="button" onclick="incrementValue2()" value="+" />
                        </div>
                    </div>
                    <div class="col-md-2">
                        <span>Rs. 2690.00</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <button class="btn bg-white btn-sm w-75 mt-5 border border-secondary"><i
                                class="fa fa-heart-o m-1 text-secondary"></i><a href="#" class="text-secondary">ADD MORE
                                FOR WISHLIST</a></button>
                    </div>
                    <div class="col-md-6">
                        <button class="btn bg-white btn-sm w-75 mt-5 border border-secondary"><i
                                class="fa fa-shopping-cart m-1 text-secondary"></i><a href=""
                                class="text-secondary">CONTINUE SHOPPING</a></button>
                    </div>
                </div>
            </div>
            <div class="col-md-4 bg-light">
                <h3 class="order_summary">Order Summary</h3>
                <div class="row mt-3">
                    <div class="col-md-6">
                        <span>Coupans</span>
                    </div>
                    <div class="col-md-6">
                        <button class="btn coupan_btn btn-sm w-50 text-white" data-toggle="modal"
                            data-target="#exampleModalCenter" title="Apply Now">Apply</button>
                    </div>
                </div>
                <h3 class="order_summary mt-1">Price Details</h3>
                <div class="row mt-3">
                    <div class="col-md-6">
                        <span>total MRP</span>
                    </div>
                    <div class="col-md-6">
                        <span>Rs. 5380.00</span>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6">
                        <span>total Discount on MRP</span>
                    </div>
                    <div class="col-md-6">
                        <span>- Rs. 0.00</span>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6">
                        <span>Discount Coupan</span>
                    </div>
                    <div class="col-md-6">
                        <span>- Rs. 0.00</span>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6">
                        <span>Shipping Charge</span>
                    </div>
                    <div class="col-md-6">
                        <span>Rs. 0.00</span>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6">
                        <span><strong>Order Total</strong></span>
                    </div>
                    <div class="col-md-6">
                        <span><strong>Rs. 5380.00</strong></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <input type="button" class="btn w-75 mt-3 main_btn"
                            onclick="window.location.href='checkout.php';" title="checkout the Product" value="CHECKOUT">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">APPLY COUPON</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Coupon Code"
                            aria-label="Coupan Code" aria-describedby="button-addon2">
                        <div class="input-group-append">
                            <button class="btn coupan_button text-white" type="button" id="button-addon2" title="Apply Coupon Code">Apply</button>
                        </div>
                    </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <?php
include 'footer.php';
?>
    <!-- script for quantity increment -->
    <script type="text/javascript">
    var increment = document.querySelector('#myform .qtyplus');
    var decrement = document.querySelector('#myform .qtyminus');
    increment.addEventListener('click', incrementValue);
    decrement.addEventListener('click', decrementValue);

    function incrementValue() {
        var value = parseInt(document.getElementById('input-number').value, 10);
        value = isNaN(value) ? 0 : value;
        if (isNaN(value) || value < 10) {
            value++;
            document.getElementById('input-number').value = value;
        }
        productpagetotal();
    }


    function decrementValue() {
        var value = parseInt(document.getElementById('input-number').value, 10);
        if (isNaN(value) || value < 1) {
            value = 1;
        }

        value--;
        document.getElementById('input-number').value = value;
        productpagetotal();
    }

    function productpagetotal() {
        var totalPrice = document.querySelector('.product-total-price');
        var price = totalPrice.dataset.price;
        var quantity = document.getElementById('input-number').value;
        var sum = price * quantity;
        sum = Math.round(sum * 100) / 100;
        totalPrice.innerHTML = 'Rs. ' + sum + '.00';
    }
    </script>
</body>

</html>