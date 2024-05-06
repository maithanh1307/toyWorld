<?php
    $conn = new mysqli('localhost', 'root', '', 'softwareengineering');

    if ($conn->connect_error) {
        die('Connection failed'. $conn->connect_error);
    }

    $sql = 'SELECT * from wishlist';
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo '
                <tr>
                    <td class="thumbnail-img">        
                        <img class="img-fluid2" src="../admin/images/layout_img/'.$row['imageProducts'].'" alt="" />                
                    </td>
                    <td class="name-pr">                
                        '.$row['toyName'].'        
                    </td>
                    <td class="price-pr">
                        <p>'.$row['price'].'</p>
                    </td>
                    <td class="quantity-box">In Stock</td>
                    <td class="add-pr">
                        <a class="btn hvr-hover" href="#">Add to Cart</a>
                    </td>
                    <td class="remove-pr">
                        <a href="../phpConnect/deleteWishlist.php?productID='.$row['productID'].'">
                            <i class="fas fa-trash fa-xl" style="color: #F3C76C;"></i>
                </a>
                    </td>
                </tr>';
        }
    }
?>