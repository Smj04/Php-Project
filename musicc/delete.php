<?php
$idx=$_GET['idx'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
          table{
            border: 3px rgb(97, 67, 11) solid ;
            padding: 50px;
            border-radius: 20px;
        }
        td{
            padding-bottom: 8px;
            font-size: 14px;
        }
        input{
            width: 230px;
            height: 45px;
            background-color:rgb(247, 247, 247);
            border:0;
        }
        input:hover{
            background-color: #d1c685;
        }
        button{
            width: 235px;
            height: 40px;
            border:0;
            outline: 0;
            color:white;
            cursor: pointer;
        }
     
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>확인</title>
</head>
<body>

    
    <form method="POST" action="delete_form.php">
    <table>
            <tr>
                <tr style="text-align:center; color:brown">
                    <td>
                        비밀번호를 입력하세요.
                        
                    <td>
                </tr>
                <tr>
                    <td>
                        
                    <input type="password" name="pw" placeholder="password">

                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="hidden" name="idx2" value="<?php echo $idx?>">
                    </td>
                 </tr>
                
                <tr>
                <td style="text-align: center; display: blcok; margin: 0 auto;" >
                         <button type="submit" style="background-color : rgb(104, 87, 56); border-radius: 30px;">전송</button></td>
                    </tr>
            </tr>
       
    </form>

</body>
</html>