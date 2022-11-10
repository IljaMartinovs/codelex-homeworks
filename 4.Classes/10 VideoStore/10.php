<?php

require_once "Video.php";
require_once "VideoStore.php";

//Made a video
$videos =  [
    $video1 = new Video("The Matrix"),
    $video2 = new Video("Godfather II"),
    $video3 = new Video("Star Wars Episode IV: A New Hope")
] ;

//Add to store
$store = new VideoStore();
$store->addVideo($video1);
$store->addVideo($video2);
$store->addVideo($video3);

//Give rating
$video1->setRating(1);
$video2->setRating(2);
$video3->setRating(3);

//Rent The Matrix
$store->rentVideo(array_search($video1,$videos));
//Give back The Matrix
$store->returnVideo(array_search($video1,$videos));

//Rent Godfather II
$store->rentVideo(array_search($video2,$videos));
//Check if we have this movie in out store
echo $store->checkOutVideo($video2->getTitle());
//Show inventory list
$store->listInventory();

//Return videos
$store->returnVideo(array_search($video2,$videos));
$store->returnVideo(array_search($video3,$videos));
//Show inventory list
$store->listInventory();
