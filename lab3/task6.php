<?php
$array = [45,51,74,13,48];
$searchElement = 74; 
$found = false; 


foreach ($array as $element) {
    
    if ($element == $searchElement) {
        $found = true;
        break; 
    }
}


if ($found) {
    echo "Element $searchElement found in the array.";
} else {
    echo "Element $searchElement not found in the array.";
}
?>
