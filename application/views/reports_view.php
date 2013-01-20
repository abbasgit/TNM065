<?php
$attributes = array('id' => 'reports_form');
echo form_open('reports',$attributes); 
?>
	<label for="price">Price:</label>
	<input type="text" size="12" id="price" value="<?php echo set_value('price'); ?>" name="price"/>
	<?php echo form_error('price', '<span class="validation_error">', '</span>'); ?>

	<label for="product">Product:</label>
	<input type="text" size="12" id="product" value="<?php echo set_value('product'); ?>" name="product"/>
	<?php echo form_error('product', '<span class="validation_error">', '</span>'); ?>

	<label for="category">Category:</label>
	<select name="category">
	<option value="">Select...</option>
	<option value="1">Bostad</option>
	<option value="2">Fordon</option>
	<option value="3">Hushåll</option>
	<option value="4">Kommunikation</option>
	<option value="5">Nöjen</option>
	<option value="6">Övrigt</option></select>
	<?php echo form_error('category', '<span class="validation_error">', '</span>'); ?>

	<label for="date">Date:</label>
	<input type="text" size="12" id="date" name="date" value="<?php echo set_value('date'); ?>" class="datepicker"/>
	<?php echo form_error('date', '<span class="validation_error">', '</span>'); ?>
	
	<br>
	<input type="submit" value="Create report"/>
</form>

<script>
	
	$(".datepicker").datepicker({ dateFormat: 'yy-mm-dd' });

	var frm = $('#reports_form');
	frm.submit(function () {
    	$.ajax({
	        type: frm.attr('method'),
	        url: frm.attr('action'),
	        data: frm.serialize(),
	        success: function (data) {
	            $('#main_container').html(data);
	        }
    	});

    	return false;
	});
</script>