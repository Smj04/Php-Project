
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<h2 class = "text-center">책 리스트</h2>

<style>
    *{
        font-family: 'MaruBuri-Regular';
        color:black;
    }
    body{
        background-image:url('img/yellow.jpg');
        background-size:cover;
        background-repeat:no-repeat;
    }
    a{
        text-decoration:none;
        color:black;
    }
    a:hover{
        color: red;
        transition:0.6s;
     
    }
    @font-face {
    font-family: 'MaruBuri-Regular';
    src: url('https://cdn.jsdelivr.net/gh/projectnoonnu/noonfonts_20-10-21@1.0/MaruBuri-Regular.woff') format('woff');
    font-weight: normal;
    font-style: normal;
}
</style>
<script>
        function imageView(url) {
            if(url) {
            //alert(url);
                var imgW = document.getElementById('img1').naturalWidth;

                var imgH = document.getElementById('img1').naturalHeight;

                var imgWindow = window.open("", "_image_view_", "width="+imgW+", height="+imgH);

                imgWindow.document.write("<img src='uploads/"+url+"'>");

            }
        }
        </script>
        
<table class ="table text-center">
<thead class="thead-dark">
    <tr><th scope="col">순번</th><th scope="col">제목</th><th scope="col">저자</th><th scope="col">가격</th><th scope="col">상세정보</th><th scope="col">이미지</th><th scope="col">비고</th></tr>
    </thead>
    <tbody>
             <?php

            include('./db_conn.php');

            $sql = "select * from Book2";
            $result = mysqli_query($conn, $sql);
            $count = mysqli_num_rows($result);

            for($i = 0; $i<$count ; $i++){
                $re = mysqli_fetch_row($result);
            ?>
            <tr>
                <th scope="row"> <?php echo"$re[0]" ?></th>
                <td><a href='detail.php?click=<?php echo "$re[1]"?>'><?php echo"$re[1]"?></a></td>
                <td><?php echo "$re[2]" ?></td>
                <td><?php echo "$re[3]" ?></td>
                <td><?php echo "$re[5]" ?></td>
                <td><img src="uploads/<?php echo $re[4]?>" onclick="imageView('<?php echo $re[4]?>')" id="img1" width="100px" height="150px"></td>
                <td><a href='updatepass.php?idx=<?php echo "$re[0]"?>'>수정</a>
                    <a href='deleteform.php?idx=<?php echo "$re[0]"?>'>삭제</a></td>
              </tr>     
            <?php
            }
            ?>           
        </table>
        <div class="container">
            <div class="row">
        <button type="submit" class="btn btn-dark float-right"  onclick = "location.href = 'add.html'">목록 추가하기</button>
            </div>
        </div>
    <body>
<html>