<!DOCTYPE html>
<html>

    <body>

        <h1>My first PHP page</h1>
<?php
// keywords,functions, user-defined functions, classes are not case sensitive.
ECHO "Hello World!<br>";
echo "Hello World!<br>";
EcHo "Hello World!<br>";

// But variable names are case sensitive. Variables in php are starts with $. The echo statement in php is used to output the data.
$color = "red";
echo "My car is " . $color . "<br>";
echo "My house is " . $COLOR . "<br>";
//we don't have to tell PHP which data type the variable is. It automatically associates a data type to the variable, depending on its value.

//Variable scope:
//Global scope - a variable declared outside the function and can be accessed only outside it.
$x = 5; // global scope

function TestOne() {
  echo "<p>Variable x inside function is: $x</p>";
}
TestOne();

echo "<p>Variable x outside function is: $x</p>";

//Local scope - a variable declared inside a function and can be accessed only inside it.
function TestTwo() {
    $y = 7; // local scope
    echo "<p>Variable x inside function is: $y</p>";
  }
  TestTwo();
  
  echo "<p>Variable x outside function is: $y</p>";

//static scope - a keyword used to declare a variable and still have the info of the value assigned from the last time the function was called.
function TestThree() {
    static $x = 3;
    echo $x;
    $x++;
  }
  
  TestThree();
  TestThree();
  TestThree();
  echo "<br>";

//global keyword - a keyword used to access a global variable from within a function.
$a = 5;
$b = 10;

function TestFour() {
  global $a, $b;
  $b = $a + $b;
}

TestFour();
echo $b;
echo "<br>";

//echo has no return value while print has a return value of 1 so it can be used in expressions. echo can take multiple parameters (although such usage is rare) while print can take one argument. 
echo "Multiple","Parameters","with","Echo";
echo "<br>";
// print "Multiple","Parameters","with","Echo";

// Datatypes - Strings, Integers, Float, Boolean, Array, Object, NULL, Resource.
$_datatype = 7.5;
var_dump ($_datatype);
echo "<br>";

$cars = array("Volvo", "BMW", "Toyota");//array - a variable which can store more than one value at a time.
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
echo "<br>";

//Functions:
//Strict declaration - an option to specify the expected data type when declaring a function.
// declare(strict_types=1); 
function addNumbers(float $num1, float $num2) : float {
  return $num1 + $num2;
}
echo addNumbers(1.2, 5.2);
?>



    </body>

</html>