<!DOCTYPE html>
<head>

    <title>array</title>

</head>

<body>

    <?php

    //indexed arrays 

$cars = array("Volvo", "BMW", "Toyota"); 

echo "I like " . $cars[0] . " , " . $cars[1] . " and " . $cars[2] . " and has length of " . count($cars) . " . " ;

echo "<br>------------------------------------------------------------------------<br>";
 
for ($i=0; $i < count($cars); $i++){
    echo $i . " - " . $cars[$i] . "<br>";
}

echo "<br>------------------------------------------------------------------------<br>";

  //Associative arrays
  $age = array(
        "Peter" => 35,
        "Ben" => 37,
        "Joe" => 43 
    );

   echo " Peter is " . $age['Peter'] . " years old.";

   echo "<br>------------------------------------------------------------------------<br>";
     
   ?>
        <table border='2'>
                <tr>
                    <th> Name </th>
                    <th> Age </th>
    </tr>
    <?php
   foreach($age as $key => $value){
       echo "<tr><td>" . $key . "</td> <td>" . $value . "</td></tr>" ;
   }
   ?>
    </table>


    <?php

    echo "<br>------------------------------------------------------------------------<br>";


    //Multidimensional Arrays
    $car = array (
        array("Volvo", 22, 18),
        array("BMW", 15, 13),
        array("Saab", 5, 2),
        array("Land Rover", 17, 15)
      );

    echo $car[0][0] . " : In stock : " . $car[0][1] . ", sold : " . $car[0][2] . "<br>";
    echo $car[1][0] . " : In stock : " . $car[1][1] . ", sold : " . $car[1][2] . "<br>";
    echo $car[2][0] . " : In stock : " . $car[2][1] . ", sold : " . $car[2][2] . "<br>";
    echo $car[3][0] . " : In stock : " . $car[3][1] . ", sold : " . $car[3][2] . "<br>";

    echo "<br>------------------------------------------------------------------------<br>";

    $recipe = array (
        array("bread", 1 , 2),
        array("coffee", 4 , 2),
        array("milk", 3 , 1),
        array("chocolate", 5, 3)
      );

    for($r=0; $r<count($recipe); $r++){
        echo "<p><b> List  $r </b></p>";
        echo "<ul>";
    for($f=0; $f<3; $f++)  {
        echo "<li>".$recipe[$r][$f] ."</li>";
    }  
    echo "</ul>";
    }

    ?>

    
    </body>
</html>