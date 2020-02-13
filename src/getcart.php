
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
$result = 0; 

$cartTotal = 0;
									

//Start HTML Table									
echo('<div class="container-table-cart pos-relative">
				<div class="wrap-table-shopping-cart bgwhite">
					<table class="table-shopping-cart" >
					<tr class="table-head">
						<th class="column-1"></th>
									<th class="column-2">Product</th>
									<th class="column-3">Price</th>
									<th class="column-4 p-l-70">Quantity</th>
									<th class="column-5">Total</th>
								</tr>
								');

					
									
$show = array();
$sql = "SELECT * from userscart where username='" . $_GET['name'] . "'";
 
    $result = $conn->query($sql);
	
 if ($result->num_rows > 0) {
    
       
    while($row = $result->fetch_assoc()) {
        //echo "First Name: " . $row["username"]. " Last Name" . $row["producturl"]. "<br>";
		array_push($show,$row);
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
			
					echo('<tr class="table-row">
								<td class="column-1">
									<div class="cart-img-product b-rad-4 o-f-hidden">
										<img src="'.$data[$key]['imagepath'].'" alt="IMG-PRODUCT">
									</div>
								</td>
								<td class="column-2">'.$data[$key]['productname'].'</td>
								<td class="column-3">'.$data[$key]['price'].'</td>
								<td class="column-4">
									<div class="flex-w bo5 of-hidden w-size17">
										<button class="btn-num-product-down color1 flex-c-m size7 bg8 eff2">
											<i class="fs-12 fa fa-minus" aria-hidden="true"></i>
										</button>

										<input class="size8 m-text18 t-center num-product" type="number" name="num-product1" value="1">

										<button class="btn-num-product-up color1 flex-c-m size7 bg8 eff2">
											<i class="fs-12 fa fa-plus" aria-hidden="true"></i>
										</button>
									</div>
								</td>
								<td class="column-5">'.$data[$key]['price'].'</td>
							</tr>');
							
							}
							$cartTotal = $cartTotal + intval($data[0]['price']);
							}
							
				}
	
} 	
else 
{
	echo "0 results";
}

//End HTML Table
echo('</table>
				</div>
			</div>

			<div class="flex-w flex-sb-m p-t-25 p-b-25 bo8 p-l-35 p-r-60 p-lr-15-sm">
				<div class="flex-w flex-m w-full-sm">
					<div class="size11 bo4 m-r-10">
						<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="coupon-code" placeholder="Coupon Code">
					</div>

					<div class="size12 trans-0-4 m-t-10 m-b-10 m-r-10">
						<!-- Button -->
						<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
							Apply coupon
						</button>
					</div>
				</div>

				<div class="size10 trans-0-4 m-t-10 m-b-10">
					<!-- Button -->
					<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
						Update Cart
					</button>
				</div>
			</div>

			<!-- Total -->
			<div class="bo9 w-size18 p-l-40 p-r-40 p-t-30 p-b-38 m-t-30 m-r-0 m-l-auto p-lr-15-sm">
				<h5 class="m-text20 p-b-24">
					Cart Totals
				</h5>

				<!--  -->
				<div class="flex-w flex-sb-m p-b-12">
					<span class="s-text18 w-size19 w-full-sm">
						Subtotal:
					</span>

					<span class="m-text21 w-size20 w-full-sm">
						' .$cartTotal . '
					</span>
				</div>

				
				<!--  -->
				<div class="flex-w flex-sb-m p-t-26 p-b-30">
					<span class="m-text22 w-size19 w-full-sm">
						Total:
					</span>

					<span class="m-text21 w-size20 w-full-sm">
						' .$cartTotal . '
					</span>
				</div>
				
				<div class="size12 trans-0-4">
					<!-- Button -->
					<!--<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4" href="confirmation.php">
						Proceed to Checkout
					</button>-->
					<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
					<input type="hidden" name="cmd" value="_xclick">
					<input type="hidden" name="business" value="AQVAK29WCT7F2">
					<input type="hidden" name="lc" value="US">
					<input type="hidden" name="item_name" value="272Project Checout">
					<input type="hidden" name="item_number" value="272ProjectChecout">
					<input type="hidden" name="amount" value="1.00">
					<input type="hidden" name="currency_code" value="USD">
					<input type="hidden" name="button_subtype" value="services">
					<input type="hidden" name="no_note" value="1">
					<input type="hidden" name="no_shipping" value="1">
					<input type="hidden" name="rm" value="1">
					<input type="hidden" name="return" value="http://www.jasongcenter.com/finishCheckout.php">
					<input type="hidden" name="cancel_return" value="http://www.jasongcenter.com/cancelCheckout.php">
					<input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynowCC_LG.gif:NonHosted">
					<input type="hidden" name="notify_url" value="http://www.jasongcenter.com/listner.php">
					<input type="image" class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
					<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
				</form>
			</div>
			');
											
											
						?>