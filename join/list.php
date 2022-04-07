
<link rel="stylesheet" href="list.css">
<table border=1>
    <tr><td>순번</td><td>아이디</td><td>비밀번호</td><td>이름</td><td>이메일</td><td>가입날짜</td><td>비고</td></tr>

<?php

$url = "localhost";
$id = "test";
$password = "1111";
$db = "testdb";

$conn = mysqli_connect($url, $id, $password, $db);

if(!$conn){
    echo "연결 실패<br/>";
}
else {
    echo "연결성공<br/>";
}

$sql = "select * from join1 ORDER BY id DESC";
// id가 내림차순으로 정렬
$result = mysqli_query($conn, $sql);
// 결과값이 있으니 변수에 저장

$conut = mysqli_num_rows($result);
// 데이터 갯수 가져오는 함수 : mysqli_num_rows

/*
for($i=1; $i<=$conut; $i++){
    $re = mysqli_fetch_row($result);

    // 한줄 씩 읽어온 것을 배열에 저장
    echo $re[0]." ".$re[1]." ".$re[2]." ".$re[3]." ".$re[4]." ".$re[5]."<br/>";
*/

for($i=0;$i<$conut;$i++) {
    $re=mysqli_fetch_row($result);
?>
<tr>
<?php
echo "<td>".$re[0].
"<td>".$re[1].
"<td>".$re[2].
"<td>".$re[3].
"<td>".$re[4].
"<td>".$re[5].
"<td><a href='password_form.php?idx=$re[0]'>수정</a>&nbsp;&nbsp;
<a href='password_form.php?idx=$re[0]'>삭제</td></tr>";
}


// echo 로 안씀!!! 다시 바꾸기

?>


