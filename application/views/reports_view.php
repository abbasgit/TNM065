<html>
	<head>
		<title><?=$page_title?></title>
	</head>
	<body>

	<?php echo form_open('reports'); ?>

     <label for="report_id">Report-id:</label>
     <input type="text" size="12" id="report_id" name="report_id"/>
     </br>
     
     <label for="household_id">Household-id:</label>
     <input type="text" size="12" id="household_id:" name="household_id"/>
     </br>
     
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
     <input type="text" size="12" id="category" name="category"/>
     </br>
     
     <label for="date">Date:</label>
     <input type="text" size="12" id="date" name="date"/>
	 </br>
     
     <input type="submit" value="Submit"/>
   	</form>

		<?php foreach($result as $row):?>
		<h1><?=$row->report_id?> </h1>
		<p><?=$row->household_id?> 
		<p><?=$row->user_id?> 
		<p><?=$row->price?> 
		<p><?=$row->product?> 
		<p><?=$row->category?> 
		<p><?=$row->date?></p>
		</br>
		<?php endforeach;?>
	</body>
</html>