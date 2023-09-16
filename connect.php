<?php
$host='localhost:4306';
$user='root';
$pass='';
$dp='DODO';
$con=mysqli_connect($host,$user,$pass,$dp);
if(!$con){
    echo "Not connect".mysqli_error();
}
// $sql='CREATE database DODO';
// if(mysqli_query($con,$sql)){
//     echo "Created";
// }else{
//     echo "fjdsfs".mysqli_error();
// }
// $sql='CREATE table List( word VARCHAR(50));';
// if(mysqli_query($con,$sql)){
//         echo "Created";
//     }else{
//         echo "fjdsfs".mysqli_error();
//     }

?>