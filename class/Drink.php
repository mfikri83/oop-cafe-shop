<?php 
// import class Menu(parent class)
require_once('Menu.php');

class Drink extends Menu {
    // property instance
    private $type;

    public function getType(){
        return $this->type;
    }

    public function setType($type){
        $this->type = $type;
    }
}

?>