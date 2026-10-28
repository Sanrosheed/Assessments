<?php
// TASK 1
// Favorite Fruits Array
//    - Task: Create an indexed array containing 5 of your favorite fruits and write a PHP script to display the second fruit in the list.
//    - Expected Output: Your second favorite fruit is: [fruit_name]

// Solution
$fruits = ['Apple', 'Banana', 'Watermelon', 'Pawpaw', 'Grape'];
echo "Your second favorite fruit is: $fruits[1]";

// Task 2
// Ages Associative Array
//    - Task: Create an associative array to store the ages of three people (e.g., John, Alice, Bob). Write a PHP script to display Bob’s age.
//    - Expected Output: Bob is 25 years old.

// Solution
$ages = [
    'john'=>14,
    'Alice'=>18,
    'Bob'=> 25,
];
echo "<br>";
echo "Bob is $ages[Bob] years old.";
echo "<br>";

// Task 3
// Colors Array Modification
//    - Task: Write a PHP script that starts with an indexed array of 4 colors. Add a new color to the end of the array and remove the first color. Display the modified array using print_r().
//    - Expected Output: Array ( [0] => Blue [1] => Green [2] => Yellow [3] => Purple )

// Solution
$colors = ['Red', 'Blue', 'Green', 'Yellow'];
array_push($colors, 'Purple');
array_shift($colors);
print_r($colors);

// Task 4
// Sum of Numbers
//    - Task: Create an indexed array of 5 numbers. Use a for loop to calculate and display the sum of the numbers.
//    - Expected Output: The sum of the numbers is: 15
echo '<br>';

// Solution
$numbers = [3, 4, 6, 9, 15];
$sum = 0;
for($x=0; $x < count($numbers); $x++){
$sum += $numbers[$x];
}
echo "The sum of the numbers is: $sum";
echo "<br>";


// Task 5
// Favorite Foods Array
//    - Task: Create an associative array to store the favorite foods of three people. Use a foreach loop to display each person’s name and their favorite food in a sentence.
//    - Expected Output:
//      - John’s favorite food is Pizza.
//      - Alice’s favorite food is Sushi.
//      - Bob’s favorite food is Tacos.

// Solution
$favorite = [
    'John' => 'Pizza',
    'Alice' => 'Sushi',
    'Bob' => 'Tacos'
];

foreach($favorite as $key=>$value){
echo $key. '’s ' . 'favorite food is ' . $value . ' .<br>';
}

// Task 6
// Students Multidimensional Array
//    - Task: Create a multidimensional array to store information about two students (name and grade). Write a PHP script to display the grade of the second student.
//    - Expected Output: The grade of Emma is: 85

// Solution
$students = [
    'student1' => [
        'name' => 'Oluchi',
        'grade' => 40,
    ],
    'student2' => [
        'name' => 'Emma',
        'grade' => 85,
    ],
];

echo 'The grade of ' . $students['student2']['name'] . 'is ' . $students['student2']['grade'];
echo '<br>';

// Task 7
// Products Array Modification
//    - Task: Start with a multidimensional array containing data for two products (name and price). Add a third product to the array and display the entire array using print_r().
//    - Expected Output: Array ( [0] => Array ( [name] => Laptop [price] => 1000 ) [1] => Array ( [name] => Phone [price] => 500 ) [2] => Array ( [name] => Tablet [price] => 300 ) )

// Solution
$products = [
    ['name' => 'Laptop', 'price' => 1000],
    ['name' => 'Phone', 'price' => 500],
];

$products[] = ['name'=>'Tablet', 'price'=>300];
print_r($products);
echo '<br>';

// Task 8
// Combine Names and Ages
//    - Task: Create two indexed arrays: one with 3 names and another with 3 ages. Combine them into an associative array where names are keys and ages are values. Display the resulting array using print_r().
//    - Expected Output: Array ( [John] => 20 [Alice] => 22 [Bob] => 25 )

// Solution
$names = ['John', 'Alice', 'Bob'];
$ages = [20, 22, 25];

$combination = array_combine($names, $ages);
print_r($combination);
echo '<br>';

// Task 9
// Books Multidimensional Array
//    - Task: Create a multidimensional array to store information about 3 books (title and author). Use a foreach loop to display each book’s title and author in a formatted sentence.
//    - Expected Output:
//      - “The Hobbit” was written by J.R.R. Tolkien.
//      - “1984" was written by George Orwell.
//      - “Pride and Prejudice” was written by Jane Austen.

// Solution
$books = [
    ['title'=> 'The Hobbit', 'author'=> 'J.R.R. Tolkien'],
    ['title'=> '1984', 'author'=> 'George Orwell'],
    ['title'=> 'Pride and Prejudice', 'author'=> 'Jane Austen']
];

foreach($books as $book){
echo $book['title'] . ' was written by ' . $book['author'] . '.<br>';
}

// Task 10
// Numbers Array Sorting and Analysis
//     - Task: Create an indexed array of 5 numbers. Use PHP array functions to sort the array in ascending order, display the largest number, and check if the number 10 exists in the array.
//     - Expected Output: Sorted array: [2, 4, 6, 8, 10] Largest number: 10 Number 10 exists in the array.

// Solution
$numbers = [6, 8, 2, 10, 4];
sort($numbers);

print_r($numbers);
echo '<br>';

$check = in_array(10, $numbers);
if($check){
    echo 'Number 10 exists in the array.';
} else {
    'Number 10 does not exists in the array.';
}

echo '<br>';

// Task 11
// Shopping Cart Total
//     - Task: Create a multidimensional array to represent a shopping cart with 2 items (item name, quantity, price). Calculate and display the total cost of the cart (quantity × price for each item).
//     - Expected Output: Total cost of the cart: $65

$cart = [
    ['itemName'=>'books', 'quantity'=> 5, 'price'=>200],
    ['itemName'=>'shoes', 'quantity'=> 10, 'price'=>230],
];

$total = 0;
foreach($cart as $item){
    $total = $total + ($item['quantity'] * $item['price']);
}

echo 'Total cost of the cart: ' . $total;

?>


