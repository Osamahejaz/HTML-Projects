<?php

$age = 10 ;

if($age==18 || $age>=18){
    echo "you are allowed to get the lecience" ; 
}
else {
  echo "you are not allowed to get the liceence";
}

echo "<br>";
 
$languages = "english" ; 

if( $languages == "arabic" || $languages == "english" || $languages == "french"){ // or
    echo " you are : ";
    if($languages=="arabic"){
        echo "you are arabian ";
    }
    else if($languages=="english"){
        echo " you are english";
    }
    else {
    echo "you are french";
    }
   } 
    else {
            echo "sorry !! where are you from ?";
        }



?>