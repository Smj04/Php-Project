<?php
$uid = $_POST['uid'];
$upass = $_POST['upass'];
$todo = $_POST['todo'];
$chk = $_POST['chk'];
$w_day = $_POST['w_day'];

include('./db_conn.php');

$sql = "insert into todo(userid,userpass,todo,chk, w_day)
values('$uid','$upass','$todo','$chk','$w_day')";

mysqli_query($conn,$sql);

 "<script>데이터가 성공적으로 추가되었습니다!</script>";


mysqli_close($conn);
?>
<html>
    <style>
    @font-face {
    font-family: 'HSYuji-Regular';
    src: url('https://cdn.jsdelivr.net/gh/projectnoonnu/noonfonts_2108@1.1/HSYuji-Regular.woff') format('woff');
    font-weight: normal;
    font-style: normal;
}
    a{
        font-family: 'HSYuji-Regular';
        color:black;
    }</style>
    <meta http-equiv="refresh" content="0;list.php">
    </html>