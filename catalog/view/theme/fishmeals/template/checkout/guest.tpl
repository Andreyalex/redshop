<div class="row">
  <div class="col-sm-12">
    <fieldset class="form-controls-inline">
      <div class="form-group" style="display: <?php echo (count($customer_groups) > 1 ? 'block' : 'none'); ?>;">
        <label class="control-label"><?php echo $entry_customer_group; ?></label>
        <?php foreach ($customer_groups as $customer_group) { ?>
        <?php if ($customer_group['customer_group_id'] == $customer_group_id) { ?>
        <div class="radio">
          <label>
            <input type="radio" name="customer_group_id" value="<?php echo $customer_group['customer_group_id']; ?>" checked="checked" />
            <?php echo $customer_group['name']; ?></label>
        </div>
        <?php } else { ?>
        <div class="radio">
          <label>
            <input type="radio" name="customer_group_id" value="<?php echo $customer_group['customer_group_id']; ?>" />
            <?php echo $customer_group['name']; ?></label>
        </div>
        <?php } ?>
        <?php } ?>
      </div>
      <div class="form-group required">
        <label class="control-label" for="input-payment-firstname"><?php echo $entry_firstname; ?></label>
        <input type="text" name="firstname" value="<?php echo $firstname; ?>" placeholder="<?php echo $entry_firstname; ?>" id="input-payment-firstname" class="form-control" />
      </div>
      <div class="form-group required">
        <label class="control-label" for="input-payment-lastname"><?php echo $entry_lastname; ?></label>
        <input type="text" name="lastname" value="<?php echo $lastname; ?>" placeholder="<?php echo $entry_lastname; ?>" id="input-payment-lastname" class="form-control" />
      </div>
      <div class="form-group required">
        <label class="control-label" for="input-payment-email"><?php echo $entry_email; ?></label>
        <input type="text" name="email" value="<?php echo $email; ?>" placeholder="<?php echo $entry_email; ?>" id="input-payment-email" class="form-control" />
      </div>
      <div class="form-group required">
        <label class="control-label" for="input-payment-telephone"><?php echo $entry_telephone; ?></label>
        <input type="text" name="telephone" value="<?php echo $telephone; ?>" placeholder="<?php echo $entry_telephone; ?>" id="input-payment-telephone" class="form-control" />
      </div>
      <div class="form-group required">
        <label class="control-label" for="input-payment-zone"><?php echo $entry_zone; ?></label>
        <select name="zone_id" id="input-payment-zone" class="form-control">
        </select>
      </div>
      <div class="form-group required">
        <label class="control-label" for="input-payment-city">Населенный пункт</label>
        <input type="text" name="city" value="<?php echo $city; ?>" placeholder="<?php echo $entry_city; ?>" id="input-payment-city" class="form-control" />
      </div>
      <input type="hidden" name="country_id" id="input-payment-country" class="form-control" value="<?php echo $countries[0]['country_id']; ?>">
      <input type="hidden" name="fax" value="">
      <input type="hidden" name="address_1" value="">
      <input type="hidden" name="address_2" value="">
      <input type="hidden" name="company" value="">
      <input type="hidden" name="postcode" value="">

    </fieldset>
    <?php foreach ($custom_fields as $custom_field) { ?>
    <?php if ($custom_field['type'] == 'select') { ?>
    <div id="payment-custom-field<?php echo $custom_field['custom_field_id']; ?>" class="form-group custom-field">
      <label class="control-label" for="input-payment-custom-field<?php echo $custom_field['custom_field_id']; ?>"><?php echo $custom_field['name']; ?></label>
      <select name="custom_field[<?php echo $custom_field['custom_field_id']; ?>]" id="input-payment-custom-field<?php echo $custom_field['custom_field_id']; ?>" class="form-control">
        <option value=""><?php echo $text_select; ?></option>
        <?php foreach ($custom_field['custom_field_value'] as $custom_field_value) { ?>
        <?php if ($custom_field_value['custom_field_value_id'] == $custom_field['value']) { ?>
        <option value="<?php echo $custom_field_value['custom_field_value_id']; ?>" selected="selected"><?php echo $custom_field_value['name']; ?></option>
        <?php } else { ?>
        <option value="<?php echo $custom_field_value['custom_field_value_id']; ?>"><?php echo $custom_field_value['name']; ?></option>
        <?php } ?>
        <?php } ?>
      </select>
    </div>
    <?php } ?>
    <?php if ($custom_field['type'] == 'radio') { ?>
    <div id="payment-custom-field<?php echo $custom_field['custom_field_id']; ?>" class="form-group custom-field">
      <label class="control-label"><?php echo $custom_field['name']; ?></label>
        <div id="input-payment-custom-field<?php echo $custom_field['custom_field_id']; ?>">
        <?php foreach ($custom_field['custom_field_value'] as $custom_field_value) { ?>
        <div class="radio">
          <?php if ($custom_field_value['custom_field_value_id'] == $custom_field['value']) { ?>
          <label>
            <input type="radio" name="custom_field[<?php echo $custom_field['custom_field_id']; ?>]" value="<?php echo $custom_field_value['custom_field_value_id']; ?>" checked="checked" />
            <?php echo $custom_field_value['name']; ?></label>
          <?php } else { ?>
          <label>
            <input type="radio" name="custom_field[<?php echo $custom_field['custom_field_id']; ?>]" value="<?php echo $custom_field_value['custom_field_value_id']; ?>" />
            <?php echo $custom_field_value['name']; ?></label>
          <?php } ?>
        </div>
        <?php } ?>
      </div>
    </div>
    <?php } ?>
    <?php if ($custom_field['type'] == 'checkbox') { ?>
    <div id="payment-custom-field<?php echo $custom_field['custom_field_id']; ?>" class="form-group custom-field">
      <label class="control-label"><?php echo $custom_field['name']; ?></label>
      <div id="input-payment-custom-field<?php echo $custom_field['custom_field_id']; ?>">
        <?php foreach ($custom_field['custom_field_value'] as $custom_field_value) { ?>
        <div class="checkbox">
          <?php if (in_array($custom_field_value['custom_field_value_id'], $custom_field['value'])) { ?>
          <label>
            <input type="checkbox" name="custom_field[<?php echo $custom_field['custom_field_id']; ?>][]" value="<?php echo $custom_field_value['custom_field_value_id']; ?>" checked="checked" />
          <?php echo $custom_field_value['name']; ?></label>
          <?php } else { ?>
          <label>
            <input type="checkbox" name="custom_field[<?php echo $custom_field['custom_field_id']; ?>][]" value="<?php echo $custom_field_value['custom_field_value_id']; ?>" />
            <?php echo $custom_field_value['name']; ?></label>
          <?php } ?>
        </div>
        <?php } ?>
      </div>
    </div>
    <?php } ?>
    <?php if ($custom_field['type'] == 'text') { ?>
    <div id="payment-custom-field<?php echo $custom_field['custom_field_id']; ?>" class="form-group custom-field">
      <label class="control-label" for="input-payment-custom-field<?php echo $custom_field['custom_field_id']; ?>"><?php echo $custom_field['name']; ?></label>
      <input type="text" name="custom_field[<?php echo $custom_field['custom_field_id']; ?>]" value="<?php echo $custom_field['value']; ?>" placeholder="<?php echo $custom_field['name']; ?>" id="input-payment-custom-field<?php echo $custom_field['custom_field_id']; ?>" class="form-control" />
    </div>
    <?php } ?>
    <?php if ($custom_field['type'] == 'textarea') { ?>
    <div id="payment-custom-field<?php echo $custom_field['custom_field_id']; ?>" class="form-group custom-field">
      <label class="control-label" for="input-payment-custom-field<?php echo $custom_field['custom_field_id']; ?>"><?php echo $custom_field['name']; ?></label>
      <textarea name="custom_field[<?php echo $custom_field['custom_field_id']; ?>]" rows="5" placeholder="<?php echo $custom_field['name']; ?>" id="input-payment-custom-field<?php echo $custom_field['custom_field_id']; ?>" class="form-control"><?php echo $custom_field['value']; ?></textarea>
    </div>
    <?php } ?>
    <?php if ($custom_field['type'] == 'file') { ?>
    <div id="payment-custom-field<?php echo $custom_field['custom_field_id']; ?>" class="form-group custom-field">
      <label class="control-label"><?php echo $custom_field['name']; ?></label>
      <button type="button" id="button-payment-custom-field<?php echo $custom_field['custom_field_id']; ?>" class="btn btn-default"><i class="fa fa-upload"></i> <?php echo $button_upload; ?></button>
      <input type="hidden" name="custom_field[<?php echo $custom_field['custom_field_id']; ?>]" value="<?php echo $custom_field['value']; ?>" id="input-payment-custom-field<?php echo $custom_field['custom_field_id']; ?>" />
    </div>
    <?php } ?>
    <?php if ($custom_field['type'] == 'date') { ?>
    <div id="payment-custom-field<?php echo $custom_field['custom_field_id']; ?>" class="form-group custom-field">
      <label class="control-label" for="input-payment-custom-field<?php echo $custom_field['custom_field_id']; ?>"><?php echo $custom_field['name']; ?></label>
      <input type="date" name="custom_field[<?php echo $custom_field['custom_field_id']; ?>]" value="<?php echo $custom_field['value']; ?>" placeholder="<?php echo $custom_field['name']; ?>" id="input-payment-custom-field<?php echo $custom_field['custom_field_id']; ?>" class="form-control" />
    </div>
    <?php } ?>
    <?php if ($custom_field['type'] == 'datetime') { ?>
    <div id="payment-custom-field<?php echo $custom_field['custom_field_id']; ?>" class="form-group custom-field">
      <label class="control-label" for="input-payment-custom-field<?php echo $custom_field['custom_field_id']; ?>"><?php echo $custom_field['name']; ?></label>
      <input type="datetime-local" name="custom_field[<?php echo $custom_field['custom_field_id']; ?>]" value="<?php echo $custom_field['value']; ?>" placeholder="<?php echo $custom_field['name']; ?>" id="input-payment-custom-field<?php echo $custom_field['custom_field_id']; ?>" class="form-control" />
    </div>
    <?php } ?>
    <?php if ($custom_field['type'] == 'time') { ?>
    <div id="payment-custom-field<?php echo $custom_field['custom_field_id']; ?>" class="form-group custom-field">
      <label class="control-label" for="input-payment-custom-field<?php echo $custom_field['custom_field_id']; ?>"><?php echo $custom_field['name']; ?></label>
      <input type="time" name="custom_field[<?php echo $custom_field['custom_field_id']; ?>]" value="<?php echo $custom_field['value']; ?>" placeholder="<?php echo $custom_field['name']; ?>" id="input-payment-custom-field<?php echo $custom_field['custom_field_id']; ?>" class="form-control" />
    </div>
    <?php } ?>
    <?php } ?>
  </div>
</div>

<input type="hidden" name="shipping_address" value="1" checked="checked" />

<div class="buttons">
  <div class="pull-right">
    <input type="button" value="<?php echo $button_continue; ?>" id="button-guest" data-loading-text="<?php echo $text_loading; ?>" class="btn btn-primary" />
  </div>
</div>
<script type="text/javascript"><!--
$('#collapse-payment-address input[name=\'customer_group_id\']').on('change', function() {
	$.ajax({
		url: 'index.php?route=checkout/checkout/custom_field&customer_group_id=' + this.value,
		dataType: 'json',	
		success: function(json) {
			$('#collapse-payment-address .custom-field').hide();
			$('#collapse-payment-address .custom-field').removeClass('required');
			
			for (i = 0; i < json.length; i++) {
				custom_field = json[i];
				
				$('#payment-custom-field' + custom_field['custom_field_id']).show();
				
				if (custom_field['required']) {
					$('#payment-custom-field' + custom_field['custom_field_id']).addClass('required');
				} else {
					$('#payment-custom-field' + custom_field['custom_field_id']).removeClass('required');
				}
			}
		},
		error: function(xhr, ajaxOptions, thrownError) {
			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
		}
	});
});

$('#collapse-payment-address input[name=\'customer_group_id\']:checked').trigger('change');
//--></script> 
<script type="text/javascript"><!--
$('#collapse-payment-address [name=\'country_id\']').on('change', function() {
    $.ajax({
        url: 'index.php?route=checkout/checkout/country&country_id=' + this.value,
        dataType: 'json',
        beforeSend: function() {
			$('#collapse-payment-address [name=\'country_id\']').after(' <i class="fa fa-spinner fa-spin"></i>');
        },
        complete: function() {
            $('.fa-spinner').remove();
        },          
        success: function(json) {
			if (json['postcode_required'] == '1') {
				$('#collapse-payment-address input[name=\'postcode\']').parent().parent().addClass('required');
			} else {
				$('#collapse-payment-address input[name=\'postcode\']').parent().parent().removeClass('required');
			}
            
            html = '<option value=""><?php echo $text_select; ?></option>';
            
            if (json['zone']) {
                for (i = 0; i < json['zone'].length; i++) {
                    html += '<option value="' + json['zone'][i]['zone_id'] + '"';
                    
                    if (json['zone'][i]['zone_id'] == '<?php echo $zone_id; ?>') {
                        html += ' selected="selected"';
                    }
    
                    html += '>' + json['zone'][i]['name'] + '</option>';
                }
            } else {
                html += '<option value="0" selected="selected"><?php echo $text_none; ?></option>';
            }
            
            $('#collapse-payment-address select[name=\'zone_id\']').html(html);
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
        }
    });
});

$('#collapse-payment-address [name=\'country_id\']').trigger('change');
//--></script>
<script type="text/javascript"><!--
$('#collapse-payment-address button[id^=\'button-payment-custom-field\']').on('click', function() {
	var node = this;
	
	$('#form-upload').remove();
	
	$('body').prepend('<form enctype="multipart/form-data" id="form-upload" style="display: none;"><input type="file" name="file" /></form>');

	$('#form-upload input[name=\'file\']').trigger('click');

	$('#form-upload input[name=\'file\']').on('change', function() {
		$.ajax({
			url: 'index.php?route=checkout/checkout/upload',
			type: 'post',		
			dataType: 'json',
			data: new FormData($(this).parent()[0]),
			cache: false,
			contentType: false,
			processData: false,		
			beforeSend: function() {
				$(node).find('i').replaceWith('<i class="fa fa-spinner fa-spin"></i>');
				$(node).prop('disabled', true);
			},
			complete: function() {
				$(node).find('i').replaceWith('<i class="fa fa-upload"></i>');
				$(node).prop('disabled', false);			
			},		
			success: function(json) {
				if (json['error']) {
					$(node).parent().find('input[name^=\'custom_field\']').after('<div class="text-danger">' + json['error'] + '</div>');
				}
							
				if (json['success']) {
					alert(json['success']);
					
					$(node).parent().find('input[name^=\'custom_field\']').attr('value', json['file']);
				}
			},			
			error: function(xhr, ajaxOptions, thrownError) {
				alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
			}
		});
	});
});
//--></script>