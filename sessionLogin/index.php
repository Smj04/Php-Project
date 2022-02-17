<?php
$url = 'localhost';
$id = 'test';
$pass = '1111';
$db = 'testdb';

include('db_conn.php');
                
                // $query ="select * from board order by number desc";
                // $result = $connect->query($query);
                // $total = mysqli_num_rows($result);
 
                session_start();
   //isset : 변수가 설정되어 있는지 없는지 확인하는 함수
                if(isset($_SESSION['userid'])) {
                        echo $_SESSION['userid'];?>님 안녕하세요
                        <br/>
                        <button onclick="location.href='logout.php'">로그아웃</button>
        <?php
                }
                else {
        ?>              <button onclick="location.href='login.php'">로그인</button>
                        <br />
        <?php   }
        ?>
 


