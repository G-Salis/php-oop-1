<!-- // create un file `index.php` in cui:
- è definita una **classe ‘Movie’**
   => all’interno della classe sono dichiarate delle **variabili d’istanza**
   => all’interno della classe è definito **un costruttore**
   => all’interno della classe è definito almeno **un metodo**
- vengono **istanziati almeno due oggetti ‘Movie’** e stampati a schermo i valori delle relative proprietà
- BONUS: creare un file “database” contenente una lista di film che poi vengono istanziati in un ciclo -->


<?php
class Movie{
  public $title;
  public $duration;
  public $genre;
  public $vote;

  // function __construct($_title, $_duration, $_genre)
  // {
  //   $this->title = $_title;
  //   $this->duration = $_duration;
  //   $this->genre = $_genre;
  // }
}
?>