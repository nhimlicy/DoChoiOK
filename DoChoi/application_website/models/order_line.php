<?php
class order_line extends CI_Model {

        public function __construct()
        {
                parent::__construct();
        }
       
        
        
        public function insert_to_order_line($id, $product_id, $number){
            $this->order_id = $id;
            $this->products_id = $product_id;
            $this->number = $number;
            
          $this->db->insert('order_lines',$this);
        }
        
}
