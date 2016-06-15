<?php
class order extends CI_Model {

        public function __construct()
        {
                parent::__construct();
        }
       
        
        public function insert_to_order( $id){
           
            $this->buyer_id = $id;
            $this->delivery_status = 0;
            $this->notes = $this->input->post('message');
            $this->total_price = $this->input->post('total');
            
            $this->db->insert('order_list',$this);
            
        }
        
        public function get_order_id($id){
            $this->db->select("order_id");
            $this->db->where("buyer_id", "$id");
            $this->db->select_max("order_id");
            $query=$this->db->get("order_list");
            return $query->row()->order_id;
        }
        
        
        
}