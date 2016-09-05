<?php

$firstName = "Nick";
$lastName = "Gover";


$myArray=array("pizza", "chocolate", "coffee");

print_r($myArray); 

echo "<br /><br />";

echo $myArray[0];

echo "<br /><br />";
echo "<br /><br />";

$thirdArray=array(

    "France" => "French",
    "USA" => "English",
    "Germany" => "German"
);

print_r($thirdArray);

    $anotherArray[]="salad";

    echo "<br /><br />";

    print_r($anotherArray);

    echo "<br /><br />";

    unset($thirdArray["Germany"]);

    print_r($thirdArray);

    echo "<br /><br />";

    unset($firstName);

    $number = 1;
    if ($number == 1) {
        # code...
        echo "True";
    } else {
        echo "False";
    }


    for ($i=1; $i<=10; $i++) {

        echo $i."<br />";
    }


?>