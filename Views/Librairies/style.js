function hider(b) {
	
$('#new').hide();
$('#new_question').hide();
$('.edit').hide();
$('#send').hide();


$('#form').click(function() {
		$('.edit').show();
		$('.previous').hide();
		$('#form').hide();
		$('#send').show();

});
$('#showq').click(function() {
		$('#new_question').show();
});

};