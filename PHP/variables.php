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


// PHP Variables Scope

// In PHP, variables can be declared anywhere in the script.

// The scope of a variable is the part of the script where the variable can be referenced/used.

// PHP has three different variable scopes:

//     local
//     global
//     static

