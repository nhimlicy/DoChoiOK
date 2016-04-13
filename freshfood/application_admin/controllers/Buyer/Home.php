<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Home
 *
 * @author Thuong
 */
class Home extends CI_Controller {
        public function index()
            {
               $this->load->model('buyer');
               $rows = $this->buyer->get_list();
		$this->load->library( 'smartyci' );

               $this->smartyci->assign('rows', $rows);
                $this->smartyci->display( 'buyer/home_buyer.tpl' );
                
            }
            
        public function edit($id){
             
             $this->load->model('buyer');
            if($this->input->post()){
               
                $config['upload_path']          =  './uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 2048000;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());
                }
                else
                {
                    
                        $data = array('upload_data' => $this->upload->data());
                        $file_name = $data["upload_data"]["file_name"];
                        
                        $this->buyer->update_img($id, $file_name);
    
                }
            }
            if($this->input->post()){
               $this->buyer->update_data($id);
            }
//                        
            $row = $this->buyer->get_row($id);
            
            $this->load->library( 'smartyci' );
            //    var_dump($row);
            
                
                $this->smartyci->assign('row', $row);
                $this->smartyci->display( 'buyer/home_edit.tpl' );
                    
        }
        
        public function  add(){
            $this->load->model('products');
             if($this->input->post()){
                $config['upload_path']          =  './uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 2048000;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());
                       
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());
                        $file_name = $data["upload_data"]["file_name"];
                        
                        $this->products->insert($file_name);
                        
                }
            }
    
            $cate_rows = $this->products->get_categories();
            $this->load->model('seller');
            $seller_rows = $this->seller->get_list();
            $this->load->library( 'smartyci' );
            //    var_dump($row);
            
                $this->smartyci->assign('cate_rows', $cate_rows);
                $this->smartyci->assign('seller_rows', $seller_rows);
                
                $this->smartyci->display( 'products/home_add.tpl' );
        }
        
        
}
