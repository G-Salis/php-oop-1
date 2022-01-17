<?php
require_once __DIR__."/movie.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Movie</title>
</head>
<body style="background-color: lightblue;">

<?php

  $new_movie = new Movie("Fantozzi", "1h 40m", "Comico", "8");
  // $new_movie->title = "Fantozzi";
  // $new_movie->duration = "1h 40m";
  // $new_movie->genre = "Comico";
  // $new_movie->vote = "8";
 
?>

<ul style="text-align: center; list-style: none;">
  <li>Titolo: <?php echo $new_movie->title?></li>
  <li>Durata: <?php echo $new_movie->duration?></li>
  <li>Genere: <?php echo $new_movie->genre?></li>
  <li>Voto: <?php echo $new_movie->vote?></li>
</ul>

</body>
</html>