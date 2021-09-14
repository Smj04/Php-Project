<!-- <link rel=stylesheet href="add.css"> -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<h2 class = "text-center">책 리스트</h2>
<script>
        function imageView(url) {
            if(url) {
            //alert(url);
                var imgW = document.getElementById('img1').naturalWidth;

                var imgH = document.getElementById('img1').naturalHeight;

                var imgWindow = window.open("", "_image_view_", "width="+imgW+", height="+imgH);

                imgWindow.document.write("<img src='"+url+"'>");

            }
        }
        </script>
        

<table class ="table text-center">
    <tr><td>순번</td><td>제목</td><td>저자</td><td>가격</td><td>이미지</td><td>비고</td></tr>

<?php

include("./db_conn.php");
$sql = "select * from book2";
$result = mysqli_query($conn, $sql);    ///select로 가져온 값
 $count = mysqli_num_rows($result);
// for($i=0; $i<$count; $i++){
//     $re = mysqli_fetch_row($result);


// ?>
 <tr>
     <?php
   
// }




// $sql = "select * from book2";
// $result = mysqli_query($conn,$sql);
 //$num = mysqli_num_rows($result);

for($i=0; $i<$count; $i++) {
    $re=mysqli_fetch_row($result);
    
    echo "<td>".$re[0]."<td>".$re[1]."<td>".$re[2]."<td>".$re[3]."</td>";

    
    
?>  
 <td><img src="uploads/<?php echo $re[4]?>" onclick="imageView('<?php echo $re[4]?>')" id="img1" width="100px" height="150px"> </td> <!--링크걸때 이미지가 들어있는 폴더로-->  
 <td><a href='update.php?idx=$re[0]'>수정</a>&nbsp;&nbsp;<a href='delete.php?idx=$re[0]'>삭제</a></td>
</tr>


  <?php
  }
  ?>  





</table>
<div>
  
<button type="submit" class="btn btn-outline-info center"  onclick = "location.href = 'add.html'">목록 추가하기</button>

</div>
 