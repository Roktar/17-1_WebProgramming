<?php
 $host = 'localhost';
 $user = 'root';
 $pw = 'server@';
 $dbName = 'mydb';
 $conn = mysqli_connect($host, $user, $pw, $dbName); 

 $id=$_POST['identity'];
 $pw=$_POST['password'];
 $data = mysqli_query($conn, "SELECT * FROM usertable");

 $idcheck = false;
 $pwcheck=false;

  while($row = mysqli_fetch_assoc($data)) {
   if($id == $row['id']) {
     $idcheck = 'true';
    if($pw == $row['pw']) {
     echo "<div><font color=silver> $id </font><font color=white> 님, <br>환영합니다.</font>";
     break;
    }
   }
  }

 if($idcheck == false && $pwcheck == false)
  echo "<script> alert('해당 ID는 등록되지 않은 계정입니다.'); location.href='login_s.html'; parent.lr.location='topright.html'; </script>";
 else if($idcheck == true && $pwcheck == false)
  echo "<script> alert('비밀번호가 틀렸습니다.'); location.href='login_s.html'; parent.lr.location='topright.html'; </script>";
  
 mysqli_close($conn);
?>

<!DOCTYPE HTML>
<html>
 <head>
  <title> login_form </title>
    <style type="text/css">
 	div { color:white; margin-right:16px; padding-right:10px; border:3px groove silver; box-shadow:2px 2px 4px 2px silver; }
 	.hid { visibility:hidden; }
 	#tb { table-layout:fixed; margin-left:10px; }
    </style>
 </head>
<body>

<table border=0 id="tb">
 <tr>
  <td><input type="button" class="hid"></td> <td><a href="login_s.html"><input type=button value="로그아웃"></a></td> <td><input type="button" class="hid"></td>
 </tr>
</table>
</div>

</body>
</html>
