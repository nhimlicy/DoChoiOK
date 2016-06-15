<?php
class checkout extends CI_Controller {
    public function index(){
        //Phần checkout, tạo hóa đơn cho người mua hàng
        $this->load->library( 'smartyci' );
        
        //Lấy dữ liệu từ giỏ hàng
        $cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : array();
            $rows = array();
            $total = 0;
            $this->load->model('products');
            //Tính tổng giá trị giỏ hàng
            foreach ($cart as $value => $v) {
                $r = $this->products->get_row($value);
                $rows[] = $r;
                $total +=  $v*$r->price;
            }
           
        $this->smartyci->assign('cart', $cart);
        $this->smartyci->assign('rows', $rows);
        $this->smartyci->assign('total', $total);
        
        //Lấy thông tin tài khoản khi người dùng đăng nhập
        $this->load->model('account_sign');
        $user_id = isset($_SESSION['user']) ? $_SESSION['user'] : 0;
        $infor = $this->account_sign->get_row_id($user_id);
     
        $this->smartyci->assign('infor', $infor);
        $this->smartyci->display( 'checkout/checkout.tpl' );
    }

        public function cart(){
        
        $this->load->library( 'smartyci' );
        $this->load->model('products');
        $cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : array();
     
           
            
           $rows = array();
           $total = 0;
           foreach ($cart as $value => $v) {
               //Lấy thông tin sản phẩm trong giở hàng
               $r = $this->products->get_row($value);
               $rows[] = $this->products->get_row($value);
              $total +=  $v*$r->price;
           }
           
        $this->smartyci->assign('cart', $cart);
        $this->smartyci->assign('rows', $rows);
        $this->smartyci->assign('total', $total);
        $this->load->model('account_sign');
        $user_id = isset($_SESSION['user']) ? $_SESSION['user'] : 0;
        
         
        $infor = $this->account_sign->get_row_id($user_id);
        
        $this->smartyci->assign('infor', $infor);
        
        $this->smartyci->display( 'checkout/cart.tpl' );
               
    }
    
    
    
    public function  add_to_cart(){
        $id = $_GET['id'];
        
            $cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : array();
           // $cart =  $_SESSION['cart'];
            if(empty($cart)){
                $cart =  array($id =>1);
            } else {
                //Thêm sản phẩm mới vào giỏ hàng
                if(array_key_exists($id, $cart)){
                    $cart[$id] +=1;
                } else {
                    $cart[$id] = 1;
                }
            }
            //Lưu thông tin về số lượng và mã sản phẩm vào giỏ hàng
            $_SESSION['cart'] = $cart;
           
    }
    
    public function to_up(){
        
        $id = $_GET['id'];
        
        $cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : array();
        $cart[$id] += 1;
          $_SESSION['cart'] = $cart;         
        
    }
    
    public function to_down(){
        $id = $_GET['id'];
        
        $cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : array();
        $cart[$id] -= 1;
          $_SESSION['cart'] = $cart;         
        
    }
    
    public function to_delete(){
        $id = $_GET['id'];
        
        $cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : array();
        
        $cart[$id] = 0;
        foreach ($cart as $value => $v) {
                if($v != 0){
                    $cart[$value] = $v;
                }
            }
          $_SESSION['cart'] = $cart;
          
    }

        public function order(){
            //Checkout với khách vãng lai không đăng nhập hệ thống
            if($this->input->post()){
                var_dump($this->input->post('total'));
               $this->load->model('account_sign');
               //Thêm người dùng mới vào hệ thống
               $this->account_sign->insert_order();
               $this->load->model('order');
               //Lấy id của người dùng vừa tạo bắng số điện thoại vừa đăng nhập
               $user_id = $this->account_sign->get_id($this->input->post('buyer_telephone'));
               //Tạo đơn hàng
               $this->order->insert_to_order( $user_id);
                $order_id = $this->order->get_order_id($user_id);
                $cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : array();
                $this->load->model('order_line');
                foreach ($cart as $value => $v) {
                    //Thêm chi tiết mỗi sản phẩm trong đơn hàng
                    $this->order_line->insert_to_order_line($order_id, $value, $v);
                }
                //Giải phóng session
                unset($_SESSION['cart']);
                redirect("home");
            }
    
        }
         
        public function order_acc(){
            //Checkout với khách hàng đăng nhập vào hệ thống
            if($this->input->post()){
                $this->load->model('account_sign');
                //Lấy id của người mua hàng
                $user_id = isset($_SESSION['user']) ? $_SESSION['user'] : 0;
                $this->load->model('order');
                //Thêm đơn hàng mới vào list các đơn hàng
                $this->order->insert_to_order( $user_id);
                //Lấy mã của đơn hàng vừa được tạo ra
                $order_id = $this->order->get_order_id($user_id);
                $cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : array();
                $this->load->model('order_line');
                //Thêm chi tiết danh sách các đơn hàng
                foreach ($cart as $value => $v) {
                    $this->order_line->insert_to_order_line($order_id, $value, $v);
                }
                unset($_SESSION['cart']);
                
                redirect("home");
            }
        }

    
    
}
