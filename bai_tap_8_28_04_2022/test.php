<?php
$username = "user_demo";
$password = "123456";
$server   = "localhost";
$dbname   = "demo";

$connect = new mysqli($server, $username, $password, $dbname);

if ($connect->connect_error) {
    die("Không kết nối :" . $conn->connect_error);
    exit();
}

$sql     = "SELECT * FROM sanpham";
$ket_qua = $connect->query($sql);

if (!$ket_qua) {
    die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
    exit();
}

while ($row = $ket_qua->fetch_array(MYSQLI_ASSOC)) {
    echo "<p>ID: " . $row['id'] . "</p>";
    echo "<p>SKU: " . $row['sku'] . "</p>";
    echo "<p>Danh mục: " . $row['category_ids'] . "</p>";
    echo "<p>Tên sản phẩm: " . $row['name'] . "</p>";
    echo "<p>Mô tả: " . $row['description'] . "</p>";
    echo "<p>Hình ảnh: </p>";
    echo "<img src = " . $row['image'] . ">";
    echo "<p>Ngày tạo: " . $row['create_date'] . "</p>";
    echo "<p>Ngày cập nhập: " . $row['update_date'] . "</p>";
    echo "<hr>";
}

$connect->close();
?>