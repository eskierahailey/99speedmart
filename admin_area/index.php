<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="shortcut icon" type="icon" href="../img/favicon.ico">
    <link rel="stylesheet" type="text/css" href="../styles.css">
    <style>.admin_image {
    width: 100px;
    object-fit: contain;
    }
    </style>
    <!-- Bootstrap CSS Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Font Awesome Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <!-- Navbar -->
    <div class="container-fluid p-0">
        <!-- First Child -->
        <nav class="navbar navbar-expand-lg navbar-light custom-navbar">
            <div class="container-fluid">
                <img src="../img/logo.png" alt="logo" class="logo">
                <nav class="navbar navbar-expand-lg custom-navbar">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="index.php" class="nav-link">Welcome Admin</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>

        <!-- Second Child -->
        <div class="bg-light">
            <h3 class="text-center p-2" style="background-color: #fcd739";>Management</h3>
        </div>

        <!-- Third Child -->
        <div class="row">
            <div class="col-md-12 p-1 d-flex align-items-center" style="background-color: #007854";>
                <div class="p-3">
                    <a href="#"><img src="../img/admin.png" alt="" class="admin_image"></a>
                    <p class="text-light text-center">Chong Ming Syuen</p>
                </div>
                <div class="button text-center">
                    <!-- button*8>a.nav-link.text-light.bg-info.my-1 -->
                    <button class="my-3 p-1"><a href="insert_products.php" class="nav-link my-1">Insert Products</a></button>
                    <button class="my-3 p-1"><a href="" class="nav-link my-1">View Products</a></button>
                    <button class="my-3 p-1"><a href="index.php?insert_category" class="nav-link my-1">Insert Categories</a></button>
                    <button class="my-3 p-1"><a href="" class="nav-link my-1">View Categories</a></button>
                    <button class="my-3 p-1"><a href="" class="nav-link my-1">All Orders</a></button>
                    <button class="my-3 p-1"><a href="" class="nav-link my-1">All Payments</a></button>
                    <button class="my-3 p-1"><a href="" class="nav-link my-1">List Users</a></button>
                    <button class="my-3 p-1"><a href="" class="nav-link my-1">Log Out</a></button>
                </div>
            </div>
        </div>
    </div>

    
    <!-- Fourth Child -->
    <div class="container my-3">
        <?php 
            if(isset($_GET['insert_category'])) {
                include('insert_categories.php');
            }
        ?>
    </div>

    <!-- Last Child -->
    <div class="text-center p-4 footer" style="background-color: #007854; color: white; font-size: 18px; position: absolute; bottom: 0; right: 0; left: 0;">
            <p>All Rights Reserved © - Designed by Chong Ming Syuen UFH220003</p>
    </div>
 
<!-- Bootstrap JS Link -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>