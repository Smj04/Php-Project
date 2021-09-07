<?php
$idx = $_GET['idx'];

$uid = $_POST['uid'];
$upass = $_POST['upass'];
$todo = $_POST['todo'];
$chk = $_POST['chk'];

include('./db_conn.php');

$sql = "update todo set userid = '$uid', userpass = '$upass', todo = '$todo' , chk = '$chk' where userpass = $idx";

mysqli_query($conn, $sql);
echo "<script>alert('수정이 완료되었습니다.');</script>";

?>
 <meta http-equiv="refresh" content="0.5;list.php"> 