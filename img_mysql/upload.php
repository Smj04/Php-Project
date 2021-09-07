<?php

include ('./db_conn.php');

if($conn) {
    echo "db success!";
}
$f_name=$_FILES['userfile']['tmp_name'];
$size=getimagesize($f_name);
$width=$size[0];
$height=$size[1];
$type=$size[2];
$attr=$size[3];


$f_size=$_FILES['userfile']['size'];
$mypicture=addslashes(fread(fopen($f_name,"r"),filesize($f_name)));

$sql="insert into img(img_type, img_blob,img_size,img_name) values('$size[2]', '$mypicture', $f_size,'$f_name')";
mysqli_query($conn,$sql);
echo "이미지 저장이 되었습니다";


?>