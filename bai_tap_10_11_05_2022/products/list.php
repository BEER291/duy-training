<?php
    $prdofpage = 5;
    if(isset($_GET["page"])){
      $page = $_GET["page"];
    }else{
      $page =1; 
    }
    settype($page, "int");
    $from = ($page - 1) * $prdofpage;
    $sql = "SELECT * FROM products LIMIT $from, $prdofpage";
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
  <tbody id="paginate" >
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
<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
  <li class="page-item <?php if($_GET["page"] == 1){
      echo "disabled";
  }
   ?>"><a class="page-link " href="index.php?page=<?php echo ($_GET["page"] - 1)
  ?>">Previous</a></li>
    <?php
    $sql_page = mysqli_query($connect, "SELECT * FROM products");
    $row_count = mysqli_num_rows($sql_page);
    $page = ceil($row_count/5);
    for($i = 1; $i <= $page; $i++){?>
    <li class="page-item <?php if($_GET["page"] == $i){
      echo " active";
  }
   ?>">
      <a class="page-link" href="index.php?page=<?php echo $i; ?>">
        <?php echo $i; ?>
    </a>
    </li>
    <?php }
    ?>
     <li class="page-item <?php if($_GET["page"] == $page){
      echo "disabled";
  }
   ?>"><a class="page-link" href="index.php?page=<?php echo ($_GET["page"] + 1)
  ?>">Next</a></li>
</nav>
<a class="btn btn-primary" href="index.php?page_layout=add">Thêm sản phẩm</a>
    </div>
  </div>
</div>
