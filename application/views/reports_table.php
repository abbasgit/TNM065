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

	

	$xmlconfig = array(
		'root' => 'pbo',
		'element' => 'report'
		);

	$data['xmlcontent'] =  $this->dbutil->xml_from_result($query, $xmlconfig);
	$data['stylesheet'] = 'report.xsl';

	$this->load->view('xslt_processor', $data);

	?>
</div>