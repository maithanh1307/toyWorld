<?php
require_once ('../phpConnect/connectData.php');
require_once('../fpdf/fpdf.php');
$conn->set_charset("utf8");
// Tạo một tệp PDF mới
$pdf = new FPDF();
$pdf->AddPage();

// Font chữ và cỡ chữ cho tiêu đề
$pdf->SetFont('Arial', 'B', 16);
$pdf->Image('../freshshop/images/logo01.png', 10, 10, 30); // Thay đổi path và kích thước nếu cần
// Header: Toy World
$pdf->SetFont('Arial', 'B', 16);
$pdf->Cell(0, 10, 'Miniature World', 0, 1, 'C'); // Thay đổi tên công ty

// Thêm địa chỉ công ty và mã số thuế
$pdf->SetFont('Arial', '', 12);
$pdf->SetXY(140, 25); // Đặt lại vị trí bắt đầu của cell cho mã số thuế
$pdf->Cell(0, 10, 'Tax Code: 123456789', 0, 1, 'R'); // Hiển thị ở góc phải trên cùng



// Font chữ và cỡ chữ cho nội dung
$pdf->SetFont('Arial', '', 12);

$date = date('d/m/Y');
$pdf->SetFont('Arial', '', 10);
$pdf->Cell(0, 10, $date, 0, 1, 'R');

// Tiêu đề hóa đơn
$pdf->SetFont('Arial', 'B', 20); // Đặt font là Arial, đậm, kích thước 20
$pdf->Cell(0, 20, 'E-Invoice', 0, 1, 'C'); // Kích thước chiều cao của Cell là 20 để làm cho chữ to hơn
$pdf->Ln(10); // Xuống dòng


// Truy vấn dữ liệu từ bảng orders
$sql = "SELECT orderID, email, firstName, lastName, payment, total FROM orders";
$result = $conn->query($sql);

// Hiển thị dữ liệu từ truy vấn
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(50, 10, 'Order ID:', 0, 0);
        $pdf->SetFont('Arial', '', 12);
        $pdf->Cell(0, 10, $row["orderID"], 0, 1);

        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(50, 10, 'Email:', 0, 0);
        $pdf->SetFont('Arial', '', 12);
        $pdf->Cell(0, 10, $row["email"], 0, 1);

        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(50, 10, 'First Name:', 0, 0);
        $pdf->SetFont('Arial', '', 12);
        $pdf->Cell(0, 10, $row["firstName"], 0, 1);

        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(50, 10, 'Last Name:', 0, 0);
        $pdf->SetFont('Arial', '', 12);
        $pdf->Cell(0, 10, $row["lastName"], 0, 1);

        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(50, 10, 'Payment:', 0, 0);
        $pdf->SetFont('Arial', '', 12);
        $pdf->Cell(0, 10, $row["payment"], 0, 1);

        $pdf->Ln(10); // Xuống dòng lớn hơn giữa các hóa đơn

        // Tiêu đề cho mục hàng
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(50, 10, 'Invoice details:', 0, 1);

        // Truy vấn dữ liệu từ bảng carts
        $sql_carts = "SELECT toyName, quantity, price, total FROM carts";
        $result_carts = $conn->query($sql_carts);

        $totalSum = 0; // Khởi tạo biến để tính tổng

        // Hiển thị dữ liệu từ truy vấn
        if ($result_carts->num_rows > 0) {
            // Header cho grid
            $pdf->SetFont('Arial', 'B', 12);
            $pdf->Cell(50, 10, 'Name of toy', 1, 0, 'C');
            $pdf->Cell(30, 10, 'Quantity', 1, 0, 'C');
            $pdf->Cell(30, 10, 'Price', 1, 0, 'C');
            $pdf->Cell(30, 10, 'Total', 1, 0, 'C'); // Cột total
            $pdf->Cell(30, 10, ' Sum', 1, 1, 'C'); // Cột tổng

            // Hiển thị dữ liệu từ truy vấn
            while ($row_carts = $result_carts->fetch_assoc()) {
                $pdf->SetFont('Arial', '', 12);
                $pdf->Cell(50, 10, $row_carts["toyName"], 1, 0);
                $pdf->Cell(30, 10, $row_carts["quantity"], 1, 0, 'C');
                $pdf->Cell(30, 10, $row_carts["price"], 1, 0, 'C');
                $pdf->Cell(30, 10, $row_carts["total"], 1, 0, 'C');
                $pdf->Cell(30, 10, '', 1, 1, 'C'); // Ô trống cho cột tổng
                $totalSum += $row_carts["total"]; // Cộng dồn vào tổng
            }

            // Hiển thị tổng cuối cùng
            $pdf->Cell(140, 10, 'Total', 1, 0, 'R');
            $pdf->Cell(30, 10, $totalSum, 1, 1, 'C'); // Hiển thị tổng
        } else {
            $pdf->Cell(0, 10, 'Không có thông tin chi tiết sản phẩm', 0, 1);
        }
    }
} else {
    echo "0 results";
}

$pdf->SetFont('Arial', 'I', 10); // Đặt font là Arial, nghiêng, kích thước 10
$pdf->Cell(0, 10, 'Thank you for shopping with us!', 0, 1, 'C'); // Căn giữa

$conn->close();

// Xuất tệp PDF
$pdf->Output();
?>
