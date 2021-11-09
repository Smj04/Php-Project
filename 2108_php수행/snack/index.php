<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>


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
    <tr><th scope="col">순번</th><th scope="col">이름</th><th scope="col">가격</th><th scope="col">사진</th><th scope="col">비고</th></tr>
    </thead>
    <tbody>
             <?php

            include('./db_conn.php');

            $sql = "select * from snack order by id desc";
            $result = mysqli_query($conn, $sql);
            $count = mysqli_num_rows($result);

            for($i = 0; $i<$count ; $i++){
                $re = mysqli_fetch_row($result);
            ?>
            <tr>
                <th scope="row"> <?php echo"$re[0]" ?></th>
                <td><?php echo "$re[1]" ?></td>
                <td><?php echo "$re[2]" ?></td>
                <td><img src="uploads/<?php echo $re[3]?>" onclick="imageView('<?php echo $re[3]?>')" id="img1" width="150px" height="150px"></td>
                <td><a href='updateform.php?idx=<?php echo "$re[0]"?>'>수정</a>
                    <a href='delete.php?idx=<?php echo "$re[0]"?>'>삭제</a></td>
              </tr>     
            <?php
            }
            ?>           
        </table>
        
    <body>
<html>