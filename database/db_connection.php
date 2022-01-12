<?php 
$servername= "localhost";
$username= "root";
$passwor= "";
$dbname="test";

$conn = mysqli_connect("localhost", "root", "", "test");
// $x= "connection successful";
// echo $x;
// $select_db_result = mysqli_select_db($conn, $dbname);
// if(!$conn){
//     die ("something went wrong" .mysqli_connect_error());
// }
// echo "success";


// // Server name must be localhost
// $servername = "localhost";

// // In my case, user name will be root
// $username = "root";

// // Password is empty
// $password = "";

// // Creating a connection
// $conn = new mysqli($servername,
// 			$username, $password);

// // Check connection
// if ($conn->connect_error) {
// 	die("Connection failure: "
// 		. $conn->connect_error);
// }

// // Creating a database named geekdata
// $sql = "CREATE DATABASE geekdata";
// if ($conn->query($sql) === TRUE) {
// 	echo "Database with name geekdata";
// } else {
// 	echo "Error: " . $conn->error;
// }

// // Closing connection
// $conn->close();


?>