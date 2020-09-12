<?php
class Board
{
    public const OPTIONS = ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10'];

    protected $board = [];
    protected $isShowed;
    protected $hits = 0;
    protected $misses = 0;

    private $ships = [
        [
            'length' => 4,
            'count' => 1
        ],
        [
            'length' => 3,
            'count' => 2
        ],
        [
            'length' => 2,
            'count' => 3
        ],
        [
            'length' => 1,
            'count' => 4
        ],
    ];

    public function __construct($isShowed = true)
    {
        $this->isShowed = $isShowed;

        for ($row = 0; $row < 11; $row++) {
            $rowContents = [];
            for ($col = 0; $col < 11; $col++) {
                $rowContents[] = new Cell($isShowed);
            }
            $this->board[] = $rowContents;
        }

        foreach ($this->ships as $ship) {

            for ($i = 0; $i < $ship['count']; $i++) {

                $this->placeShip($ship['length']);

            }
        }
    }

    public function showBoard(): string
    {
        $board = PHP_EOL;

        for ($row = 0; $row < 11; $row++) {
            for ($col = 0; $col < 11; $col++) {

                // Drawing borders with row and column numbers
                if ($row === 0 && $col === 0) {
                    $board .= "[0 ]";
                } elseif ($row === 0) {
                    $board .= "[$col]";
                } elseif ($col === 0 && $row !== 10) {
                    $board .= "[$row ]";
                } elseif ($col === 0) {
                    $board .= "[$row]";
                } else {

                    // Drawing inner board
                    if (! $this->board[$row][$col]->isShowed) {
                        $board .= "( )";
                    } elseif ($this->board[$row][$col]->isShip && $this->board[$row][$col]->isBombed) {
                        $board .= "(x)";
                    } elseif ($this->board[$row][$col]->isShip) {
                        $board .= "(#)";
                    } elseif ($this->board[$row][$col]->isBombed) {
                        $board .= "(o)";
                    } else {
                        $board .= "( )";
                    }

                }
            }
            $board .= PHP_EOL;
        }

        return $board;
    }

    public function bomb(int $row, int $col): string
    {
        if ($this->board[$row][$col]->isBombed) {
            return "You already tried this one...";

        } else {
            $this->board[$row][$col]->isShowed = true;
            $this->board[$row][$col]->isBombed = true;

            if ($this->board[$row][$col]->isShip) {
                $this->hits++;

                $neighbours = $this->getNeighbours($row, $col);

                foreach ($neighbours as $neighbour) {
                    if ($neighbour->isShip && ! $neighbour->isBombed) {
                        return "Boom! You got one!";
                    }
                }

                // Ship sunken
                // todo Add a function that opens cells around sunken ship
                return "Perfect, it's under water!";

            } else {
                $this->misses++;
                return "Splash! Right into the water...";
            }
        }
    }

    public function getHits()
    {
        return $this->hits;
    }

    public function getMisses()
    {
        return $this->misses;
    }

    public function isPlaying(): bool
    {
        foreach ($this->board as $row) {
            foreach ($row as $cell) {
                if ($cell->isShip && !$cell->isBombed) {
                    return true;
                }
            }
        }

        return false;
    }

    private function placeShip(int $length)
    {
        $directions = ['h', 'v'];
        $direction = $directions[rand(0, 1)];

        $placements = $this->getPlacements($length, $direction);
        $placement = array_shift($placements);

        for ($pos = 0; $pos < $length; $pos++) {

            $this->board
            [$placement['row'] + ($direction === 'v' ? $pos : 0)] //(($direction === 'v') ? $pos : 0)]
            [$placement['col'] + ($direction === 'h' ? $pos : 0)] //(($direction === 'h') ? $pos : 0)]
                ->isShip = true;
        }

    }

    private function getPlacements(int $length, string $direction): array
    {
        // $direction can be only ['h', 'v'];
        $placements = [];

        for ($row = 1; $row < (($direction === 'v') ? 12 - $length : 11); $row++) {
            for ($col = 1; $col < (($direction === 'h') ? 12 - $length : 11); $col++) {

                $isOption = true;

                for ($pos = 0; $pos < $length; $pos++) {
                    // Check ship cells
                    if ($this->board
                    [$row + ($direction === 'v' ? $pos : 0)]
                    [$col + ($direction === 'h' ? $pos : 0)]
                        ->isShip) {
                        $isOption = false;
                    }

                    // Check nearest
                    $neighbours = $this->getNeighbours(
                        $row + (($direction === 'v') ? $pos : 0),
                        $col + (($direction === 'h') ? $pos : 0));

                    foreach ($neighbours as $neighbour) {
                        if ($neighbour->isShip) $isOption = false;
                    }
                }

                if ($isOption) $placements[] = [
                    'row' => $row,
                    'col' => $col
                ];

            }

        }

        shuffle($placements);
        $placements['direction'] = $direction;

        return $placements;
    }

    /**
     * @param int $row
     * @param int $col
     * @return Cell[]
     */
    private function getNeighbours(int $row, int $col): array
    {
        $nearestCells = [];

        for ($rowOffset = -1; $rowOffset <= 1; $rowOffset++) {
            for ($colOffset = -1; $colOffset <= 1; $colOffset++) {
                // Check if inside the board
                if ($row + $rowOffset > 0 && $row + $rowOffset < 11
                    && $col + $colOffset > 0 && $col + $colOffset < 11) {
                    $nearestCells[] = $this->board[$row + $rowOffset][$col + $colOffset];
                }
            }
        }

        return  $nearestCells;
    }
}