<html>
	<head>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
    	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.min.js" type="text/javascript"></script>
		<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.0/themes/base/jquery-ui.css" />
		<title><?=$page_title?></title>
		<style>
		div.ui-datepicker {
    		font-size: 62.5%;
		}
		</style>
	</head>
	<body>
    <script>
        $(function() {
            $( ".datepicker" ).datepicker({ dateFormat: 'yy-mm-dd' });
        });
    </script>
	<?php echo form_open('reports'); ?>
     
     <label for="user_id">User-id:</label>
     <input type="text" size="12" id="user_id" name="user_id"/>
	 </br>
     
     <label for="price">Price:</label>
     <input type="text" size="12" id="price" name="price"/>
     </br>
     
     <label for="product">Product:</label>
     <input type="text" size="12" id="product" name="product"/>
     </br>

     <label for="category">Category:</label>
     <select name="category">
     <option value="">Select...</option>
	 <option value="1">Bostad</option>
	 <option value="2">Fordon</option>
	 <option value="3">Hushåll</option>
	 <option value="4">Kommunikation</option>
	 <option value="5">Nöjen</option>
	 <option value="6">Övrigt</option></select>
     </br>
     
     <label for="date">Date:</label>
     <input type="text" size="12" id="date" name="date" class="datepicker"/>
	 </br>
     
     <input type="submit" value="Submit"/>
   	</form>

		<?php foreach($result as $row):?>
		<p><?=$row->report_id?></br>
		<?=$row->user_id?></br>
		<?=$row->price?></br> 
		<?=$row->product?></br> 
		<?=$row->category?></br> 
		<?=$row->date?></p>
		</br>
		<?php endforeach;?>
	</body>
</html>