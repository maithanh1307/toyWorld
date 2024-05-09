<?php
    require_once("../phpConnect/connectData.php");
    if(isset($_GET['productID'])) {
        $productID = $_GET['productID'];
    }
    $sql_product = "SELECT * FROM products";
   $query_product = mysqli_query($conn,$sql_product);

   $sql_up = "SELECT * FROM products WHERE productID = ?";
   $stmt = mysqli_prepare($conn, $sql_up);

// Kiểm tra xem việc chuẩn bị câu lệnh có thành công không
if ($stmt) {
    // Ràng buộc tham số
    mysqli_stmt_bind_param($stmt, "i", $productID); // Giả sử productID là một số nguyên

   //  // Thiết lập giá trị của tham số
   //  $productID = 6 ;

    // Thực thi câu lệnh
    mysqli_stmt_execute($stmt);

    // Lấy kết quả
    $query_up = mysqli_stmt_get_result($stmt);

    // Lấy hàng kết quả
    $row_up = mysqli_fetch_assoc($query_up);

    // Nhớ đóng câu lệnh
    mysqli_stmt_close($stmt);
} else {
    // Xử lý trường hợp việc chuẩn bị câu lệnh thất bại
    echo "Lỗi: " . mysqli_error($conn);
}
if (isset($_POST['submit'])) {
   // Lấy thông tin sản phẩm từ form
   $toyName = $_POST['toyName'];
   $typeOfToy = $_POST['typeOfToy'];
   $Description = $_POST['Description'];
   $price = $_POST['price'];

   // Xử lý tải lên ảnh nếu có
   if ($_FILES['imageProducts']['name'] != '') {
       // Tạo đường dẫn mới cho ảnh
       $imageFileName = $_FILES['imageProducts']['name'];
       $image_tmp = $_FILES['imageProducts']['tmp_name'];
       $imageDestination = '../admin/images/layout_img/' . $imageFileName;

       // Di chuyển ảnh vào thư mục đích
       if (move_uploaded_file($image_tmp, $imageDestination)) {
           // Cập nhật tên ảnh mới trong cơ sở dữ liệu
           $sql_update = "UPDATE products SET toyName = ?, imageProducts = ?, typeOfToy = ?, Description = ?, price = ? WHERE productID = ?";
           $stmt_update = mysqli_prepare($conn, $sql_update);

           if ($stmt_update) {
               // Ràng buộc tham số
               mysqli_stmt_bind_param($stmt_update, "sssssi", $toyName, $imageFileName, $typeOfToy, $Description, $price, $productID);

               // Thực thi câu lệnh UPDATE
               if (mysqli_stmt_execute($stmt_update)) {
                   echo "Cập nhật sản phẩm thành công.";
               } else {
                   echo "Lỗi khi cập nhật sản phẩm: " . mysqli_error($conn);
               }

               // Đóng câu lệnh UPDATE
               mysqli_stmt_close($stmt_update);
           } else {
               echo "Lỗi khi chuẩn bị câu lệnh UPDATE: " . mysqli_error($conn);
           }
       } else {
           echo "Lỗi khi tải lên ảnh.";
       }
   } else {
       // Nếu không có ảnh được tải lên, chỉ cập nhật các trường khác
       $sql_update = "UPDATE products SET toyName = ?, typeOfToy = ?, Description = ?, price = ? WHERE productID = ?";
       $stmt_update = mysqli_prepare($conn, $sql_update);

       if ($stmt_update) {
           // Ràng buộc tham số
           mysqli_stmt_bind_param($stmt_update, "ssssi", $toyName, $typeOfToy, $Description, $price, $productID);

           // Thực thi câu lệnh UPDATE
           if (mysqli_stmt_execute($stmt_update)) {
               echo "Cập nhật sản phẩm thành công.";
           } else {
               echo "Lỗi khi cập nhật sản phẩm: " . mysqli_error($conn);
           }

           // Đóng câu lệnh UPDATE
           mysqli_stmt_close($stmt_update);
       } else {
           echo "Lỗi khi chuẩn bị câu lệnh UPDATE: " . mysqli_error($conn);
       }
   }

   // Chuyển hướng người dùng về trang products sau khi cập nhật dữ liệu
   header('Location: ../admin/products.php');
}

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//    // $destinationID = $_POST['destinationID'];


   
//    $productName = $_POST['productName'];
   

//    $conn = new mysqli('localhost', 'root', '', 'softwareengineering');
//    if ($conn->connect_error) {
//        die("Connection Failed: " . $conn->connect_error);
//    } else {
//        if ($_SESSION['user'] == 'admin') {
//            $get_productID = $_GET['product_ID'];
//            $get_productName = $_GET['product_Name'];
// $sql = "UPDATE products SET productName=?
//         WHERE productID=?";
//         $stmt = $conn->prepare($sql);
//         $stmt->bind_param("ss", $productName, $get_productID);
        
//         $stmt->execute(); 
//             // Close statement and connection
//             $stmt->close();

//             $conn->close();
// header('Location: ../admin/products.php');
// } else {
//    if ($_GET['user_email'] ===  $_SESSION['user']) {
//       $get_productID = $_GET['product_ID'];
//       $get_productName = $_GET['product_Name'];

//       $sql = "UPDATE products SET productName=?
//       WHERE productID=?";
//       $stmt = $conn->prepare($sql);
//       $stmt->bind_param("ss", $productName, $get_productID);
      
//       $stmt->execute(); 
//           // Close statement and connection
//           $stmt->close();

//           $conn->close();
// header('Location: ../admin/products.php');
//    exit();
//    }
//       }
// }
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
                        <a href="index.html"><img class="logo_icon img-responsive" src="../freshshop/images/logo.png" alt="#" /></a>
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
                        <a href="#dashboard" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-dashboard yellow_color"></i> <span>Dashboard</span></a>
                        <ul class="collapse list-unstyled" id="dashboard">
                           <li>
                              <a href="dashboard.html">> <span>Default Dashboard</span></a>
                           </li>
                           <li>
                              <a href="dashboard_2.html">> <span>Dashboard style 2</span></a>
                           </li>
                        </ul>
                     </li>
                     <li><a href="widgets.html"><i class="fa fa-clock-o orange_color"></i> <span>Widgets</span></a></li>
                     <li>
                        <a href="#element" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-diamond purple_color"></i> <span>Elements</span></a>
                        <ul class="collapse list-unstyled" id="element">
                           <li><a href="general_elements.html">> <span>General Elements</span></a></li>
                           <li><a href="media_gallery.html">> <span>Media Gallery</span></a></li>
                           <li><a href="icons.html">> <span>Icons</span></a></li>
                           <li><a href="invoice.html">> <span>Invoice</span></a></li>
                        </ul>
                     </li>
                     <li><a href="tables.html"><i class="fa fa-table purple_color2"></i> <span>Tables</span></a></li>
                     <li>
                        <a href="#apps" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-object-group blue2_color"></i> <span>Apps</span></a>
                        <ul class="collapse list-unstyled" id="apps">
                           <li><a href="email.html">> <span>Email</span></a></li>
                           <li><a href="calendar.html">> <span>Calendar</span></a></li>
                           <li><a href="media_gallery.html">> <span>Media Gallery</span></a></li>
                        </ul>
                     </li>
                     <li><a href="price.html"><i class="fa fa-briefcase blue1_color"></i> <span>Pricing Tables</span></a></li>
                     <li>
                        <a href="contact.html">
                        <i class="fa fa-paper-plane red_color"></i> <span>Users</span></a>
                     </li>
                     <li class="active">
                        <a href="#additional_page" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-clone yellow_color"></i> <span>Additional Pages</span></a>
                        <ul class="collapse list-unstyled" id="additional_page">
                           <li>
                              <a href="profile.html">> <span>Profile</span></a>
                           </li>
                           <li>
                              <a href="products.html">> <span>Products</span></a>
                           </li>
                           <li>
                              <a href="login.html">> <span>Login</span></a>
                           </li>
                           <li>
                              <a href="checkout.php">> <span>Check out</span></a>
                           </li>
                           <li>
                              <a href="404_error.html">> <span>404 Error</span></a>
                           </li>
                        </ul>
                     </li>
                     <li><a href="map.html"><i class="fa fa-map purple_color2"></i> <span>Map</span></a></li>
                     <li><a href="charts.html"><i class="fa fa-bar-chart-o green_color"></i> <span>Charts</span></a></li>
                     <li><a href="settings.html"><i class="fa fa-cog yellow_color"></i> <span>Settings</span></a></li>
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
                                       <a class="dropdown-item" href="profile.html">My Profile</a>
                                       <a class="dropdown-item" href="settings.html">Settings</a>
                                       <a class="dropdown-item" href="help.html">Help</a>
                                       <a class="dropdown-item" href="index.html">Home</a>
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
                                 <form action="#" method="POST" enctype="multipart/form-data">
                                    <div>
                                       <label class="mr-2 labelProduct">Toy's name</label>
                                       <input name="toyName" class="addInput" type="text" id="toyName" placeholder="Enter product's name" required value="<?php echo $row_up['toyName']; ?>">
                                    </div>
                                    <div>
                                       <label class="mr-2 labelProduct">Type of toy</label>
                                       <select name="typeOfToy"  id="typeOfToy"type="text"  class="addInput" required value="<?php echo $row_up['typeOfToy']; ?>">
                                          <option value="collective">Collective</option>
                                          <option value="doll">Doll</option>
                                          <option value="lego">Lego</option>
                                          <option value="vehicle">Vehicle</option>
                                          <option value="teddy">Teddy Bear</option>
                                          <option value="robot">Robot</option>
                                          <option value="1year">Under 1 year old</option>
                                          <option value="1to3">1 to 3 years old</option>
                                          <option value="above4">Above 4 years old</option>
                                       </select>
                                    </div>
                                    <div>
                                       <label class="mr-2 labelProduct">Description</label>
                                       <input name="Description" class="addInput" type="text" id="Description" placeholder="Enter your description" required value="<?php echo $row_up['Description']; ?>">
                                    </div>
                                    <div>
                                       <label class="mr-2 labelProduct">Price</label>
                                       <input name="price" class="addInput" type="text" id="price" placeholder="Prices" required value="<?php echo $row_up['price']; ?>">
                                    </div>
                                    
                                       <!-- include('../phpConnect/connectEdit.php') -->
                                    
                                    <div class="mt-4">
                                       <label class="labelProduct" for="file labelProduct">Image for products</label>
                                       <input name ="imageProducts" id="file" type="file">
                                       
                                    </div>
                                    <div class="mt-4" >
                                       <button name="submit" class="btn btn-primary btnAdd" type="submit" >Edit products</button>
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
    