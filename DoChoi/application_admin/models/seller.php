<?php

class seller extends CI_Model {

        public function __construct()
        {
                parent::__construct();
        }
        
      
        public function get_list(){
            
            $query = $this->db->get('seller');
           
            $rows = array();
            foreach($query->result() as $sq){
                $rows[] = $sq;
            }
            
            return $rows;
        }
        
        public function get_row($id){
            
            $query = $this->db->get_where('seller',array('seller_id' => $id));
     
            return $query->row();
        }
        
        public function  update_data($id){
            
            $this->seller_name = $this->input->post('seller_name');
            $this->address = $this->input->post('address');
            $this->telephone = $this->input->post('telephone');
            $this->email = $this->input->post('email');
            $this->evaluation = $this->input->post('evaluation');
            
            $this->db->update('seller', $this, array('seller_id' => $id));
        }
        
        public function insert(){
            $this->seller_name = $this->input->post('seller_name');
            $this->address = $this->input->post('address');
            $this->telephone = $this->input->post('telephone');
            $this->email = $this->input->post('email');
            $this->evaluation = $this->input->post('evaluation');
            return $this->db->insert('seller',$this);
        }
        
}