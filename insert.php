<?php
$fname = $_POST['fname'];  
$lname = $_POST['lname']; 
$phone = $_POST['phone']; 
$email = $_POST['email'];  
$pass = $_POST['pass'];
$cate = $_POST['cate'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "artistogram";
echo "connection test";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else {
    echo "connection established";
    $SELECT= "SELECT email from register where email= ? Limit 1";
    $sql = "INSERT INTO register (fname, lname, phno, email,  pass, cate) VALUES ( ?, ?, ?, ?, ?, ?)";
}


$stmt = $conn->prepare($SELECT);
$stmt ->  bind_param("s" , $email);
$stmt -> execte();
$stmt -> bind_result($email);
$stmt -> store_result();
$rnum = $stmt -> num_rows;

if ($rnum==0) {
    $stmt -> close();
    $stmt = $conn ->prepare($sql);
    $stmt ->bind_param("ssisss", $fname,$lname , $phone , $email ,$pass , $cate);
    $stmt ->execute();
    alert (" Successfully Registered ");
} else {
    allert (" Email already used ");
} 
$stmt ->close();
$conn->close();
?>