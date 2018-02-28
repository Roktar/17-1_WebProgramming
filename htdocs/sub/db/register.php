<html>
<head>
</head>
<body>

<?php
 $host = 'localhost';
 $user = 'root';
 $pw = 'server@';
 $dbName = 'mydb';
 $conn = mysqli_connect($host, $user, $pw, $dbName); 

 if(mysqli_connect_errno($conn)) 
  echo "DB 연결 실패 : ".mysqli_connect_errer();
 else {

  $id=$_POST['id'];
  //$password=md5($_POST['pass1']);
  $password=$_POST['pass1'];

  $sql = "insert into usertable values('$id','$password')";

  if(!mysqli_query($conn, $sql)) {
    echo "<script>location.replace('../signup.html')</script>";
  } else
    echo "$id 계정으로 회원가입이 완료 되었습니다.";
  

  mysqli_close($conn);
 }
?>
</body>
</html>