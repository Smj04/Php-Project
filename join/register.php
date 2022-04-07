<?php

$url = "localhost";
$id = "test";
$password = "1111";
$db = "testdb";

// mysql 접속 : mysqli_connect(서버? , 아이디, 비밀번호, 접속할 데이터베이스)
$conn = mysqli_connect($url, $id, $password, $db);

if(!$conn){ // conn이 없으면 연결 실패
    echo "<h1>연결 실패</h1><br/>";
}
else {
    echo "<h1>연결 성공</h1><br/>";
}

$uid = $_POST["uid"];
$upass = $_POST["upass"];
$uname = $_POST["uname"];
$uemail = $_POST["uemail"];

echo "아이디 : ".$uid."<br/>";
echo "비밀번호 : ".$upass."<br/>";
echo "이름 : ".$uname."<br/>";
echo "이메일 : ".$uemail."<br/>";

$sql = "insert into join1(user_id, user_pass, user_name, user_email, reg_date) values ('$uid', '$upass', '$uname', '$uemail', now())";
// now() 함수는 현재 날짜 가져오기

mysqli_query($conn, $sql);
// selete 말고는 리턴값이 없음

echo "데이터가 추가되었습니다.";

mysqli_close($conn);
?>