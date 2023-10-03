
<style>
@media (max-width: 768px) {
    .carousel-inner .carousel-item>div {
        display: none;
    }

    .carousel-inner .carousel-item>div:first-child {
        display: block;
    }
}

.carousel-inner .carousel-item.active,
.carousel-inner .carousel-item-next,
.carousel-inner .carousel-item-prev {
    display: flex;
}

/* display 3 */
@media (min-width: 768px) {

    .carousel-inner .carousel-item-right.active,
    .carousel-inner .carousel-item-next {
        transform: translateX(33.333%);
    }

    .carousel-inner .carousel-item-left.active,
    .carousel-inner .carousel-item-prev {
        transform: translateX(-33.333%);
    }
}

.carousel-inner .carousel-item-right,
.carousel-inner .carousel-item-left {
    transform: translateX(0);
}

.multiple_carousel {
    margin-top: 30px;
    margin-bottom: 30px;

    padding: 0px;
}

</style>
<!-- </head> -->

<div class="container text-center multiple_carousel">
    <!-- <h2 class="font-weight-light p-2"><strong>Featured Product</strong></h2> -->
    <div class="container">
        <h3 class="category text-uppercase"><span>Featured Product</span></h3>
        <p class="text-center">One of the large strategic objectives for the product</p>
    </div>
    <div class="row mx-auto my-auto">
        <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
            <div class="carousel-inner w-100" role="listbox">
                <div class="carousel-item active">
                    <div class="col-md-4">
                        <div class="card card-body">
                            <div class="thumb-wrapper">
                                <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                <div class="img-box">
                                    <img src="img/carousel_image/shoes.jpg" class="img-fluid" alt="image20">
                                </div>
                                <div class="thumb-content">
                                    <h4>Shoes</h4>
                                    <div class="star-rating">
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                    <p class="item-price"><strike>Rs. 15000.00</strike> <b>Rs. 13999.00</b></p>
                                    <a href="#" class="main_btn w-100">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-md-4">
                        <div class="card card-body">
                            <div class="thumb-wrapper">
                                <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                <div class="img-box">
                                    <img src="img/carousel_image/shoes.jpg" class="img-fluid" alt="image21">
                                </div>
                                <div class="thumb-content">
                                    <h4>Shoes</h4>
                                    <div class="star-rating">
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                    <p class="item-price"><strike>Rs. 15000.00</strike> <b>Rs. 13999.00</b></p>
                                    <a href="#" class="main_btn w-100">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-md-4">
                        <div class="card card-body">
                            <div class="thumb-wrapper">
                                <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                <div class="img-box">
                                    <img src="img/carousel_image/shoes.jpg" class="img-fluid" alt="image22">
                                </div>
                                <div class="thumb-content">
                                    <h4>Shoes</h4>
                                    <div class="star-rating">
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                    <p class="item-price"><strike>Rs. 15000.00</strike> <b>Rs. 13999.00</b></p>
                                    <a href="#" class="main_btn w-100">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-md-4">
                        <div class="card card-body">
                            <div class="thumb-wrapper">
                                <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                <div class="img-box">
                                    <img src="img/carousel_image/shoes.jpg" class="img-fluid" alt="image23">
                                </div>
                                <div class="thumb-content">
                                    <h4>Shoes</h4>
                                    <div class="star-rating">
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                    <p class="item-price"><strike>Rs. 15000.00</strike> <b>Rs. 13999.00</b></p>
                                    <a href="#" class="main_btn w-100">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-md-4">
                        <div class="card card-body">
                            <div class="thumb-wrapper">
                                <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                <div class="img-box">
                                    <img src="img/carousel_image/shoes.jpg" class="img-fluid" alt="image24">
                                </div>
                                <div class="thumb-content">
                                    <h4>Shoes</h4>
                                    <div class="star-rating">
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                    <p class="item-price"><strike>Rs. 15000.00</strike> <b>Rs. 13999.00</b></p>
                                    <a href="#" class="main_btn w-100">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-md-4">
                        <div class="card card-body">
                            <div class="thumb-wrapper">
                                <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                <div class="img-box">
                                    <img src="img/carousel_image/shoes.jpg" class="img-fluid" alt="image25">
                                </div>
                                <div class="thumb-content">
                                    <h4>Shoes</h4>
                                    <div class="star-rating">
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                    <p class="item-price"><strike>Rs. 15000.00</strike> <b>Rs. 13999.00</b></p>
                                    <a href="#" class="main_btn w-100">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev w-auto" href="#recipeCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon bg-dark border border-dark rounded-circle"
                    aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next w-auto" href="#recipeCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon bg-dark border border-dark rounded-circle"
                    aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

</div>
<script type="text/javascript">
$('#recipeCarousel').carousel({
    interval: 10000
})

$('.carousel .carousel-item').each(function() {
    var minPerSlide = 3;
    var next = $(this).next();
    if (!next.length) {
        next = $(this).siblings(':first');
    }
    next.children(':first-child').clone().appendTo($(this));

    for (var i = 0; i < minPerSlide; i++) {
        next = next.next();
        if (!next.length) {
            next = $(this).siblings(':first');
        }

        next.children(':first-child').clone().appendTo($(this));
    }
});
</script>