<?php

class buyer extends CI_Model {

        public function __construct()
        {
                parent::__construct();
        }
        
      
        public function get_list(){
            
            $query = $this->db->get('buyer');
           
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
        
        public function update_img($id, $filename){
            $this->image = $filename;
            $this->db->update('products', $this, array('id' => $id));
        }
        public function update_data($id){           
            $this->name = $this->input->post('name');
            $this->price = $this->input->post('price');
            $this->cate_id = $this->input->post('cate_id');
            $this->number = $this->input->post('number');
            $this->quality = $this->input->post('quality');
            $this->seller_id = $this->input->post('seller_id');
             $e = $this->db->update('products', $this, array('id' => $id));
            
        } 
        public function insert($filename){
            $this->name = $this->input->post('name');
            $this->price = $this->input->post('price');
            $this->cate_id = $this->input->post('cate_id');
            $this->number = $this->input->post('number');
            $this->quality = $this->input->post('quality');
            $this->seller_id = $this->input->post('seller_id');
            $this->image =  $filename;
            return $this->db->insert('products',$this);
        }
        
}