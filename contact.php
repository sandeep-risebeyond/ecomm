<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="icon" href="img/fevicon.png" type="image/png" />
    <title>Ecommerce / Contact Us</title>
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
</head>

<body>

    <?php
include 'navbar.php';
?>

    <section class="banner_area" style="margin-top:100px;">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="banner_content d-md-flex justify-content-between align-items-center">
                    <div class="mb-3 mb-md-0">
                        <h2>Contact Us</h2>
                        <p>Very us move be blessed multiply night</p>
                    </div>
                    <div class="page_link">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Contact us</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container">


            <div class="row">
                <div class="col-12">
                    <h2 class="contact-title">Get in Touch</h2>
                </div>
                <div class="col-lg-8 mb-4 mb-lg-0">
                    <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm"
                        novalidate="novalidate">
                        <div class="row">

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control border border-secondary" name="name" id="name"
                                        type="text" placeholder="Enter your name" autocomplete="off" title="Name">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control border border-secondary" name="email" id="email"
                                        type="email" placeholder="Enter email address" autocomplete="off" title="Email">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input class="form-control border border-secondary" name="subject" id="subject"
                                        type="text" placeholder="Enter Subject" autocomplete="off" title="Subject">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control w-100 border border-secondary" name="message"
                                        id="message" cols="30" rows="9" placeholder="Enter Message" autocomplete="off"
                                        title="Message"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-lg-3">
                            <button type="submit" class="main_btn">Send Message</button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4">
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-home"></i></span>
                        <div class="media-body">
                            <h3>UP , India</h3>
                            <p>Lucknow</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                        <div class="media-body">
                            <h3><a href="tel:454545654">+91 1234567890</a></h3>
                            <p>Mon to Fri 9am to 6pm</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-email"></i></span>
                        <div class="media-body">
                            <h3><a href="mailto:support@colorlib.com">info@gmail,com</a></h3>
                            <p>Send us your query anytime!</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-none d-lg-block mb-5 pb-4">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7115.042567368567!2d80.962204!3d26.918684!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39995712341b28b3%3A0xc71b292c7c5f4995!2s3%2F5%2C%20Sector%20H%2C%20Jankipuram%2C%20Lucknow%2C%20Uttar%20Pradesh%20226021!5e0!3m2!1sen!2sin!4v1693944930238!5m2!1sen!2sin"
                    width="100%" height="480" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>

            </div>
        </div>
    </section>

    <!-- footer section -->
    <?php 
 include 'footer.php';
 ?>
</body>

</html>