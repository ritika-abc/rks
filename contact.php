<?php
include_once "config.php";
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $user_email = $_POST['user_email'];
    $message = $_POST['message'];
    $user_phone = $_POST['user_phone'];
    $user_address = $_POST['user_address'];

    $sql = "SELECT  * from `email`  WHERE 
         name='$name' and user_email ='$user_email'";

    $emailresult = mysqli_query($con, $sql);

    $user_matched = mysqli_num_rows($emailresult);
    if ($user_matched > 0) {
        echo "<script> alert('you have already registered !!')</script>";
    } else {
        $insrt = mysqli_query($con, "INSERT INTO `email`( `name`, `user_email`, `user_phone`, `message`, `user_address`) VALUES ('$name','$user_email','$message','$user_phone','$user_address')");
    }

    // email

    $to = $user_email;
    $subject = "Enquiry From  " . "Vistara Enterprise";
    $message_query = "Name:-$name <br> Email:-$user_email <br> Phone Number:-$user_phone  <br> Address:-$user_address <br> Enquiry:-$message";
    $header = "From:connectvistara@gmail.com \r\n";
    $header .= "MIME-Version: 1.0\r\n";
    $header .= "Content-type: text/html\r\n";

    $retval = mail($to, $subject, $message_query, $header);
 
    if ($retval == true) {
        $sql = mysqli_query($con, "INSERT INTO `email`( `name`, `user_email`, `user_phone`, `message`, `user_address`) VALUES ('$name','$user_email','$message','$user_phone','$user_address')");

        echo ("<script>alert('Message Sent succesfully');window.location='index.php';</script>");
    } else {
        echo "Message could not be sent...";
    }
}
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="assets/style/style.css">
    <link rel="stylesheet" href="assets/vendars/bootstrap-5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/vendars/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/vendars/OwlCarousel2-2.3.4/dist/assets/owl.theme.green.css">
    <!-- script owl  -->
    <script src="assets/vendars/OwlCarousel2-2.3.4/docs/assets/vendors/jquery.min.js"></script>
 <meta name="description" content="Connect with us effortlessly on our Contact page. Whether you have questions, feedback, or just want to say hello, reach out and let's chat coconuts!">
    <script src="assets/vendars/OwlCarousel2-2.3.4/dist/owl.carousel.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        .inner_box_icon {
            height: 60px;
            width: 60px;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #d31f26;
            overflow: hidden;
            border-radius: 50%;
        }
    </style>
</head>

<body>
    <!-- header start here -->
    <header>
        <!-- top nav -->
        <nav class="nav nav d-none d-sm-none d-md-flex">
            <li class="nav-item"><a href="milto:connectvistara@gmail.com" class="nav-link"><i class="fa-regular mx-2 fa-envelope"></i>
                   connectvistara@gmail.com</a></li>
            <li class="nav-item "><a href="tel:8668127970" class="nav-link"><i class="fa-solid fa-phone mx-2"></i>+91 8668127970</a>
            </li>
            <li class="nav-item ms-auto"><a href="" class="nav-link"><i class="fa-brands fa-facebook"></i></a></li>
            <li class="nav-item"><a href="" class="nav-link"><i class="fa-brands fa-twitter"></i></a></li>
            <li class="nav-item"><a href="" class="nav-link"><i class="fa-brands fa-youtube"></i></a></li>
        </nav>

    </header>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: black;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <!--"Vistara Enterprise" -->
                <div class="img">
                    <img src="assets/image/logo_green.jpg" height="80px" width="100px" alt="logo">
                </div>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse  " id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0" id="nav_links">
                    <li class="nav-item mx-3">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="about.php">about</a>
                    </li>

                    <li class="nav-item mx-3">
                        <a class="nav-link text-warning" href="contact.php">contact us</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link " href="product.php">product </a>
                    </li>
                     <li class="nav-item mx-3">
                        <a class="nav-link " href="blog.php">blogs  </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- header end here -->
    <!-- bg image -->




    <div class="bg" style="height: 50vh;">
        <div class="">
            <div class="container">
                <div class="row ">
                    <div class="col-12 col-sm-12  text-center m-auto col-md-8 col-lg-7  ">
                        <div class="bg_content " data-aos="fade-up" data-aos-anchor-placement="top-center">
                            <div class="text_pera">
                                <h4 class="display-4 text-warning">Contact Us</h4>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb justify-content-center">
                                        <li class="breadcrumb-item "><a href="/" class="text-white text-decoration-none">Home</a>
                                        </li>
                                        <li class="breadcrumb-item text-light active" aria-current="page">Contact Us
                                        </li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact section -->
    <div class="container margin" data-aos="fade-up" data-aos-anchor-placement="top-center">
        <h4 class="display-6 text-center my-5 heading">Contact Us</h4>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-6 col-lg-4 my-3">
                            <div class="contact_box text-center">
                                <i class="fa-solid fa-phone text-success display-6 mb-3   "></i> <br>
                                <small>Call Us</small> <br>
                                <a href="tel:8668127970" class="text-decoration-none  text-muted  mt-2 d-block fw-bold fs-6">+91 8668127970
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-4 my-3">
                            <div class="contact_box text-center">
                                <i class="fa-solid fa-envelope text-success display-6 mb-3   "></i> <br>
                                <small>Email Us</small> <br>
                                <a href="milto:connectvistara@gmail.com" class="text-decoration-none text-muted  mt-2 d-block fw-bold  fs-6">connectvistara@gmail.com</a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-4 my-3">
                            <div class="contact_box text-center ">
                                <i class="fa-solid fa-location-dot  text-success display-6 mb-3 "></i><br>
                                <small>Company Address</small> <br>
                                <a href="" class="text-decoration-none text-muted  mt-2 d-block fw-bold  fs-5"> Vistara enterprise 7/3 Ayyanar kovil Road, Opposite to Thadco colony, Rajapalayam, Virudhunagar District, Tamilnadu -626117 </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container margin">
        <form action="" method="post">
            <h3>Contact Us</h3>
            <div class="row justify-content-center ">
                <div class="col-12">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 my-3">
                            <label for="" class="text-muted">Name :</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 my-3">
                            <label for="" class="text-muted">Email Address :</label>
                            <input type="email" name="user_email" class="form-control" required>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 my-3">
                            <label for="" class="text-muted">Phone :</label>
                            <input type="number" name="user_phone" class="form-control" required>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 my-3">
                            <label for="" class="text-muted"> Address :</label>
                            <input type="text" name="user_address" class="form-control" required>
                        </div>
                        <div class="col-12 my-3">
                            <label for="" class="text-muted"> Enquires :</label>
                            <textarea name="message" class="w-100" rows="10" required id=""></textarea>
                        </div>
                        <div class="col-6">
                            <button type="submit" name="submit" class="text-capitalize  btn btn-success">submit here</button>
                        </div>
                    </div>

                </div>
            </div>
        </form>
    </div>
    <!-- footer start here -->
    <footer class="p-5" id="footer">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-3 mb-3">
                    <div class="foot_text">
                        <h4 class="text-warning"> <q>Vistara Enterprise</q> </h4>
                        <p class="mt-3" style="text-align: justify;"><a href="about.php" class=" text-white text-decoration-none">At <strong class="text-warning">"Vistara Enterprise"</strong> , we bring you a world of flavor with our exquisite range of spices sourced from the finest regions across the globe </a> </p>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-3 mb-3">
                    <h4 class="text-warning">Useful Links</h4>
                    <ul class="navbar-nav mt-3 text-capitalize">
                        <li class="nav-item"><a href="/" class="nav-link p-0"> <i class="fa-solid fa-check mx-1"></i>
                                home</a></li>
                        <li class="nav-item"><a href="about.php" class="nav-link p-0"> <i class="fa-solid fa-check mx-1"></i>
                                about</a></li>
                        <li class="nav-item"><a href="contact.php" class="nav-link p-0"> <i class="fa-solid fa-check mx-1"></i>
                                Contact us</a></li>
                    </ul>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-3 mb-3">
                    <h4 class="text-warning">Contact Information</h4>
                    <ul class="navbar-nav mt-3">
                        <li class="nav-item "><a href="" class="nav-link p-0 fw-bold"><i class="fa-solid fa-building-wheat mx-1 "></i>Address: Vistara enterprise 7/3 Ayyanar kovil Road, Opposite to Thadco colony, Rajapalayam, Virudhunagar District, Tamilnadu -626117 
                            </a></li>
                        <li class="nav-item mt-2"><a href="milto:connectvistara@gmail.com" class="nav-link p-0"><i class="fa-regular fa-envelope mx-1"></i>connectvistara@gmail.com</a></li>
                        <li class="nav-item mt-2"><a href="tel:8668127970" class="nav-link p-0"><i class="fa-solid fa-phone mx-1"></i>
                                +91 8668127970</a></li>
                    </ul>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-3 mb-3">
                    <h4 class="text-warning">Social links</h4>

                    <div class="foot_icon_box d-flex mt-4">
                        <div class="foot_icon bg-warning  mx-1">
                            <i class="fa-brands fa-facebook"></i>
                        </div>
                        <div class="foot_icon bg-warning  mx-1">
                            <i class="fa-brands fa-twitter"></i>
                        </div>
                        <div class="foot_icon bg-warning  mx-1">
                            <i class="fa-brands fa-youtube"></i>
                        </div>

                    </div>
                                        <a href="TRUST SEAL VISTARA (1).pdf" target="_blank" class="mt-3 d-block"> <img src="trust.jpg" height="100px" width="100px" alt=""></a>

                </div>
            </div>
        </div>
        <div class="border-top d-block border-white"></div>

        <div class="container mt-3">
            <div class="row">
                <div class="col-12">
                    <ul class="d-flex list-unstyled">
                        <li class="nav-item  "><a href="/" class="nav-link">Copyright 2024."Vistara Enterprise" ||
                                web2export
                                All Rights Reserved.</a></li>
                        <li class="nav-item mx-3 ms-auto"><a href="" class="nav-link"><img src="" alt=""></a></li>

                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <div class="icon_box_call fixed-bottom px-2 pb-5">
        <a href="tel:8668127970" class="inner_box_icon    text-decoration-none">
            <i class="fa-solid fa-phone fs-3 fa-beat text-white"></i>
        </a>
    </div>
    <script>
        $(document).ready(function() {
            $('.owl-carousel').owlCarousel({
                loop: true,
                nav: true,
                responsive: {
                    0: {
                        items: 1
                    }
                }
            })
        })
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="assets/vendars/bootstrap-5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>