<?php  
class Reports_model extends CI_Model {  
    
    function _construct()  
    {  
        // Call the Model constructor  
        parent::_construct();  
    }  
    function getData($reports)  
        {  
            //Query the data table for every record and row  
            $query = $this->db->get('REPORT');  
        }  
}  
?>  