<div id="report_table_container">
	<?php

	if ( $query->num_rows() > 0 )
	{
		$this->table->set_heading('Date', 'Product', 'Category', 'Price');
		echo $this->table->generate($query);
	}

	else
	{ 
		echo '<p>No reports found for you</p>';
	}

	?>
</div>