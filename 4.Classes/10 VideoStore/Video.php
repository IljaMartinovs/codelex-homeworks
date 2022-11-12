<?php

class Video
{
    public string $title;
    public bool $flag;
    public array $rating;

    public function __construct(string $title, bool $flag = true, array $rating = [] )
    {
        $this->title = $title;
        $this->flag = $flag;
        $this->rating = $rating;
    }

    public function setRating(float $rating): void
    {
        array_push($this->rating,$rating);
    }

    public function getRating(): float
    {
        $averageRating = 0;
        for($i=0; $i < count($this->rating); $i++)
        {
            $averageRating += $this->rating[$i];
        }
        return number_format($averageRating/count($this->rating),2);
    }

}
class VideoStore
{
    private array $movies;
    private array $notReturnedMovies = [];

    public function addVideo(Video $video)
    {
        $this->movies[] = $video;
    }

    public function rentVideo()
    {
        $counter = 0;
        $name = readline("Choose movie to rent (by title ): ");

        foreach ($this->movies as $movie){
            if($movie->title == $name){
                array_push($this->notReturnedMovies,$movie->title);
                unset($this->movies[$counter]);
                $this->notReturnedMovies = array_filter($this->notReturnedMovies);
                $this->notReturnedMovies = array_values($this->notReturnedMovies);
                $this->movies = array_values($this->movies);
            }
            else
                $counter++;
        }
    }

    public function getNotReturnedMovies(): void
    {
        echo "Not returned movies : \n";
        foreach ($this->notReturnedMovies as $movie) {
            echo $movie . "\n";
        }
    }

    public function returnVideo(string $title): void
    {
        $rating = readline("Enter rating : ");
        $title = new Video ($title, true);
        $title->setRating($rating);
         array_push( $this->movies, $title);
    }

    public function listInventory(): void
    {
        echo "Available movies : \n";
        foreach ($this->movies as $movie) {
            echo $movie->title . " | " . $movie->getRating() . "\n";
        }
    }
}