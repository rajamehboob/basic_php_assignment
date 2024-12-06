<?php
function greetUser($name) {
    echo "Hello, $name!\n";
}

greetUser("HAMZA");
?>
<?php
// Function definition
function greet() {
    echo "Hello, welcome to PHP programing!\n";
}

// Function call
greet();
?>
<?php
// Indexed Array of 5 numbers
$numbers = [3, 7, 2, 10, 5];

// Associative Array with student names and grades
$students = [
    "Huzaifa" => 85,
    "Hamza" => 90,
    "Ayesha" => 78,
    "Ali" => 92,
    "Sara" => 88
];

// Loop through the indexed array
$sum = 0;
foreach ($numbers as $num) {
    $sum += $num;
}
$average = $sum / count($numbers);

// Display sum and average of the numbers
echo "Indexed Array:\n";
echo "Numbers: " . implode(", ", $numbers) . "\n";
echo "Sum: $sum\n";
echo "Average: $average\n\n";

// Loop through the associative array
echo "Associative Array (Student Grades):\n";
foreach ($students as $name => $grade) {
    echo "Student: $name, Grade: $grade\n";
}
?>
<?php
// Task 1: Create an array of 10 random numbers between 1 and 100
$randomNumbers = [];
for ($i = 0; $i < 10; $i++) {
    $randomNumbers[] = rand(1, 100); // Generate a random number and add it to the array
}

// Task 2: Count how many numbers are greater than 50
$countGreaterThan50 = 0;
foreach ($randomNumbers as $number) {
    if ($number > 50) {
        $countGreaterThan50++;
    }
}

// Display the array and the count of numbers greater than 50
echo "Random Numbers: " . implode(", ", $randomNumbers) . "\n";
echo "Count of numbers greater than 50: $countGreaterThan50\n\n";

// Task 3: Print a multiplication table for the number 5
echo "Multiplication Table for 5:\n";
for ($i = 1; $i <= 10; $i++) {
    echo "5 x $i = " . (5 * $i) . "\n";
}
?>