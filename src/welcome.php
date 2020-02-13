<html>
	<head>
		
	</head>
	<body>

<?php

include_once './config/database.php';
include_once './config/user.php';

session_start();

$data = json_decode(file_get_contents("php://input"));
$database = new Database();
$db = $database->getConnection();

$user = new User($db);
$login = $user->readOne($_POST["name"],$_POST["password"]);

if($login>0){
	$_SESSION['login'] = $_POST["name"];
	echo $_POST["name"];
	
}else{

	header("Location: login.php");
}
  
?>

<script>
	console.log("<?php echo $_SESSION['login'] ?>");
	sessionStorage.setItem('login', '<?php echo $_SESSION['login'] ?>');

	console.log(sessionStorage.getItem('login'));
</script>

<?php header("Location: index.php"); ?>
	</body>

</html>