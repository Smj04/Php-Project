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
   
    <form method="POST" action="realedit.php" id="signup_form">
      제목 : <input type="text" name="title" value="<?php echo $re[1]?>"><br>
      가수 : <input type="text" name="singer" value="<?php echo $re[2]?>"> <br>
      장르 :  <input type="text" name="genre" value="<?php echo $re[3]?>"><br>
      가격 : <input type="number" name="price" value="<?php echo $re[4]?>"><br>
      비밀번호 : <input type="number" name="pw" value="<?php echo $re[5]?>"><br>
      날짜 : <input type="date" name="date" value="<?php echo $re[6]?>"><br>
      <input type="submit" name="send" value="전송">
      <input type="hidden" name="idx3" value="<?php echo $q?>">
    </form>
    
  
 
<?php
    }
}
?>

