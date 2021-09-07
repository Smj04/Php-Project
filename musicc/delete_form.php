<?php
$pww=$_POST['pw'];
//사용자가 입력한 비밀번호를 가지고 온다
$q=$_POST['idx2'];

$url='localhost';
$id='test';
$pw='1111';
$db='testdb';
$conn=mysqli_connect($url, $id, $pw, $db);

$sql="select * from music where id=$q";
$result=mysqli_query($conn, $sql);

$cnt=mysqli_num_rows($result);

for($i=0; $i<$cnt; $i++){
    $re=mysqli_fetch_row($result);
    if($re[5]!=$pww){
        echo"<script>alert('비밀번호 불일치'); history.go(-1)</script>";
    }
    else{?>
    <form method="POST" action="rd.php">
    <input type="hidden" name="idx3" value="<?php echo $q?>">
    <input type="hidden" name="pw" value="<?php echo $pww?>">
    <button type="submit">전송</button>
    </form>

 
<?php
    }
}
?>
