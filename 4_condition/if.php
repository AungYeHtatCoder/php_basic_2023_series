<?php 
/*
// if - if statement
if(condition){
    // code to be executed if condition is true
}

// if statement - executes some code if one condition is true

*/
$age = 12;
if($age > 10)
{
 echo "You are an teenager";
}

echo "<br>";
// assignment operator
// = - assign value to a variable
// += - add value to a variable
// -= - subtract value from a variable
// *= - multiply value to a variable
// /= - divide value from a variable
// %= - modulus value from a variable
// .= - concatenate value to a variable
// **= - exponent value to a variable

$a = 6;
$b = $a;
echo $b;

echo "<br>";
$c = 4;
$d = 9;
$d += $c;
echo $d;

echo "<br>";
$e = 20;
$f = 100;
$f -= $e;
echo $f; 

echo "<br>";
$g = 5;
$h = 10;
$h *= $g;
echo $h;

// 
echo "<br>";
$i = 100;
$j = 100;
if($i == $j)
{
 echo "i is equal to j";
}

echo "<br>";
$k = 100;
$l = 1000;
if($k != $l)
{
 echo "k is not equal to l";
}
echo "<br>";
$m = 1000;
$n = 100;
if($m > $n)
{
 echo "m is greater than n";
}

echo "<br>";
if($n < $m)
{
 echo "n is less than m";
}
echo "<br>";
$o = 100;
$p = 100;
if($o >= $p)
{
 echo "o is greater than or equal to p";
}
echo "<br>";
if($p <= $o)
{
 echo "p is less than or equal to o";
}

echo "<br>";
$x=1;
echo $x++;