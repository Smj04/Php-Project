<?php
$idx=$_GET['idx'];


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
        
        <h1 style="color:orange">관리자 확인</h1>
   
            
                
        <form action="delete.php?idx=<?php echo $idx ?>" method="POST">
        <table>
                <tr>
                <td>아이디 : <input type="text" name="userid" value="admin"></td>
            </tr>

            <tr>
                
            <td>비밀번호 : <input type="password" name="pass" value="1111"></td>
            <!-- <input type="hidden" name="idx" value="'<?php echo $idx ?>'" > -->
            </tr>
           
        </table>
        <button type="submit" style="border: 0; color: black; background-color: orange; border-radius: 30px;" >입력완료</button>
    </form>
    <a href="index.php">-목록보기-</a>
</body>
</html>
