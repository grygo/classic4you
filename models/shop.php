<?php

class shop extends Model{
    
    public function genHTML(){
        $text = '';
        $text .= "<div class='col-lg-9'>";
        $text .= "<div class='row'>";
        
        for($i=0; $i<20; $i++){
            $text .= "<div class='col-lg-4 col-md-6 mb-4'>";
            $text .= "<div class='card h-100'>";
            $text .= "<a href='#'><img class='card-img-top' src='http://placehold.it/700x400' alt='' </a>";
            $text .= "<div class='card-body'>";
            $text .= "<h4 class='card-title'>";
            $text .= "<a href='#'>s $i</a>";
            $text .= "</h4>";
            $text .= "<h5>$24.99</h5>";
            $text .= "<p class='card-text'>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>";
            $text .= "</div>";
//            $text .= "<div class='card-footer'>";
//            $text .= "</div>";
            $text .= "</div>";
            $text .= "</div>";
        }
        
        $text .= "</div>";
        $text .= "</div>";
        
        return $text;
    
    }
}