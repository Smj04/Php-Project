<?php

$title = $_POST['title'];
$author = $_POST['author'];
$price = $_POST['price'];
$img= $_FILES['img']['name'];  //tmp_name : 임시이름

include('./db_conn.php');

$uploads_dir='./uploads/';
$upload_file=$uploads_dir.basename($_FILES['img']['name']);



if(move_uploaded_file($_FILES['img']['tmp_name'],$upload_file)){echo "<script>alert('업로드 성공!');</script>";}
else{echo "<script>alert('업로드 실패ㅠ');history.go(-1)</script>";} 
$sql = "insert into book2(title, author, price, img)
values('$title','$author', '$price','$img')";






mysqli_query($conn,$sql);

 "<script>데이터가 성공적으로 추가되었습니다!</script>";


mysqli_close($conn);

?>
<meta http-equiv='refresh' content='2;url=index.php'>
