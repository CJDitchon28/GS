
<?php
include_once("functions.php");
//variables
$text="Hello";
$word="World";
$number= 13;
$float=1.2;
$boolean=true;

var_dump($text); 
echo "<br/>";
var_dump($number);
echo "<br/>";
echo $text." ". $word;
echo "<br/>";
echo "PHP Tutorial";
echo "<br/>";
echo strlen($text);
echo "<br/>";

$newVar = str_replace(" ","",$text);
echo strlen($newVar);
echo "<br/>";

echo " uppercase text";
echo "<br/>";
echo strtoupper($text);
echo "<br/>";

echo"constant";
echo "<br/>";
define("PI", 3.1416);
echo PI;

echo "<br/>";

$x=1;
$y = "1";
if($x===$y){
    echo "True";
}else{
    echo "False";
}
echo "<br/>";



// Array
$fruits = array( "mango","apple","banana");
$length = count($fruits);
print_r($fruits); //print array

echo "<br/>";

for($x = 0;$x< $length;$x++){
    echo $fruits[$x];
    echo "<br/>";
}
//Date and Time
echo date_default_timezone_set('Asia/Manila');
echo date('Y-m-d h:i:s a');
echo "<br/>";
echo date_default_timezone_get();
echo "<br/>";

//call the function
// displayText();
// echo "<br/>";

//add function
function add($x,$y){
    return $x + $y;
}
echo add(3,4);


?>