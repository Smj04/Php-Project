<?php
$idx = $_POST['idx'];    
$upass = $_POST['upass'];



include('./db_conn.php');

$sql = "delete from todo where userpass = $upass";

if($upass == $idx){
    mysqli_query($conn, $sql);
    echo "<script>alert('삭제가 완료되었습니다');(-1)</script>";
    mysqli_close($conn);
}
else {
    echo "<script>alert('비밀번호가 일치하지 않습니다');history.go(-1)</script>";
}
?>

<meta http-equiv="refresh" content="1;list.php"> 