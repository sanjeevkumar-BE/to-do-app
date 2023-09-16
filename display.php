<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  

<?php
include 'connect.php';
$sql='select * from List';
$res=mysqli_query($con,$sql);
if($res){
  while($_row=mysqli_fetch_assoc($res)){
    $word=$_row['word'];
    echo '<table><tr><td><p>'.$word.'<p></td>
   <td><a href="delete.php?deleteid='.$word.'">delete</a>
    </tr></table>';
  }
}else{
    echo "error".mysqli_error($con);
}
?>
</body>
</html>