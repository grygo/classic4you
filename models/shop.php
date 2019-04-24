<?php

class shop extends Model{
    
    public function getAllShopElement(){
        $query = "SELECT * FROM cars";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        
        $result = array();
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            array_push($result, $row);
        }
        
        return $result;
    }

    public function getElementById($id){
        $query = "SELECT * FROM cars WHERE id = $id";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        
        $result = array();
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            array_push($result, $row);
        }
        
        return $result;
    }

    public function editElementById($id){
        if(!empty($_POST)){
            $name = trim($_POST['name']);
            $short_desc = trim($_POST['short_desc']);
            $descript = trim($_POST['desc']);
            $year = trim($_POST['year']);
            $prize = trim($_POST['prize']);

            $query = "UPDATE cars SET name = '$name', shortDescript = '$short_desc', descript = '$descript', year = '$year', prize='$prize' WHERE id = $id";
            $stmt = $this->db->prepare($query);
            // $stmt->bindParam(':name', $name);
            // $stmt->bindParam(':short_desc', $short_desc);
            // $stmt->bindParam(':year', $year);
            // $stmt->bindParam(':prize', $prize);
            $stmt->execute();
        }
    }
    
    public function genHTML($array){
        $text = '';
        $text .= "<div class='col-lg-9'>";
        $text .= "<div class='row'>";
        
        for($i=0; $i<count($array); $i++){
            
            $name = $array[$i]['name'];
            $prize = $array[$i]['prize'];
            $shortDescript = $array[$i]['shortDescript'];

            $text .= "<div class='col-lg-4 col-md-6 mb-4'>";
            $text .= "<div class='card h-100'>";
            $text .= "<a href='#'><img class='card-img-top' src='http://placehold.it/700x400' alt='' </a>";
            $text .= "<div class='card-body'>";
            $text .= "<h4 class='card-title'>";
            $text .= "<a href='#'>$name</a>";
            $text .= "</h4>";
            $text .= "<h5>$prize</h5>";
            $text .= "<p class='card-text'>$shortDescript</p>";
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