<?php
$idx = $_GET['idx'];
include('./db_conn.php');

$sql = "select * from snack where id = $idx";
$result = mysqli_query($conn, $sql);
$re = mysqli_fetch_row($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

</head>
    <body>
        <form method="POST" action="update.php">
            <table>
                <tr>  
                    <input type="hidden" name ="idx" value="<?php echo $idx ?>">
                  
                    <td>이름 : <input type="text" name="name" value="<?php echo $re[1]?>"></td>
                </tr>
                <tr>
                    <td>가격 : <input type="text" name="price" value="<?php echo $re[2]?>"></td>
                </tr>
                <tr>
                <td><button type="submit" >입력완료</button></td>
                </tr>
                <tr>
                <td><a href="index.php">목록보기</a></td>
            </tr>
            </table>
        </form>    

    </body>
</html>
