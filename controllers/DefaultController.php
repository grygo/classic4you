<?php

class DefaultController extends Controller{
    
    public function index(){
        $this->partial('header');
        $this->partial('navbar');
        $this->partial('slider');
        
        
        $model = $this->model('shop');
        
        $resultArray = $model->getAllShopElement();
        
        $html = $model->genHTML($resultArray);
        echo $html;
        
        
        $this->partial('footer');
    }

    public function elo(){

        $this->partial('header');
        $this->partial('navbar');
        $this->partial('slider');
        echo "elo";

        $this->partial('footer');
    }
}