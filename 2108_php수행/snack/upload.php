<?php

include('./db_conn.php');

$f_name=$_FILES['userfile']['name'];
$f_type=$_FILES['userfile']['type'];
$f_size=$_FILES['userfile']['size'];
$f_tmp=$_FILES['userfile']['tmp_name'];
$f_error=$_FILES['userfile']['error'];

$uploads_dir='./uploads/';

if(!is_dir($uploads_dir)) {
    mkdir($uploads_dir);
}

$upload_file=$uploads_dir.basename($_FILES['userfile']['name']);
echo $upload_file;

if(move_uploaded_file($_FILES['userfile']['tmp_name'], $upload_file)) {
    echo '업로드성공';
}
else {
    echo '업로드실패';
}


$sql="insert into img_2
(fname,fsize, fpath,ftmp_name)value('$f_name',$f_size,'$upload_file','$f_tmp')";
mysqli_query($conn,$sql);
echo "등록되었습니다"."<br>";
?>
<a href='list.php'>목록보기</a>