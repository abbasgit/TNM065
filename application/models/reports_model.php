<?php  
class Reports_model extends CI_Model { 

    public function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    public function get_report_query_for_user($user_id)  
    {  
        //Query the data table for every record and row  
        $this->db->select('date, product, category, price');
        $this->db->from('REPORT');
        $this->db->where('user_id', $user_id);
        $query = $this->db->get();
        return $query;
    }

    public function insert_entry($data)
    {            
        $this->db->insert('REPORT', $data);
    }
}

/* End of file reports_model.php */
/* Location: ./application/models/reports_model.php */