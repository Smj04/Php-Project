<?php

$u_pass = $_POST['pass'];

$idx2 = $_POST['idx2']; // 사용자의 인텍스 번호(필드명 : id)가 들어가있음

// 사용자가 입력한 비밀번호가 들어있는 변수 이름 : $u_pass
// 테이블에서 가져온 2번의 비밀번호가 들어있는 변수 이름 : $re

$url = "localhost";
$id = "test";
$password = "1111";
$db = "testdb";

$conn = mysqli_connect($url, $id, $password, $db);

$sql = "select * from join1 where id=$idx2";
$result = mysqli_query($conn, $sql);


$re = mysqli_fetch_array($result);

if($re[2] != $u_pass){ // 비밀번호가 일치하지 않을 시
    echo "<script>alert('비밀번호가 일치하지 않습니다');history.go(-1)</script>";
    // script는 echo 안에 작성!
    // history.go(-1) 많이 사용한다! 뒤로 가기(백)

}
else { ?>

    <!-- html 따로 php 따로!! -->
    <h1>회원수정</h1>
    
    <form method="POST" action="edit.php">
        <table>
            <tr>
                <td >아이디</td>
                <td><input type="text" name="uid" value="<?php echo $re[1] ?>"></td>
            </tr>

            <tr>
                <td>비밀번호</td>
                <td>
                    <input type="text" name="upass" value="<?php echo $re[2] ?>">
                </td>
            </tr>

            <tr>
                <td>성명</td>
                <td><input type="text" name="uname" value="<?php echo $re[3] ?>"> </td>
            </tr>

            <tr>
                <td>이메일</td>
                <td>
                        <input type="text" name="uemail" value="<?php echo $re[4] ?>">
                </td>
            </tr>

            <tr>
                <td>
                    <button type="submit">수정완료</button>
                </td>                
            </tr>
        </table>

    </form>
<?php }

?>