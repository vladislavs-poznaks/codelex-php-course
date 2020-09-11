<?php

class Application
{
    protected $store;

    public function __construct(VideoStore $store) {
        $this->store = $store;
    }

    function run()
    {
        while (true) {
            echo "Choose the operation you want to perform \n";
            echo "Choose 0 for EXIT\n";
            echo "Choose 1 to fill video store\n";
            echo "Choose 2 to rent video (as user)\n";
            echo "Choose 3 to return video (as user)\n";
            echo "Choose 4 to rate video (as user)\n";
            echo "Choose 5 to list inventory\n";

            $command = readline();
            $this->drawSeparator();

            switch ($command) {
                case '0':
                    echo "Bye!\n";
                    die;
                case '1':
                    $this->addMovies();
                    break;
                case '2':
                    $this->rentVideo();
                    break;
                case '3':
                    $this->returnVideo();
                    break;
                case '4':
                    $this->addRating();
                    break;
                case '5':
                    $this->listInventory();
                    break;
                default:
                    echo "Sorry, I don't understand you..\n\n";
            }
        }
    }

    private function addMovies()
    {
        $title = $this->enterTitle();
        $this->store->addMovie(new Video($title));
    }
    private function rentVideo()
    {
        $title = $this->enterTitle();
        $this->store->rentOutMovie($title);
    }
    private function returnVideo()
    {
        $title = $this->enterTitle();
        $this->store->returnMovie($title);
    }
    private function addRating()
    {
        $title = $this->enterTitle();
        $this->store->addRating($title);
    }
    private function listInventory()
    {
        foreach ($this->store->getMovies() as $movie) {
            echo $movie->showInfo() . "\n";
        }
        echo "\n";
    }
    // Helper Functions
    private function enterTitle() {
        return readline("Enter title of the movie: ");
    }
    private function drawSeparator()
    {
        for ($i = 0; $i < 80; $i++) {
            echo "-";
        }
        echo "\n";
    }
}

class VideoStore
{
    protected $videos = [];

    /**
     * @return Video[]
     */
    public function getMovies()
    {
        return $this->videos;
    }
    public function addMovie(Video $video)
    {
        if ($this->isMovie($video->getTitle())) {
            echo "Sorry, '" . $video->getTitle() . "' already exists.\n\n";
        } else {
            $this->videos[] = $video;
            echo "Movie '" . $video->getTitle() . "' added to the store!\n\n";
        }
    }
    public function rentOutMovie($title)
    {
        if ($this->isMovie($title)) {
            echo "Movie '$title' found in store.\n";
            if ($this->findMovie($title)->isAvailable()) {
                $this->findMovie($title)->rentIt();
                echo "Movie '$title' successfully rented.\n\n";
            } else {
                echo "Sorry, '$title' already rented out.\n\n";
            }
        } else {
            $this->movieNotFound($title);
        }
    }
    public function returnMovie($title)
    {
        if ($this->isMovie($title)) {
            echo "Movie '$title' found in store.\n";
            if (! $this->findMovie($title)->isAvailable()) {
                $this->findMovie($title)->returnIt();
                echo "Movie '$title' successfully returned.\n\n";
            } else {
                echo "Sorry, '$title' already has been returned.\n\n";
            }
        } else {
            $this->movieNotFound($title);
        }
    }
    public function addRating($title)
    {
        if ($this->isMovie($title)) {
            echo "Movie '$title' found in store.\n";
            do {
                $rating = readline("Enter rating for this movie: ");
            } while (! in_array($rating, ['1', '2', '3', '4', '5']));
            $this->findMovie($title)->addRating((int)$rating);
            echo "You rated '$title' with $rating!.\n\n";
        } else {
            $this->movieNotFound($title);
        }
    }
    //Helper Functions
    private function isMovie($title)
    {
        foreach ($this->videos as $video) {
            if ($video->getTitle() === $title) {
                return true;
            }
        }
        return false;
    }

    private function findMovie($title): Video
    {
        foreach ($this->videos as $video) {
            if ($video->getTitle() === $title) {
                return $video;
            }
        }
    }
    private function movieNotFound($title)
    {
        echo "Movie '$title' not found in store.\n";
        echo "Check your input and try again.\n\n";
    }
}

class Video
{
    protected $title;
    protected $available = true;
    protected $ratings = [];
    protected $rating = 0;

    public function __construct($title)
    {
        $this->title = $title;
    }

    // Used functions
    public function showInfo() {

        $dots = " ";
        for ($i = 0; $i <= (45 - strlen($this->title)); $i++) {
            $dots .= ".";
        }

        return "* " . $this->title . $dots
            . ($this->isAvailable() ? ". AVAILABLE" : " RENTED OUT")
            . " ...... RATING: "
            . (($this->rating > 0) ? number_format((float)$this->rating, 2) : "Not Rated");
    }
    public function getTitle()
    {
        return $this->title;
    }
    public function isAvailable() {
        return $this->available;
    }
    public function rentIt() {
        $this->available = false;
    }
    public function returnIt() {
        $this->available = true;
    }
    public function addRating(int $rating) {
        $this->ratings[] = $rating;
        $this->rating = array_sum($this->ratings) / count($this->ratings);
    }
}

$store = new VideoStore();

$store->addMovie(new Video("The Matrix"));
$store->addMovie(new Video("Godfather II"));
$store->addMovie(new Video("Star Wars Episode IV: A New Hope"));
$store->addMovie(new Video("Titanic"));
$store->addMovie(new Video("Point Break"));

$app = new Application($store);
$app->run();