<!DOCTYPE html>
<html>
<head>
	<title>Products</title>
	<link rel="stylesheet" type="text/css" href="style/all.css">
</head>
<body>
	

	<button class="logOut"><a href="logout.php">Log out</a></button>

	<div class="adminPanel">
				<h1>Admin panel</h1>
			</div>

<form onsubmit="saveBlog(event)">
	
	<div class="inputProducts">
		<input class="saveBlog" type="text" id="title" placeholder="Title">
		<input class="saveBlog" type="text" id="description" placeholder="Description">
		<input class="saveBlog" type="text" id="price" placeholder="Price">
	</div>

	<div class="upload">
		<input class="hide" type="file" id="img">
		<label class="saveBlogImg" for="img">Upload image</label>
		<button class="saveBlogBtn" type="submit">Save</button>
	</div>
	
	<div class="findProduct">
		<input class="saveBlog" placeholder="Find a product" type="text" id="search" onkeyup="findBlogs()">
	</div>

</form>

	<div class="signIn-hr">
	</div>

	<div id="list">

	</div>





</body>

<script
  src="http://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  <script type="text/javascript" src="js/script.js"></script>
</html>