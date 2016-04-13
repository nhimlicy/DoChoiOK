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
               $this->load->model('seller');
               $rows = $this->seller->get_list();
		$this->load->library( 'smartyci' );

               $this->smartyci->assign('rows', $rows);
                $this->smartyci->display( 'seller/home_seller.tpl' );
                
            }
            
       public function edit($id = 0){
             
             $this->load->model('seller');
            
            if($this->input->post()){
               $this->seller->update_data($id);
            }
//                        
            
           
             $this->load->model('seller');
           
            $this->load->library( 'smartyci' );
            
                $row = $this->seller->get_row($id);
                
                $this->smartyci->assign('row', $row);
                $this->smartyci->display( 'seller/home_edit.tpl' );
                    
        }
        
        public function  add(){
            $this->load->model('seller');
            if($this->input->post()){
               $this->seller->insert();
            }
            $this->load->library( 'smartyci' );
              $this->smartyci->display( 'seller/home_add.tpl' );
        }
}
