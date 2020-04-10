<?php
require('connect.php');
if(isset($_POST['sub'])){
$a=$_POST['reg'];
$b=$_POST['c1'];
$c=$_POST['c2'];
$d=$_POST['c3'];
$e=$_POST['c4'];
$per=(($b+$c+$d+$e)/4);
// echo $per;


$sql="insert into percentage values (".$a.",".$b.",".$c.",".$d.",".$e.",".$per.");";
$qur=mysqli_query($con,$sql);
if(!$qur){
    echo '<script>alert("Insertion not successful") ;</script>';
}
else{
    $per="Your Percentage ".$per;
    // echo $per;
    echo "<script>alert('$per');</script>"; 
    echo '<script>window.location.href = "index.php"</script>';
//   
// }
}
}
?>