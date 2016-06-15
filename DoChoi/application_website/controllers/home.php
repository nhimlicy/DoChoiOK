<?php
class Home extends CI_Controller {
    public function index(){
        $this->load->library( 'smartyci' );
        $this->load->model('products');
        
        //Lấy danh sách 6 sản phẩm có view nhiều nhất 
        $rows = $this->products->get_rows_view();
        $this->smartyci->assign('rows', $rows);
       
        //Lấy danh sách sản phẩm mứoi
        $rows_time_max = $this->products->get_rows_time_max();
        $this->smartyci->assign('rows_time_max', $rows_time_max);
        
        $rows_time = $this->products->get_rows_time();
        $this->smartyci->assign('rows_time', $rows_time);
         
        //Lấy danh sách các loiaj dồ chơi
        $cates = $this->products->get_categories();
        $this->smartyci->assign('cates', $cates);
        
        //Lấy danh sách các độ tuổi
        $ages = $this->products->get_ages();
        $this->smartyci->assign('ages', $ages);
        
        
        $this->load->model('account_sign');
        $user_id = isset($_SESSION['user']) ? $_SESSION['user'] : 0;
        
         
        $infor = $this->account_sign->get_row_id($user_id);
      
        $this->smartyci->assign('infor', $infor);
        
        $this->smartyci->display( 'home/index.tpl' );
               
    }
    
    public function view(){
        $id = $_GET['id'];
        
         $this->load->model('products');
         
        $this->products->increasing_view($id);
    }
    
    public function detail($id){
        $this->load->library( 'smartyci' );
        $this->load->model('products');
        
        //Lấy thông tin sản phẩm
        $r = $this->products->get_row($id);
        $r_cate = $r->cate_id;
        $this->smartyci->assign('r', $r);
        
        //Lọc dữ liệu
        $rows_cate_max = $this->products->get_rows_cates_view_max($r_cate);
        $this->smartyci->assign('rows_cate_max', $rows_cate_max);
        
        $rows_cate = $this->products->get_rows_cates_view_end($r_cate);
        $this->smartyci->assign('rows_cate', $rows_cate);
        
        $cates = $this->products->get_categories();
        $this->smartyci->assign('cates', $cates);
        
        $this->load->model('account_sign');
        $user_id = isset($_SESSION['user']) ? $_SESSION['user'] : 0;
        
         
        $infor = $this->account_sign->get_row_id($user_id);
        $this->smartyci->assign('infor', $infor);
        
        $this->load->model('commit');
        $commits = $this->commit->get_commit($id);
        $this->smartyci->assign('commits', $commits);
            
          $this->smartyci->display( 'home/detail.tpl' );
         
    }
    
    public function list_cate($id){
        $this->load->library( 'smartyci' );
        $this->load->model('products');
        
        $rows_cate = $this->products->get_rows_cates($id);
        $this->smartyci->assign('rows_cate', $rows_cate);
        
        //Lấy danh sách các loại đồ chơi
        $cates = $this->products->get_categories();
        $this->smartyci->assign('cates', $cates);
        
        //Lấy danh sách các độ tuổi khác nhau
        $ages = $this->products->get_ages();
        $this->smartyci->assign('ages', $ages);
        
        //Lấy danh sách các mức giá
        $price = $this->products->get_price();
        $this->smartyci->assign('price', $price);
        
        $this->load->model('account_sign');
        $user_id = isset($_SESSION['user']) ? $_SESSION['user'] : 0;
       
         
        $infor = $this->account_sign->get_row_id($user_id);
        
        $this->smartyci->assign('infor', $infor);
        $this->smartyci->display( 'home/list_cates.tpl' );
        
    }
    
    public function list_age($id){
        $this->load->library( 'smartyci' );
        $this->load->model('products');
        
        $rows_cate = $this->products->get_rows_ages($id);
        $this->smartyci->assign('rows_cate', $rows_cate);
        
        $cates = $this->products->get_categories();
        $this->smartyci->assign('cates', $cates);
        
        $ages = $this->products->get_ages();
        $this->smartyci->assign('ages', $ages);
        
        $price = $this->products->get_price();
        $this->smartyci->assign('price', $price);
        
        $this->load->model('account_sign');
        $user_id = isset($_SESSION['user']) ? $_SESSION['user'] : 0;
        
         
        $infor = $this->account_sign->get_row_id($user_id);
       
        $this->smartyci->assign('infor', $infor);
        $this->smartyci->display( 'home/list_ages.tpl' );
        
    }
    
    public function loc(){
        if($this->input->post()){
            $this->load->library( 'smartyci' );
            $cate_id = $this->input->post('cate');
            $age_id = $this->input->post('age');
            $price_id = $this->input->post('price');
            
            $this->load->model('products');
            //Lấy danh sách theo điều kiện: giá, loại, độ tuổi
            $min = $this->products->get_price_id($price_id)->min;
            $max = $this->products->get_price_id($price_id)->max;
            $loc = $this->products->get_rows_loc($cate_id, $age_id, $price_id, $min, $max);
            
            $cates = $this->products->get_categories();
            $this->smartyci->assign('cates', $cates);

            $ages = $this->products->get_ages();
            $this->smartyci->assign('ages', $ages);
            
            $price = $this->products->get_price();
             $this->smartyci->assign('price', $price);
            
            
            $this->load->model('account_sign');
        $user_id = isset($_SESSION['user']) ? $_SESSION['user'] : 0;
        
         
        $infor = $this->account_sign->get_row_id($user_id);
       
        $this->smartyci->assign('infor', $infor);
        $this->smartyci->assign('loc', $loc);
        $this->smartyci->display( 'home/list_loc.tpl' );
            
        }
    }
    
    public function commit($id){
        if($this->input->post()){
            $this->load->model('commit');
            $this->commit-> insert_to($id);
            redirect("home/detail/$id");
            
        }
    }
    
    
}
