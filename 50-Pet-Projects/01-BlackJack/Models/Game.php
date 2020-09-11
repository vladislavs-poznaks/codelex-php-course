<?php
class Game
{
    private $deck;
    private $player;
    private $dealer;

    public function __construct()
    {
        $this->deck = new Deck();
        $this->player = new Player();
        $this->dealer = new Dealer();

        $this->deck->shuffle();

        for ($i = 0; $i < 2; $i++) {
            $this->player->takeCard($this->deck->getCard());
            $this->dealer->takeCard($this->deck->getCard());
        }

    }

    public function getHands(): string
    {
        return "Dealer: " . $this->dealer->getHiddenHand() . " || Player: " . $this->player->getHand() . PHP_EOL;
    }

    public function playerIsPlaying($input): bool
    {
        if ($this->player->getScore() < 21 && ! in_array($input, ['s', 'stand'])) {
            return true;
        } else {
            return false;
        }
    }

    public function playerPlays($input) {
        if (in_array($input, ['h', 'hit'])) {
            $this->player->takeCard($this->deck->getCard());
        }
    }

    public function dealerPlays() {
        while ($this->dealer->isPlaying()) $this->dealer->takeCard($this->deck->getCard());
    }

    public function getResult() {
        $result = PHP_EOL
            . "Dealer: " . $this->dealer->getHand() . " || Player: " . $this->player->getHand()
            . PHP_EOL
            . "Dealer: " . $this->dealer->getScore() . " || Player: " . $this->player->getScore()
            . PHP_EOL
            . PHP_EOL;

        if ($this->player->getScore() === 21) {
            $result .= "BlackJack!";
        } elseif ($this->player->getScore() > 21) {
            $result .= "Player Busts!";
        } elseif ($this->dealer->getScore() > 21) {
            $result .= "Dealer Busts! You Won!";
        } elseif ($this->player->getScore() === $this->dealer->getScore()) {
            $result .= "Push! No Winner...";
        } elseif ($this->player->getScore() > $this->dealer->getScore()) {
            $result .= "Congrats! You Won!";
        } else {
            $result .= "Sorry, You Lost!";
        }

        return $result . PHP_EOL;
    }
}