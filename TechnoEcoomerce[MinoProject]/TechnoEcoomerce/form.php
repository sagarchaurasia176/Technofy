<?php
$servername="localhost";
$username="root";
$password="";
$db_name="technokart";
// connection
$con=new mysqli($servername,$username,$password,$db_name);

if($con->connect_error){
    die("failed to connect");
}
else{
    echo"hey you are succesfuly connected to technokart";
}
if(isset ($_POST ['login'] ) )
{
$Email=$_POST['Email'];
$Password=$_POST['Password'];
}
$query="INSERT INTO `login` (`Email`, `Password`) VALUES ('$Email', '$Password')";
$run=mysqli_query($con,$query);
//  multiple line commen
?>

