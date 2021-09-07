

<head><link rel="stylesheet" href="show2.css"></head>
    
<script>
function imageView(url) {
	if(url) {
		var imgW = document.getElementById('img1').naturalWidth;
    var imgH = document.getElementById('img1').naturalHeight;
    var imgWindow = window.open("", "_image_view_", "width="+imgW+", height="+imgH);
    imgWindow.document.write("<img src='"+url+"'>");
	}
}
</script>
<h1>🤍이미지 리스트🤍</h1>
<table>

  <tr>
    <td><b>파일이름</b></td>
    <td><b>파일크기</b></td>
    <td><b>파일경로</b></td>
    <td><b>이미지</b></td>
  </tr>

  <tr>
<?php
include("./db_conn.php");

//img2에 있는 모든 파일 가지고 오기
//가지고 온 데이터 갯수구해서 echo 로 출력
$sql = "select * from img2";
$result = mysqli_query($conn,$sql);
$num = mysqli_num_rows($result);

for($i=0; $i<$num; $i++) {
    $re=mysqli_fetch_array($result);
    echo "<td>".$re['fname']."</td><td>".$re['fsize']."</td><td>".$re['fpath']."</td>";

    
    
?>
 <td><img src="<?php echo $re['fpath']?>" onclick="imageView('<?php echo $re['fpath']?>')" id="img1" width="50px" height="50px"> </td>
</tr>


  <?php
  }
  ?>  </table>

 