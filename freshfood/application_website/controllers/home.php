<?php
class Home extends CI_Controller {
    public function index(){
        $this->load->library( 'smartyci' );
        $this->load->model('products');
        
        $rows = $this->products->get_rows_view();
        $this->smartyci->assign('rows', $rows);
       
           
        $rows_cate_rau = $this->products->get_rows_cates_view(1);
        $this->smartyci->assign('rows_cate_rau', $rows_cate_rau);
        
        $rows_cate_cu = $this->products->get_rows_cates_view(2);
        $this->smartyci->assign('rows_cate_cu', $rows_cate_cu);
        
        $rows_cate_qua = $this->products->get_rows_cates_view(3);
        $this->smartyci->assign('rows_cate_qua', $rows_cate_qua);
        
        $rows_cate_khac = $this->products->get_rows_cates_view(4);
        $this->smartyci->assign('rows_cate_khac', $rows_cate_khac);
        
        $rows_time_max = $this->products->get_rows_time_max();
        $this->smartyci->assign('rows_time_max', $rows_time_max);
        
        $rows_time = $this->products->get_rows_time();
        $this->smartyci->assign('rows_time', $rows_time);
        
        $cates = $this->products->get_categories();
        $this->smartyci->assign('cates', $cates);
        
        $this->smartyci->display( 'home/index.tpl' );
               
    }
    
    public function view(){
        $id = $_GET['id'];
        var_dump($id);
         $this->load->model('products');
         
        $this->products->increasing_view($id);
    }
    
    public function detail($id){
        $this->load->library( 'smartyci' );
        $this->load->model('products');
        
        $r = $this->products->get_row($id);
        $r_cate = $r->cate_id;
        $this->smartyci->assign('r', $r);
        
        $rows_cate_max = $this->products->get_rows_cates_view_max($r_cate);
        $this->smartyci->assign('rows_cate_max', $rows_cate_max);
        
        $rows_cate = $this->products->get_rows_cates_view_end($r_cate);
        $this->smartyci->assign('rows_cate', $rows_cate);
        
        $cates = $this->products->get_categories();
        $this->smartyci->assign('cates', $cates);
        
          $this->smartyci->display( 'home/detail.tpl' );
          var_dump($rows_cate);
    }
    
    public function list_cate($id){
        $this->load->library( 'smartyci' );
        $this->load->model('products');
        
        $rows_cate = $this->products->get_rows_cates($id);
        $this->smartyci->assign('rows_cate', $rows_cate);
        
        $cates = $this->products->get_categories();
        $this->smartyci->assign('cates', $cates);
        
        $this->smartyci->display( 'home/list.tpl' );
        
    }
    
    
}
