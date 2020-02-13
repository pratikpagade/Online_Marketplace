

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Cart</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/themify/themify-icons.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/elegant-font/html-css/style.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body class="animsition" onload="getcart()">

	
	

	<!-- Header -->
	<header class="header1">
		<!-- Header desktop -->
		<div class="container-menu-header">
			<?php
			include 'nav.php';
			include_once('paypalConfig.php');
			?>
		</div>
	</header>

	<!-- Title Page -->
	<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(images/cart.jpg);">
		<h2 class="l-text2 t-center">
			Your Cart
		</h2>
	</section>

	
	<!-- Cart -->
	<section class="cart bgwhite p-t-70 p-b-100">
		<div class="container" id="getcart">
	
			
			<!-- Cart item -->
			
			
						
						

						<!--<tr class="table-row">
							<td class="column-1">
								<div class="cart-img-product b-rad-4 o-f-hidden">
									<img src="images/item-05.jpg" alt="IMG-PRODUCT">
								</div>
							</td>
							<td class="column-2">Mug Adventure</td>
							<td class="column-3">$16.00</td>
							<td class="column-4">
								<div class="flex-w bo5 of-hidden w-size17">
									<button class="btn-num-product-down color1 flex-c-m size7 bg8 eff2">
										<i class="fs-12 fa fa-minus" aria-hidden="true"></i>
									</button>

									<input class="size8 m-text18 t-center num-product" type="number" name="num-product2" value="1">

									<button class="btn-num-product-up color1 flex-c-m size7 bg8 eff2">
										<i class="fs-12 fa fa-plus" aria-hidden="true"></i>
									</button>
								</div>
							</td>
							<td class="column-5">$16.00</td>
						</tr>-->
						
				

				
			</div>
		</div>
	</section>



	<!-- Footer -->
	<footer class="bg6 p-t-45 p-b-43 p-l-45 p-r-45">
		<div class="flex-w p-b-90">
			<div class="w-size6 p-t-30 p-l-15 p-r-15 respon3">
				<h4 class="s-text12 p-b-30">
					GET IN TOUCH
				</h4>

				<div>
					<p class="s-text7 w-size27">
						Any questions? Let us know in store at 8th floor, 379 Hudson St, New York, NY 10018 or call us on (+1) 96 716 6879
					</p>

					<div class="flex-m p-t-30">
						<a href="#" class="fs-18 color1 p-r-20 fa fa-facebook"></a>
						<a href="#" class="fs-18 color1 p-r-20 fa fa-instagram"></a>
						<a href="#" class="fs-18 color1 p-r-20 fa fa-pinterest-p"></a>
						<a href="#" class="fs-18 color1 p-r-20 fa fa-snapchat-ghost"></a>
						<a href="#" class="fs-18 color1 p-r-20 fa fa-youtube-play"></a>
					</div>
				</div>
			</div>

			<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
				<h4 class="s-text12 p-b-30">
					Categories
				</h4>

				<ul>
					<li class="p-b-9">
						<a href="#" class="s-text7">
							Men
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							Women
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							Dresses
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							Sunglasses
						</a>
					</li>
				</ul>
			</div>

			<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
				<h4 class="s-text12 p-b-30">
					Links
				</h4>

				<ul>
					<li class="p-b-9">
						<a href="#" class="s-text7">
							Search
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							About Us
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							Contact Us
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							Returns
						</a>
					</li>
				</ul>
			</div>

			<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
				<h4 class="s-text12 p-b-30">
					Help
				</h4>

				<ul>
					<li class="p-b-9">
						<a href="#" class="s-text7">
							Track Order
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							Returns
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							Shipping
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							FAQs
						</a>
					</li>
				</ul>
			</div>

			<div class="w-size8 p-t-30 p-l-15 p-r-15 respon3">
				<h4 class="s-text12 p-b-30">
					Newsletter
				</h4>

				<form>
					<div class="effect1 w-size9">
						<input class="s-text7 bg6 w-full p-b-5" type="text" name="email" placeholder="email@example.com">
						<span class="effect1-line"></span>
					</div>

					<div class="w-size2 p-t-20">
						<!-- Button -->
						<button class="flex-c-m size2 bg4 bo-rad-23 hov1 m-text3 trans-0-4">
							Subscribe
						</button>
					</div>

				</form>
			</div>
		</div>

		<div class="t-center p-l-15 p-r-15">
			<a href="#">
				<img class="h-size2" src="images/icons/paypal.png" alt="IMG-PAYPAL">
			</a>

			<a href="#">
				<img class="h-size2" src="images/icons/visa.png" alt="IMG-VISA">
			</a>

			<a href="#">
				<img class="h-size2" src="images/icons/mastercard.png" alt="IMG-MASTERCARD">
			</a>

			<a href="#">
				<img class="h-size2" src="images/icons/express.png" alt="IMG-EXPRESS">
			</a>

			<a href="#">
				<img class="h-size2" src="images/icons/discover.png" alt="IMG-DISCOVER">
			</a>

			<div class="t-center s-text8 p-t-20">
				Copyright © 2018 All rights reserved. | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
			</div>
		</div>
	</footer>



	<!-- Back to top -->
	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
	</div>

	<!-- Container Selection -->
	<div id="dropDownSelect1"></div>
	<div id="dropDownSelect2"></div>



<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/bootstrap/js/popper.js"></script>
	<script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/select2/select2.min.js"></script>
	<script type="text/javascript">
		$(".selection-1").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});

		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect2')
		});
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

	<script type="text/javascript">
	
	function getcart()
		{
			console.log("Isnide add to cart");
		/* 	var productid = <?php echo json_encode($data[0]['id']); ?>;
				var producturl = <?php echo json_encode($data[0]['url']); ?>; */	
			/* 	var username = "pratik";
				console.log("usrname",productid);
				console.log("username",producturl);
				console.log("usrname",username);
				var data = {producturl:producturl, productid:productid, username:username} */
			
			var xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				console.log(this.status);
			document.getElementById('getcart').innerHTML = this.responseText;
			}
		};
		var user = sessionStorage.getItem('login');
		var url = "getcart.php?name=" + user;
		console.log(url);
		xhttp.open("GET", url ,true);
		xhttp.send();
				
				//console.log("Value of var2",my_var);
			
		}
	</script>
	
	
    <!-- PayPal In-Context Checkout script -->
   <script src="//www.paypalobjects.com/api/checkout.js"></script>
    <!-- PayPal In-Context Checkout script -->
    <!--<script type="text/javascript">
 
        var client = {
            sandbox: '<?php echo(CLIENT_ID)?>'
        };

        var environment = 'sandbox';
        var transaction = '';

        function showDom(id) {
            var arr;
            if (!Array.isArray(id)) {
                arr = [id];
            } else {
                arr = id;
            }
            arr.forEach(function (domid) {
                document.getElementById(domid).style.display = 'initial';
            });
        }
       function handleResponse(result) {
            // document.getElementById('paypal-execute-details').textContent = JSON.stringify(result, null, 2);
            // showDom('paypal-end');
            var resultDOM = JSON.stringify(result, null, 2);
            $json_response = result;
            // console.log($json_response['id']);
            var payID = $json_response['id'];

            var paymentState = $json_response['state'];
            var finalAmount = $json_response['transactions'][0]['amount']['total'];
            var currency = $json_response['transactions'][0]['amount']['currency'];
            var transactionID= $json_response['transactions'][0]['related_resources'][0]['sale']['id'];
            var payerFirstName = $json_response['payer']['payer_info']['first_name'];
            var payerLastName = $json_response['payer']['payer_info']['last_name'];
            var recipientName= $json_response['payer']['payer_info']['shipping_address']['recipient_name'],FILTER_SANITIZE_SPECIAL_CHARS;
            var addressLine1= $json_response['payer']['payer_info']['shipping_address']['line1'];
            var addressLine2 = $json_response['payer']['payer_info']['shipping_address']['line2'];
            var city= $json_response['payer']['payer_info']['shipping_address']['city'];
            var state= $json_response['payer']['payer_info']['shipping_address']['state'];
            var postalCode =$json_response['payer']['payer_info']['shipping_address']['postal_code'];
            var transactionType = $json_response['intent'];
            // var countryCode= filter_var($json_response['payer']['payer_info']['shipping_address']['country_code'],FILTER_SANITIZE_SPECIAL_CHARS);

            //document.getElementById('paypal-execute-details-postal-code').textContent = postalCode; 
            //document.getElementById('paypal-execute-details-state').textContent = state; 
            //document.getElementById('paypal-execute-details-recipient-name').textContent = recipientName; 
            //document.getElementById('paypal-execute-details-transaction-type').textContent = transactionType; 
            //document.getElementById('paypal-execute-details-transaction-ID').textContent = transactionID; 
            //document.getElementById('paypal-execute-details-first-name').textContent = payerFirstName; 
            // document.getElementById('paypal-execute-details-last-name').textContent = payerLastName; 
            //document.getElementById('paypal-execute-details-payment-state').textContent = paymentState;
            //document.getElementById('paypal-execute-details-final-amount').textContent = finalAmount; 
            //document.getElementById('paypal-execute-details-currency').textContent = currency; 
            //document.getElementById('paypal-execute-details-addressLine1').textContent = addressLine1;
            //document.getElementById('paypal-execute-details-addressLine2').textContent = addressLine2;
            //document.getElementById('paypal-execute-details-city').textContent = city;


            var paymentOptionTitle = document.getElementById('payment-selection-title');
            var paymentOption = document.getElementById('payment-selection');
            paymentOptionTitle.parentNode.style.display= 'none';
            paymentOption.parentNode.style.dispaly='none';

            showDom('paypal-end');

        }


 paypal.Button.render({

        // Set your environment

        env: 'sandbox', // sandbox | production

        client: {
            sandbox: '<?php echo(CLIENT_ID)?>'
        },

        // Set to 'Pay Now'

        commit: true,

        // Wait for the PayPal button to be clicked

        payment: function(actions) {

            var fullname = "Dharma";
            var line1 = "test paypal Integration";
            var line2 = "Test paypal Integration";
            var shipToCity = "San JOse";
            var shipToState = "CA";
            var shipToZip="95126";
            var shipToCountry="US";
            var shippingSel = "";
            var shipping_amt = 1;
            var total_amt = 20;

			return actions.payment.create({
				meta: {
					partner_attribution_id: '<?php echo(SBN_CODE)?>'
				},
				payment: {
					transactions: [
						{
							amount: {
								total: total_amt ,
								currency: 'USD',
								details:
								{
									subtotal: total_amt,
									shipping: shipping_amt,
								}
							},
							item_list:
							{
								shipping_address:
								{
									recipient_name: fullname,
									line1: line1,
									line2: line2,
									city: shipToCity,
									country_code: shipToCountry,
									postal_code: shipToZip,
									phone: "011862212345678",
									state: shipToState,
								}
							}
						}
					]
				}
			});

        },

        // Wait for the payment to be authorized by the customer

        onAuthorize: function(data, actions) {

            return actions.payment.execute().then(handleResponse);
        }

    }, '#myContainer');
     </script>-->

</body>
</html>
