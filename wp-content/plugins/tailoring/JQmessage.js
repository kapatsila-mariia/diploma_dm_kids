jQuery(document).ready(function() {
	jQuery("#buy").submit(function() {
		var str = $(this).serialize();
		$.ajax({
			type: "POST",
			url: "/tailoring_work.php",
			data: str,
			success: function(msg) {
				if(msg == 'OK') {
					result = '<div class="ok">Заявку відправлено</div>';
					$("#buy").hide();
				}
				else {result = msg;}
				$('#note').html(result);
			}
		});
		return false;
	});
});