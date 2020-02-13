<!DOCTYPE HTML>
<html>
<head>
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
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/lightbox2/css/lightbox.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->



</head>
<body>

<script type="text/javascript">
    
    function statusChangeCallback(response) {
    console.log('statusChangeCallback');
    console.log(response);
    // The response object is returned with a status field that lets the
    // app know the current login status of the person.
    // Full docs on the response object can be found in the documentation
    // for FB.getLoginStatus().
    if (response.status === 'connected') {
      // Logged into your app and Facebook.
      testAPI();
    } else {
      // The person is not logged into your app or we are unable to tell.
      document.getElementById('status').innerHTML = 'Please log ' +
        'into this app.';
    }
  }

  function checkLoginState() {
    FB.getLoginStatus(function(response) {
      statusChangeCallback(response);
    });
  }

  window.fbAsyncInit = function() {
  FB.init({
    appId      : '329996781167151',
    cookie     : true,  // enable cookies to allow the server to access 
                        // the session
    xfbml      : true,  // parse social plugins on this page
    version    : 'v3.2' // use graph api version 2.8
  });

  FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
  });

  };

  // Load the SDK asynchronously
  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));

  // Here we run a very simple test of the Graph API after login is
  // successful.  See statusChangeCallback() for when this call is made.
  function testAPI() {
    FB.api('/me?fields=picture,name', function(response) {
    console.log(response);
      // document.getElementById('profilepic').src =response.picture.data.url;
      // document.getElementById('fbLogIn').innerHTML = response.name;
    });
  }

</script>
    <header class="header1">
        <!-- Header desktop -->
        <div class="container-menu-header">
            <?php
            include 'nav.php';
            ?>
            </div>
    </header>
	<style>
	   form.leave-comment {
		               text-align: center;
					   
	   }		  
	   
	   .fa {
  padding: 20px;
  font-size: 30px;
  width: 150px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
}


.fa-facebook {
  background: #3B5998;
  color: white;
}
	</style>


                    <form class="leave-comment" action="welcome.php" method="post" class="col-md-6 p-b-30">
                        <h4 class="m-text26 p-b-36 p-t-15">
                            Login
                        </h4>

                        <div class="bo4 of-hidden size14 m-auto" style="width:400px;text-align: center;">
                            <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="name" placeholder="Name">
                        </div>


                        <div class="bo4 of-hidden size14 m-auto" style="width:400px;text-align: center;">
                            <input class="sizefull s-text7 p-l-22 p-r-22" type="password" name="password" placeholder="Password">
                        </div>

                        <div class="w-size25 text-center m-auto" style="width:400px;text-align: center;">
                            <input type="submit" class="flex-c-m size2 bg1 bo-rad-23 hov1 m-text3 trans-0-4">
                        </div>
						<br>
				   <center><strong>OR</strong></center>
				   <br>
				   <center>Log in with Facebook</center>
					<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
					 
					 <center><a href="./facebook.html" class="fa fa-facebook"></a></center>
                    </form>
					
                   

</body>
</html>