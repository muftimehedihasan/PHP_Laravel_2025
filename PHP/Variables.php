// Variable are "containers" for storing information.

<?php 
$x = 5;
$y = "John";
echo $x;
echo "<br>";
echo $y;
?>

<!-- PHP supports the following data types:

    String
    Integer
    Float (floating point numbers - also called double)
    Boolean
    Array
    Object
    NULL
    Resource -->

<!-- 
    Get the Type

To get the data type of a variable, use the var_dump() function. -->

<!-- Example

The var_dump() function returns the data type and the value: -->

<?php
$x = 5;
var_dump($x);
