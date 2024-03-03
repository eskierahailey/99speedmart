<?php
    // Including connect files
    include('./includes/connect.php');

    // Getting Products
    function getproducts(){
        global $con;
        if(!isset($_GET['category'])){
        $select_query = "SELECT * FROM `products` ORDER BY rand() LIMIT 0,9";
        $result_query = mysqli_query($con,$select_query);
        //$row = mysqli_fetch_assoc($result_query);
        //echo $row['product_title'];
        while($row = mysqli_fetch_assoc($result_query)){
            $product_id = $row['product_id'];
            $product_title = $row['product_title'];
            $product_description = $row['product_description'];
            $category_id = $row['category_id'];
            $product_image = $row['product_image'];
            $product_price = $row['product_price'];
            echo "<div class='col-md-4 mb-2'>
                    <div class='card' style='width: 18rem;'>
                        <img src='./admin_area/products-img/$product_image' class='card-img-top' alt='$product_title'>
                            <div class='card-body'>
                                <h5 class='card-title'>$product_title</h5>
                                <p class='card-text'>$product_description</p>
                                <p class='card-text'>$product_price</p>
                                <a href='#' class='btn btn-primary'>Add to Cart</a>
                            </div>
                    </div>
                </div>";
        }
        }
    }

    // Get Unique Categories
    function get_unique_categories(){
        global $con;
        if(isset($_GET['category'])){
            $category_id = $_GET['category'];
        $select_query = "SELECT * FROM `products` WHERE category_id=$category_id";
        $result_query = mysqli_query($con,$select_query);
        $num_of_rows = mysqli_num_rows($result_query);
        if($num_of_rows==0){
            echo "<h2 class='text-center text-danger'>No items for this category!</h2>";
        }
        //$row = mysqli_fetch_assoc($result_query);
        //echo $row['product_title'];
        while($row = mysqli_fetch_assoc($result_query)){
            $product_id = $row['product_id'];
            $product_title = $row['product_title'];
            $product_description = $row['product_description'];
            $category_id = $row['category_id'];
            $product_image = $row['product_image'];
            $product_price = $row['product_price'];
            echo "<div class='col-md-4 mb-2'>
                    <div class='card' style='width: 18rem;'>
                        <img src='./admin_area/products-img/$product_image' class='card-img-top' alt='$product_title'>
                            <div class='card-body'>
                                <h5 class='card-title'>$product_title</h5>
                                <p class='card-text'>$product_description</p>
                                <p class='card-text'>$product_price</p>
                                <a href='#' class='btn btn-primary'>Add to Cart</a>
                            </div>
                    </div>
                </div>";
        }
        }
    }

    // Displaying Categories in Sidebar
    function getcategories(){
        global $con;
        $select_categories = "SELECT * FROM `categories`";
        $result_categories = mysqli_query($con,$select_categories);
        //$row_data = mysqli_fetch_assoc($result_categories);
        //echo $row_data['category_title'];
        while($row_data = mysqli_fetch_assoc($result_categories)){
            $category_title = $row_data['category_title'];
            $category_id = $row_data['category_id'];
            echo " <li class='nav-item text-center' style='background-color: #fcd739; font-size: 18px;'>
            <a href='index.php?category=$category_id' class='nav-link'>$category_title</a>
            </li>";
        }
    }

?>