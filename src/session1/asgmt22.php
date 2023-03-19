<?php

$countries = array(
    "Poland" => "Polish",
    "Germany" => "German",
    "France" => "French",
    "Italy" => "Italian",
    "Russia" => "Russian",
    "Japan" => "Japanese",
    "India" => "Indian",
    "Brazil" => "Brazilian",
    "Canada" => "Canadian",
    "Australia" => "Australian"
);

$userInput = "Canada";

if (array_key_exists($userInput, $countries)) {
    $nationality = $countries[$userInput];
    echo "You are of $nationality nationality.";
} else {
    echo "I don't know what nationality you are.";
}
?>