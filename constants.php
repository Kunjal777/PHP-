<?php
// =====================================================
// 1. CONSTANTS IN PHP
// =====================================================
// Constants store values that cannot be changed.
// They do not use the $ symbol.
// Method 1: Using define()
// Syntax: define("CONSTANT_NAME", value);
define("MAX_ATTEMPT_ALLOWED", 3);
define("APP_NAME", "Instagram");
echo MAX_ATTEMPT_ALLOWED . "\n";
echo APP_NAME . "\n";
// Method 2: Using const
const APP_VERSION = "V.0.2.1";
echo APP_VERSION . "\n";
// Another example of define()
define("MAX_OTP_RECEIVED", 5);
echo MAX_OTP_RECEIVED . "\n";
// IMPORTANT:
// A constant cannot be declared again using the same name.
// Therefore, use a different name for every constant.
// =====================================================
// 2. ACCESSING CHARACTERS IN A STRING
// =====================================================
// String characters can be accessed using their index.
// Index starts from 0.
$name = "Laravel PHP";
echo $name[2] . "\n"; // Output: r
// =====================================================
// 3. BASIC STRING FUNCTIONS
// =====================================================
$name = "Laravel PHP";
// strlen() - Returns the number of characters.
echo strlen($name) . "\n";
// str_word_count() - Counts the number of words.
echo str_word_count($name) . "\n";
// =====================================================
// 4. STRING CASE MANIPULATION FUNCTIONS
// =====================================================
$name = "laravel php";
// strtoupper() - Converts text into uppercase.
echo strtoupper($name) . "\n";
// strtolower() - Converts text into lowercase.
echo strtolower($name) . "\n";
// ucfirst() - Converts the first character into uppercase.
echo ucfirst($name) . "\n";
// ucwords() - Converts the first character of each word into uppercase.
echo ucwords($name) . "\n";
// =====================================================
// 5. STRING TRIM FUNCTIONS
// =====================================================
$para = "              helooo              ";
// trim() - Removes spaces from both sides.
echo trim($para) . "\n";
// ltrim() - Removes spaces from the left side.
echo ltrim($para) . "\n";
// rtrim() - Removes spaces from the right side.
echo rtrim($para) . "\n";
// =====================================================
// 6. STRING SEARCH FUNCTIONS
// =====================================================
$name = "laravel is easy";
// strpos() - Finds the position of a word or character.
echo strpos($name, "is") . "\n";
// str_contains() - Checks whether a string contains specific text.
var_dump(str_contains($name, "easy"));
// Output: bool(true)
// =====================================================
// 7. STRING MANIPULATION FUNCTIONS
// =====================================================
// substr() - Extracts a part of a string.
// Syntax: substr(string, start_position, length)
echo substr($name, 2, 7) . "\n";
// str_replace() - Replaces specific text.
echo str_replace("laravel", "PHP", $name) . "\n";
// str_repeat() - Repeats a string a specified number of times.
echo str_repeat($name, 3) . "\n";
// strrev() - Reverses a string.
echo strrev("jasmina") . "\n";
// =====================================================
// 8. STRING COMPARISON FUNCTIONS
// =====================================================
// strcmp() - Compares two strings (case-sensitive).
$n = "Hello";
$m = "hello";
echo strcmp($n, $m) . "\n";
// strcasecmp() - Compares two strings (case-insensitive).
echo strcasecmp($n, $m) . "\n";
// Returns:
// 0 = Both strings are equal.
// Negative value = First string comes before second.
// Positive value = First string comes after second.
// =====================================================
// 9. EXPLODE() FUNCTION
// =====================================================
// explode() converts a string into an array.
// Syntax: explode(separator, string)
$text = "PHP,Laravel,MYSQL";
$result = explode(",", $text);
print_r($result);
// =====================================================
// 10. IMPLODE() FUNCTION
// =====================================================
// implode() converts an array into a string.
// Syntax: implode(separator, array)
$list = ["jay", "viru", "vijaya", "soman"];
$res = implode(" ", $list);
echo $res . "\n";
// =====================================================
// 11. STR_SPLIT() FUNCTION
// =====================================================
// str_split() converts a string into an array of characters.
$text = "PHP";
$out = str_split($text);
print_r($out);
// =====================================================
// 12. ITERATING THROUGH A STRING USING FOR LOOP
// =====================================================
// A for loop accesses each character using its index.
$name = "php is an oop language";
for ($i = 0; $i < strlen($name); $i++) {
    echo $name[$i] . "\n";

}
// =====================================================
// 13. ITERATING THROUGH A STRING USING WHILE LOOP
// =====================================================
$name = "hello world";
$i = 0;
while ($i < strlen($name)) {
    echo $name[$i] . "\n";
    $i++;
}
// =====================================================
// 14. ITERATING THROUGH A STRING USING DO-WHILE LOOP
// =====================================================
$name = "kunjal salvi";
$i = 0;
do {
    echo $name[$i] . "\n";
    $i++;
} while ($i < strlen($name));
// =====================================================
// 15. REVERSE A STRING USING WHILE LOOP
// =====================================================
// Take input from the user.
$name = readline("Enter a name: ");
// Start from the last character.
$i = strlen($name) - 1;
while ($i >= 0) {
    echo $name[$i];
    $i--;
}
echo "\n";

// =====================================================
// PRACTICE QUESTIONS
// =====================================================

// Q1. STRING LENGTH
// Take a student's name and display its length.
/*
Example:
Input: Rahul
Output: Length: 5
*/
$name = readline("Enter a name: ");
$length = strlen($name);
echo "Length: " . $length . "\n";

// Q2. CHANGE STRING CASE
// Display original, uppercase and lowercase text.
/*
Example:
Input: Hello PHP
Output:
Original: Hello PHP
Uppercase: HELLO PHP
Lowercase: hello php
*/
$text = readline("Enter a word or sentence: ");
echo "Original: " . $text . "\n";
echo "Uppercase: " . strtoupper($text) . "\n";
echo "Lowercase: " . strtolower($text) . "\n";

// Q3. REMOVE EXTRA SPACES
// Remove unnecessary spaces before and after the name.
/*
Example:
Input:    Rahul Patil
Output:
Cleaned Name: Rahul Patil
*/
$name = readline("Enter a name: ");
$noSpace = trim($name);
echo "Cleaned Name: " . $noSpace . "\n";
?>


