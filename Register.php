
<?php
$servername ="localhost";
$username ="root";
$password="";
$dbname="library";
$conn =new mysqli($servername,$username,$password,$dbname);
if(!$conn){
die('could not connect:'.mysqli_connect_error());
}
echo'connected successfully<br/>';
$stmt=$conn->prepare("INSERT INTO user(name,password) VALUES(?,?)");
$stmt->bind_param("ss",$u,$p);
$u=$_POST["user"];
$p=$_POST["pass"];
$stmt->execute();
echo"Record inserted successfully";
$stmt->close();
$conn->close();
header("refresh:4;url=home.html");
?>