<?php

class AdminController extends Controller{
    
    public function index(){
        $_SESSION['logged'] = false;
        
        if(isset($_SESSION['logged']) && $_SESSION['logged'] == true){
            $this->showAdminPanel();
        }else{
            $this->showLoginPanel();
        }
    }
    
    private function showAdminPanel(){
        
        $this->partial('header');
        $this->partial('navbar');
        
        echo "admin panel";
        
        $this->partial('footer');

    }
    
    private function showLoginPanel(){
        
        $this->partial('header');
        $this->partial('navbar');
        
        $this->partial('loginForm');
        
        $this->partial('footer');

    }
}