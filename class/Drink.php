<?php 
// import class Menu(parent class)
require_once('Menu.php');

class Drink extends Menu {
    // property instance
    private $type;

    // method construct class Drink  
    public function __construct($name, $price, $image, $type) {
        $this->name = $name;
        $this->price = $price;
        $this->image = $image;
        self::$count++;
        $this->type = $type;
    }  

    public function getType(){
        return $this->type;
    }

    public function setType($type){
        $this->type = $type;
    }
}

?>