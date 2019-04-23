<?php

class AdminController extends Controller{
    
    public function index(){
        $_SESSION['logged'] = true;
        
        if(isset($_SESSION['logged']) && $_SESSION['logged'] == true){
            $this->showAdminPanel();
        }else{
            $this->showLoginPanel();
        }
    }
    
    private function showAdminPanel(){
        echo "admin panel";
    }
    
    private function showLoginPanel(){
        echo "login panel";
    }
}