<?php
include ('./db_conn.php');

$fname=$_FILES['userfile']['name'];
$f_type=$_FILES['userfile']['type'];
$f_size=$_FILES['userfile']['size'];
$f_tmp=$_FILES['userfile']['tmp_name'];

$uploads_dir='uploads/';
$upload_file=$uploads_dir.basename($_FILES['userfile']['name']);



if(move_uploaded_file($_FILES['userfile']['tmp_name'],$upload_file)){echo "<script>alert('업로드 성공!');</script>";}
else{echo "<script>alert('업로드 실패ㅠ');history.go(-1)</script>";} 
$sql="insert into img2(fname, fsize, fpath, ftmp_name) values('$fname', '$f_size','$upload_file','$f_tmp')";

mysqli_query($conn,$sql);

?>
 <meta http-equiv="refresh" content="0;show2.php"> 

