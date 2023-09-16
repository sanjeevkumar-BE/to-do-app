<?php
include 'connect.php';
$text=$_GET['updateid'];
$sql="select * from list1 where text='$text'";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$word=$row['text'];
$time=$row['time'];
if(isset($_POST['submit'])){
    $text=$_POST['text'];
    $time=$_POST['time'];
 $sql="update list1 set text='$text',time='$time' where text='$word'";
 $data=mysqli_query($con,$sql);
 if($data)
  echo header('location:index.php');

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css" >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <?php include 'connect.php'; ?>
    <div class="container">
        <div class="container">
            <h1>Check List</h1>
            <p>We can create the dodo list in php</p>
        </div>
        <hr>
        <form method="post">
        <div class="row">
            <div class="col">
              
                <input type="text" name="text" placeholder="Enter your work" value="<?php echo $word?>">
                <input type="date" name="time" placeholder="Enter your time" value="<?php echo $time?>" >
                <input type="submit" name="submit" value="ADD Task" class="btn btn-primary">
            </div>
        </div>
    </form>
   
  
    <?php
     echo '<table class="table table-success">
     <thead>
     <tr class="row table-secondary text-info">
     
       <th class="col" >List</td>
       <th class="col">time</td>
       <th class="col">Operation</td>
       </tr>
       </thead>';
$sql='select * from List1';
$res=mysqli_query($con,$sql);
if($res){
  while($_row=mysqli_fetch_assoc($res)){
    $word=$_row['text'];
    $time=$_row['time'];
    echo '
  <tbody>
    <tr class="row">
    
      <td class="col" >'.$word.'</td>
      <td class="col">'.$time.'</td>
      <td class="col"><a href="delete.php?deleteid='.$word.'" class="btn btn-danger">Delete</a>
      <a href="update.php?updateid='.$word.'" class="btn btn-secondary">Update</a></td>
      
    </tr>';
  }
}
?>


   
    </div>
</body>
</html>