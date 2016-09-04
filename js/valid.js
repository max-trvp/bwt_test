$(function() {
	$("input#send").on("click", function(e) {
		if($("textarea#text").val().length == 0) {
			alert("Сообщение не может быть пустым!");
			e.preventDefault();
		}
	});
});