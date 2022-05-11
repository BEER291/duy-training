<?php

$id = $_GET['id'];
$sql = "SELECT * FROM products WHERE id = $id";
$query = mysqli_query($connect, $sql);
$row = mysqli_fetch_array($query, MYSQLI_ASSOC);

if(isset($_POST['sbm'])){
    $sku = $_POST['sku'];
    $category_ids = $_POST['category_ids'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $image = $_POST['image'];
    $update_date = $_POST['update_date'];

    $sql_up = "UPDATE products SET sku = '$sku', category_ids = '$category_ids', name = '$name', description = '$description', image = '$image', update_date = '$update_date'";
    $query_up = mysqli_query($connect, $sql_up);
    header('location: index.php?pagelayout=list');
}

?>
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Sửa sản phẩm</h2>
        </div>
        <div class="card-body">
            <form method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">SKU</label>
                    <input type="text" name="sku" class="form-control" require value="<?php echo $row['sku']; ?>">
                </div>
                <div class="form-group">
                    <label for="">Danh mục</label>
                    <input type="text" name="category_ids" class="form-control" require value="<?php echo $row['category_ids']; ?>">
                </div>
                <div class="form-group">
                    <label for="">Tên sản phẩm</label>
                    <input type="text" name="name" class="form-control" require value="<?php echo $row['name']; ?>">
                </div>
                <div class="form-group">
                    <label for="">Mô tả</label>
                    <input type="text" name="description" class="form-control" require value="<?php echo $row['description']; ?>">
                </div>
                <div class="form-group">
                    <label for="">Hình ảnh</label>
                    <input type="text" name="image" class="form-control" require value="<?php echo $row['image']; ?>">
                </div>
                <div class="form-group">
                    <label for="">Ngày cập nhập</label>
                    <input type="date" name="update_date" class="form-control" require value="<?php echo $row['update_date']; ?>">
                </div>
                <button name="sbm" class="btn btn-success" type = submit>Cập nhập</button>
            </form>
        </div>
    </div>
</div>