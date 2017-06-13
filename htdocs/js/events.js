$(document).ready(function(){

	$("#registerModal .submit-register").on("click", function() {

		var idsConcat = new Array();
		$("#registerModal .list-enroll .list-group-item input:checked:checked").each(function(){
			idsConcat.push($(this).val());
		});

		$.post("enrollMyDogs.php", {dogids: idsConcat, eventid: $("body").data("event-id")})
			.done(function(){
				location.reload();
			});

	});

	$("#registerModal").on("click", ".list-enroll .list-group-item", function(e){
		if(!$(event.target).is('label') && !$(event.target).is(':input')) {
			if($(this).find("input").prop("checked"))
				$(this).find("input").prop("checked", false);
			else
				$(this).find("input").prop("checked", true);
		}
	});

});
