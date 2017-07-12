<?php
$conn = mysqli_connect("localhost", "root", "hh4706tz");
mysqli_select_db($conn, "youngbinmemo");
$result = mysqli_query($conn, "SELECT * FROM memo");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>노영빈의 메모장</title>
    <link rel="stylesheet" type="text/css" href="http://localhost/YBandYK/YB/style.css">
</head>
<body>
    <header>
        <h1><a href="http://localhost/YBandYK/YB/index.php"> 노영빈의 메모장</a></h1>
    </header>
    <table>
        <?php
        if(empty($_GET['id']) === false) {
            $sql = 'SELECT * FROM memo WHERE id ='.$_GET['id'];
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
        }

            echo '<tr>
                       <th>글번호</th>
                       <td>'.$row['id'].'</td>
                  </tr>';
            echo '<tr>
                       <th>제목</th>
                       <td>'.$row['title'].'</td>
                  </tr>';
            echo '<tr>
                       <th>글쓴이</th>
                       <td>'.$row['author'].'</td>
                  </tr>';
            echo '<tr>
                       <th>시간</th>
                       <td>'.$row['datetime'].'</td>
                  </tr>';
            echo '<tr>
                       <th>내용</th>
                       <td>'.$row['contents'].'</td>
                  </tr>';
        ?>
    </table>
    <div>
        <a href="http://localhost/YBandYK/YB/index.php"><input type="button" value="목록"></a>
        <a href="http://localhost/YBandYK/YB/index.php"><input type="button" value="수정"></a>
    </div>
</body>
</html>