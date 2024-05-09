<!-- php -->
<?php
   require_once("../phpConnect/connectData.php");

   // add information
   if (isset($_POST['submit'])) {
      $toyName = $_POST['toyName'];
      $typeOfToy = $_POST['typeOfToy'];
      $Description = $_POST['Description'];
      $price = $_POST['price'];
      $imageProducts = $_FILES['imageProducts']['name'];
      $imageProducts_tmp = $_FILES['imageProducts']['tmp_name'];

      // Prepare the SQL statement using prepared statements
      $sql = "INSERT INTO products (toyName, typeOfToy, Description, price, imageProducts)
               VALUES (?, ?, ?, ?, ?)";
      
      // Prepare and bind parameters
      $stmt = mysqli_prepare($conn, $sql);
      mysqli_stmt_bind_param($stmt, 'sssss', $toyName, $typeOfToy, $Description, $price, $imageProducts);

      // Execute the statement
      $result = mysqli_stmt_execute($stmt);

      // Check for errors
      if ($result) {
         header("Location: products.php");
      } else {
         echo "Error: " . mysqli_error($conn);
      }

      //image
      move_uploaded_file($destinationImage_tmp, 'images/'. $imageProducts);

      // Close the statement and connection
      mysqli_stmt_close($stmt);
      mysqli_close($conn);
   } else {
      echo 'failed';
   }
?>


<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- icon -->
      <link
      rel="stylesheet"
      data-purpose="Layout StyleSheet"
      title="Web Awesome"

      href="/css/app-wa-8d95b745961f6b33ab3aa1b98a45291a.css?vsn=d"
    >

      <link
        rel="stylesheet"

        href="https://site-assets.fontawesome.com/releases/v6.4.0/css/all.css"
      >

      <link
        rel="stylesheet"

        href="https://site-assets.fontawesome.com/releases/v6.4.0/css/sharp-solid.css"
      >

      <link
        rel="stylesheet"

        href="https://site-assets.fontawesome.com/releases/v6.4.0/css/sharp-regular.css"
      >

      <link
        rel="stylesheet"

        href="https://site-assets.fontawesome.com/releases/v6.4.0/css/sharp-light.css"
      >
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Miniature World - Administration</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- site icon -->
      <link rel="icon" href="../freshshop/images/logo.png" type="image/png" />
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css" />
      <!-- site css -->
      <link rel="stylesheet" href="style.css" />
      <!-- responsive css -->
      <link rel="stylesheet" href="css/responsive.css" />
      <!-- color css -->
      <link rel="stylesheet" href="css/colors.css" />
      <!-- select bootstrap -->
      <link rel="stylesheet" href="css/bootstrap-select.css" />
      <!-- scrollbar css -->
      <link rel="stylesheet" href="css/perfect-scrollbar.css" />
      <!-- custom css -->
      <link rel="stylesheet" href="css/custom.css" />
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <body class="dashboard dashboard_1">
      <div class="full_container">
         <div class="inner_container">
            <!-- Sidebar  -->
            <nav id="sidebar">
               <div class="sidebar_blog_1">
                  <div class="sidebar-header">
                     <div class="logo_section">
                        <a href="index.php"><img class="logo_icon img-responsive" src="../freshshop/images/logo.png" alt="#" /></a>
                     </div>
                  </div>
                  <div class="sidebar_user_info">
                     <div class="icon_setting"></div>
                     <div class="user_profle_side">
                        <div class="user_img"><img class="img-responsive" src="../freshshop/images/logo.png" alt="#" /></div>
                        <div class="user_info">
                           <h6>Miniature World - Admin</h6>
                           <p><span class="online_animation"></span> Online</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="sidebar_blog_2">
                  <h4>General</h4>
                  <ul class="list-unstyled components">
                     <li class="active">
                        <a href="index.php"><i class="fa fa-dashboard yellow_color"></i> <span>Dashboard</span></a>
                     </li>
                     <li>
                        <a href="#element" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-diamond purple_color"></i> <span>Elements</span></a>
                        <ul class="collapse list-unstyled" id="element">
                           <li><a href="icons.php">> <span>Icons</span></a></li>
                        </ul>
                     </li>
                     <li><a href="tables.php"><i class="fa fa-table purple_color2"></i> <span>Tables</span></a></li>
                     <li>
                        <a href="#apps" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-object-group blue2_color"></i> <span>Apps</span></a>
                        <ul class="collapse list-unstyled" id="apps">               
                           <li><a href="calendar.php">> <span>Calendar</span></a></li>
                        </ul>
                     </li>
                     <li>
                        <a href="contact.php">
                        <i class="fa fa-paper-plane red_color"></i> <span>Get in touch</span></a>
                     </li>
                     <li class="active">
                        <a href="#additional_page" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-clone yellow_color"></i> <span>Additional Pages</span></a>
                        <ul class="collapse list-unstyled" id="additional_page">
                           <li>
                              <a href="products.php">> <span>Products</span></a>
                           </li>
                           <li>
<<<<<<< Updated upstream
                              <a href="feedbacks.php">> <span>Feedbacks</span></a>
=======
                              <a href="checkout.php">> <span>Check out</span></a>
>>>>>>> Stashed changes
                           </li>
                           <li>
                              <a href="404_error.php">> <span>404 Error</span></a>
                           </li>
                        </ul>
                     </li>
                     <li><a href="map.php"><i class="fa fa-map purple_color2"></i> <span>Map</span></a></li>
                  </ul>
               </div>
            </nav>
            <!-- end sidebar -->
            <!-- right content -->
            <div id="content">
               <!-- topbar -->
               <div class="topbar">
                  <nav class="navbar navbar-expand-lg navbar-light">
                     <div class="full">
                        <button type="button" id="sidebarCollapse" class="sidebar_toggle"><i class="fa fa-bars"></i></button>
                        <!-- <div class="logo_section">
                           <a href="index.html"><img class="img-responsive" src="../freshshop/images/logo.png" alt="#" /></a>
                        </div> -->
                        <div class="right_topbar">
                           <div class="icon_info">
                              <ul>
                                 <li><a href="#"><i class="fa fa-bell-o black_color"></i><span class="badge">2</span></a></li>
                                 <li><a href="#"><i class="fa fa-question-circle black_color"></i></a></li>
                                 <li><a href="#"><i class="fa fa-envelope-o black_color"></i><span class="badge">3</span></a></li>
                              </ul>
                              <ul class="user_profile_dd">
                                 <li>
                                    <a class="dropdown-toggle" data-toggle="dropdown"><img class="img-responsive rounded-circle" src="../freshshop/images/logo.png" alt="#" /><span class="name_user">Miniature World - Admin</span></a>
                                    <div class="dropdown-menu">
                                       <a class="dropdown-item" href="index.php">Home</a>
                                       <a class="dropdown-item" href="#"><span>Log Out</span> <i class="fa fa-sign-out"></i></a>
                                    </div>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </nav>
               </div>
               <!-- end topbar -->
               <!-- dashboard inner -->
               <div class="midde_cont">
                  <div class="container-fluid">
                     <div class="row column_title">
                        <div class="col-md-12">
                           <div class="page_title">
                              <h2>Table for products</h2>
                           </div>
                        </div>
                     </div>
                     <!-- row -->
                     <div class="row">
                        <!-- table section -->
                        <div class="col-md-12">
                           <div class="white_shd full margin_bottom_30">
                              <div class="full graph_head">
                                 <div class="heading1 margin_0">
                                    <h2>Add products</h2>
                                 </div>
                              </div>
                              <div class="table_section padding_infor_info">
                                 <form method="POST" enctype="multipart/form-data">
                                    <div>
                                       <label class="mr-2 labelProduct">Toy's name</label>
                                       <input name="toyName" class="addInput" type="text" id="toyName" placeholder="Enter product's name" required>
                                    </div>
                                    <div>
                                       <label class="mr-2 labelProduct">Type of toy</label>
                                       <select name="typeOfToy"  id="typeOfToy"type="text"  class="addInput" required>
                                          <option value="collective">Collective</option>
                                          <option value="doll">Doll</option>
                                          <option value="lego">Lego</option>
                                          <option value="vehicle">Vehicle</option>
                                          <option value="teddy">Teddy Bear</option>
                                          <option value="robot">Robot</option>
                                          <option value="Under 1 year old">Under 1 year old</option>
                                          <option value="1 to 3 years old">1 to 3 years old</option>
                                          <option value="Above 4 years old">Above 4 years old</option>
                                       </select>
                                    </div>
                                    <div>
                                       <label class="mr-2 labelProduct">Description</label>
                                       <input name="Description" class="addInput" type="text" id="Description" placeholder="Enter your description" required>
                                    </div>
                                    <div>
                                       <label class="mr-2 labelProduct">Price</label>
                                       <input name="price" class="addInput" type="text" id="price" placeholder="Prices" required>
                                    </div>
                                    <div class="mt-4">
                                       <label class="labelProduct" for="file labelProduct">Image for products</label>
                                       <input name ="imageProducts" id="file" type="file">
                                       
                                    </div>
                                    <div class="mt-4">
                                       <button name="submit" class="btn btn-primary btnAdd" type="submit">Add products</button>
                                    </div>
                                    
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- footer -->
                  <div class="container-fluid">
                     <div class="footer">
                        <p><i class="fas fa-map-marker-alt mr-2"></i>19 Nguyen Huu Tho street, Tan Hung, District 7, Ho Chi Minh city</p>
                     </div>
                  </div>
               </div>
               <!-- end dashboard inner -->
            </div>
         </div>
         <!-- model popup -->
         <!-- The Modal -->
         <div class="modal fade" id="myModal">
            <div class="modal-dialog">
               <div class="modal-content">
                  <!-- Modal Header -->
                  <div class="modal-header">
                     <h4 class="modal-title">Modal Heading</h4>
                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <!-- Modal body -->
                  <div class="modal-body">
                     Modal body..
                  </div>
                  <!-- Modal footer -->
                  <div class="modal-footer">
                     <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                  </div>
               </div>
            </div>
         </div>
         <!-- end model popup -->
      </div>
      <!-- jQuery -->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <!-- wow animation -->
      <script src="js/animate.js"></script>
      <!-- select country -->
      <script src="js/bootstrap-select.js"></script>
      <!-- owl carousel -->
      <script src="js/owl.carousel.js"></script> 
      <!-- chart js -->
      <script src="js/Chart.min.js"></script>
      <script src="js/Chart.bundle.min.js"></script>
      <script src="js/utils.js"></script>
      <script src="js/analyser.js"></script>
      <!-- nice scrollbar -->
      <script src="js/perfect-scrollbar.min.js"></script>
      <script>
         var ps = new PerfectScrollbar('#sidebar');
      </script>
      <!-- fancy box js -->
      <script src="js/jquery-3.3.1.min.js"></script>
      <script src="js/jquery.fancybox.min.js"></script>
      <!-- custom js -->
      <script src="js/custom.js"></script>
      <!-- calendar file css -->    
      <script src="js/semantic.min.js"></script>
   </body>
</html>