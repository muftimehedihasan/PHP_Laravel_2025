<!-- Functions -->

<!-- The real power of PHP comes from its functions.

PHP has more than 1000 built-in functions, and in addition you can create your own custom functions.
PHP Built-in Functions

PHP has over 1000 built-in functions that can be called directly, from within a script, to perform a specific task.

Please check out our PHP reference for a complete overview of the PHP built-in functions.
PHP User Defined Functions

Besides the built-in PHP functions, it is possible to create your own functions.

    A function is a block of statements that can be used repeatedly in a program.
    A function will not execute automatically when a page loads.
    A function will be executed by a call to the function. -->

<!-- Create a Function

A user-defined function declaration starts with the keyword function, followed by the name of the function: -->

<!-- function myMessage() {
  echo "Hello world!";
}

myMessage(); -->

<?php

// function name($name1)
// {
//     echo "$name1";
// }

// name("Mehedi");
// name("Hasan");
// name("H");


// function name2($name, $n)
// {
//     echo "$name, $n";
// }

// name2("name", "k");


// PHP Default Argument Value

// The following example shows how to use a default parameter. If we call the function setHeight() without arguments it takes the default value as argument:
// Example

// function setHeight($minheight = 50) {
//   echo "The height is : $minheight <br>";
// }

// setHeight(350);
// setHeight(); // will use the default value of 50
// setHeight(135);
// setHeight(80);

// PHP Default Argument Value

// The following example shows how to use a default parameter. If we call the function setHeight() without arguments it takes the default value as argument:
// Example

// function setHeight($minheight = 50) {
//   echo "The height is : $minheight <br>";
// }

// setHeight(350);
// setHeight(); // will use the default value of 50
// setHeight(135);
// setHeight(80);


// PHP Functions - Returning values

// To let a function return a value, use the return statement:
// Example

// function sum($x, $y) {
//   $z = $x + $y;
//   return $z;
// }

// echo "5 + 10 = " . sum(5, 10) . "<br>";
// echo "7 + 13 = " . sum(7, 13) . "<br>";
// echo "2 + 4 = " . sum(2, 4);


// Passing Arguments by Reference

// In PHP, arguments are usually passed by value, which means that a copy of the value is used in the function and the variable that was passed into the function cannot be changed.

// When a function argument is passed by reference, changes to the argument also change the variable that was passed in. To turn a function argument into a reference, the & operator is used:
// Example

// Use a pass-by-reference argument to update a variable:

// function add_five(&$value) {
//   $value += 5;
// }

// $num = 2;
// add_five($num);
// echo $num;
