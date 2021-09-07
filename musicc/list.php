<link rel="stylesheet" href="style.css">
<?php

$url='localhost';
$id='test';
$pass='1111';
$db='testdb';

$conn=mysqli_connect($url, $id, $pass, $db);
$sql="select * from music order by id desc";
$result=mysqli_query($conn, $sql);

$cnt=mysqli_num_rows($result);

?>

<table border="1">
    <tr class="row">
        <td>id</td>
        <td>title</td>
        <td>singer</td>
        <td>genre</td>
        <td>price</td>
        <td>passwd</td>
        <td>date</td>
        <td>Extra</td>
    </tr>
    
    <?php
    for($i=0; $i<$cnt; $i++){
        $re=mysqli_fetch_row($result);
    ?>
    <tr>
    <?php
       echo '<td>'.$re[0]." ";
       echo '<td>'.$re[1]." ";
       echo '<td>'.$re[2]." ";
       echo '<td>'.$re[3]." ";
       echo '<td>'.$re[4]." ";
       echo '<td >'.$re[5]." ";
       echo '<td >'.$re[6]." ";
       echo "<td><a href='edit.php?idx=$re[0]'>수정</a>&nbsp;<a href='delete.php?idx=$re[0]'>삭제</a></td>";
    }
    ?>
    </tr>
</table>
