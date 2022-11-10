<?php

class VideoStore
{
    private array $movies;
    private array $allMovies;

    public function addVideo(Video $video): void
    {
        $this->movies[] = $video; //Add video as an object to array
        $this->allMovies[] = $video;
        $video->checkOut(); //When we add video to store checkOut = true;
    }

    public function checkOutVideo(string $title): string //should check if movie->flag is true or false
    {
        foreach($this->movies as $movie) {
            if ($movie->title == $title)
                return "We have {$movie->title}}\n" . true;
            else
                return "We dont have {$movie->title}\n" . false;
        }
        return "";
    }

    public function listInventory(): void //Print all available movies
    {
        echo "Available videos : \n";
        foreach ($this->movies as $movie) {
            echo $movie->title . " | " . "Is available : ". $movie->flag . " | " .  "Rating : ". $movie->getRating() . PHP_EOL;
        }
    }

    public function returnVideo(int $number): int //give back rented movie in array of movies
    {
        return array_push( $this->movies, $this->allMovies[$number]);
    }

    public function rentVideo(int $number) //Rent movie
    {
        foreach ($this->movies as $movie)
        {
            if(isset($this->movies[$number]) && $movie->flag)
            {
                unset($this->movies[$number]);
                return null;
            }
        }
        echo "We don't have this movie\n";
    }
}