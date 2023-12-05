
var more = document.getElementById('more');
more.addEventListener("onclick",function () {
  console.log("test")
  var element= document.getElementById('hidden-item');
  element.classList.add('show');
  element.classList.remove('hidden-item');
}
);
	// Loading page
	var loaderPage = function() {
		$(".fh5co-loader").fadeOut("slow");
	};
    // Link login with Homepage
      function myfunction (){
      location.href = "../../home.html";
      };