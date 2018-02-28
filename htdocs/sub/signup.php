<?php
 $host = 'localhost';
 $user = 'root';
 $pw = 'server@';
 $dbName = 'mydb';
 $conn = mysqli_connect($host, $user, $pw, $dbName); 

 $id=$_POST['id'];
 $data = mysqli_query($conn, "SELECT id FROM usertable");
 $check = false;

  while(mysqli_fetch_array($data)) {
   $row = mysqli_fetch_assoc($data);
  
   if($id == $row['id']) {
     $check = true;
     break;
  }
 }

 if($check == false)
  echo "<script> alert('해당 계정으로 가입이 가능합니다.'); location.href('../sub/signup.html'); </script>";
 else
  echo "<script> alert('이미 가입되어 있는 계정입니다.'); location.href('../sub/signup.html'); </script>";
  
 mysqli_close($conn);
?>