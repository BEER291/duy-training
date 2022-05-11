<?php
$id = $_GET['id'];
$sql = "DELETE FROM products WHERE id = $id";
$query = mysqli_query($connect, $sql);
header('location: index.php?pagelayout=list');
?>