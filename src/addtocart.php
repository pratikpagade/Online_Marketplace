<?php

$dbhost = 'linkedin.cx2nnmpqznns.us-east-1.rds.amazonaws.com';
$dbport = '3306';
$dbname = 'project';
$charset = 'utf8' ;
$username = 'linkedin_user';
$password = 'linkedin_pass';


$dsn = "mysql:host={$dbhost};port={$dbport};dbname={$dbname};charset={$charset}";


try {
    $conn = new PDO($dsn, $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // use exec() because no results are returned
       	$output = array();

    $stmt = $conn->prepare("INSERT INTO userscart (username,productid,producturl) 
    VALUES (:username, :productid, :producturl)");
    $stmt->bindParam(':username', $firstname);
    $stmt->bindParam(':productid', $lastname);
    $stmt->bindParam(':producturl', $email);
	
	// insert a row
    $firstname = "Test";
    $lastname = "Test";
    $email = "TEst";
    if($stmt->execute())
	{
		echo('Successful');
	}
	else
	{
		echo("not doone");
	}

	
		//echo "Output : ";
		//print_r($output);
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

?>