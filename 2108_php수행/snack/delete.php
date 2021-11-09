<?php
$idx = $_GET['idx'];    
include('./db_conn.php');
    $sql = "delete from snack where id = $idx";
    mysqli_query($conn, $sql);

    echo "<script>alert('삭제가 완료되었습니다');(-1)</script>";
    mysqli_close($conn);

?>

 <meta http-equiv="refresh" content="1;index.php">  