<?php  
class Reports_model extends CI_Model { 

        function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    function getData()  
        {  
            //Query the data table for every record and row  
            $query = $this->db->get('REPORT');
            return $query->result();  
        }  

    function insert_entry($data)
        {            
            $this->db->insert('REPORT', $data);
        } 
}

/* End of file reports_model.php */
/* Location: ./application/models/reports_model.php */