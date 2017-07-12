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
    <writing>
        <form action="process.php" method="post">
            <p>
                제목 : <input type="text" name="title">
            </p>
            <p>
                글쓴이 : <input type="text" name="author">
            </p>
            <p>
                내용 : <input type="text" name="contents">
            </p>
            <input type="submit" name="name">
        </form>
    </writing>
</body>
</html>