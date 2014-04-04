/* WP Address Schema Admin JS */
jQuery(document).ready(function($) {
	
	hideRows();
	
	// Character limit on opening hour boxes
	$('#wp_address_schema_template_wp_address_schema_openinghours_section').on('keypress', 'input.text', function(event) {
		var pressed = event.keyCode;
		if(pressed < 48 || pressed > 58) {
			event.preventDefault();	
		}
		if($(this).val().length >= 5) {
			event.preventDefault();
		}
	});
	$('#wp_address_schema_template_wp_address_schema_openinghours_section').on('keyup', 'input.text', function(event) {
		var id = $(this).attr('id');
		var id_array = id.split('_');
		if($(this).val().length == 5 && id_array[1]=='from') {
			$('#'+id_array[0]+'_to').focus();	
		}
	});
	
	// Clear fields when closed is ticked, or focus cursor if open is clicked
	$('#wp_address_schema_template_wp_address_schema_openinghours_section').on('click', 'input[type="radio"]', function(event) {
		var value = $(this).val();
		var id = $(this).attr('id');
		var id_array = id.split('_');	
		if(value == 'Closed') {
			$('#'+id_array[0]+'_from').val('');
			$('#'+id_array[0]+'_to').val('');	
			$('#'+id_array[0]+'_from').parent().parent().hide();
		} else {
			$('#'+id_array[0]+'_from').parent().parent().show();
			$('#'+id_array[0]+'_from').focus();	
		}
	});
	
	function hideRows() {
	
		$('#wp_address_schema_template_wp_address_schema_openinghours_section input[type=radio]').each(function() {
			
			if($(this).attr('checked') == 'checked' && $(this).val() == 'Closed') {
				var id = $(this).attr('id');
				var id_array = id.split('_');	
				$('#'+id_array[0]+'_from').parent().parent().hide();
			}
			
		});
		
	}
	
});