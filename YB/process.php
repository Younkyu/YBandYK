<?php
$conn = mysqli_connect("localhost", "root", "hh4706tz");
mysqli_select_db($conn, "youngbinmemo");
$sql = "INSERT INTO memo (title,contents,author,datetime) VALUES('".$_POST['title']."', '".$_POST['contents']."', '".$_POST['author']."', now())";
$result = mysqli_query($conn, $sql);
header('Location: http://localhost/YBandYK/YB/index.php');
?>