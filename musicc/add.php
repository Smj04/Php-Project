<?php


$title = $_POST['title'];
$singer= $_POST['singer'];
$price = $_POST['price'];
$genre= $_POST['genre'];
$pw= $_POST['pw'];
$date=$_POST['date'];

$url='localhost';
$id='test';
$pass='1111';
$db='testdb';

$conn=mysqli_connect($url, $id, $pass, $db);



$sql = " insert into music(song_title, song_singer,song_genre, song_price, song_passwd,
song_date) values('$title','$singer', '$genre','$price', '$pw','$date')";

mysqli_query($conn, $sql);
mysqli_close($conn);

?>
<meta http-equiv='refresh' content='2;url=addMusic.html'>
