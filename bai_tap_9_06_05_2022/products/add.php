<?php

if(isset($_POST['sbm'])){
    $sku = $_POST['sku'];
    $category_ids = $_POST['category_ids'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $image = $_POST['image'];
    $create_date = $_POST['create_date'];

    $sql = "INSERT INTO products (sku, category_ids, name, description, image, create_date) VALUES ('$sku', '$category_ids', '$name', '$description',  '$image', '$create_date')";
    $query = mysqli_query($connect, $sql);
    header('location: index.php?pagelayout=list');
}

?>
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Thêm sản phẩm</h2>
        </div>
        <div class="card-body">
            <form method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">SKU</label>
                    <input type="text" name="sku" class="form-control" require>
                </div>
                <div class="form-group">
                    <label for="">Danh mục</label>
                    <input type="text" name="category_ids" class="form-control" placeholder="Nhập vào đây 1 hoặc nhiều số nguyên. VD: 1, 2" require>
                </div>
                <div class="form-group">
                    <label for="">Tên sản phẩm</label>
                    <input type="text" name="name" class="form-control" require>
                </div>
                <div class="form-group">
                    <label for="">Mô tả</label>
                    <input type="text" name="description" class="form-control" require>
                </div>
                <div class="form-group">
                    <label for="">Hình ảnh</label>
                    <input type="text" name="image" class="form-control" placeholder="Dán link ảnh vào đây" require>
                </div>
                <div class="form-group">
                    <label for="">Ngày tạo</label>
                    <input type="date" name="create_date" class="form-control" require>
                </div>
                <button name="sbm" class="btn btn-success" type = submit>Thêm</button>
            </form>
        </div>
    </div>
</div>