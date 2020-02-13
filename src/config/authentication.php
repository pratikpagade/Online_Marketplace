<?php 
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

include_once './database.php';

include_once './user.php';

$data = json_decode(file_get_contents("php://input"));
$database = new Database();
$db = $database->getConnection();

$user = new User($db);
$login = $user->readOne($data->username,$data->password);

$stmt = $user->read();
$num = $stmt->rowcount();

if($num > 0){
    $user_array = array();
    $user_array["records"] = array();
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        extract($row);

        $user_item = array(
            "id" => $id,
            "username" => $username,
            "role" => $role
        );

        array_push($user_array["records"], $user_item);

    }
    echo json_encode($user_array);
}



?>
