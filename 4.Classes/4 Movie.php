<?php

class Movie
{
    private string $title;
    private string $studio;
    private string $rating;

    public function __construct(string $title, string $studio, string $rating) {
        $this->title = $title;
        $this->studio = $studio;
        $this->rating = $rating;
    }
    public static function GetPG(array $movies): array
    {
        $rightMovie = [];
        $acceptableRating = "PG";
        foreach($movies as $movie){
            if($movie->rating == $acceptableRating){
               $rightMovie[]=$movie;
            }
        }
        return $rightMovie;
    }
}

$movies = [];
$movies[] = new Movie("Casino Royale", "Eon Productions", "PG­13");
$movies[]  = new Movie("Glass", "Buena Vista International", "PG­13");
$movies[] = new Movie ("Spider-Man: Into the Spider-Verse","Columbia Pictures","PG");
print_r(Movie::GetPG($movies));
//print_r($movies[0]->GetPG($movies));
