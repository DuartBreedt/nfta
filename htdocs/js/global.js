$(document).ready(function(){

	activateLink();
	

});


function activateLink() {
	var pageName = window.location.href;
	var pageNameArr = pageName.split("/");

	if(pageNameArr[pageNameArr.length-1] == "") { pageName = pageNameArr[pageNameArr.length-2]; }
	else { pageName = pageNameArr[pageNameArr.length-1]; }

	if(pageName.includes("#")) { pageName = pageName.substring(0, (pageName.length-1)); }

	$(".dropdown-menu li a").each(function() {
		if($(this).attr("href") == pageName)
			$(this).addClass("active");
	});
	alert("asd");
}