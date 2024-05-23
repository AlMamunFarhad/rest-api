<?php 


include "config.php";

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With");

$data = json_decode(file_get_contents("php://input"), true);


$student_name   = $data['name'];
$age            = $data['age'];
$city           = $data['city'];



$sql = "INSERT INTO students (student_name, age, city) VALUES ('{$student_name}', {$age}, '{$city}')";

 if (mysqli_query($conn, $sql)) {

     echo json_encode(array('message' => 'Record inserted successfully
.', 'status' => true));

}else{

	echo json_encode(array('message' => 'Record not installed..', 'status' => false));
}








 ?>