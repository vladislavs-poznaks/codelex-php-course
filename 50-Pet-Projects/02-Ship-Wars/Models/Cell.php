<?php
class Cell
{
    public $isShowed;
    public $isBombed;
    public $isShip;

    public function __construct($isShowed = true)
    {
        $this->isShowed = $isShowed;
    }
}