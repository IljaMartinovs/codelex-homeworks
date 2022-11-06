<?php
echo "Enter first word : ";
$word1 = readline();
echo "Enter second word : ";
$word2 = readline();
$len = (30-strlen($word1)-strlen($word2));

echo $word1;
for($i=0; $i < $len; $i++){
    echo ".";
}
echo $word2;
