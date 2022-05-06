<?php
    $sql = "SELECT * FROM products";
    $query = mysqli_query($connect, $sql);
?>
<div class = "container-fluid">
  <div class="card">
    <div class="card-header">
      <h2>Danh sách sản phẩm</h2>
    </div>
    <div class="card-body">
    <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">STT</th>
      <th scope="col">SKU</th>
      <th scope="col">Danh mục</th>
      <th scope="col">Tên sản phẩm</th>
      <th scope="col">Mô tả</th>
      <th scope="col">Hình ảnh</th>
      <th scope="col">Ngày tạo</th>
      <th scope="col">Ngày cập nhập</th>
      <th scope="col">Sửa</th>
      <th scope="col">Xóa</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $i = 1;
      while($row = mysqli_fetch_array($query, MYSQLI_ASSOC)){?>
        <tr>
          <td scope="col"><?php echo $i++; ?></td>
          <td scope="col"><?php echo $row['sku']; ?></td>
          <td scope="col"><?php
      $array=array_map('intval', explode(',', $row['category_ids']));
      $array = implode("','",$array);
      $query2 = mysqli_query($connect , "SELECT name FROM categorys WHERE id IN ('".$array."')");
      while ($row2 = mysqli_fetch_array($query2, MYSQLI_ASSOC)) {
          echo $row2['name'] . "<br>";
      }
      ?></td>
          <td scope="col"><?php echo $row['name']; ?></td>
          <td scope="col"><?php echo $row['description']; ?></td>
          <td scope="col"><?php echo "<img width = 250rem src = " . $row['image'] . ">"; ?></td>
          <td scope="col"><?php echo $row['create_date']; ?></td>
          <td scope="col"><?php echo $row['update_date']; ?></td>
          <td scope="col">
            <a class="btn btn-primary" href="index.php?page_layout=edit&id=<?php echo $row['id']; ?>">Sửa</a>
          </td>
          <td scope="col">
          <a class="btn btn-primary" href="index.php?page_layout=remove&id=<?php echo $row['id']; ?>">Xóa</a>
          </td>
      </tr>
    <?php }
    ?>
  </tbody>
</table>
<a class="btn btn-primary" href="index.php?page_layout=add">Thêm sản phẩm</a>
    </div>
  </div>
</div>
