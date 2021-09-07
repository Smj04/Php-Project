<link rel="stylesheet" href="list.css"/>
<h2>사용자 정보</h2>
<div>
<table border=1>
    <tr><td>번호</td><td>작성자</td><td>할 일</td><td>수행여부</td><td>작성날짜</td><td>비고</td></tr>

<?php

//1. mysql 접속
$url='localhost';
$id='test';
$pass='1111';
$db='testdb';
$conn=mysqli_connect($url,$id,$pass,$db);

//2. 쿼리 날리기(테이블에 있는 모든 데이터 가지고 오기)
$sql="select * from todo order by id desc"; //오름차순
$result=mysqli_query($conn,$sql);
$count=mysqli_num_rows($result);

//2-1. 한줄씩 가지고 오기
for($i=0;$i<$count;$i++) {
    $re=mysqli_fetch_row($result);
?>
<tr>
<?php
echo "<td>".$re[0]."<td>".$re[1]."<td>".$re[3]."<td>".$re[4]."<td>".$re[5]."<td><a href='deleteform.php?idx=$re[2]'>&nbsp&nbsp;삭제</a><a href='updatepass.php?idx=$re[2]'>수정</a></td></tr>";
}

?></table></div>
