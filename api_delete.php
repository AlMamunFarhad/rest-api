<?php 


include "config.php";

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

$data = json_decode(file_get_contents("php://input"), true);
$students_id = $data['id'];



$sql = "DELETE FROM students WHERE id = {$students_id}";

if (mysqli_query($conn, $sql)) {

	echo json_encode(array('message' => 'Record Deleted.', 'status' => true));

}else{

	echo json_encode(array('message' => 'Record not Deleted.', 'status' => false));
}








 ?>