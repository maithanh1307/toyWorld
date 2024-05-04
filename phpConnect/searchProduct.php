<?php
    $conn = new mysqli('localhost', 'root', '', 'softwareengineering');
    if($conn->connect_error) {
        die(''. $conn->connect_error);
    }

    //search
    if(isset($_POST['submit'])) {
        $search = $_POST['search'];

        $sql = "SELECT * FROM products where toyName = '$search'";
        $result = mysqli_query($conn, $sql);
        if ($result) {
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
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                </ul>
                                <a class="cart" href="#">Add to Cart</a>
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
    }
?>

