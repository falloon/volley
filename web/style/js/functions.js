function sendMsg () {
	alert("Hello!");
	var msg = $('#text').val();
	$('#msgbox').append('<li><b>You: </b>' + msg + '</li>');
}