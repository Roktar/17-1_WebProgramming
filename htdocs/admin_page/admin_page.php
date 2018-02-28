<!DOCTYPE html>
<html>
 <head>
  <title> Admin Page </title>
  <link rel="stylesheet" href="..\css/bootstrap/css/bootstrap.css">
</head>
<body>

<?
 $host = 'localhost';
 $user = 'root';
 $pw = 'server@';
 $dbName = 'mydb';
 $conn = mysqli_connect($host, $user, $pw, $dbName); 

 $sql = "SELECT * FROM guesttable";
 $show = mysqli_query($conn, $sql) or die(mysql_error());
?>

<table border="2" class="table table-hover">
  <thead>
  <tr>
   <th> 작성자</th>
   <th> 내용 </th>
  </tr>
  </thead>
  <tbody> 
   <? 
    while($row = mysqli_fetch_assoc($show)) {    
   ?>
  <tr>
   <td> 
   <? 
    echo $row['name'];
   ?>
   </td>
   <td>
   <?
    echo $row['contents'];
   ?>
   </td>
  </tr>
   <? 
    }
   ?>
  </tbody>
</table>
<? 
 mysqli_close($conn);
?>
</body>
</html>