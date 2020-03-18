<?php
// Include the funcitons file- this file includes datastore array, so no need
// to include it here.
include 'inc/functions.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <!-- refresh meta data can tell the page to refresh after a set number of seconds 
  (https://stackoverflow.com/questions/11497611/php-auto-refreshing-page/11497617)
  use php here to echo the meta refresh -->
  <!-- set to refresh after 15 seconds -->
  <?php echo("<meta http-equiv=\"refresh\" content=\"15\" > "); ?>
  <title>Random Quotes</title>
  <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/styles.css">
</head>
<?php echo("<body style=\"background-color:rgb(" . randomColor() . "," . randomColor() . "," . randomColor() . ");\">"); ?>
  <div class="container">
    <div id="quote-box">
    <!-- Call the printQuote function to display a random quote object -->
    <?php printQuote($quotes); ?>
    </div>
    <button id="loadQuote" onclick="window.location.reload(true)" >Show another quote</button>
  </div>
</body>
</html>