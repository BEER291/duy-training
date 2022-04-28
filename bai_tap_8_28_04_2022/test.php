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

function myFunction($category_name) {
    $array = explode(',', $category_name);
    $username = "user_demo";
    $password = "123456";
    $server   = "localhost";
    $dbname   = "demo";

$connect = new mysqli($server, $username, $password, $dbname);
    for ($i = 0; $i < count($array); $i++) {
        $sql2 = "SELECT name FROM danhmuc WHERE id = $array[$i]";
        $ket_qua2 = $connect->query($sql2);
        $row = $ket_qua2->fetch_array(MYSQLI_ASSOC);
        foreach ($row as $value) {
            $array2[] = $value;
        }
    }
    $string = implode(", ", $array2);
    echo $string;
}

while ($row = $ket_qua->fetch_array(MYSQLI_ASSOC)) {
    echo "<p>SKU: " . $row['sku'] . "</p>";
    echo "<p>Danh mục: " . "</p>";
    myFunction ($row['category_ids']);
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