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
            $query = $this->db->get();
            
            return $query->result();
            
        }
        public function get_row($id){
            $this->db->select('*');
            $this->db->from('products');
            //$this->db->get_where('products',array('id' => $id));
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