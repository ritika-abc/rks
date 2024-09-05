<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="assets/style/style.css">
    <link rel="stylesheet" href="assets/vendars/bootstrap-5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/vendars/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/vendars/OwlCarousel2-2.3.4/dist/assets/owl.theme.green.css">
    <!-- script owl  -->
    <script src="assets/vendars/OwlCarousel2-2.3.4/docs/assets/vendors/jquery.min.js"></script>
 <meta name="description" content="Explore our irresistible coconut products on our Product page. From coconut oils to snacks and skincare essentials, discover nature's versatile treasure in every carefully crafted item.">
    <script src="assets/vendars/OwlCarousel2-2.3.4/dist/owl.carousel.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- owl carousl -->
    <link rel="stylesheet" href="assets/vendars/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/vendars/OwlCarousel2-2.3.4/dist/assets/owl.theme.green.css">
    <script src="assets/vendars/OwlCarousel2-2.3.4/docs/assets/vendors/jquery.min.js"></script>
    <script src="assets/vendars/OwlCarousel2-2.3.4/dist/owl.carousel.js"></script>
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
                <!--""Vistara Enterprise"" -->
                <div class="img">
                    <img src="assets/image/logo_green.jpg" height="80px" width="100px" alt="logo">
                </div>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0" id="nav_links">
                    <li class="nav-item mx-3">
                        <a class="nav-link " aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="about.php">about</a>
                    </li>

                    <li class="nav-item mx-3">
                        <a class="nav-link " href="contact.php">contact us</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link text-warning active" href="product.php">products </a>
                    </li> <li class="nav-item mx-3">
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
                                <h4 class="display-4 text-warning">Products</h4>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb justify-content-center">
                                        <li class="breadcrumb-item "><a href="/" class="text-white">Home</a>
                                        </li>
                                        <li class="breadcrumb-item text-light active" aria-current="page">Products</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about section -->
    <div class="container margin" data-aos="fade-up" data-aos-anchor-placement="top-center">
        <h4 class="display-6 text-center my-5 heading">Our Products </h4>
    </div>

    <!-- products -->
    <div class="container  ">
        <div class="row  border-bottom  border-warning border-4 py-5">
            <h3>Common Spices</h3>
            <?php
            include_once "config.php";
            // $cat_name = "common spices";
            $sel = "SELECT * from `pro` where `cat_name` = 'common spices'";
            $query = mysqli_query($con, $sel);
            while ($row = mysqli_fetch_array($query)) {
            ?>
                <div class="col-12 col-md-6 col-lg-3 my-2">
                    <div class="  p-3 shadow-lg ">
                        <!-- <h6 class="h4"> dfsdf</h6> -->
                        <div class="">
                            <img src="<?php echo $row['image'] ?>" height="200px" width="100%" alt="">
                            <H2 class="h5"><?php echo $row['pro_name'] ?></H2>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>

        <div class="row mb-4 border-bottom  border-warning border-4 py-5">
            <h3>Aromatic Spices</h3>
            <?php
            include_once "config.php";
            // $cat_name = "common spices";
            $sel = "SELECT * from `pro` where `cat_name` = 'Aromatic Spices'";
            $query = mysqli_query($con, $sel);
            while ($row = mysqli_fetch_array($query)) {
            ?>
                <div class="col-12 col-md-6 col-lg-3 my-2">
                    <div class="   p-3 shadow-lg   ">
                        <!-- <h6 class="h4"> dfsdf</h6> -->
                        <div class="">
                            <img src="<?php echo $row['image'] ?>" height="200px" width="100%" alt="products">
                            <H2 class="h5"><?php echo $row['pro_name'] ?></H2>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="row mb-4 border-bottom  border-warning border-4 py-5">
            <h3>Hot (Pungent) Spices</h3>
            <?php
            include_once "config.php";
            // $cat_name = "common spices";
            $sel = "SELECT * from `pro` where `cat_name` = 'Hot (Pungent) Spices'";
            $query = mysqli_query($con, $sel);
            while ($row = mysqli_fetch_array($query)) {
            ?>
                <div class="col-12 col-md-6 col-lg-3 my-2">
                    <div class="   p-3 shadow-lg   ">
                        <!-- <h6 class="h4"> dfsdf</h6> -->
                        <div class="">
                            <img src="<?php echo $row['image'] ?>" height="200px" width="100%" alt="products">
                            <H2 class="h5"><?php echo $row['pro_name'] ?></H2>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="row mb-4   border-bottom  border-warning border-4 py-5">
            <h3>Mild Flavored Spices</h3>
            <?php
            include_once "config.php";
            // $cat_name = "common spices";
            $sel = "SELECT * from `pro` where `cat_name` = 'Mild Flavored Spices'";
            $query = mysqli_query($con, $sel);
            while ($row = mysqli_fetch_array($query)) {
            ?>
                <div class="col-12 col-md-6 col-lg-3 my-2">
                    <div class="   p-3 shadow-lg   ">
                        <!-- <h6 class="h4"> dfsdf</h6> -->
                        <div class="">
                            <img src="<?php echo $row['image'] ?>" height="200px" width="100%" alt="products">
                            <H2 class="h5"><?php echo $row['pro_name'] ?></H2>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="row mb-4 border-bottom  border-warning border-4 py-5">
            <h3>Leaves</h3>
            <?php
            include_once "config.php";
            // $cat_name = "common spices";
            $sel = "SELECT * from `pro` where `cat_name` = 'Leaves'";
            $query = mysqli_query($con, $sel);
            while ($row = mysqli_fetch_array($query)) {
            ?>
                <div class="col-12 col-md-6 col-lg-3 my-2">
                    <div class="   p-3 shadow-lg   ">
                        <!-- <h6 class="h4"> dfsdf</h6> -->
                        <div class="">
                            <img src="<?php echo $row['image'] ?>" height="200px" width="100%" alt="products">
                            <H2 class="h5"><?php echo $row['pro_name'] ?></H2>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="row mb-4 border-bottom  border-warning border-4 py-5">
            <h3>Seed</h3>
            <?php
            include_once "config.php";
            // $cat_name = "common spices";
            $sel = "SELECT * from `pro` where `cat_name` = 'Seed'";
            $query = mysqli_query($con, $sel);
            while ($row = mysqli_fetch_array($query)) {
            ?>
                <div class="col-12 col-md-6 col-lg-3 my-2">
                    <div class="   p-3 shadow-lg   ">
                        <!-- <h6 class="h4"> dfsdf</h6> -->
                        <div class="">
                            <img src="<?php echo $row['image'] ?>" height="200px" width="100%" alt="products">
                            <H2 class="h5"><?php echo $row['pro_name'] ?></H2>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="row mb-4 border-bottom  border-warning border-4 py-5">
            <h3>Fruits/Berries</h3>
            <?php
            include_once "config.php";
            // $cat_name = "common spices";
            $sel = "SELECT * from `pro` where `cat_name` = 'Fruits/Berries'";
            $query = mysqli_query($con, $sel);
            while ($row = mysqli_fetch_array($query)) {
            ?>
                <div class="col-12 col-md-6 col-lg-3 my-2">
                    <div class="   p-3 shadow-lg   ">
                        <!-- <h6 class="h4"> dfsdf</h6> -->
                        <div class="">
                            <img src="<?php echo $row['image'] ?>" height="200px" width="100%" alt="products">
                            <H2 class="h5"><?php echo $row['pro_name'] ?></H2>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="row mb-4 border-bottom  border-warning border-4 py-5">
            <h3>Masalas</h3>
            <?php
            include_once "config.php";
            // $cat_name = "common spices";
            $sel = "SELECT * from `pro` where `cat_name` = 'Masalas'";
            $query = mysqli_query($con, $sel);
            while ($row = mysqli_fetch_array($query)) {
            ?>
                <div class="col-12 col-md-6 col-lg-3 my-2">
                    <div class="   p-3 shadow-lg   ">
                        <!-- <h6 class="h4"> dfsdf</h6> -->
                        <div class="">
                            <img src="<?php echo $row['image'] ?>" height="200px" width="100%" alt="products">
                            <H2 class="h5"><?php echo $row['pro_name'] ?></H2>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="row mb-4 border-bottom  border-warning border-4 py-5">
            <h3>Pulses</h3>
            <?php
            include_once "config.php";
            // $cat_name = "common spices";
            $sel = "SELECT * from `pro` where `cat_name` = 'Pulses'";
            $query = mysqli_query($con, $sel);
            while ($row = mysqli_fetch_array($query)) {
            ?>
                <div class="col-12 col-md-6 col-lg-3 my-2">
                    <div class="   p-3 shadow-lg   ">
                        <!-- <h6 class="h4"> dfsdf</h6> -->
                        <div class="">
                            <img src="<?php echo $row['image'] ?>" height="200px" width="100%" alt="Pulses">
                            <H2 class="h5"><?php echo $row['pro_name'] ?></H2>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>


    </div>
    <!-- footer start here -->
    <footer class="p-5" id="footer">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-3 mb-3">
                    <div class="foot_text">
                        <h4 class="text-warning">"Vistara Enterprise" </h4>
                        <p class="mt-3" style="text-align: justify;"><a href="about.php" class=" text-white text-decoration-none">At <strong class="text-warning"><q>Vistara
                                        Enterprise</q> </strong> , we bring you a world of flavor with our exquisite
                                range of spices sourced from the finest regions across the globe </a> </p>
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
                                contact us</a></li>
                    </ul>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-3 mb-3">
                    <h4 class="text-warning">Contact Information</h4>
                    <ul class="navbar-nav mt-3">
                        <li class="nav-item "><a href="" class="nav-link p-0 fw-bold"><i class="fa-solid fa-building-wheat mx-1 "></i>Address: Vistara enterprise 7/3 Ayyanar kovil Road, Opposite to Thadco colony, Rajapalayam, Virudhunagar District, Tamilnadu -626117 
                            </a></li>
                        <li class="nav-item mt-2"><a href="milto:connectvistara@gmail.com" class="nav-link p-0"><i class="fa-regular fa-envelope mx-1"></i> connectvistara@gmail.com</a></li>
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
                                        <a href="TRUST SEAL VISTARA (1).pdf" target="_blank" class="mt-3 d-block"> <img src="trust.jpg" height="100px" width="100px" alt="trust"></a>

                </div>
            </div>
        </div>
        <div class="border-top d-block border-white"></div>

        <div class="container mt-3">
            <div class="row">
                <div class="col-12">
                    <ul class="d-flex list-unstyled">
                        <li class="nav-item  "><a href="/" class="nav-link">Copyright 2024."Vistara Enterprise"||
                                web2export
                                All Rights Reserved.</a></li>
                        <li class="nav-item mx-3 ms-auto"><a href="" class="nav-link"><img src="" alt=""></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>


    <!-- call icon -->
    <div class="icon_box_call fixed-bottom px-2 pb-5">
        <a href="tel:8668127970" class="inner_box_icon    text-decoration-none">
            <i class="fa-solid fa-phone fs-3 fa-beat text-white"></i>
        </a>
    </div>

    <script>
        // $(document).ready(function() {
        //     $('.owl-carousel').owlCarousel({
        //         loop: true,
        //         margin: 10,
        //         nav: true,
        //         responsive: {
        //             0: {
        //                 items: 1
        //             },
        //             600: {
        //                 items: 3
        //             },
        //             1000: {
        //                 items: 4
        //             }
        //         }
        //     })
        // })
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="assets/vendars/bootstrap-5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>