<?php
$linl=mysqli_connect("localhost","root","");
$sq="create database calculator;";
$qur1=mysqli_query($linl,$sq);

if($qur1){
    echo "7890";
}
else{
    echo "already created";
}
$linl=mysqli_connect("localhost","root","","calculator");
$sq1="create table percentage(Reg int(8),course1 int(3),course2 int(3),course3 int(3),course4 int(3),percent float(3,2));";
$qur1=mysqli_query($linl,$sq1);
if($qur1){
    echo "7890";
}
else{
    echo "table already created";
}
?>
