<?php 
function test(){
	$var=10;
	echo "variable inside the function $var";
	echo "<br>";
}
test();


echo"<br>";
?>


<?php
$x =5;
$y=6;

function test1(){
	global $x,$y;
	$y=$x+$y;
}
test1();


echo "$y";
echo"<br>";
?>



<?php
$x =5;
$y=6;

function test2(){
	$GLOBALS['y']=$GLOBALS['x'] + $GLOBALS['y'];
	
}
test2();


echo "$y";
echo"<br>";

?>



 <?php
function myTest() {
     $x = 0;
    echo $x;
    $x++;
}

myTest();
myTest();
myTest();
?> 



