<?php
$url = 'localhost';
$id = 'test';
$pass = '1111';
$db = 'testdb';

$conn = mysqli_connect('localhost','test','1111','testdb');



$sql = "select * from img";             //하나씩 가져와야해서 반복문 사용해야함

$result = mysqli_query($conn, $sql);
$re = mysqli_fetch_row($result);


//어떤 타입으로 응답을 보낼것인지 세팅하는 작업(mime타임)
header("Content-type:image/png");       //반드시 헤더는 에코실행 전에 출력한다!
echo $re[2];


?>