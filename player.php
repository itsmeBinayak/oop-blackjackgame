<?php
class player {
private $cards = [] ;
private $lost = false;

function __construct($deck) {
    for ($i=0; $i < 2 ; $i++) { 
        $this->cards[] = $deck->drawCard();
    }
  }
public function hit() {
    $this -> primaryColor = $color;
}
public function surrender() {
    $this -> lost = true;
}
public function getScore() {
    $this -> lost = $co;
}
public function hasLost() {
    return $this->lost;
}	
}