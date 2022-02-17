<?php
 
include('db_conn.php');
 
 
        $id=$_POST['id'];
        $pw=$_POST['pw'];
       
        // if($conn)
        //     echo "<h1>연결성공!</h1><br>";
        // else
        // echo "<h1>연결실패ㅠ</h1>";
        //입력받은 데이터를 DB에 저장
        $sql = "insert into member (id, pw, permit)
        values ('$id', '$pw',  0)";
 
 
        $result = mysqli_query($conn,$sql);
 
        //저장이 됬다면 (result = true) 가입 완료
        if($result) {
        ?>      <script>
                alert('가입 되었습니다.');
                location.replace("login.php");
                </script>
 
<?php   }
        else{
?>              <script>
                        
                        alert("fail");
                </script>
<?php   }
 
        mysqli_close($conn);
?>


