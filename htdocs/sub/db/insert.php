<?php
 $host = 'localhost';
 $user = 'root';
 $pw = 'server@';
 $dbName = 'mydb';
 $conn = mysqli_connect($host, $user, $pw, $dbName); 

 if(mysqli_connect_errno($conn)) 
  echo "DB 연결 실패 : ".mysqli_connect_error();
 else {


  $title=$_POST['title'];
  $name=$_POST['name'];
  $password = $_POST['pw'];
  $body=$_POST['body'];
  // + 작성 시각을 구하는 함수 적어서 디비에 넣기

  $sql = "insert into guesttable values('$title', '$name', '$password', '$body')";

  if(!mysqli_query($conn, $sql))
    echo "<font color=white> 문제로 인해 접수가 되지 않았습니다. <br>나중에 다시 시도해주시기 바랍니다. </font>";
  else
    echo "<font color=white> <b> 작성해주신 사안이 접수되었습니다. 의견 감사합니다. </b> </font>";

  mysqli_close($conn);
 }
?>