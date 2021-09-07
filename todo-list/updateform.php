<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TODO-LIST</title>
    <style>
          @font-face {
    font-family: 'HSYuji-Regular';
    src: url('https://cdn.jsdelivr.net/gh/projectnoonnu/noonfonts_2108@1.1/HSYuji-Regular.woff') format('woff');
    font-weight: normal;
    font-style: normal;
}
        body{
            margin: 0;
            padding: 0;
            text-align: center;
            background-color: rgba(223, 212, 199, 0.432);
            font-family: 'HSYuji-Regular';
        }
        h1{
 
            background: linear-gradient(to right bottom, rgb(0, 0, 0), rgb(244, 247, 242));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        table{
            text-align: center;
            margin: auto;

        }
        td{
            border-top: 1px solid black;
            padding: 10px;
        }
        input:focus{

            background-color: rgb(255, 174, 145);
        }
        a{
            color:black;
            font-family: 'HSYuji-Regular';
        }
        button{
            font-family: 'HSYuji-Regular';
        }
    </style>
</head>
<?php

$idx = $_POST['idx'];
$upass = $_POST['upass'];

include('./db_conn.php');

$sql = "select * from todo where userpass = $idx";
$result = mysqli_query($conn, $sql);

$re = mysqli_fetch_row($result);

if($upass != $idx){
    echo "<script>alert('비밀번호가 일치하지 않습니다');history.go(-1)</script>";
}
else {


?>
    <body>
        <h2>수정</h2>
    <form action="update.php?idx=<?php echo $re[2]?>" method="POST">
        <table >
            <tr >
            
                <td>작성자 : <input type="text" name="uid"  value="<?php echo $re[1]?>"></td>
            </tr>

            <tr>
                
                <td>비밀번호 : <input type="password" name="upass" value="<?php echo $re[2]?>"></td>
            </tr>
            <tr>
                
                <td>할일 : <input type="text" name="todo" value="<?php echo $re[3]?>"></td>
            </tr>

            <tr>
                
                <td>수행여부 : <input type="text" name="chk" value="<?php echo $re[4]?>"></td>
            </tr>
            <tr>
                
                <td>작성날짜 : <input type="text" name="w_day" value="<?php echo $re[5]?>"></td>
            </tr>
            <tr>
                <td><button type="submit" style="border: 0; color: white; background-color: black;">입력완료</button></td>
            </tr>
            <tr>
                <td><a href="list.php">목록보기</a></td>
            </tr>
        </table>
        
    </form>
</body>
</html>
<?php
    }
?>