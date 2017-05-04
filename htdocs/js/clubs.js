$(document).ready(function(){

	html = $(".main").html();

	// EVENT TAB/PAGE
	$(".club-nav").on("click", "#events-link", eventLinkClickHandler);

	// HOME TAB/PAGE
	$(".club-nav").on("click", "#home-link", homeLinkClickHandler);

	// EVENT
	// $(".main").on("click", ".list-event-item", eventClickHandler);

	// LOADING IMAGE
	$(document).ajaxStart(function(){
		$("#loading").show();
	}).ajaxStop(function(){
		$("#loading").hide();
	});

});

function eventLinkClickHandler() {
	$(".club-nav .active").removeClass("active");
	$(this).parent().addClass("active");
	$(".main").html("");

	$.post( "getEvents.php", { clubName: $("body").data("club") })
		.done(function(data) {
			$(".main").html(data);
		});

	return false;
}

// function eventClickHandler() {

// 	$.post( "event.php", { clubName: $("body").data("club") })
// 		.done(function(data) {
// 			$(".main").html(data);
// 		});

// 	return false;
// }

function homeLinkClickHandler(e) {
	e.preventDefault();
	$(".club-nav .active").removeClass("active");
	$(this).parent().addClass("active");
	$(".main").html(html);
}