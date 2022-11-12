<?php

class Video
{
    public string $title;
    public bool $flag;
    public array $rating;

    public function __construct(string $title, bool $flag = false, array $rating = [])
    {
        $this->title = $title;
        $this->flag = $flag;
        $this->rating = $rating;
    }

    public function setFlag(bool $flag): void
    {
       $this->flag = $flag;
    }

    public function getFlag(): bool
    {
        return $this->flag;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getRating(): float //Return average rating of movie
    {
        $averageRating = 0;
        for($i=0; $i < count($this->rating); $i++)
        {
            $averageRating += $this->rating[$i];
        }
        return $averageRating/count($this->rating);
    }


    public function setRating(float $rating): void //Set every rating in array
    {
        $this->rating[] = $rating;
    }
}
