<?php

// PHP - Random Quote Generator
// Create the Multidimensional array of quote elements and name it quotes
// Each inner array element should be an associative array
// this array resides in datastore.php
include 'datastore.php';

// Create the getRandomQuote function and name it getRandomQuote
// Take in an multi-demensional array and return a random array element
function getRandomQuote($array) {
    // local random index value
    // rand is inclusive so array size - 1 will prevent index out of bounds error
    // use count() to get the number of array elements (i.e. independent nested quote arrays)
    $randomIndex = rand(0,(count($array) - 1));
    return $array[$randomIndex];    // return the element of the random index
}

// Create the printQuote funtion and name it printQuote

?>