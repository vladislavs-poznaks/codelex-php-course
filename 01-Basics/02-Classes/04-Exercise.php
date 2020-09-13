<?php

class Movie
{

    protected $title;
    protected $studio;
    protected $rating;

    public function __construct($title, $studio, $rating)
    {
        $this->title = $title;
        $this->studio = $studio;
        $this->rating = $rating;
    }

    public function getRating()
    {
        return $this->rating;
    }
}

$movies = [
    new Movie("Casino Royale", "Eon Productions", "PG13"),
    new Movie("Glass", "Buena Vista International", "PG13"),
    new Movie("Spider-Man: Into the Spider-Verse", "Columbia Pictures", "PG"),
];

function getPG($movies)
{
    return
        array_filter($movies, function ($movie){
            return $movie->getRating() === "PG";
        });
}

var_dump(getPG($movies));