<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Autorization</title>
	<link rel="stylesheet" type="text/css" href="style/all.css">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>

<?php
	
	require('connect.php');

	if (isset($_POST['email']) && isset($_POST['password'])){
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$country = $_POST['country'];
	$birthday = $_POST['bitrhday'];
	$email = $_POST['email'];
	$password = $_POST['password'];


	$query = "INSERT INTO users (firstname, lastname, country, birthday, email, password) VALUES ('$firstname', '$lastname', '$country', '$birthday', '$email', '".md5($password).sha1("hrenTebeParol")."')";

	$result = mysqli_query($connection, $query);

	if ($result) {
		$smsg = "Регистрация прошла успешно!";
	} else {
		$fsmsg = "Ошибка регистрации пользователя!";
	}
} 

?>

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
        					<hr><li><img src="https://store.storeimages.cdn-apple.com/4982/store.apple.com/shop/rs-external/rel/us/ac-globalnav-dist/assets/ac-store/signIn.svg"><a href="signIn.php">Sign in</a></li></hr>
        				</ul>
        	</div>
    </div>
</div>
		</nav>

	<div class="auth-main">
		
		<div class="auth-header">

			<div class="AppleID">
				Apple ID
			</div>

		<div class="right-wrapper">
			<ul>
				<li><a href="./signIn.php">Sign In</a></li>
				<li><a class="Create-Your-Apple-ID" href="#">Create Your Apple ID</a></li>
				<li><a href="#">FAQ</a></li>
			</ul>
		</div>

		</div>

		<div class="banner">
			<div class="banner-title">
				<h1>Create Your Apple ID</h1>
			</div>
		</div>

		<div class="authorization">
				<!-- Sign up form -->

	<?php if(isset($smsg)){ ?>
		
		<div class="alert alert-success" role="alert">
			<div class="success-style">
				<strong><p><?php echo $smsg; ?></p></strong>
			</div>
		</div>
	
	<?php }?>


	<?php if(isset($fsmsg)){ ?>
	  	
	  	<div class="alert alert-danger" role="alert">
	  		<div class="danger-style">
	  			<strong><p><?php echo $fsmsg; ?></strong></p>
	  		</div> 
	  	</div> 
	  	
	<?php }?>

			<form class="form-signUp" method="POST"> 


		<div class="text-link-wrapper">
			<div class="intro-text">
				One Apple ID is all you need to access all Apple services.
			</div>
			
			<div class="intro-link">
				Already have an Apple ID?
				<a href="#" target="_blank">Find it here></a>
		</div>
	</div>

		<div class="account-info">

		<div class="name-surname-wrapper">
			<div class="name">
				<input class="name-inp" type="text" name="firstname" placeholder="First name" required>
			</div>

			<div class="surname">		
				<input class="surname-inp" type="text" name="lastname" placeholder="Last name" required>
			</div>
		</div>

		<div class="country-birthday-wrapper">
			<div class="country">
			<h3>Country/Region</h3>
			<input class="country-inp" type="text" name="country" placeholder="Kazakhstan" required>
		</div>

		<div class="birthday">
			<input class="birthday-inp" type="text" name="birthday" placeholder="Birthday" required>
		</div>
	  </div>

	</div>

	 <div class="authorization-hr">

	  </div>
	  <div class="email-passwd-wrapper">
	  <div class="email">
	  	<input class="email-inp" type="email" name="email" placeholder="name@example.com" required>
	  </div>

	  <div class="account-psswd">
	  	<input class="account-psswd-inp" type="password" name="password" placeholder="password" required>
	  </div>

	</div>

	<div class="authorization-hr">

	  </div>
	
	  <div class="continue">
	  	<div class="continue-wrapper">
	  	<div class="privacy-icon">
	  	<img src="https://appleid.cdn-apple.com/static/bin/cb3845622929/dist/assets/privacy-icon.png">
	  </div>
	  <div class="small-text">sign
	  		Your Apple ID information is used to allow you to sign in securely and access your data. Apple records certain usage data for security, support, and reporting purposes. <a href="#">Learn how Apple protects your privacy.
	  		</a>
	  </div>
	  	<div class="continue-btn">
	  		<button class="send-btn" type="submit">Continue</button>
	  	</div>
	  </div>
	  </div>

	</form>

</div>
</div>

</body>
</html>