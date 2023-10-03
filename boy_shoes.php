<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce / Boys Shoes</title>
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
    <link rel="stylesheet" href="css/footwear/boystyle.css" />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>
    <!-- material icon -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="css/footwear/boysscript.js" type="text/javascript"></script>
</head>

<body>
    <?php
    include 'navbar.php';
    ?>

    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item" aria-current="page"><a href="footwear.php">Footwear</a></li>
                <li class="breadcrumb-item" aria-current="page"><a href="kids_shoes.php">Kids</a></li>
                <li class="breadcrumb-item active" aria-current="page">Boys</li>
            </ol>
        </nav>
    </div>
    <div class="container-fluid">
        Boys Shoes - 35 items
        <div class="row">
            <div class="col-md-3 col-lg-3 col-sm-3">
                FILTERS
            </div>
            <div class="col-md-7 col-lg-7 col-sm-7">
                <ul class="d-flex">
                    <li class="p-1"><a href="#">Boys Sandals</a></li>
                    <li class="p-1"><a href="#">Boys Loafers</a></li>
                    <li class="p-1"><a href="#">Boys Slippers</a></li>
                    <li class="p-1"><a href="#">Boys Formal</a></li>
                    <li class="p-1"><a href="#">Boys Sneakers</a></li>
                </ul>
            </div>
            <div class="col-md-2 col-sm-2 col-lg-2">
                <div class="dropdown">
                    <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Sort By : Popularity
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Price : Low to High</a>
                        <a class="dropdown-item" href="#">Price : High to Low</a>
                        <a class="dropdown-item" href="#">Discount</a>
                        <a class="dropdown-item" href="#">Popularity</a>
                        <a class="dropdown-item" href="#">Newest</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 bg-light">
                <div id="accordion">
                    <div class="card active">
                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                                <button class="btn btn-link" data-toggle="collapse" onclick="sizeFunction()"
                                    data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Size
                                </button>
                            </h5>
                        </div>

                        <div id="size" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">
                                <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                    <div class="btn-group" role="group" aria-label="Third group">
                                        <button type="button" class="btn btn-info m-1">1</button>
                                        <button type="button" class="btn btn-info m-1">2</button>
                                        <button type="button" class="btn btn-info m-1">3</button>
                                        <button type="button" class="btn btn-info m-1">4</button>
                                        <button type="button" class="btn btn-info m-1">5</button>
                                        <button type="button" class="btn btn-info m-1">6</button>
                                    </div>
                                    <div class="btn-group" role="group" aria-label="Second group">
                                        <button type="button" class="btn btn-info m-1">7</button>
                                        <button type="button" class="btn btn-info m-1">8</button>
                                        <button type="button" class="btn btn-info m-1">9</button>
                                        <button type="button" class="btn btn-info m-1">10</button>
                                        <button type="button" class="btn btn-info m-1">11</button>
                                    </div>
                                    <div class="btn-group" role="group" aria-label="Third group">

                                        <button type="button" class="btn btn-info m-1">12</button>
                                        <button type="button" class="btn btn-info m-1">13</button>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" onclick="brandFunction()" data-toggle="collapse"
                                    data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Brand
                                </button>
                            </h5>
                        </div>
                        <div id="brand" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="card-body brand_container">
                                <div class="input-group input-group-sm mb-1">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <input type="checkbox" aria-label="Checkbox for following text input">
                                        </div>
                                    </div>
                                    <!-- <input type="text" class="form-control" aria-label="Text input with checkbox"> -->
                                    <p class="form-control">J . Fontini</p>
                                </div>
                                <div class="input-group input-group-sm mb-1">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <input type="checkbox" aria-label="Checkbox for following text input">
                                        </div>
                                    </div>
                                    <p class="form-control">Mochi</p>
                                </div>
                                <div class="input-group input-group-sm mb-1">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <input type="checkbox" aria-label="Checkbox for following text input">
                                        </div>
                                    </div>
                                    <p class="form-control">Genx</p>
                                </div>
                                <div class="input-group input-group-sm mb-1">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <input type="checkbox" aria-label="Checkbox for following text input">
                                        </div>
                                    </div>
                                    <p class="form-control">Language</p>
                                </div>
                                <div class="input-group input-group-sm mb-1">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <input type="checkbox" aria-label="Checkbox for following text input">
                                        </div>
                                    </div>
                                    <p class="form-control">Von Wellx</p>
                                </div>
                                <div class="input-group input-group-sm mb-1">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <input type="checkbox" aria-label="Checkbox for following text input">
                                        </div>
                                    </div>
                                    <p class="form-control">ID</p>
                                </div>
                                <div class="input-group input-group-sm mb-1">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <input type="checkbox" aria-label="Checkbox for following text input">
                                        </div>
                                    </div>
                                    <p class="form-control">Buckaroo</p>
                                </div>
                                <div class="input-group input-group-sm mb-1">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <input type="checkbox" aria-label="Checkbox for following text input">
                                        </div>
                                    </div>
                                    <p class="form-control">Egoss</p>
                                </div>
                                <div class="input-group input-group-sm mb-1">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <input type="checkbox" aria-label="Checkbox for following text input">
                                        </div>
                                    </div>
                                    <p class="form-control">Mardi Gras</p>
                                </div>
                                <div class="input-group input-group-sm mb-1">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <input type="checkbox" aria-label="Checkbox for following text input">
                                        </div>
                                    </div>
                                    <p class="form-control">Activ</p>
                                </div>
                                <div class="input-group input-group-sm mb-1">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <input type="checkbox" aria-label="Checkbox for following text input">
                                        </div>
                                    </div>
                                    <p class="form-control">Doubleu</p>
                                </div>
                                <div class="input-group input-group-sm mb-1">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <input type="checkbox" aria-label="Checkbox for following text input">
                                        </div>
                                    </div>
                                    <p class="form-control">Ecco-Gt</p>
                                </div>
                                <div class="input-group input-group-sm mb-1">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <input type="checkbox" aria-label="Checkbox for following text input">
                                        </div>
                                    </div>
                                    <p class="form-control">Crocs</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" onclick="priceFunction()" data-toggle="collapse"
                                    data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Price
                                </button>
                            </h5>
                        </div>
                        <div id="price" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                            <div class="card-body">
                                <div class="input-group input-group-sm mb-1">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <input type="checkbox" aria-label="Checkbox for following text input">
                                        </div>
                                    </div>
                                    <p class="form-control">Rs. 1000 To Rs. 2000</p>
                                </div>
                                <div class="input-group input-group-sm mb-1">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <input type="checkbox" aria-label="Checkbox for following text input">
                                        </div>
                                    </div>
                                    <p class="form-control">Rs. 2001 To Rs. 3000</p>
                                </div>
                                <div class="input-group input-group-sm mb-1">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <input type="checkbox" aria-label="Checkbox for following text input">
                                        </div>
                                    </div>
                                    <p class="form-control">Rs. 3001 To Rs. 4000</p>
                                </div>
                                <div class="input-group input-group-sm mb-1">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <input type="checkbox" aria-label="Checkbox for following text input">
                                        </div>
                                    </div>
                                    <p class="form-control">Rs. 4001 To Rs. 5000</p>
                                </div>
                                <div class="input-group input-group-sm mb-1">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <input type="checkbox" aria-label="Checkbox for following text input">
                                        </div>
                                    </div>
                                    <p class="form-control">Rs. 5001 To Rs. 6000</p>
                                </div>
                                <div class="input-group input-group-sm mb-1">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <input type="checkbox" aria-label="Checkbox for following text input">
                                        </div>
                                    </div>
                                    <p class="form-control">Rs. 6001 To Rs. 7000</p>
                                </div>
                                <div class="input-group input-group-sm mb-1">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <input type="checkbox" aria-label="Checkbox for following text input">
                                        </div>
                                    </div>
                                    <p class="form-control">More Than Rs. 7000</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingFour">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" onclick="heeltypeFunction()"
                                    data-toggle="collapse" data-target="#collapseFour" aria-expanded="false"
                                    aria-controls="collapseFour">
                                    Heel Type
                                </button>
                            </h5>
                        </div>
                        <div id="heeltype" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                            <div class="card-body">
                                <div class="input-group input-group-sm mb-1">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <input type="checkbox" aria-label="Checkbox for following text input">
                                        </div>
                                    </div>
                                    <p class="form-control">Regular</p>
                                </div>
                                <div class="input-group input-group-sm mb-1">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <input type="checkbox" aria-label="Checkbox for following text input">
                                        </div>
                                    </div>
                                    <p class="form-control">Flats</p>
                                </div>
                                <div class="input-group input-group-sm mb-1">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <input type="checkbox" aria-label="Checkbox for following text input">
                                        </div>
                                    </div>
                                    <p class="form-control">Block</p>
                                </div>
                                <div class="input-group input-group-sm mb-1">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <input type="checkbox" aria-label="Checkbox for following text input">
                                        </div>
                                    </div>
                                    <p class="form-control">Wedges</p>
                                </div>
                                <div class="input-group input-group-sm mb-1">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <input type="checkbox" aria-label="Checkbox for following text input">
                                        </div>
                                    </div>
                                    <p class="form-control">Platform</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingFive">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" onclick="heelheightFunction()"
                                    data-toggle="collapse" data-target="#collapseFive" aria-expanded="false"
                                    aria-controls="collapseFive">
                                    Heel Height
                                </button>
                            </h5>
                        </div>
                        <div id="heelheight" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                            <div class="card-body">
                                <div class="input-group input-group-sm mb-1">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <input type="checkbox" aria-label="Checkbox for following text input">
                                        </div>
                                    </div>
                                    <p class="form-control">1.5</p>
                                </div>
                                <div class="input-group input-group-sm mb-1">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <input type="checkbox" aria-label="Checkbox for following text input">
                                        </div>
                                    </div>
                                    <p class="form-control">2.0</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingSix">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" onclick="typeFunction()" data-toggle="collapse"
                                    data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    Type
                                </button>
                            </h5>
                        </div>
                        <div id="type" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
                            <div class="card-body type_container">
                                <div class="input-group input-group-sm mb-1">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <input type="checkbox" aria-label="Checkbox for following text input">
                                        </div>
                                    </div>
                                    <p class="form-control">Lace Up</p>
                                </div>
                                <div class="input-group input-group-sm mb-1">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <input type="checkbox" aria-label="Checkbox for following text input">
                                        </div>
                                    </div>
                                    <p class="form-control">Boots</p>
                                </div>
                                <div class="input-group input-group-sm mb-1">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <input type="checkbox" aria-label="Checkbox for following text input">
                                        </div>
                                    </div>
                                    <p class="form-control">Moccasin</p>
                                </div>
                                <div class="input-group input-group-sm mb-1">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <input type="checkbox" aria-label="Checkbox for following text input">
                                        </div>
                                    </div>
                                    <p class="form-control">Chappals</p>
                                </div>
                                <div class="input-group input-group-sm mb-1">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <input type="checkbox" aria-label="Checkbox for following text input">
                                        </div>
                                    </div>
                                    <p class="form-control">Kolhapuris</p>
                                </div>
                                <div class="input-group input-group-sm mb-1">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <input type="checkbox" aria-label="Checkbox for following text input">
                                        </div>
                                    </div>
                                    <p class="form-control">Sandals</p>
                                </div>
                                <div class="input-group input-group-sm mb-1">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <input type="checkbox" aria-label="Checkbox for following text input">
                                        </div>
                                    </div>
                                    <p class="form-control">Jutis</p>
                                </div>
                                <div class="input-group input-group-sm mb-1">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <input type="checkbox" aria-label="Checkbox for following text input">
                                        </div>
                                    </div>
                                    <p class="form-control">Oxford</p>
                                </div>
                                <div class="input-group input-group-sm mb-1">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <input type="checkbox" aria-label="Checkbox for following text input">
                                        </div>
                                    </div>
                                    <p class="form-control">Brogue</p>
                                </div>
                                <div class="input-group input-group-sm mb-1">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <input type="checkbox" aria-label="Checkbox for following text input">
                                        </div>
                                    </div>
                                    <p class="form-control">Sneakers</p>
                                </div>
                                <div class="input-group input-group-sm mb-1">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <input type="checkbox" aria-label="Checkbox for following text input">
                                        </div>
                                    </div>
                                    <p class="form-control">Pathanis</p>
                                </div>
                                <div class="input-group input-group-sm mb-1">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <input type="checkbox" aria-label="Checkbox for following text input">
                                        </div>
                                    </div>
                                    <p class="form-control">Monk</p>
                                </div>
                                <div class="input-group input-group-sm mb-1">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <input type="checkbox" aria-label="Checkbox for following text input">
                                        </div>
                                    </div>
                                    <p class="form-control">Comfort</p>
                                </div>
                                <div class="input-group input-group-sm mb-1">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <input type="checkbox" aria-label="Checkbox for following text input">
                                        </div>
                                    </div>
                                    <p class="form-control">Paduka</p>
                                </div>
                                <div class="input-group input-group-sm mb-1">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <input type="checkbox" aria-label="Checkbox for following text input">
                                        </div>
                                    </div>
                                    <p class="form-control">Flip Flops</p>
                                </div>
                                <div class="input-group input-group-sm mb-1">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <input type="checkbox" aria-label="Checkbox for following text input">
                                        </div>
                                    </div>
                                    <p class="form-control">Clogs</p>
                                </div>
                                <div class="input-group input-group-sm mb-1">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <input type="checkbox" aria-label="Checkbox for following text input">
                                        </div>
                                    </div>
                                    <p class="form-control">Slippers</p>
                                </div>
                                <div class="input-group input-group-sm mb-1">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <input type="checkbox" aria-label="Checkbox for following text input">
                                        </div>
                                    </div>
                                    <p class="form-control">Slip Ons</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingSeven">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" onclick="liningFunction()" data-toggle="collapse"
                                    data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                    Lining Material
                                </button>
                            </h5>
                        </div>
                        <div id="lining" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion">
                            <div class="card-body">
                                <div class="input-group input-group-sm mb-1">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <input type="checkbox" aria-label="Checkbox for following text input">
                                        </div>
                                    </div>
                                    <p class="form-control">Leather</p>
                                </div>
                                <div class="input-group input-group-sm mb-1">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <input type="checkbox" aria-label="Checkbox for following text input">
                                        </div>
                                    </div>
                                    <p class="form-control">Synthetic</p>
                                </div>
                                <div class="input-group input-group-sm mb-1">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <input type="checkbox" aria-label="Checkbox for following text input">
                                        </div>
                                    </div>
                                    <p class="form-control">Fabric</p>
                                </div>
                                <div class="input-group input-group-sm mb-1">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <input type="checkbox" aria-label="Checkbox for following text input">
                                        </div>
                                    </div>
                                    <p class="form-control">N/A</p>
                                </div>
                                <div class="input-group input-group-sm mb-1">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <input type="checkbox" aria-label="Checkbox for following text input">
                                        </div>
                                    </div>
                                    <p class="form-control">Croslite</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingEight">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" onclick="colourFunction()" data-toggle="collapse"
                                    data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                    Colours
                                </button>
                            </h5>
                        </div>
                        <div id="colour" class="collapse" aria-labelledby="headingEight" data-parent="#accordion">
                            <div class="card-body color_container">
                                <div class="input-group input-group-sm mb-1">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <input type="checkbox" aria-label="Checkbox for following text input">
                                        </div>
                                    </div>
                                    <p class="form-control"><span class="dot_black mt-1"></span><span
                                            class="d-inline p-1">Black</span></p>
                                </div>
                                <div class="input-group input-group-sm mb-1">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <input type="checkbox" aria-label="Checkbox for following text input">
                                        </div>
                                    </div>
                                    <p class="form-control"><span class="dot_white mt-1"></span><span
                                            class="d-inline p-1">White</span></p>
                                </div>
                                <div class="input-group input-group-sm mb-1">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <input type="checkbox" aria-label="Checkbox for following text input">
                                        </div>
                                    </div>
                                    <p class="form-control"><span class="dot_gray mt-1"></span><span
                                            class="d-inline p-1">Gray</span></p>
                                </div>
                                <div class="input-group input-group-sm mb-1">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <input type="checkbox" aria-label="Checkbox for following text input">
                                        </div>
                                    </div>
                                    <p class="form-control"><span class="dot_red mt-1"></span><span
                                            class="d-inline p-1">Red</span></p>
                                </div>
                                <div class="input-group input-group-sm mb-1">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <input type="checkbox" aria-label="Checkbox for following text input">
                                        </div>
                                    </div>
                                    <p class="form-control"><span class="dot_green mt-1"></span><span
                                            class="d-inline p-1">Green</span></p>
                                </div>
                                <div class="input-group input-group-sm mb-1">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <input type="checkbox" aria-label="Checkbox for following text input">
                                        </div>
                                    </div>
                                    <p class="form-control"><span class="dot_blue mt-1"></span><span
                                            class="d-inline p-1">Blue</span></p>
                                </div>
                                <div class="input-group input-group-sm mb-1">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <input type="checkbox" aria-label="Checkbox for following text input">
                                        </div>
                                    </div>
                                    <p class="form-control"><span class="dot_yellow mt-1"></span><span
                                            class="d-inline p-1">Yellow</span></p>
                                </div>
                                <div class="input-group input-group-sm mb-1">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <input type="checkbox" aria-label="Checkbox for following text input">
                                        </div>
                                    </div>
                                    <p class="form-control"><span class="dot_orange mt-1"></span><span
                                            class="d-inline p-1">Orange</span></p>
                                </div>
                                <div class="input-group input-group-sm mb-1">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <input type="checkbox" aria-label="Checkbox for following text input">
                                        </div>
                                    </div>
                                    <p class="form-control"><span class="dot_violet mt-1"></span><span
                                            class="d-inline p-1">Violet</span></p>
                                </div>
                                <div class="input-group input-group-sm mb-1">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <input type="checkbox" aria-label="Checkbox for following text input">
                                        </div>
                                    </div>
                                    <p class="form-control"><span class="dot_tomato mt-1"></span><span
                                            class="d-inline p-1">Tomato Color</span></p>
                                </div>
                                <div class="input-group input-group-sm mb-1">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <input type="checkbox" aria-label="Checkbox for following text input">
                                        </div>
                                    </div>
                                    <p class="form-control"><span class="dot_dodgerblue mt-1"></span><span
                                            class="d-inline p-1">Dodger Blue</span></p>
                                </div>
                                <div class="input-group input-group-sm mb-1">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <input type="checkbox" aria-label="Checkbox for following text input">
                                        </div>
                                    </div>
                                    <p class="form-control"><span class="dot_msg mt-1"></span><span
                                            class="d-inline p-1">Medium Sea Green</span></p>
                                </div>
                                <div class="input-group input-group-sm mb-1">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <input type="checkbox" aria-label="Checkbox for following text input">
                                        </div>
                                    </div>
                                    <p class="form-control"><span class="dot_slateblue mt-1"></span><span
                                            class="d-inline p-1">Slate blue</span></p>
                                </div>
                                <div class="input-group input-group-sm mb-1">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <input type="checkbox" aria-label="Checkbox for following text input">
                                        </div>
                                    </div>
                                    <p class="form-control"><span class="dot_lightgray mt-1"></span><span
                                            class="d-inline p-1">Light Gray</span></p>
                                </div>
                                <div class="input-group input-group-sm mb-1">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <input type="checkbox" aria-label="Checkbox for following text input">
                                        </div>
                                    </div>
                                    <p class="form-control"><span class="dot_aqua mt-1"></span><span
                                            class="d-inline p-1">Aqua</span></p>
                                </div>
                                <div class="input-group input-group-sm mb-1">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <input type="checkbox" aria-label="Checkbox for following text input">
                                        </div>
                                    </div>
                                    <p class="form-control"><span class="dot_gold mt-1"></span><span
                                            class="d-inline p-1">Gold</span></p>
                                </div>
                                <div class="input-group input-group-sm mb-1">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <input type="checkbox" aria-label="Checkbox for following text input">
                                        </div>
                                    </div>
                                    <p class="form-control"><span class="dot_olive mt-1"></span><span
                                            class="d-inline p-1">Olive</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingNine">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" onclick="occasionFunction()"
                                    data-toggle="collapse" data-target="#collapseNine" aria-expanded="false"
                                    aria-controls="collapseNine">
                                    Occasion
                                </button>
                            </h5>
                        </div>
                        <div id="occasion" class="collapse" aria-labelledby="headingNine" data-parent="#accordion">
                            <div class="card-body">
                                <div class="input-group input-group-sm mb-1">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <input type="checkbox" aria-label="Checkbox for following text input">
                                        </div>
                                    </div>
                                    <p class="form-control">Formal</p>
                                </div>
                                <div class="input-group input-group-sm mb-1">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <input type="checkbox" aria-label="Checkbox for following text input">
                                        </div>
                                    </div>
                                    <p class="form-control">Ethnic</p>
                                </div>
                                <div class="input-group input-group-sm mb-1">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <input type="checkbox" aria-label="Checkbox for following text input">
                                        </div>
                                    </div>
                                    <p class="form-control">Party</p>
                                </div>
                                <div class="input-group input-group-sm mb-1">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <input type="checkbox" aria-label="Checkbox for following text input">
                                        </div>
                                    </div>
                                    <p class="form-control">Casual</p>
                                </div>
                                <div class="input-group input-group-sm mb-1">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <input type="checkbox" aria-label="Checkbox for following text input">
                                        </div>
                                    </div>
                                    <p class="form-control">Sports</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9">

                <section class="inspired_product_area section_gap_bottom_custom">
                    <div class="container">
                        <!-- <div class="row justify-content-center">
                            <div class="col-lg-12">
                                <div class="main_title">
                                    <h2><span>Inspired products</span></h2>
                                    <p>Bring called seed first of third give itself now ment</p>
                                </div>
                            </div>
                        </div> -->

                        <div class="row">
                            <div class="col-lg-3 col-md-6">
                                <div class="single-product card_section">
                                    <div class="product-img">
                                        <img class="img-fluid w-100" src="img/product/inspired-product/i1.jpg" alt="" />
                                        <div class="p_icon w-100 p-4">
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

                            <div class="col-lg-3 col-md-6">
                                <div class="single-product card_section">
                                    <div class="product-img">
                                        <img class="img-fluid w-100" src="img/product/inspired-product/i2.jpg" alt="" />
                                        <div class="p_icon w-100 p-4">
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

                            <div class="col-lg-3 col-md-6">
                                <div class="single-product card_section">
                                    <div class="product-img">
                                        <img class="img-fluid w-100" src="img/product/inspired-product/i3.jpg" alt="" />
                                        <div class="p_icon w-100 p-4">
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

                            <div class="col-lg-3 col-md-6">
                                <div class="single-product card_section">
                                    <div class="product-img">
                                        <img class="img-fluid w-100" src="img/product/inspired-product/i4.jpg" alt="" />
                                        <div class="p_icon w-100 p-4">
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

                            <div class="col-lg-3 col-md-6">
                                <div class="single-product card_section">
                                    <div class="product-img">
                                        <img class="img-fluid w-100" src="img/product/inspired-product/i5.jpg" alt="" />
                                        <div class="p_icon w-100 p-4">
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

                            <div class="col-lg-3 col-md-6">
                                <div class="single-product card_section">
                                    <div class="product-img">
                                        <img class="img-fluid w-100" src="img/product/inspired-product/i6.jpg" alt="" />
                                        <div class="p_icon w-100 p-4">
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

                            <div class="col-lg-3 col-md-6">
                                <div class="single-product card_section">
                                    <div class="product-img">
                                        <img class="img-fluid w-100" src="img/product/inspired-product/i7.jpg" alt="" />
                                        <div class="p_icon w-100 p-4">
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

                            <div class="col-lg-3 col-md-6">
                                <div class="single-product card_section">
                                    <div class="product-img">
                                        <img class="img-fluid w-100" src="img/product/inspired-product/i8.jpg" alt="" />
                                        <div class="p_icon w-100 p-4">
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
                            <div class="col-lg-3 col-md-6">
                                <div class="single-product card_section">
                                    <div class="product-img">
                                        <img class="img-fluid w-100" src="img/product/inspired-product/i6.jpg" alt="" />
                                        <div class="p_icon w-100 p-4">
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
                            <div class="col-lg-3 col-md-6">
                                <div class="single-product card_section">
                                    <div class="product-img">
                                        <img class="img-fluid w-100" src="img/product/inspired-product/i5.jpg" alt="" />
                                        <div class="p_icon w-100 p-4">
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

                            <div class="col-lg-3 col-md-6">
                                <div class="single-product card_section">
                                    <div class="product-img">
                                        <img class="img-fluid w-100" src="img/product/inspired-product/i5.jpg" alt="" />
                                        <div class="p_icon w-100 p-4">
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

                            <div class="col-lg-3 col-md-6">
                                <div class="single-product card_section">
                                    <div class="product-img">
                                        <img class="img-fluid w-100" src="img/product/inspired-product/shoes.png"
                                            alt="" />
                                        <div class="p_icon w-100 p-4">
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