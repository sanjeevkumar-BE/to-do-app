<?php
include 'connect.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
    $sql="delete from List1 where text='$id'";
    if(mysqli_query($con,$sql)){
        header ('location:index.php');
    }
}
?>