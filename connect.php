<?php
$servername='localhost';
$username='root';
$password='';
$db='ida';

$con=mysqli_connect($servername,$username,$password,$db);

if($con){
    echo'successful connection';
}
else{
    echo'connection failure';
}
?>