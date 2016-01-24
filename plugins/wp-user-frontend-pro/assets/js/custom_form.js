jQuery(document).on('ready',function($){
	function showhide_fields(iselect){
		value = iselect.val();
		if(value == 'USA'){
			jQuery('#state_field_USA').show();
			jQuery('#state_field_AU').hide();
			jQuery('#state_label_USA').show();
			jQuery('#state_label_AU').hide();
			jQuery('#state_field_select_AU').val('')
		}else if(value == 'Australia'){
			jQuery('#state_label_AU').show();
			jQuery('#state_field_AU').show();
			jQuery('#state_label_USA').hide();
			jQuery('#state_field_USA').hide();
			jQuery('#state_field_select_USA').val('')
		}
	}

	dselect = jQuery('select.wpuf_property_address_country_469 option:selected');
	showhide_fields(dselect);
	jQuery('select.wpuf_property_address_country_469').on('change', function($){
		select = jQuery('select.wpuf_property_address_country_469 option:selected');
		showhide_fields(select);
	});

	dselect = jQuery('select.wpuf_property_address_country_647 option:selected');
	showhide_fields(dselect);
	jQuery('select.wpuf_property_address_country_647').on('change', function($){
		select = jQuery('select.wpuf_property_address_country_647 option:selected');
		showhide_fields(select);
	});

	dselect = jQuery('select.wpuf_property_address_country_742 option:selected');
	showhide_fields(dselect);
	jQuery('select.wpuf_property_address_country_742').on('change', function($){
		select = jQuery('select.wpuf_property_address_country_742 option:selected');
		showhide_fields(select);
	});

});
