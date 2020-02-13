<?php
session_start();

$cart = 0;

$name = "";
if(isset($_SESSION['login'])){
	$name = $_SESSION['login'];

$servername = "linkedin.cx2nnmpqznns.us-east-1.rds.amazonaws.com:3306";
$username = "linkedin_user";
$password = "linkedin_pass";
$dbname = "project";


$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
 
$show = array();
$sql = "SELECT * from userscart where username='" .$name . "'";
$result = $conn->query($sql);
	
$cart = $result->num_rows > 0 ? $result->num_rows:0;
}

echo('<!--<div class="topbar">
				<div class="topbar-social">
					<a href="#" class="topbar-social-item fa fa-facebook"></a>
					<a href="#" class="topbar-social-item fa fa-instagram"></a>
					<a href="#" class="topbar-social-item fa fa-pinterest-p"></a>
					<a href="#" class="topbar-social-item fa fa-snapchat-ghost"></a>
					<a href="#" class="topbar-social-item fa fa-youtube-play"></a>
				</div>

				<span class="topbar-child1">
					Free shipping for standard order over $100
				</span>

				<div class="topbar-child2">
					<span class="topbar-email">
						fashe@example.com
					</span>

					<div class="topbar-language rs1-select2">
						<select class="selection-1" name="time">
							<option>USD</option>
							<option>EUR</option>
						</select>
					</div>
				</div>
			</div> -->

			<div class="wrap_header">
				<!-- Logo -->
				<a href="index.php" class="logo">
					<img src="images/icons/logo.png" alt="IMG-LOGO">
				</a>

				<!-- Menu -->
				<div class="wrap_menu">
					<nav class="menu">
						<ul class="main_menu">
							<li>
								<a href="index.php">Home</a>
								<ul class="sub_menu">
									<li><a href="index.php">Homepage V1</a></li>
									<li><a href="home-02.html">Homepage V2</a></li>
									<li><a href="home-03.html">Homepage V3</a></li>
								</ul>
								
							</li>

							
							<li>
								<a href="product.php?owner=All">Shop By Department</a>
								<ul class="sub_menu">
									<li><a href="product.php?owner=Dharma">Dharma</a></li>
									<li><a href="product.php?owner=Jason">Jason</a></li>
									<li><a href="product.php?owner=Pratheek">Pratheek</a></li>
									<li><a href="product.php?owner=Manish">Manish</a></li>
								</ul>
							</li>

							<li class="sale-noti">
								<a href="product.php?owner=All">Shop All</a>
							</li>

							<li>
								<a href="cart.php">My Cart</a>
							</li>

							<!--<li>
								<a href="blog.php">Blog</a>
							</li>-->

							<li>
								<a href="about.php">About</a>
							</li>

							<li>
								<a href="contact.php">Contact</a>
							</li>
							<li>
							<!-- The form -->
							<form class="example" method="GET" action="searchresults.php" style="margin:auto;max-width:300px"> 
			
							  <input type="text" placeholder="Search.." name="search">
							  <button type="submit"><i class="fa fa-search"></i></button>
							</form>
								
							</li>

						</ul>
					</nav>
				</div>

				<!-- Header Icon -->
				<div class="header-icons">
					<a href="login.php" class="header-wrapicon1 dis-block">
						<img src="images/icons/icon-header-01.png" id="profilepic" class="header-icon1">
					<span id="name">'.$name.'</span>
					</a>
					

					<span class="linedivide1"></span>

					<div class="header-wrapicon2">
						<img src="images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON" onclick="getcartShort()">
						<span class="header-icons-noti">' .$cart .'</span>

						<!-- Header cart noti -->
						<div class="header-cart header-dropdown" id="cartShort">
						
						</div>
					</div>
				</div>
			</div>
		')
?>
<script type="text/javascript">
	if(sessionStorage.getItem("login")!=null)
	document.getElementById('name').innerHTML = sessionStorage.getItem("login");
	if(sessionStorage.getItem("profilepic")!=null)
	document.getElementById('profilepic').src = sessionStorage.getItem("profilepic");
	
	function getcartShort()
		{
			console.log("Isnide getCart Short");			
			var xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				console.log(this.status);
			document.getElementById('cartShort').innerHTML = this.responseText;
			}
		};
		xhttp.open("GET", "getCartShort.php",true);
		xhttp.send();
				
				//console.log("Value of var2",my_var);
			
		}
		
	</script>

</script>