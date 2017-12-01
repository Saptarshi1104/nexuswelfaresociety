
$(document).ready(function()
{
	$('textarea').keyup(updateCount);
	$('textarea').keydown(updateCount);
	$('.noticetag').keyup(updateCount1);
	$('.noticetag').keydown(updateCount1);

	function updateCount() {
	    var cs = 300 - ($(this).val().length);
	    $('#char').text(cs);
	}
	function updateCount1() {
	    var cs = 40 - ($(this).val().length);
	    $('#charnt').text(cs);
	}
})
