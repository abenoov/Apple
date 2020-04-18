<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Sign In</title>
	<link rel="stylesheet" type="text/css" href="style/all.css">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>

<nav>
			<div class="menu">
				<ul>
					<li><a href="index.php"><i class="fa fa-apple"></i></a></li>
					<li><a href="mac.html" class="menu-item">Mac</a></li>
					<li><a href="ipad.html" class="menu-item">iPad</a></li>
					<li><a href="iphone.html" class="menu-item">iPhone</a></li>
					<li><a href="watch.html" class="menu-item">Watch</a></li>
					<li><a href="tv.html" class="menu-item">TV</a></li>
					<li><a href="music.html" class="menu-item">Music</a></li>
					<li><a href="#" class="menu-item">Support</a></li>
					<li><a href="#" id="search"><img src="https://store.storeimages.cdn-apple.com/4982/store.apple.com/shop/rs-external/rel/us/ac-globalnav-dist/images/globalnav/search/image_large.svg"></a></li>
					<li><a href="#" class="trigger"><img src="https://store.storeimages.cdn-apple.com/4982/store.apple.com/shop/rs-external/rel/us/ac-globalnav-dist/images/globalnav/bag/image_small.svg"></i></a></li>
				</ul>
				<div class="search-form">
					<form>
					<input type="text" name="" placeholder="Search apple.com">
				</form>
			 </div>
			 <a class="close"><i class="fa fa-times"></i></a>
			
			

		  </div>

		   <div class="modal">
    			<div class="modal-content">
        			<span class="close-button">×</span>
        			<div class="modal-item">
        				<p>Your Bag is empty.</p>
        				<ul>
        					<hr><li> <img src="https://store.storeimages.cdn-apple.com/4982/store.apple.com/shop/rs-external/rel/us/ac-globalnav-dist/assets/ac-store/bag.svg"> <a href="#"> Bag</a></li></hr>
        					<hr><li><img src="https://store.storeimages.cdn-apple.com/4982/store.apple.com/shop/rs-external/rel/us/ac-globalnav-dist/assets/ac-store/favorites.svg"><a href="#">Favorites</a></li></hr>
        					<hr><li><img src="https://store.storeimages.cdn-apple.com/4982/store.apple.com/shop/rs-external/rel/us/ac-globalnav-dist/assets/ac-store/orders.svg"><a href="#">Orders</a></li></hr>
        					<hr><li><img src="https://store.storeimages.cdn-apple.com/4982/store.apple.com/shop/rs-external/rel/us/ac-globalnav-dist/assets/ac-store/account.svg"><a href="#">Account</a></li></hr>
        					<hr><li><img src="https://store.storeimages.cdn-apple.com/4982/store.apple.com/shop/rs-external/rel/us/ac-globalnav-dist/assets/ac-store/signIn.svg"><a href="#">Sign in</a></li></hr>
        				</ul>
        			</div>
    </div>
</div>
		</nav>

		<div class="signIn">
							<!-- Sign in form -->
		   <form class="form-signIn" method="POST">
			<div class="signIn-h1">
				<h1>Sign in for faster checkout.</h1>
			</div>
			<div class="signIn-container">
			<div class="textField1">
				<input class="textField1-inp" name="email" type="email" placeholder="Apple ID" required>
			</div>

			<div class="textField2">
				<input class="textField2-inp" name="password" type="password" placeholder="Password" required>
			</div>

			<div class="signIn-p">
				<p>Your Apple ID is the email address you use to sign in to iTunes, the App Store, and iCloud.</p>
			</div>

			<div class="signIn-enter">
				<button class="signIn-btn" type="submit">Sign In</button>
			</div>

			<div class="createAccount">
				<a href="auth.php">Do not have an Apple ID? Create one now.</a>
			</div>
			</div>
		</form>
		</div>

		<div class="signIn-hr">
		</div>

		<div class="NeedMoreHelp">
			Need more help? 
			<a href=""> Chat now</a> 
			or call 1-800-MY-APPLE.
		</div>

<?php
	session_start();
	require('connect.php');

	if (isset($_POST['email']) and isset($_POST['password'])){
	
	$email = $_POST['email'];
	$password = $_POST['password'];
	

	$query = "SELECT * FROM users WHERE email='$email' and password='".md5($password).sha1("hrenTebeParol")."'";
	$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
	$count = mysqli_num_rows($result);

	if ($count == 1) {
		$_SESSION['email'] = $email;
	} else {
		$fmsg = "Ошибка";
	}

} 
	if (isset($_SESSION['email'])){
		$email = $_SESSION['email'];
	
		echo " Hello". $email . "";
		echo "<a href= 'logout.php'<button>Log out</button></a>";
		header('Location:./products.php?name='.$email);
	}

	

?>
		

</body>
</html>