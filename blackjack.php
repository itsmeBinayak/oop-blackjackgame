<?php
class Blackjack {
    private $player;
    private $dealer;
    private $deck;

    function __construct() {
        $this->deck = new Deck();
        $this->deck->shuffle();
        $this->player = $player;
        $this->dealer = $player;
      }
    public function getPlayer() {
        return $this -> player;
    }
    public function getDealer() {
        return $this -> dealer;
    }
    public function getDeck() {
        return $this -> deck;
    }
}