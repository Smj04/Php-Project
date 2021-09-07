<?php
$url='localhost';
$id='test';
$pass='1111';
$db='testdb';
$q=$_GET['idx3'];

$conn=mysqli_connect($url,$id,$pass,$db);
/*
UPDATE 테이블이름

SET 필드이름1=데이터값1, 필드이름2=데이터값2, ...

WHERE 필드이름=데이터값
*/
$sql="update music user_id=$q";
mysqli_query($conn,$sql);

mysqli_close($conn);
?>
