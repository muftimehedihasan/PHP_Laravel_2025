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
<!-- //   echo "The height is : $minheight <br>"; -->
// }

// setHeight(350);
// setHeight(); // will use the default value of 50
// setHeight(135);
// setHeight(80);

// PHP Default Argument Value

// The following example shows how to use a default parameter. If we call the function setHeight() without arguments it takes the default value as argument:
// Example

// function setHeight($minheight = 50) {
<!-- //   echo "The height is : $minheight <br>"; -->
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

<!-- // echo "5 + 10 = " . sum(5, 10) . "<br>";
// echo "7 + 13 = " . sum(7, 13) . "<br>";
// echo "2 + 4 = " . sum(2, 4); -->


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


<!-- রিটার্ন ভ্যালু:

রিটার্ন ভ্যালু হলো ফাংশনের আউটপুট ডেটা, যা ফাংশন সম্পন্ন হওয়ার পর প্রোগ্রামের অন্য অংশে ব্যবহার করা যায়। এটি ফাংশনের কাজের ফলাফলকে বহির্বিশ্বে পাঠানোর মাধ্যম হিসেবে কাজ করে।
কেন রিটার্ন ভ্যালু গুরুত্বপূর্ণ?

    ডেটা প্রসেসিং:
    ফাংশনের মাধ্যমে গণনা বা প্রসেসিং করা ডেটা বাইরে ব্যবহার করার জন্য প্রয়োজন।
    ডাইনামিক ফাংশন:
    রিটার্ন ভ্যালু ফাংশনকে আরও নমনীয় এবং বহুমুখী করে তোলে।
    কোড রিইউজ (Reuse):
    একই ফাংশনের রিটার্ন ভ্যালু বিভিন্ন কাজে ব্যবহার করা যায়।

কীভাবে রিটার্ন ভ্যালু কাজ করে?

    ফাংশনের মধ্যে return স্টেটমেন্ট ব্যবহার করা হয়।
    return স্টেটমেন্টের মাধ্যমে ডেটা বা ভ্যালু প্রোগ্রামের বাইরের অংশে পাঠানো হয়।
    রিটার্ন করা ডেটা অন্য কোনো ভেরিয়েবলে সংরক্ষণ করা যায় অথবা সরাসরি ব্যবহার করা যায়।

উদাহরণ:
১. একটি সাধারণ উদাহরণ


function square($number) {
    return $number * $number; // রিটার্ন ভ্যালু


$result = square(4); // রিটার্ন ভ্যালুটি $result-এ সংরক্ষণ করা হয়েছে
echo "The square of 4 is: $result"; // আউটপুট: The square of 4 is: 16


ব্যাখ্যা:

    ফাংশনটি একটি সংখ্যা গ্রহণ করে তার বর্গফল রিটার্ন করে।
    square(4) কল করলে রিটার্ন ভ্যালু 16 পাওয়া যায়, যা $result-এ সংরক্ষণ করা হয়েছে।

২. রিটার্ন ভ্যালু সরাসরি ব্যবহার


function sum($a, $b) {
    return $a + $b; // রিটার্ন ভ্যালু


echo "The sum of 10 and 20 is: " . sum(10, 20); // আউটপুট: The sum of 10 and 20 is: 30


ব্যাখ্যা:

    ফাংশনটি দুইটি সংখ্যা যোগ করে রিটার্ন করে।
    রিটার্ন ভ্যালুটি সরাসরি echo এর মধ্যে ব্যবহার করা হয়েছে।

৩. রিটার্ন ভ্যালু থেকে অন্য ফাংশন কল


function multiply($x, $y) {
    return $x * $y;
}

function add_and_multiply($a, $b, $c) {
    $sum = $a + $b; // যোগফল
    return multiply($sum, $c); // রিটার্ন ভ্যালু হিসেবে multiply() ফাংশনের আউটপুট
}

echo add_and_multiply(2, 3, 4); // আউটপুট: 20
-->
<!-- 
<script>
function getUser() {
    return {
        name: "Alice",
        greet: function() {
            console.log(`Hello, ${this.name}!`);
        }
    };
}

// Call greet() directly on the returned object
getUser().greet();


</script> -->

<!-- 
function getUser() {
    return [
        "name" => "Alice",
        "greet" => function() {
            echo "Hello, Alice!";
        }
    ];
}

// Call the greet function directly
$user = getUser();
$greet = $user["greet"];
$greet(); // Outputs: Hello, Alice! -->


<!-- উপসংহার:

রিটার্ন ভ্যালু ফাংশনকে আরও কার্যকর এবং পুনঃব্যবহারযোগ্য করে তোলে। এটি প্রোগ্রামের বিভিন্ন অংশে ডেটা ট্রান্সফার এবং লজিক তৈরি করার জন্য অপরিহার্য। রিটার্ন ভ্যালু সঠিকভাবে ব্যবহার করলে কোডের গুণগত মান এবং কার্যকারিতা অনেক গুণ বৃদ্ধি পায়। 😊 -->

<!-- PHP তে void কী?

void হল একটি ফাংশনের রিটার্ন টাইপ যা বোঝায় যে ফাংশনটি কোনো রিটার্ন ভ্যালু প্রদান করে না। এটি PHP 7.1 থেকে রিটার্ন টাইপ ডিক্লেয়ারেশনের একটি অংশ হিসেবে যোগ করা হয়েছে।

void টাইপ ব্যবহার করলে নিশ্চিত করা যায় যে ফাংশনটি কোনো ডেটা রিটার্ন করবে না। যদি ফাংশনটি রিটার্ন করার চেষ্টা করে, তাহলে PHP একটি Fatal Error ছুঁড়ে দেয়।
void এর বৈশিষ্ট্য:

    ফাংশনটি কোনো রিটার্ন ভ্যালু প্রদান করবে না।
    ফাংশন থেকে return; স্টেটমেন্ট ব্যবহার করা যেতে পারে, তবে return এর পরে কোনো ভ্যালু থাকতে পারবে না।
    এটি প্রধানত ফাংশনের সঠিক ব্যবহার নিশ্চিত করার জন্য টাইপ সেফটি প্রয়োগ করে।

কীভাবে void কাজ করে?
উদাহরণ:


function print_message(): void {
    echo "Hello, World!";
}

print_message(); // আউটপুট: Hello, World!


ব্যাখ্যা:

    print_message() ফাংশনটি কিছু প্রিন্ট করে, কিন্তু কোনো রিটার্ন ভ্যালু দেয় না।
    void ডিক্লেয়ারেশন নিশ্চিত করে যে ফাংশনটি কিছু রিটার্ন করবে না।

কোনো রিটার্ন ভ্যালু ব্যবহার করার চেষ্টা:


function invalid_function(): void {
    return 10; // এটি একটি ভুল

invalid_function(); // Fatal Error: A void function must not return a value
?>

ব্যাখ্যা:

    void ফাংশনে return স্টেটমেন্টের পরে কোনো মান দেওয়া যায় না।
    এটি একটি ফ্যাটাল এরর তৈরি করবে।

যেখানে void ব্যবহার করবেন:

    ফাংশন যেখানে কেবল কিছু কাজ সম্পন্ন করে, কিন্তু রিটার্ন ভ্যালু প্রয়োজন হয় না।
    যেমন:
        ডাটাবেসে ডেটা সংরক্ষণ করা।
        প্রিন্ট বা লগিং অপারেশন সম্পাদন করা।
        কনফিগারেশন সেটিংস পরিবর্তন করা।

উদাহরণ:


function save_to_database($data): void {
    // ডেটা ডাটাবেসে সংরক্ষণ করা
    echo "Data saved: " . $data;


save_to_database("Example Data");
// আউটপুট: Data saved: Example Data

void ব্যবহার না করলে কী হতে পারে?

যদি টাইপ ডিক্লেয়ারেশন void ব্যবহার করা না হয়, তবে ফাংশনটি ভুলভাবে কিছু রিটার্ন করতে পারে, যা পরবর্তীতে সমস্যার কারণ হতে পারে। টাইপ সেফটি বজায় রাখতে void ব্যবহারের অভ্যাস ভালো।
উপসংহার:

    void ডিক্লেয়ারেশন ফাংশনের টাইপ সেফটি নিশ্চিত করার একটি উপায়।
    এটি প্রোগ্রামের রিডেবিলিটি ও নির্ভুলতা বাড়ায়।
    শুধুমাত্র তখনই ব্যবহার করুন, যখন নিশ্চিত যে ফাংশনটি কোনো রিটার্ন ভ্যালু দেবে না।

Tip: যদি আপনার ফাংশন রিটার্ন ভ্যালু না দেয়, তবে কোড আরও স্পষ্ট করতে void ব্যবহার করুন। 😊 -->


