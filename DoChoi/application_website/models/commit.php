<?php
class commit extends CI_Model {

        public function __construct()
        {
                parent::__construct();
        }
       
        
        public function insert_to($id){
           
            $this->product_id = $id;
            $this->name = $this->input->post('name');
             $this->email = $this->input->post('email');
              $this->content = $this->input->post('content');
            
            $this->db->insert('commit',$this);
            
        }
        
        public function get_commit($id){
            $this->db->select('*');
            $this->db->from('commit');
            
            $this->db->where('product_id', $id);
            
            $query = $this->db->get();
          
            return $query->result(); 
        }
        
        
        
}