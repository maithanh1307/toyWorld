<?php
    $conn = new mysqli('localhost', 'root', '', 'softwareengineering');

    if ($conn->connect_error) {
        die('Connection failed'. $conn->connect_error);
    }

    $sql = 'SELECT * from products';
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo '
            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4 toy">
                <div class="products-single fix">
                    <div class="box-img-hover">
                        <div class="type-lb">
                            <p class="sale">Sale</p>
                        </div>
                        <img src="../admin/images/layout_img/'.$row['imageProducts'].'" class="img-fluid1" alt="Image">
                        <div class="mask-icon">
                            <ul>
                                <li><a href="../phpConnect/addWishlistShop.php?productID='.$row['productID'].'" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                            </ul>
                            <a class="cart" href="../phpConnect/addToCartShop.php?productID='.$row['productID'].'">Add to  Cart</a>
                        </div>
                    </div>
                    <div class="why-text">
                        <h4>'.$row['toyName'].'</h4>
                        <h5>'.$row['price'].'</h5>
                    </div>
                </div>
            </div>';
        }
    }
?>