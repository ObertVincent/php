$(function() {
	$('.range').next().text('00'); // Valeur par défaut
	$('.range').on('input', function() {
		var $set = $(this).val();
		$(this).next().text($set);
	});
});