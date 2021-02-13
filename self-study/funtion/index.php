<?php
function OutputHeader($print){
    echo "$print";
    echo "<br>";
}
OutputHeader("Built in Funtion :- ''strlen'' is the  built in funtion which sum the total string of this line and it will count the spaces");
// built in function
$a="my name is rikta";
echo strlen("$a"); //here "strlen" is built in funtion which can show the total string length 
echo "<br>";
echo "<br>";
// user define funtion
OutputHeader("User Define Funtion:-");
function myName($a){
    echo "$a Akter";
    echo "</br>";
}
myName("Rikta");
myName("Rikta");

function sum($a ,$b){
    $c=$a+$b;
    echo $c;
    echo "<br>";
}
sum(22,99);
?>