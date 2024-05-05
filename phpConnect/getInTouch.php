<?php
    $conn = new mysqli('localhost', 'root', '', 'softwareengineering');

    if ($conn->connect_error) {
        die('Connection failed'. $conn->connect_error);
    }

    $sql = 'SELECT * from getintouch';
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo '
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 profile_details margin_bottom_30">
                    <div class="contact_blog">
                        <div class="contact_inner">
                            <div>
                            <h3 style="text-align: center;">'.$row['customerName'].'</h3>
                            <ul class="list-unstyled">
                                <li><i class="fa fa-envelope-o"></i><a href="mailto:'.$row['customerMail'].'"> : '.$row['customerMail'].'</a></li>
                                <li><i class="fa fa-briefcase"></i> : '.$row['customerSubject'].'</li>
                                <li><i class="fa fa-comments"></i> : '.$row['customerMess'].'</li>
                            </ul>
                            </div>
                            <div class="bottom_list">                        
                                <div class="right_button">
                                    <a href="../phpConnect/deleteCustomer.php?customerID='.$row['customerID'].'">
                                        <button type="button" class="btn btn-danger btn-xs">
                                            <i class="fa fa-trash mr-2"> </i> Delete
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>';
        }
    }
?>