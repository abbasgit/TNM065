<html>
	<head>
		<title><?=$page_title?></title>
	</head>
	<body>
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