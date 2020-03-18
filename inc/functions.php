<?php

// PHP - Random Quote Generator
// Create the Multidimensional array of quote elements and name it quotes
// Each inner array element should be an associative array
// this array resides in datastore.php

include 'datastore.php';

// Create the getRandomQuote function and name it getRandomQuote
// Take in an multi-demensional array and return a random array element

function getRandomQuote($array) {   // argument needs to be the multi-demensional array defined in datastore.php
    
    // local random index value
    // rand is inclusive so array size - 1 will prevent index out of bounds error
    // use count() to get the number of array elements (i.e. independent nested quote arrays)
    
    $randomIndex = rand(0,(count($array) - 1));
    return $array[$randomIndex];    // return the element of the random index
}

// Create the printQuote funtion and name it printQuote
// Function calls getRandomQuote to get a random quote object from the $quotes array
// and uses conditionals to output individual quote elements (e.g. quote, source, year, etc.)

function printQuote($array) {   // argument needs to be the multi-demensional array defined in datastore.php
    
    // Local random quote object
    $randomQuote = getRandomQuote($array);

    // String output layout taken from https://teamtreehouse.com/projects/random-quote-generator-in-php
    
    // Output the quote with appropriate HTML tags and attributes
    echo("<p class=\"quote\">" . $randomQuote["quote"] . "\n");    
    
    // Output the source with the appropriate HTML tags and attributes
    echo("<p class=\"source\">" . $randomQuote["source"]);

    // If citation exists, output it
    if(isset($randomQuote["citation"])) {
        echo("<span class=\"citation\">" . $randomQuote["citation"] . "</span>");
    }

    // If year exists, output it
    if(isset($randomQuote["year"])) {
        echo("<span class=\"year\">" . $randomQuote["year"] . "</span>");
    }

    echo("</p>");

    // Loop through tags and display them using the source css class for generic formating
    echo("<p>");
    foreach($randomQuote["tags"] as $tag) {
        echo(" " . $tag . " ");
    }
    echo("</p>");
}

// Create a function randomColor to generate a random color (using rgb 0 - 255)
// Will be used to generate random background colors on each click
function randomColor() {
    $randomRGB = rand(0, 255);
    return $randomRGB;
}
?>
