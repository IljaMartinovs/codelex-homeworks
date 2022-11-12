<?php
require_once "Video.php";

$movies = [
    $matrix = new Video("The Matrix"),
    $godFather = new Video("Godfather II"),
    $starWars = new Video("Star Wars Episode IV: A New Hope")
];

$startedMovies[] = $movies;

$matrix->setRating(5.5);
$godFather->setRating(10);
$starWars->setRating(20);

$store = new VideoStore();
$store->addVideo($matrix);
$store->addVideo($godFather);
$store->addVideo($starWars);

echo "Choose the operation you want to perform \n";
echo "Choose 0 for EXIT\n";
echo "Choose 1 to add video to the store\n";
echo "Choose 2 to rent video (as user)\n";
echo "Choose 3 to return video (as user)\n";
echo "Choose 4 to list inventory\n";
echo "Choose 5 to list not returned movies\n";

        while (true) {
            $command = (int)readline();

            switch ($command) {
                case 0:
                    echo "Bye!";
                    die;
                case 1:
                    $store->addVideo(new Video(readline("Enter video to add : ")));
                    break;
                case 2:
                    $store->rentVideo();
                    break;
                case 3:
                    $store->returnVideo(readline("Enter video to return by title : "));
                    break;
                case 4:
                    $store->listInventory();
                    break;
                case 5:
                    $store->getNotReturnedMovies();
                    break;
                default:
                    echo "Sorry, I don't understand you..";
            }
        }
