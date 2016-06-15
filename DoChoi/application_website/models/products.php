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
        public function get_rows_view(){
            $this->db->select('*');
            $this->db->from('products');
            $this->db->join('categories', 'products.cate_id = categories.cate_id','left');
            $this->db->join('seller', 'products.seller_id = seller.seller_id','left');
            $this->db->order_by("view","desc");
            $this->db->limit(6);
            $query = $this->db->get();
            
            return $query->result();  
        }
        
        public function get_rows_cates_view($id){
            $this->db->select('*');
            $this->db->from('products');
            $this->db->where('products.cate_id', $id);
            $this->db->join('categories', 'products.cate_id = categories.cate_id','left');
            $this->db->join('seller', 'products.seller_id = seller.seller_id','left');
            $this->db->order_by("view","desc");
            $this->db->limit(4);
             $query = $this->db->get();
             
            return $query->result();  
        }
        
        public function get_rows_cates_view_max($id){
            $this->db->select('*');
            $this->db->from('products');
            $this->db->where('products.cate_id', $id);
            $this->db->join('categories', 'products.cate_id = categories.cate_id','left');
            $this->db->join('seller', 'products.seller_id = seller.seller_id','left');
            $this->db->order_by("view","desc");
            $this->db->limit(3);
             $query = $this->db->get();
             
            return $query->result();  
        }
        public function get_rows_cates_view_end($id){
            $this->db->select('*');
            $this->db->from('products');
            $this->db->where('products.cate_id', $id);
            $this->db->join('categories', 'products.cate_id = categories.cate_id','left');
            $this->db->join('seller', 'products.seller_id = seller.seller_id','left');
            $this->db->order_by("view","desc");
            $this->db->limit(3,4);
             $query = $this->db->get();
             
            return $query->result();  
        }
        
        
        public function get_rows_time_max(){
            $this->db->select('*');
            $this->db->from('products');
            $this->db->join('categories', 'products.cate_id = categories.cate_id','left');
            $this->db->join('seller', 'products.seller_id = seller.seller_id','left');
            $this->db->order_by("ts","desc");
            $this->db->limit(3);
             $query = $this->db->get();
             
            
            return $query->result();  
        }
        public function get_rows_time(){
            $this->db->select('*');
            $this->db->from('products');
            $this->db->join('categories', 'products.cate_id = categories.cate_id','left');
            $this->db->join('seller', 'products.seller_id = seller.seller_id','left');
            $this->db->order_by("ts","desc");
            $this->db->limit(12,4);
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
        
        public function get_rows_cates($id){
            
            $this->db->select('*');
            $this->db->from('products');
            $this->db->where('products.cate_id', $id);
            $this->db->join('categories', 'products.cate_id = categories.cate_id','left');
            $this->db->join('seller', 'products.seller_id = seller.seller_id','left');
            $this->db->order_by("view","desc");
            
             $query = $this->db->get();
             
            return $query->result();  
        }
        
        public function count_cates($id){
            $this->db->where('cate_id', $id);
            $this->db->from('products');
           
            return $this->db->count_all_results(); 
        }
         
        
        public function get_ages(){
            $query = $this->db->get('ages');
           
            $rows = array();
            foreach($query->result() as $sq){
                $rows[] = $sq;
            }
            
            return $rows;
        }
        
        public function get_rows_ages($id){
            $this->db->select('*');
            $this->db->from('products');
            $this->db->where('products.age_id', $id);
            $this->db->join('categories', 'products.cate_id = categories.cate_id','left');
            $this->db->join('seller', 'products.seller_id = seller.seller_id','left');
            $this->db->order_by("view","desc");
            
             $query = $this->db->get();
             
            return $query->result();  
        }
        public function get_products_cate_max($id){
            $query = $this->db->get('categories');
           
            $rows = array();
            foreach($query->result() as $sq){
                $rows[] = $sq;
            } 
            return $rows;
        }
        
        public function get_row_order($id){
            $this->db->select('*');
            $this->db->from('products');
            //$this->db->get_where('products',array('id' => $id));
            $this->db->where('id', $id);
            
            $this->db->join('categories', 'products.cate_id = categories.cate_id','left');
            $this->db->join('seller', 'products.seller_id = seller.seller_id','left');
            $query = $this->db->get();
          
            return $query->row();
        }
        
        public function increasing_view($id){
            $this->db->select('*');
            $this->db->from('products');
            $this->db->where('id', $id);
            $query = $this->db->get();
            
            $view = $query->row()->view;
            $this->view = $view +1;
            $this->db->update('products', $this, array('id' => $id));
        }
        
        public function get_rows_loc($cate, $age, $price, $min, $max){
            $this->db->select('*');
            $this->db->from('products');
            if($cate != 0){
                $this->db->where('products.cate_id', $cate);
            }
            if($age != 0){
                $this->db->where('products.age_id', $age);
            }
           
            if($price != 0){
              
               $this->db->where('products.price > ', $min);
                
              $this->db->where('products.price < ', $max);
        }
            $this->db->join('categories', 'products.cate_id = categories.cate_id','left');
            $this->db->join('ages', 'products.age_id = ages.age_id','left');
            $this->db->order_by("view","desc");
            
            $query = $this->db->get();
             
            return $query->result();  
        }
        
        public function get_price(){
            $this->db->select('*');
            $this->db->from('price');
            $query = $this->db->get();
             
            return $query->result(); 
        }
        public function get_price_id($id){
            $this->db->select('*');
            $this->db->from('price');
            $this->db->where('id', $id);
            $query = $this->db->get();
          
            return $query->row();
        }
        
        
            
}