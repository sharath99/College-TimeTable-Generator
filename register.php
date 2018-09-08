<?php
$fid=$_GET["fid"];
$fname=$_GET["fname"];
$femail=$_GET["femail"];
$fdept=$_GET["fdept"];
$conn=new mysqli("localhost:3306","root","2000","sharath");
if($conn->connect_error)
{
    die("connection error".$conn->connect_error);
}
else
{
    $sql1="insert into faculty values('$fid','$fname','$femail','$fdept')";
    $conn->query($sql1);
    echo "faculty registered";
    include 'register1.php';
}
?>