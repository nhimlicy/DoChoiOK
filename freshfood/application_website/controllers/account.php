<?php
class Account extends CI_Controller {
    public function index(){
        $this->load->library( 'smartyci' );
        $this->smartyci->display( 'account/index.tpl' );
    }
    public function sign_in(){
        $this->load->model('account_sign');
        if($this->input->post()){
            
            $pass = md5($this->input->post('pass'));
           
            $infor = $this->account_sign->get_row($this->input->post('email'));
            
            if($pass == $infor->password){
                $_SESSION['user'] = $infor->buyer_id;
                redirect("home");
            }   
        }
        
    }
    public function sign_up(){
        if($this->input->post()){
            var_dump($this->input->post('user_name'));
//               $this->seller->update_data($id);
        }
        $this->load->model('account_sign');
       if($this->input->post()){
            $this->account_sign->insert();
        }
    }
    
}
