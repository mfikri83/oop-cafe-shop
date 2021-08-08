<?php 
// import class Menu(parent class)
require_once('Menu.php');

class Food extends Menu {
    // property instance class Food
    private $spiciness;

    // method construct class Drink  
    public function __construct($name, $price, $image, $spiciness) {
        parent::__construct($name,$price,$image);
        $this->spiciness = $spiciness;
    } 

    public function getSpiciness(){
        return $this->spiciness;
    }
}

?>