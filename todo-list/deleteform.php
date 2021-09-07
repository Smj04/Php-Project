<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>비밀번호 확인</title>
    
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
       
        table{
            text-align: center;
            margin: auto;

        }
        td{
            border-top: 1px solid black;
            border-bottom: 1px solid black;
            padding: 10px;
        }
        input:focus{

            background-color: rgb(255, 174, 145);
        }
    button{
        font-family: 'HSYuji-Regular';
    }
    
 
    </style>
</head>
<?php
$idx = $_GET['idx'];

?>
<body>
    
    <h2>삭제하시려면 비밀번호를 입력해주세요!</h2>

    <form action="delete.php" method="POST">
<table>
    <tr> 
     <td>비밀번호 : <input type="password" name="upass"></td>
     <input type="hidden" name="idx" value="<?php echo $idx ?>" >
     </tr>
    
        </table>
        <button type="submit" style="border: 0; color: white; background-color: black;">입력완료</button>
    </form>

</body>
</html>