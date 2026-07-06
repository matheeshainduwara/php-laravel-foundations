<?php
/*
Create:
$fruits = ["Apple", "Banana", "Orange"];

Perform these operations in order:

Display the total number of fruits.
Add "Mango" to the end.
Remove the first fruit.
Sort the array in ascending order.
Display the final array using print_r().
*/

$fruits = ["Apple", "Banana", "Orange"];

echo count($fruits)."<br>";
array_shift($fruits);
sort($fruits);
print_r($fruits);

/*
==========================================
             PHP ARRAY FUNCTIONS 
==========================================

1. count($array)
----------------
Returns the number of elements in an array.

Example:
$fruits = ["Apple", "Banana", "Orange"];
echo count($fruits);   // Output: 3


2. array_push($array, $value)
-----------------------------
Adds one or more elements to the END of an array.

Example:
array_push($fruits, "Mango");

Before:
["Apple", "Banana", "Orange"]

After:
["Apple", "Banana", "Orange", "Mango"]


3. array_pop($array)
--------------------
Removes the LAST element from an array.

Example:
array_pop($fruits);

Before:
["Apple", "Banana", "Orange"]

After:
["Apple", "Banana"]


4. array_unshift($array, $value)
--------------------------------
Adds one or more elements to the BEGINNING of an array.

Example:
array_unshift($fruits, "Mango");

Before:
["Apple", "Banana", "Orange"]

After:
["Mango", "Apple", "Banana", "Orange"]


5. array_shift($array)
----------------------
Removes the FIRST element from an array.

Example:
array_shift($fruits);

Before:
["Apple", "Banana", "Orange"]

After:
["Banana", "Orange"]


6. sort($array)
---------------
Sorts an array in ASCENDING order.

Example:
$numbers = [30, 10, 20];

sort($numbers);

Result:
[10, 20, 30]


7. rsort($array)
----------------
Sorts an array in DESCENDING order.

Example:
$numbers = [30, 10, 20];

rsort($numbers);

Result:
[30, 20, 10]


8. implode("separator", $array)
-------------------------------
Converts an array into a string.

Example:
$fruits = ["Apple", "Banana", "Orange"];

echo implode(", ", $fruits);

Output:
Apple, Banana, Orange


9. print_r($array)
------------------
Displays an array in a readable format.

Example:
print_r($fruits);


10. var_dump($array)
--------------------
Displays the array with data types and lengths.
Useful for debugging.

Example:
var_dump($fruits);

==========================================
        Most Important Functions ⭐⭐⭐
==========================================

count()
array_push()
array_pop()
array_shift()
array_unshift()
sort()
rsort()
implode()
print_r()
var_dump()

==========================================
*/