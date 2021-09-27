<?php
$idx = $_POST['idx'];
$userid = $_POST['userid'];
$pass = $_POST['pass'];

if($userid == "admin" && $pass == "1111"){ 

include('./db_conn.php');

$sql = "select * from Book2 where id = $idx";
$result = mysqli_query($conn, $sql);
$re = mysqli_fetch_row($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BOOK</title>
    <style>
        @font-face {
    font-family: 'MaruBuri-Regular';
    src: url('https://cdn.jsdelivr.net/gh/projectnoonnu/noonfonts_20-10-21@1.0/MaruBuri-Regular.woff') format('woff');
    font-weight: normal;
    font-style: normal;
}
        *{
            text-align: center;
            margin: 20px auto;
            font-family: 'MaruBuri-Regular';
        }
        table{
            text-align: center;

        }
      
        input:focus{

            background-color: rgb(255, 174, 145);
        }
        a{
            text-decoration: none;
            color: black;
        }
    </style>
</head>
    <body>
    
        <h1 style="color:orange">수정</h1>
        <form method="POST" action="update.php">
            <table>
                <tr>  
                    <input type="hidden" name ="idx" value="<?php echo $idx ?>">
                  
                    <td>제목 : <input type="text" name="title" value="<?php echo $re[1]?>"></td>
                </tr>
                <tr>
                    <td>저자 : <input type="text" name="author" value="<?php echo $re[2]?>"></td>
                </tr>
               
                <tr>
                    <td>가격 : <input type="text" name="price" value="<?php echo $re[3]?>"></td>
                </tr>
                <tr>
                    <td>상세정보 : <input type="text" name="description" value="<?php echo $re[5]?>"></td>
                </tr>
                <tr>
                <td><button type="submit" style="border: 0; color: black; background-color: orange; border-radius: 30px;" >입력완료</button></td>
                </tr>
                <tr>
                <td><a href="index.php">-목록보기-</a></td>
            </tr>
            </table>
        </form>    

    </body>
</html>
<?php
}
else echo "<script>alert('아이디 혹은 비밀번호가 틀립니다')</script>";
?>