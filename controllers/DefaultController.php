<?php

class DefaultController extends Controller{
    
    public function index(){
        $this->partial('header');
        $this->partial('navbar');
        $this->partial('slider');
        
        
//        $this->partial('shopPosition');
        $model = $this->model('shop');
        $html = $model->genHTML();
        echo $html;
        
        
        $this->partial('footer');
    }
}