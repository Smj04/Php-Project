<?php
$idx = $_POST['idx'];
$name = $_POST['name'];
$price = $_POST['price'];
include('./db_conn.php');

$sql = "update snack set title = '$name', price = '$price' where id = $idx";
mysqli_query($conn, $sql);
echo "<script>alert('수정이 완료되었습니다.');</script>";

mysqli_close($conn);
?>
<meta http-equiv="refresh" content="0.5;index.php">