<?php
    $conn = new mysqli('localhost', 'root', '', 'softwareengineering');
    if($conn->connect_error) {
        die(''. $conn->connect_error);
    }

    if (isset($_POST['submit'])) {
        $search = $_POST['search'];

        $sql = "SELECT * FROM products where toyName = '$search'";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            while ($row = $result->fetch_assoc()) {
            echo '
                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                    <div class="products-single1 fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                <p class="new">New</p>
                            </div>
                            <img src="../admin/images/layout_img/'.$row['imageProducts'].'" class="img-fluid2" alt="Image">
                            <div class="mask-icon">
                                <ul>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-8 col-xl-8">
                    <div class="why-text full-width whytext1">
                        <h4>'.$row['toyName'].'</h4>
                        <h5> '.$row['price'].'</h5>
                        <p>'.$row['Description'].'</p>
                        <a class="btn hvr-hover" href="#">Add to Cart</a>
                    </div>
                
                </div>';
            }
        }
    }
?>