
<?php


$servername = "linkedin.cx2nnmpqznns.us-east-1.rds.amazonaws.com:3306";
$username = "linkedin_user";
$password = "linkedin_pass";
$dbname = "project";


$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo('<ul class="header-cart-wrapitem">
								
							</ul>');
							
$result = 0; 
$show = array();
$sql = "SELECT * from userscart where username='pratik'";

$result = $conn->query($sql);
	
			 if ($result->num_rows > 0) {
				
				while($row = $result->fetch_assoc()) {
					//echo "First Name: " . $row["username"]. " Last Name" . $row["producturl"]. "<br>";
					array_push($show,$row);
				}
				
			} 	
			else {
				echo "0 results";
			}

				foreach($show as $key => $value)
				{
				$url = $show[$key]['producturl'] . "?id=" . $show[$key]['productid'];
									
						$ch = curl_init();
						curl_setopt($ch, CURLOPT_URL, $url); 
						//return the transfer as a string 
						curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 

						// $output contains the output string 
						$result = curl_exec($ch);
						
						$data =  json_decode($result,true);
						

						
									if (count($data) > 0)
									{						
										foreach($data as $key => $value)
										{		
								echo('<li class="header-cart-item">
									<div class="header-cart-item-img">
										<img src="'.$data[$key]['imagepath'].'" alt="IMG">
									</div>

									<div class="header-cart-item-txt">
										<a href="#" class="header-cart-item-name">
											'.$data[$key]['productname'].'
										</a>

										<span class="header-cart-item-info">
											'.$data[$key]['price'].'
										</span>
									</div>
								</li>');
										}
									}
				}
								
								
								echo('<div class="header-cart-total">
								Total: $75.00
							</div>

							<div class="header-cart-buttons">
								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="cart.php" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										View Cart
									</a>
								</div>

								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="#" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										Check Out
									</a>
								</div>
							</div>
						');

						?>