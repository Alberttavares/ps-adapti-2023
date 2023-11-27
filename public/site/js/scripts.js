$(document).ready(function() {
	$('.botaoContratar').each(function() {
		if ($(this).text() === 'CONTRATADO') {
			$(this).text('CONTRATADO');
		} else {
			$(this).text('CONTRATAR');
		}
	});
});