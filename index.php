<?php 

echo "Welcome to php editor<br>"; 
echo "I'm about to learn PHP!<br>"; 
echo "Easy php editor<br>"; 

$foods = array("Banana", "Guava", "SlimShady");


// array_push($foods, "Pineapple"); // Adds at the end
// array_pop($foods); // Removes last element

$foods = array_reverse($foods);

foreach ($foods as $food) {
    echo $food . "<br>";
}

?>
