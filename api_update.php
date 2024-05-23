<?php 


include "config.php";

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: PUT");
header("Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With");

$data = json_decode(file_get_contents("php://input"), true);

$id 			= $data['id'];
$student_name   = $data['name'];
$age            = $data['age'];
$city           = $data['city'];



$sql = "UPDATE students SET student_name = '{$student_name}', age = {$age}, city = '{$city}' WHERE id = {$id}";

 if (mysqli_query($conn, $sql)) {

     echo json_encode(array('message' => 'Record updated successfully
.', 'status' => true));

}else{

	echo json_encode(array('message' => 'Record not updated..', 'status' => false));
}








 ?>