function csrf() {
	var csrfField = $('<input>')
			.attr('type', 'hidden')
			.attr('name', '_token')
			.attr('value', Laravel.csrfToken);
	$('form').append(csrfField);
}

function dataSubmit() {
	$('[data-submit]').click(function(e) {
		$('form#' + $(this).data('submit')).submit();
	});
}

function selects() {
	$('select').material_select();
}

$(document).ready(function() {
	csrf();
	dataSubmit();
	selects();
});