<?php

class products extends CI_Model {

        public function __construct()
        {
                parent::__construct();
        }
        
        public function get_rows(){
            $this->db->select('*');
            $this->db->from('products');
            $this->db->join('categories', 'products.cate_id = categories.cate_id','left');
            $this->db->join('seller', 'products.seller_id = seller.seller_id','left');
            $this->db->join('ages', 'products.age_id = ages.age_id','left');
            $query = $this->db->get();
            
            return $query->result();
            
        }
        public function get_row($id){
            $this->db->select('*');
            $this->db->from('products');
           
            $this->db->where('id', $id);
            
            $this->db->join('categories', 'products.cate_id = categories.cate_id','left');
            $this->db->join('seller', 'products.seller_id = seller.seller_id','left');
            $query = $this->db->get();
          
            return $query->row();
        }
        public function get_categories(){
            $query = $this->db->get('categories');
           
            $rows = array();
            foreach($query->result() as $sq){
                $rows[] = $sq;
            }
            
            return $rows;
        }
        
        public function get_ages(){
            $query = $this->db->get('ages');
           
            $rows = array();
            foreach($query->result() as $sq){
                $rows[] = $sq;
            }
            
            return $rows;
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
            
            $this->seller_id = $this->input->post('seller_id');
            $this->age_id = $this->input->post('age_id');
            $e = $this->db->update('products', $this, array('id' => $id));
            
        } 
        public function insert($filename){
            $this->name = $this->input->post('name');
            $this->price = $this->input->post('price');
            $this->cate_id = $this->input->post('cate_id');
            $this->number = $this->input->post('number');
            
            $this->age_id = $this->input->post('age_id');
            $this->seller_id = $this->input->post('seller_id');
            $this->image =  $filename;
            return $this->db->insert('products',$this);
        }
}