<!DOCTYPE html>
<head>
    <title>for loop</title>
</head>
<body>

<?php

/*for (init counter; test counter; increment counter) {
    code to be executed for each iteration;
  }
*/
 
for ($x = 0; $x <= 10; $x++) {
  echo "The number is: " . $x ." <br>";
} 

echo "<br>-----------------------------<br>";

for ($i=10; $i >=0; $i--){
    echo "The number is: " . $i ." <br>";
}

echo "<br>-----------------------------<br>";

for ($j=0; $j <= 10; $j++){
    echo "<br>" . $j  ;
    if($j % 2 == 0) {
        echo  " is even " ; 
        continue;    
        }
}

echo "<br>-----------------------------<br>";

for ($k=0; $k <= 10; $k++){
    if($k % 2 != 0) {
        echo $k .  " is odd " . "<br>" ;   
        }
}

echo "<br>-----------------------------<br>";

for ($y = 0; $y < 10; $y++) {
    if ($y == 4) {
      break;
    }
    echo " The number is : " . $y . "<br>";
  }




?>
    
</body>
</html>