<!DOCTYPE html>
<head>
    <title>while loop</title>
</head>
<body>
<?php

/*while (condition is true) {
    code to be executed;
  } */

  $x = 1;
  while ($x<=10){
    echo "the number is : ". $x . "<br>";
     $x++ ;
  }

  echo "<br>------------------------<br>";

$y = 0;
 
while($y <= 100) {
  echo "The number is:" . $y ."<br>";
  $y +=10; 

}
?>  

</body>
</html>