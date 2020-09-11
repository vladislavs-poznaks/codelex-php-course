<?php
class Dealer extends Player
{
    public function getHiddenHand(): string
    {
        return $this->cards[0]->show() . ' **';
    }

    public function isPlaying(): bool
    {
        if ($this->getScore() < 17) {
            return true;
        } else {
            return false;
        }
    }
}