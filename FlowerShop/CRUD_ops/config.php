<!--CONFIG.PHP-->
<?php 
$server="localhost";
$user="root";
$database="floralfantasia";
$url="";
$pass="";
$conn=mysqli_connect($server, $user, $pass, $database);
if($conn->connect_error){
    die("Connection Failed" .$conn->connect_error);
}
?>