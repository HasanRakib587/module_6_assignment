<?php

$strings = ["Hello", "World", "PHP", "Programming"];

function vowelCount(string $word): int
{
    $count = 0;
    $vowelArray = ['a','e','i','o','u'];
    $wordArray = str_split(strtolower($word));    

    foreach($wordArray as $word){
        if(in_array($word, $vowelArray)){
            $count++;
        }
    }

    return $count;
}

function countVowels(string $word): int
{
    $count = 0;    
    $vowelArray = ['a','e','i','o','u'];
    foreach($vowelArray as $vowel){
        if(str_contains($word, $vowel)){
            $count++;
        }
    }
    return $count;
}

foreach($strings as $word){
    echo "Original String: " . $word .","." Vowel Count: " . countVowels($word) . "," . " Reversed String: " . strrev($word) . "\n";
}