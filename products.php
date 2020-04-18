<!DOCTYPE html>
<html>
<head>
	<title>Products</title>
	<link rel="stylesheet" type="text/css" href="style/all.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	
	<button class="logOut"><a href="logout.php">Log out</a></button>
<div class="homeBtn">
	<a href="./index.php"> <button><i class="fa fa-home"></i></button> </a>
</div>
	<div class="adminPanel">
				<h1>Admin panel</h1>
			</div>
<div class="blog-wrapper">
<form onsubmit="saveBlog(event)">
<div class="inputProducts-wrapper">
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
</div>


</form>

	<div class="signIn-hr">
	</div>

		<div class="findProduct-wrapper">
	<div class="findProduct">
		<input class="searchBlog" placeholder="Find a product..." type="text" id="search" onkeyup="findBlogs()">
	</div>
</div>

	<div id="list">

	</div>

</div>

</body>

<script
  src="http://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  <script type="text/javascript" src="js/script.js"></script>
</html>