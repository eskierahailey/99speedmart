<?php 
    include('Includes/connect.php');
    include('functions/common_function.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>99 Speed E-Mart</title>
    <link rel="shortcut icon" type="icon" href="img/favicon.ico">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <!-- Bootstrap CSS Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Font Awesome Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <!-- Navbar -->
    <div class="container-fluid p-0">
        <!-- First Child -->
        <nav class="navbar navbar-expand-lg custom-navbar">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php"><img src="img/logo.png" alt="logo" class="logo"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="https://www.99speedmart.com.my/">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php">Products</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.99speedmart.com.my/Contact">Contact Us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Login/Register</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i><sup>1</sup></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Total Price: RM100.00</a>
                                </li>
                            </ul>
                                <form class="d-flex" role="search">
                                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                    <button class="btn btn-outline-light" type="submit">Search</button>
                                </form>
                        </div>
            </div>
        </nav>
    </div>

    <!-- Second Child -->
    <div class="text-center p-1" style="background-color: #fcd739";>
        <h3>Products</h3>
    </div>
    <br>

    <!-- Third Child -->
    <div class="row px-3">
        <div class="col-md-10">
            <!-- Products -->
            <div class="row">

            <!-- Fetching Products -->
            <?php
            // Calling Function
                getproducts();
                get_unique_categories();
            ?>

            </div>
        </div>
        <div class="col-md-2 p-0" style="background-color: #fcd739;">
            <!-- Sidenav -->
            <ul class="navbar-nav me-auto text-center">
                <li class="nav-item text-center" style="background-color: #007854; font-size: 18px;">
                    <a href="#" class="nav-link" style="color: white;">Categories</a>
                </li>

                <?php
                // Calling Function
                    getcategories();
                ?>
            </ul>
        </div>   
    </div>

    <!-- Last Child -->
    <div class="text-center p-4 footer" style="background-color: #007854; color: white; font-size: 18px;">
        <p>All Rights Reserved © - Designed by Chong Ming Syuen UFH220003</p>
    </div>

<!-- Bootstrap JS Link -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>