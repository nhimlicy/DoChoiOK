<?php
class Account extends CI_Controller {
    public function index(){
        $this->load->library( 'smartyci' );
        
       
        $this->load->model('account_sign');
        //lấy sesion lưu thông tin tài khoản
        $user_id = isset($_SESSION['user']) ? $_SESSION['user'] : 0;
        $infor = $this->account_sign->get_row_id($user_id);
       
        $this->smartyci->assign('infor', $infor);
        $this->smartyci->display( 'account/index.tpl' );
    }
    public function sign_in(){
        $this->load->model('account_sign');
        if($this->input->post()){
            // mã hóa passwword bằng md5
            $pass = md5($this->input->post('pass'));
           // Lấy thông tin của tài khoản
            $infor = $this->account_sign->get_row($this->input->post('email'));
            //Kiểm tra password
            if($infor == 0){
                redirect("account/notEmail");
            } else {
                if($pass == $infor->password){
                $_SESSION['user'] = $infor->buyer_id;
                redirect("home");
                } else {
                    redirect("account/notPass");
                }
            }
              
        }
        
    }
    
    public function notEmail(){
        $this->load->library( 'smartyci' );
        
        $this->smartyci->display( 'account/NotEmail.tpl' );
    }
    
    public function notPass(){
        $this->load->library( 'smartyci' );
        
        $this->smartyci->display( 'account/notPass.tpl' );
    }
        

    public function sign_up(){
        $this->load->model('account_sign');
        if($this->input->post()){
            $this->account_sign->insert();
            redirect("home");
        }
    }
    
    public function log_out(){
        //giải phóng session
        unset($_SESSION['user']);
        redirect("home");
        
    }
}
