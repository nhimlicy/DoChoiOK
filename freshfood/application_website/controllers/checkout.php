<?php
class checkout extends CI_Controller {
    public function cart(){
        $this->load->library( 'smartyci' );
        $this->load->model('products');
        $cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : array();
     
            $cart = $_SESSION['cart'];
            
           $rows = array();
           $total = 0;
           foreach ($cart as $value => $v) {
               $r = $this->products->get_row($value);
               $rows[] = $this->products->get_row($value);
              $total +=  $v*$r->price;
           }
           
        $this->smartyci->assign('cart', $cart);
        $this->smartyci->assign('rows', $rows);
        $this->smartyci->assign('total', $total);
        $this->smartyci->display( 'checkout/cart.tpl' );
               
    }
    
    
    
    public function  add_to_cart(){
        $id = $_GET['id'];
        var_dump($id);
  
        
            $cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : array();
           // $cart =  $_SESSION['cart'];
            if(empty($cart)){
                $cart =  array($id =>1);
            } else {
                if(array_key_exists($id, $cart)){
                    $cart[$id] +=1;
                } else {
                    $cart[$id] = 1;
                }
            }
            $_SESSION['cart'] = $cart;
            echo "<pre>";
            var_dump($_SESSION);
    }
    
    public function to_up(){
        $id = $_GET['id'];
        var_dump($id);
        $cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : array();
        $cart[$id] += 1;
          $_SESSION['cart'] = $cart;         
        var_dump($cart[$id]); 
    }
    
    public function to_down(){
        $id = $_GET['id'];
        var_dump($id);
        $cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : array();
        $cart[$id] -= 1;
          $_SESSION['cart'] = $cart;         
        var_dump($cart[$id]); 
    }
    
}
