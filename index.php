<?php
    // Define variables for name, age, and marital status
    $name = "Alice";
    $age = 25;
    $isMarried = false;

    // Define a constant value for PI
    define("PI", 3.14159);

    // Create an array of people with their names and ages
    $people = array(
    array("name" => "Alice", "age" => 25),
    array("name" => "Bob", "age" => 30),
    array("name" => "Charlie", "age" => 35)
    );

    // Check if the person is married or not and print the appropriate message
    if ($isMarried) {
    echo "$name is married.";
    } else {
    echo "$name is not married.";
    }

    // Loop through the people array and print their names and ages
    $i = 0;
    while ($i < count($people)) {
    $name = $people[$i]["name"];
    $age = $people[$i]["age"];
    echo " $name is $age years old.";
    $i++;
    }

    // Print the odd numbers from 1 to 10 using a for loop
    echo " Odd numbers from 1 to 10: ";
    for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 != 0) {
        echo "$i ";
    }
    }

    // Create an array of colors and print them using a foreach loop
    $colors = array("red", "green", "blue");
    echo " Colors: ";
    foreach ($colors as $color) {
    echo "$color ";
    }

    // Loop through the people array again and print their names and ages using a foreach loop
    echo " People: ";
    foreach ($people as $person) {
    $name = $person["name"];
    $age = $person["age"];
    echo " $name is $age years old.";
    }

?>
