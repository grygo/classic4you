<?php


require_once "shop.php";

class admin extends Model{
    
    public function login($data){
    	$email = trim($data['email']);
        $password = trim($data['password']);

        $query = "SELECT * FROM users WHERE email = :email";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);



        if ($stmt->rowCount() > 0){
        	if($password == $result['password']){
        		$_SESSION['email'] = $result['email'];
        		$_SESSION['first_name'] = $result['first_name'];
        		$_SESSION['last_name'] = $result['last_name'];

        		return true;
        	}else{
        		unset($_SESSION['email']);
        		unset($_SESSION['first_name']);
        		unset($_SESSION['last_name']);

        		return false;
        	}
        }else{
        	return false;
        }
    }

    public function add($data){
    	$name = trim($data['name']);
    	$short_desc = trim($data['short_desc']);
    	$desc = trim($data['desc']);
    	$year = trim($data['year']);
    	$prize = trim($data['prize']);

    	$query = "INSERT INTO cars (id, name, shortDescript, descript, year, prize) VALUES (NULL, :name, :short_desc, :desc, :year, :prize)";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':short_desc', $short_desc);
        $stmt->bindParam(':desc', $desc);
        $stmt->bindParam(':year', $year);
        $stmt->bindParam(':prize', $prize);
        $stmt->execute();
    }

    public function delete($id){

    	$query = "DELETE FROM cars WHERE id= $id";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
    }

    

    public function generateCRUD(){
    	$shop = new shop();
    	$data = $shop->getAllShopElement();


    	$text = "";

		$text .= "<div class='container'>";
		$text .= "<div class='row'>";
		$text .= "<div class='col-lg-9'>";

    	$text .= "<table class='table table-sm'>";
		$text .= "<thead>";
		$text .= "<tr>";
		$text .= "<th scope='col'>#</th>";
		$text .= "<th scope='col'>Name</th>";
		$text .= "<th scope='col' colspan='2' style='text-align: center';>Actions</th>";
		$text .= "</tr>";
		$text .= "</thead>";

		$text .= "<tbody>";
		for($i=0; $i<count($data); $i++){
			$name = $data[$i]['name'];
			$edit_link = "admin/edit?id=".$data[$i]['id'];
			$delete_link = "admin/delete?id=".$data[$i]['id'];

			$text .= "<tr>";
			$text .= "<th scope='row'>$i</th>";
			$text .= "<td>$name</td>";
			$text .= "<td style='text-align: center;'><a href='$edit_link'>Edit</a></td>";
			$text .= "<td style='text-align: center;'><a href='$delete_link'>Delete</a></td>";
			$text .= "</tr>";
		} 

		$text .= "</tbody>";

		$text .= "</table>";
		$text .= "</div>";
		$text .= "</div>";
		$text .= "</div>";

    	return $text;
    }
}