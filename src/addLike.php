<?php 
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

include_once './config/database.php';


$data = json_decode(file_get_contents("php://input"));

$database = new Database();
$con = $database->getConnection();

$insert = "insert into project.likes values (".$data->id.",'".$data->userid."','".$data->url."')";
echo $insert;
$stmt = $con->prepare($insert);

$stmt->execute();


?>