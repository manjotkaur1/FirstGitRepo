<?php

$x=8765;
var_dump($x);
echo "<br>";
?>



<?php
$y=345.98;
var_dump($y);
echo "<br>";
?>

<?php 
$z=array("a","b","c");
var_dump($z);
echo "<br>";
?>



 <?php
class student {
    function student() {
        $this->model= "VW";
    }
}

// create an object
$my = new student();

// show object properties
echo $my->model;
?> 