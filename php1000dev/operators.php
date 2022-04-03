
<?php

//Arithmetic operators
$x = 5 ;  
$y = 10 ; 

echo $x + $y . "<br>" ; //addition
echo $y - $x . "<br>" ; //substraction
echo $x * $y . "<br>" ; //multiply
echo $y / $x . "<br>" ; //divide
echo $y % $x . "<br>" ; //Modulus
echo $y ** $x ;  // power

echo "<br>";

//Assignment Operators
$z = 10 ;
$v = 7 ;

$z += 20 ; //addition
echo $z . "<br>" ; 
$v -= 3 ; //substraction
echo $v . "<br>" ; 
$z *= 3 ; //Multiplication
echo $z . "<br>"; 
$v /= 4 ; // Division
echo $v ."<br>";
$z %= 2 ; //Modulus
echo $z ; 

 echo "<br>";

 //String Operators
$fname = "Osama";
$lname = "Hejazi";
$fullname = $fname . " " . $lname ; //Concatenation
echo $fullname . "<br>" ; 
$fullname .= " "."!!!!!" ;
echo $fullname ;

echo "<br>";

//
?>