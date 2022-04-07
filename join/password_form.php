<?php

    $idx = $_GET['idx'];
    echo "idx : ".$idx;
    
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <style>
            input {
                border: 1px solid rgb(211, 211, 211);
                border-bottom: 1px solid black;
            }
        </style>
    </head>

    <body>
        <form method="POST" action="edit_form.php">
            <h1>비밀번호를 입력하세요</h1>

            <input type="text" name="pass"></br>
            <input type="hidden" name ="idx2" value="<?php echo $idx ?>">
            <!-- hidden 안보이는데 데이터 넘기기 -->
            <!-- value 초기값 설정-->
            
            <button type="submit">입력완료</button>

        </form>
    </body>
</html>

