<?php
class account_sign extends CI_Model {

        public function __construct()
        {
                parent::__construct();
        }
        
        public function insert(){
            $this->user_name = $this->input->post('user_name');
            $this->full_name = $this->input->post('full_name');
            $this->password = md5($this->input->post('password'));
            $this->buyer_address = $this->input->post('buyer_address');
            $this->buyer_telephone = $this->input->post('buyer_telephone');
            $this->buyer_email = $this->input->post('buyer_email');
            $this->point = 0;
           
            return $this->db->insert('buyer',$this);
        }
            
        public function get_row($email){
            
            $query = $this->db->get_where('buyer',array('buyer_email' => $email));
       
            return $query->row();
        }
        
        public function get_row_id($id){
            
            $query = $this->db->get_where('buyer',array('buyer_id' => $id));
          
            return $query->row();
            
        }
        
        
}