<?php
$url='localhost';
$id='test';
$pass='1111';
$db='testdb';

$idx=$_POST['idx3'];
$pw=$_POST['pw'];

$conn=mysqli_connect($url,$id,$pass,$db);
$query="delete from music where id=$idx";
$result=mysqli_query($conn,$query);
echo "데이터 삭제 성공";

mysqli_close($conn);
?>
<a href="list.php">삭제확인</a>