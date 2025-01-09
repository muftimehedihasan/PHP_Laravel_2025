<!-- PHP Functions Practice Set

এই প্র্যাকটিস সেটটি Laravel এর জন্য প্রস্তুতি নিতে আপনাকে PHP তে ফাংশন সম্পর্কে গভীরভাবে দক্ষ করে তুলবে। এতে বিভিন্ন লেভেলের সমস্যা এবং কনসেপ্ট কভার করা হয়েছে।
1. Basic Function Concepts
Problem 1: Write a function to display a welcome message.

function welcome_message() {
    echo "Welcome to Laravel preparation!";
}
welcome_message();

Problem 2: Write a function to calculate the square of a number.

function square($num) {
    return $num * $num;
}
echo square(5); // Output: 25

2. Function Parameters
Problem 3: Write a function to find the larger of two numbers.

Input: $a = 5, $b = 8
Output: 8
Problem 4: Write a function that takes a name as a parameter and returns a greeting.

Input: "John"
Output: Hello, John!
3. Returning Values
Problem 5: Write a function that calculates the factorial of a number.

Input: 5
Output: 120
Problem 6: Write a function to convert Fahrenheit to Celsius.

Formula: (Fahrenheit - 32) * 5/9
Input: 98
Output: 36.67
4. Default Parameters
Problem 7: Write a function that calculates the area of a rectangle with default width and height as 1.

Input: width = 5, height = 10
Output: 50
5. Passing by Reference
Problem 8: Write a function to increment a value by 10 using pass-by-reference.

Input: $num = 5
Output: 15
6. Variable-Length Arguments
Problem 9: Write a function to calculate the sum of an unknown number of arguments.

Input: 1, 2, 3, 4
Output: 10
7. Anonymous Functions and Closures
Problem 10: Write an anonymous function to multiply two numbers and assign it to a variable.

Input: 4, 5
Output: 20
8. Recursive Functions
Problem 11: Write a recursive function to calculate the Fibonacci series up to a given number.

Input: 6
Output: 0, 1, 1, 2, 3, 5
9. Arrow Functions (PHP 7.4+)
Problem 12: Write an arrow function to check if a number is even or odd.

Input: 7
Output: Odd
10. Error Handling in Functions
Problem 13: Write a function to divide two numbers and handle division by zero using error handling.

Input: 10, 0
Output: Cannot divide by zero!
11. Built-in Functions
Problem 14: Write a function that uses PHP's string functions to reverse a string.

Input: "Laravel"
Output: "levaraL"
Problem 15: Write a function to filter even numbers from an array using PHP's array_filter.

Input: [1, 2, 3, 4, 5]
Output: [2, 4]
12. Higher-Order Functions
Problem 16: Write a function that takes another function as an argument and applies it to a list of numbers.

Input: A function to square numbers and an array [1, 2, 3].
Output: [1, 4, 9]
13. Practical Applications
Problem 17: Write a function to generate a unique referral code based on a user's username.

Input: "john_doe"
Output: john_doe_123456
Problem 18: Write a function to sanitize user inputs for special characters.

Input: "Hello <b>World</b>!"
Output: "Hello World!"
14. Advanced Topics
Problem 19: Write a function to calculate the number of days between two dates.

Input: 2025-01-01, 2025-01-09
Output: 8
Problem 20: Write a function to paginate an array of items.

Input: Array of 100 items, page = 2, items per page = 10
Output: Items 11-20
Practice Strategy

    Start Simple: Begin with basic functions to ensure a solid foundation.
    Incremental Progress: Move to intermediate problems involving parameters, return values, and error handling.
    Explore Laravel Integration: Relate these problems to real-world scenarios in Laravel (e.g., calculating totals, filtering data, sanitizing inputs).
    Review Frequently: Revisit concepts and solve variations of the problems.

Need any specific example explained or solved? Let me know! 😊 -->
