<?php
    $conn = mysqli_connect("localhost", "root", "hh4706tz");
    mysqli_select_db($conn, "youngbinmemo");
    $result = mysqli_query($conn, "SELECT * FROM memo ORDER BY id DESC");
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
        <thead>
            <tr>
                <th>글번호</th>
                <th>제목</th>
                <th>글쓴이</th>
                <th>시간</th>
            </tr>
        </thead>
        <tbody>
            <?php
                while ($row = mysqli_fetch_assoc($result)) {
                echo '<tr>
                    <td>'.$row['id'].'</td>
                    <td><a href="http://localhost/YBandYK/YB/open.php?id='.$row['id'].'">'.$row['title'].'</a></td>
                    <td>'.$row['author'].'</td>
                    <td>'.$row['datetime'].'</td>
                 </tr>';
                }
            ?>
        </tbody>
    </table>
    <div>
        <a href="http://localhost/YBandYK/YB/write.php"><input type="button" value="글쓰기"></a>
    </div>
</body>
</html>