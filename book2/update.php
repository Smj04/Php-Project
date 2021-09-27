<?php
$idx = $_POST['idx'];
$title = $_POST['title'];
$author = $_POST['author'];
$price = $_POST['price'];
$description  = $_POST['description'];
include('./db_conn.php');

$sql = "update Book2 set title = '$title', author = '$author' , price = '$price', description  = '$description' where id = $idx";
mysqli_query($conn, $sql);
echo "<script>alert('수정이 완료되었습니다.');</script>";

mysqli_close($conn);
?>
<meta http-equiv="refresh" content="0.5;index.php">