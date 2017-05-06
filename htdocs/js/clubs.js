$(document).ready(function(){

	hideAll();
	$(".club-home").show();

	// TAB/PAGE CLICK
	$(".club-nav").on("click", "li a", linkClickHandler);

	// LOADING IMAGE
	// $(document).ajaxStart(function(){
	// 	$("#loading").show();
	// }).ajaxStop(function(){
	// 	$("#loading").hide();
	// });

});

function linkClickHandler(e) {
	e.preventDefault();
	$(".club-nav .active").removeClass("active");
	$(this).parent().addClass("active");

	var linkName = ".club-" + $(this).attr("id").split("-")[0];

	hideAll();
	$(linkName).show();
}

function hideAll(){	$(".club-main").hide(); }

