# PHP Basics – Complete Practice Notes

<?php

// =====================================================
// 1. COMMENTS IN PHP
// =====================================================

// Single-line comment
// echo 200;
// echo "PHP Programming";

/*
    Multi-line comment
    This is used to write
    comments on multiple lines.
*/


// =====================================================
// 2. VARIABLES IN PHP
// =====================================================

// Variables store values.
// PHP variable names are case-sensitive.


$username = "Kunjal";
$userName = "Aman";
$USERNAME = "KAVYA";

echo $username;
echo $userName;
echo $USERNAME;

echo "Hello, my name is $username";

// Different data types
$age = 25;                  // Integer
$price = 99.50;             // Float
$name = "Kunjal";           // String
$isEligible = true;         // Boolean

// Display variable values
echo $age;
echo $price;
echo $name;

// Display data type and value
var_dump($age);

// Naming conventions
$existingUser = "Kunjal";   // camelCase
$existing_user = "Kunjal";  // snake_case

// Variable naming rules:
// 1. A variable must start with $.
// 2. A variable name cannot start with a number.
// 3. A variable name can contain letters, numbers and underscores.
// 4. Variable names are case-sensitive.



// =====================================================
// 3. ASCII VALUES AND TYPE CONVERSION FUNCTIONS
// =====================================================


$number = 57;

// chr() converts an ASCII number into a character.
$character = chr(57);
echo $character; // Output: 9

// ord() converts a character into its ASCII value.
echo ord("A"); // Output: 65

// Type casting example
$gender = (string) "F";
echo $gender;

// To display a variable's data type
var_dump($number);



// =====================================================
// 4. PRINT FULL NAME, CITY AND QUALIFICATION
// =====================================================


$fullName = "Kunjal Sandeep Salvi";
$city = "Virar";
$qualification = "B.Sc. IT";

echo "Full Name: $fullName";
echo "\nCity: $city";
echo "\nQualification: $qualification";



// =====================================================
// 5. TYPE CASTING: EXPLICIT CONVERSION
// =====================================================

// Type casting changes a value's data type manually.


$number = 289;
var_dump($number); // Integer

// Integer to string
$stringNumber = (string) $number;
var_dump($stringNumber);

// String to integer
$stringValue = "400102";
$integerValue = (int) $stringValue;
var_dump($integerValue);

// String to float
$wholeNumber = "56";
$floatValue = (float) $wholeNumber;
var_dump($floatValue);

// Integer or string to boolean
$number = "0";
$booleanValue = (bool) $number;
var_dump($booleanValue); // false

// Boolean to integer
$booleanValue = true;
$integerValue = (int) $booleanValue;
var_dump($integerValue); // 1



// =====================================================
// 6. IMPLICIT TYPE CONVERSION
// =====================================================

// PHP automatically converts types when needed.


$number = "300.54";
$result = $number + 27;

echo $result;       // Output: 327.54
var_dump($result);  // Float
echo gettype($result);


// =====================================================
// 7. CHECKING DATA TYPES
// =====================================================


var_dump(is_int(15));        // true
var_dump(is_float(15));      // false
var_dump(is_string("Hello"));// true
var_dump(is_bool(5));        // false



// =====================================================
// 8. ARITHMETIC OPERATORS
// =====================================================

// Operators: +, -, *, /, %, **


$num1 = 14;
$num2 = 2;

echo $num1 + $num2;  // Addition: 16
echo $num1 - $num2;  // Subtraction: 12
echo $num1 * $num2;  // Multiplication: 28
echo $num1 / $num2;  // Division: 7
echo $num1 % $num2;  // Modulus: 0
echo $num1 ** $num2; // Exponentiation: 196



// =====================================================
// 9. ASSIGNMENT OPERATORS
// =====================================================


$num1 = 14;

$num1 += 20; // Same as $num1 = $num1 + 20
echo $num1;  // Output: 34

$num1 -= 5;
echo $num1;  // Output: 29

$num1 *= 2;
echo $num1;  // Output: 58

$num1 /= 2;
echo $num1;  // Output: 29

$num1 %= 10;
echo $num1;  // Output: 9



// =====================================================
// 10. COMPARISON OPERATORS
// =====================================================

// Operators: <, >, <=, >=, !=, ==, ===, <=>


$a = 15;
$b = 16;

var_dump($a > $b);   // false
var_dump($a < $b);   // true
var_dump($a >= $b);  // false
var_dump($a <= $b);  // true
var_dump($a != $b);  // true

// == compares values after type conversion if needed.
var_dump(3 == "3");  // true

// === compares both value and data type.
var_dump(3 === 3);   // true
var_dump(3 === "3"); // false

// Spaceship operator
// Returns -1 if left < right, 0 if equal, 1 if left > right.

var_dump(10 <=> 20); // -1
var_dump(20 <=> 20); // 0
var_dump(30 <=> 20); // 1



// =====================================================
// 11. LOGICAL OPERATORS
// =====================================================

// && means AND: both conditions must be true.
// || means OR: at least one condition must be true.
// ! means NOT: reverses a boolean value.


$age = 28;
$hasId = false;

var_dump($age > 18 && $hasId === true); // false

var_dump($age > 18 || $hasId === true); // true

var_dump(!$hasId); // true



// =====================================================
// 12. INCREMENT AND DECREMENT OPERATORS
// =====================================================


$a = 12;

$a++;  // Increment by 1
echo $a; // 13

++$a;  // Increment before using the value
echo $a; // 14

$a--;  // Decrement by 1
echo $a; // 13

--$a;  // Decrement before using the value
echo $a; // 12



// =====================================================
// 13. STRING OPERATORS
// =====================================================

// . joins strings (concatenation).
// .= appends a string to an existing string.


$firstName = "Kunjal";
$lastName = "Salvi";

echo $firstName . " " . $lastName;

// Append text to an existing string.
$firstName .= " Salvi";
echo $firstName;



// =====================================================
// 14. TERNARY OPERATOR
// =====================================================

// Syntax:
// $result = (condition) ? value_if_true : value_if_false;


$age = 19;

$result = ($age >= 18)
    ? "You can vote."
    : "You are not eligible yet.";

echo $result;



// =====================================================
// PRACTICE QUESTIONS
// =====================================================


// Q1. Calculate the final price after a discount.

$price = 100;
$discount = 15;

$discountAmount = ($price * $discount) / 100;
$finalPrice = $price - $discountAmount;

echo "Q1. Final Price = " . $finalPrice . "\n";


// Q2. Perform calculations using assignment operators.

$score = 50;

$score += 20; // 50 + 20 = 70
$score /= 2;  // 70 / 2 = 35

echo "Q2. Final Score = " . $score . "\n";


// Q3. Compare two values using == and ===.

$secretPin = 1234;
$userInput = "1234";

echo "Q3. Using == : ";
var_dump($secretPin == $userInput);  // true

echo "Using === : ";
var_dump($secretPin === $userInput); // false


// Q4. Check whether a number is greater than 18.

$num = 19;

$result = ($num > 18)
    ? "Greater than 18"
    : "18 or less";

echo "Q4. " . $result . "\n";


// Q5. Understand post-increment and pre-increment.

$x = 5;

$y = $x++; // Assign 5 to y, then increase x to 6.
$z = ++$x; // Increase x to 7, then assign 7 to z.

echo "Q5. X = " . $x . "\n";
echo "Y = " . $y . "\n";
echo "Z = " . $z . "\n";


// Q6. Join strings and append additional text.

$firstName = "John";
$lastName = "Doe";

$fullName = $firstName . " " . $lastName;
$fullName .= " Jr.";

echo "Q6. Full Name = " . $fullName . "\n";


// Q7. Use the spaceship operator.

echo "Q7. 10 <=> 20 = " . (10 <=> 20) . "\n";
echo "20 <=> 20 = " . (20 <=> 20) . "\n";
echo "30 <=> 20 = " . (30 <=> 20) . "\n";


// Q8. Check login status using the ternary operator.

$isLoggedIn = true;

$status = ($isLoggedIn)
    ? "Welcome back!"
    : "Please log in.";

echo "Q8. " . $status . "\n";


// Q9. Check whether a number is even or odd.

$number = 15;

$answer = ($number % 2 == 0)
    ? "Even number"
    : "Odd number";

echo "Q9. " . $answer . "\n";

?>


