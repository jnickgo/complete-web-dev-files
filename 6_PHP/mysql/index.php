<?php

    // Password encoding

    $salt = "i3salk0av3Qdfa9af";
    $userId = "01B";
    $userPassword = "my&0adf32";

    echo md5($salt.$userPassword);

    
    // create a database connection.
    $hostname = "dev.learning.nickgover.com";
    $username = "justauser";
    $password = "soUiu0dW";
    $database = "phpcourse";

    $dbLink = mysqli_connect("dev.learning.nickgover.com", "justauser", "soUiu0dW", "phpcourse");

    if (mysqli_connect_error()) {
        
        // Kill the application.
        die("Couldn't connect to database.");
    }

    // Column variables
    $id = 4;
    $pokedexId = "004";
    $name = "Charmander";
    $types = "Fire";

    // insert statement
    //$queryInsertStatement = "INSERT INTO `pokemon` (`id`, `pokedex_id`, `name` `types`) VALUES('$id', '$pokedexId', '$name', '$types')";
    //  mysqli_query($dbLink, $queryInsertStatement);
        
    // update statement
    //$queryUpdateStatement = "UPDATE `pokemon` SET `types`='$types' WHERE `id`=3 LIMIT 1";
    //mysqli_query($dbLink, $queryUpdateStatement);

    // select statement
    $querySelectStatement = "SELECT * FROM pokemon";

    if ($resultSet = mysqli_query($dbLink, $querySelectStatement)) {

        // print out each row
        while ($row = mysqli_fetch_array($resultSet)) {
        //    print_r($row);
        }

    } else {

        echo "Query failed.";
    }
    
?>