var list = $("#list");
var page = 1;
var blogs = [];
var inProgress = false;


function getBlogs() {
	inProgress = true;
	$.ajax({
		method: "GET",
		url: 'api/list/get.php?page='+page
	}).done(function(data){
		data = JSON.parse(data);
		console.log(data);
		blogs = blogs.concat(data);
		if(data.length>0) {
			
			showBlogs(data);
		}
		inProgress = false;
	});
}

getBlogs();

function showBlogs(blogs){
	var listHTML = "";
	for(var i =0; i < blogs.length; i++) {
		
		listHTML += "<div class='list'>"+
					"<div class='listImg'>"+
					"<img src='"+blogs[i].img+"' width='430px; height: 400px;'>"+
					"</div>"+
					"<div class='descriptionWrapper'>"+
					"<h3>"+blogs[i].title+ "</h3>"+
					"<div class='description'><p>"+blogs[i].description+"</p></div>"+
					"<h2>"+blogs[i].price+"$</h2>"+
					"<p>"+blogs[i].date+"</p>"+ 
					"<button onclick='deleteBlog("+blogs[i].id+")'>Delete</button>"+
					"</div>"+
					"</div>"
	}

	list.html(listHTML);
}

function saveBlog(e){
	e.preventDefault();

	var titleInput = $("#title");
	var descInput = $("#description");
	var priceInput = $("#price");
	var imgInput = $("#img");

	console.log(priceInput.val());
	
	var fm = new FormData();

	fm.append("title", titleInput.val());
	fm.append("description", descInput.val());
	fm.append("price", priceInput.val());
	fm.append("image", imgInput[0].files[0]);

	$.ajax({
		method: "POST",
		url: "api/list/save.php",
		data: fm,
		processData: false,
		contentType: false
		
	}).done(function(data){
		getBlogs();
		console.log(data);
	}).fail(function(err){
		console.log(err);
	})
}


function deleteBlog(id){

	$.ajax({
		method: "POST",
		url: "api/list/delete.php",
		data: {
			id: id
		}
	}).done(function(data){

		getBlogs();
	}).fail(function(err){
		console.log(err);
	})
}


function findBlogs() {
	var search = $("#search").val();

	$.ajax ({
		method: "GET",
		url: "api/list/search.php?key="+search
	}).done(function(data) {
		data = JSON.parse(data);
		showBlogs(data);
	})


}

$(window).scroll(function(){
	console.log(1);
	if(($(window).height() + $(window).scrollTop() >= $(document).height()-2)&& !inProgress) {
		console.log(2);
		page++;
		getBlogs();	
	}

});