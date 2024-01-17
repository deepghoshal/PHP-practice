<?php
$cookie_name = "user";
$cookie_value = "Alex Porter";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // $x = 7;
    // echo var_dump($x);

    $x = 9; // global scope

    function myTest()
    {
        // $x = 5; // local scope
        global $x;
        $z = 4;
        $z = $x + $z;
        echo $z;
    }
    myTest();


    // using x outside the function will generate an error
    //   echo "<p>Variable x outside function is: $x</p>";


    echo "<h2>PHP is Fun!</h2>";
    echo "Hello world!<br>";
    echo "I'm about to learn PHP!<br>";
    echo "This ", "string ", "was ", "made ", "with multiple parameters.";

    $text1 = "Hello Php";
    $text2 = "Learn from Git";
    $a = 12;
    $b = 4;

    echo "<br> <h3> Best lang is " . $text1 . "</h3>";
    echo "<br>study and " . $text2 . "<br>";
    echo $a + $b;

    print "<h2>PHP is Fun!</h2>";
    print "Hello world!<br>";
    print "I'm about to learn PHP!";

    //Single quoted string literals returns the string as it is:

    $x = "<br>John";
    echo ' <br>Hello $x<br>';

    echo strlen("hello php");
    echo " <br>";

    echo str_word_count("Hello world! this is php");

    echo "<br>";

    echo strpos("Hello world!", "world");
    echo "<br>";
    echo strtoupper("hello string");
    echo "<br>";
    echo strtolower("Hsello Hstring");
    echo "<br>";
    $x = "hello php";
    $y = "i am JS";
    echo str_replace("php", "JS", $x);
    echo "<br>";
    echo strrev($x);
    echo "<br>";
    echo "<input value='" . $x . "'>";
    echo "<br>";
    echo "<input value='" . trim($x) . "'>";
    echo "<br>";
    echo $x . " " . $y;
    echo "<br>";
    echo "$x $y";
    echo "<br>";
    //Start the slice at index 6 and end the slice 3 positions later:
    echo substr($x, 6, 3);
    echo "<br>";
    echo substr($x, 0, -4);
    echo "<br>";
    echo substr($x, -5, 3);
    echo "<br>";
    // Check if the type of a variable is integer   
    $x = 5985;
    var_dump(is_int($x));

    echo "<br>";

    // Check again... 
    $x = 59.85;
    // var_dump(is_int($x));
    var_dump(is_float($x));
    echo "<br> <h3>Casting</h3>";

    $a = 5;       // Integer
    $b = 5.34;    // Float
    $c = "hello"; // String
    $d = true;    // Boolean
    $e = NULL;    // NULL

    $a = (string) $a;
    $b = (string) $b;
    $c = (string) $c;
    $d = (string) $d;
    $e = (string) $e;

    //To verify the type of any object in PHP, use the var_dump() function:
    var_dump($a);
    echo "<br>";
    var_dump($b);
    echo "<br>";
    var_dump($c);
    echo "<br>";
    var_dump($d);
    echo "<br>";
    var_dump($e);
    echo "<br>";

    $a = 5;       // Integer
    $b = 5.34;    // Float
    $c = "25 kilometers"; // String
    $d = "kilometers 25"; // String
    $e = "hello"; // String
    $f = true;    // Boolean
    $g = NULL;    // NULL

    $a = (int) $a;
    $b = (int) $b;
    $c = (int) $c;
    $d = (int) $d;
    $e = (int) $e;
    $f = (int) $f;
    $g = (int) $g;

    var_dump($a);
    echo "<br>";
    var_dump($b);
    echo "<br>";
    var_dump($c);
    echo "<br>";
    var_dump($d);
    echo "<br>";
    var_dump($e);
    echo "<br>";
    //Note that when casting a string that starts with a number, the (int) function uses that number. If it does not start with a number, the (int) function convert strings into the number 0

    $a = 5;       // Integer
    $b = 5.34;    // Float
    $c = 0;       // Integer
    $d = -1;      // Integer
    $e = 0.1;     // Float
    $f = "hello"; // String
    $g = "";      // String
    $h = true;    // Boolean
    $i = NULL;    // NULL

    $a = (bool) $a;
    $b = (bool) $b;
    $c = (bool) $c;
    $d = (bool) $d;
    $e = (bool) $e;
    $f = (bool) $f;
    $g = (bool) $g;
    $h = (bool) $h;
    $i = (bool) $i;

    //To verify the type of any object in PHP, use the var_dump() function:
    var_dump($a);
    echo "<br>";
    var_dump($b);
    echo "<br>";
    var_dump($c);
    echo "<br>";
    var_dump($d);
    echo "<br>";
    var_dump($e);
    echo "<br>";
    var_dump($f);
    echo "<br>";
    var_dump($g);
    echo "<br>";
    var_dump($h);
    echo "<br>";
    var_dump($i);
    echo "<br>";
    //If a value is 0, NULL, false, or empty, the (bool) converts it into false, otherwise true. Even -1 converts to true.

    $a = 5;       // Integer
    $b = 5.34;    // Float
    $c = "hello"; // String
    $d = true;    // Boolean
    $e = NULL;    // NULL

    $a = (array) $a;
    $b = (array) $b;
    $c = (array) $c;
    $d = (array) $d;
    $e = (array) $e;

    var_dump($a);
    echo "<br>";
    var_dump($b);
    echo "<br>";
    var_dump($c);
    echo "<br>";
    var_dump($d);
    echo "<br>";
    var_dump($e);
    echo "<br>";

    $a = 5;       // Integer
    $b = 5.34;    // Float
    $c = "hello"; // String
    $d = true;    // Boolean
    $e = NULL;    // NULL

    $a = (object) $a;
    $b = (object) $b;
    $c = (object) $c;
    $d = (object) $d;
    $e = (object) $e;

    var_dump($a);
    echo "<br>";
    var_dump($b);
    echo "<br>";
    var_dump($c);
    echo "<br>";
    var_dump($d);
    echo "<br>";
    var_dump($e);
    echo "<br>";
    //NULL values converts to an empty object.

    $a = array("Volvo", "BMW", "Toyota"); // indexed array
    $b = array("Peter" => "35", "Ben" => "37", "Joe" => "43"); // associative array

    $a = (object) $a;
    $b = (object) $b;

    //To verify the type of any object in PHP, use the var_dump() function:
    var_dump($a);
    echo "<br>";
    var_dump($b);
    echo "<br>";

    //   Indexed arrays converts into objects with the index number as property name and the value as property value. Associative arrays converts into objects with the keys as property names and values as property values.

    //php math

    echo (pi());
    echo "<br>";
    echo (min(9, 20, 33, 21, 34, 56, 76, 44, 32));
    echo "<br>";
    echo (max(0, 20, 33, 21, 34, 56, 76, 44, 32));
    echo "<br>";
    echo (abs(-6.7));
    echo "<br>";
    echo (sqrt(16));
    echo "<br>";
    echo (round(0.60));
    echo "<br>";
    echo (round(1.99));
    echo "<br>";
    echo (rand(1, 100));
    echo "<br>";
    define("greeting", "Welcome to W3Schools.com!");
    echo greeting;
    echo "<br>";

    const car = ["Bmw", "Audi", "Amg"]; // cont in array
    echo car[1];
    echo "<br>";

    define("GREETING", "Welcome to W3Schools.com!",);

    function myconst()
    {
        echo GREETING;
    }

    myconst();

    echo "<br> <h3>Loops</h3>";

    $t = 14;

    if ($t >= 11) {
        echo "Have a nice day!!";
    } else {
        echo "have good day!!";
    }

    echo "<br>";

    $a = 4;
    $b = 5;
    $c = 6;

    if ($a < $b && $b < $c) {
        echo "Condition true";
    }

    echo "<br>";

    $a = 9;

    if ($a == 2 || $a == 3 || $a == 4 || $a == 5 || $a == 6 || $a == 7) {
        echo "$a is a number between 2 and 7";
    } else {
        echo "$a is not between 2 and 7";
    }

    echo "<br>";

    $t = date("H");

    if ($t < "20") {
        echo "Have a good day!";
    } else {
        echo "Have a good night!";
    }

    echo "<br>";

    $t = date("H");

    if ($t < "10") {
        echo "Good morning";
    } elseif ($t < "18") {
        echo "good day";
    } else {
        echo "good nigth";
    }

    echo "<br>";

    //if shorthand

    $a = 4;
    if ($a < 10) $b = "hello";
    echo $b;

    echo "<br>";

    $d = 2;

    switch ($d) {
        case '4':
            echo "Its 4";
            break;
        case "2":
            echo "its 2";
            break;

        default:
            echo "out of syallabus";
            break;
    }

    echo "<br>";

    $d = 1;

    switch ($d) {
        case 1:
        case 2:
        case 3:
        case 4:
        case 5:
            echo "The weeks feels so long!";
            break;
        case 6:
        case 0:
            echo "Weekends are the best!";
            break;
        default:
            echo "Something went wrong";
    }
    echo "<br>";

    $i = 1;

    while ($i < 10) {
        echo $i . "<br>";
        $i++;
    }

    echo "<br>";

    $i = 1;

    do {
        echo $i . "<br>";
        $i++;
        // if ($i ==3) break;
    } while ($i < 8);

    echo "<br>";

    for ($i = 1; $i < 11; $i++) {
        if ($i == 4)
            continue;
        echo $i . "<br>";
    }

    echo "<br>";

    $colors = array("red", "green", "blue", "yellow");

    foreach ($colors as $value) {
        echo $value . "<br>";
    }

    echo "<br>";

    $colors = array("red", "green", "blue", "yellow");


    // by using the & character in the foreach declaration, the array item is assigned by reference, which results in any changes done to the array item will also be done to the original array:

    foreach ($colors as $x) {
        if ($x == "blue") $x = "pink";
    }

    var_dump($colors);

    echo "<br>";

    //function

    function mytext($fname, $age)
    {
        echo $fname . "'s age is " . $age . "<br>";
    }

    mytext("John", 55);
    mytext("Harry", 43);
    mytext("jenny", 31);

    echo "<br>";

    function sum($x, $y)
    {
        $z = $x + $y;
        return $z;
    }

    echo "5 + 10 = " . sum(5, 10) . "<br>";
    echo "7 + 13 = " . sum(7, 13) . "<br>";
    echo "2 + 4 = " . sum(2, 4) . "<br>";

    //arrays

    $cars = array("Volvo", "BMW", "Toyota");
    var_dump($cars);

    echo "<br><br>";



    $cars = array("bmw", "honda", "toyota");

    echo count($cars);
    echo "<br>";
    echo $cars[0];
    echo "<br>";
    $cars[1] = "ford";
    var_dump($cars);
    echo "<br><br>";

    //loop to print all array elements

    foreach ($cars as $value) {
        echo $value . "<br>";
    }

    echo "<br>";

    array_push($cars, "Hyundai");
    var_dump($cars);
    echo "<br><br>";

    //associative array

    $cars = array("brand" => "Bmw", "model" => "sportz", "year" => 2021);
    var_dump($cars);
    echo "<br>";
    echo $cars["brand"];
    echo "<br>";
    var_dump($cars["year"]);
    echo "<br>";
    $cars["year"] = 2024;
    var_dump($cars["year"]);

    echo "<br>";

    foreach ($cars as $key => $value) {
        echo $value . "<br>";
    }
    echo "<br><br>";

    //mixing array with both name and index keys

    $myArr = [];
    $myArr[0] = "apples";
    $myArr[1] = "bananas";
    $myArr["fruit"] = "cherries";
    var_dump($myArr);
    echo "<br>";
    var_dump($myArr["fruit"]);
    echo "<br>";
    $cars = array("Volvo", "BMW", "Toyota");
    array_splice($cars, 1, 1);
    var_dump($cars);
    echo "<br><br>";
    $cars = array("Volvo", "BMW", "Toyota");
    sort($cars);
    var_dump($cars);
    echo "<br>";

    $numbers = array(4, 6, 2, 22, 11);
    rsort($numbers);
    var_dump($numbers);
    echo "<br><br>";

    $age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
    ksort($age);
    var_dump($age);
    echo "<br><br>";

    $cars = array(
        array("Volvo", 22, 18),
        array("BMW", 15, 13),
        array("Saab", 5, 2),
        array("Land Rover", 17, 15)
    );

    echo $cars[0][0] . ": In stock: " . $cars[0][1] . ", sold: " . $cars[0][2] . ".<br>";
    echo $cars[1][0] . ": In stock: " . $cars[1][1] . ", sold: " . $cars[1][2] . ".<br>";
    echo $cars[2][0] . ": In stock: " . $cars[2][1] . ", sold: " . $cars[2][2] . ".<br>";
    echo $cars[3][0] . ": In stock: " . $cars[3][1] . ", sold: " . $cars[3][2] . ".<br>";


    $x = 12;

    function myVariable()
    {
        echo $GLOBALS['x'];
    }
    myVariable();

    echo $_SERVER['PHP_SELF'];
    echo "<br>";
    echo $_SERVER['SERVER_NAME'];
    echo "<br>";
    echo $_SERVER['HTTP_HOST'];
    echo "<br>";
    echo $_SERVER['HTTP_USER_AGENT'];
    echo "<br>";
    echo $_SERVER['SCRIPT_NAME'];

    echo '<br>';

    $str = "Visit W3Schools schhols in schools area shine";
    $pattern = "/sch/i";
    echo preg_match_all($pattern, $str);

    echo "<br>";

    $str = "Visit Microsoft!";
    $pattern = "/microsoft/i";
    echo preg_replace($pattern, "W3Schools", $str);


    ?>


    <?php
    // define variables and set to empty values
    $nameErr = $emailErr = $genderErr = $websiteErr = "";
    $name = $email = $gender = $comment = $website = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
            $nameErr = "Name is required";
        } else {
            $name = test_input($_POST["name"]);
        }

        if (empty($_POST["email"])) {
            $emailErr = "Email is required";
        } else {
            $email = test_input($_POST["email"]);
        }

        if (empty($_POST["website"])) {
            $website = "";
        } else {
            $website = test_input($_POST["website"]);
        }

        if (empty($_POST["comment"])) {
            $comment = "";
        } else {
            $comment = test_input($_POST["comment"]);
        }

        if (empty($_POST["gender"])) {
            $genderErr = "Gender is required";
        } else {
            $gender = test_input($_POST["gender"]);
        }
    }

    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>

    <h2>PHP Form Validation Example</h2>
    <p><span class="error">* required field</span></p>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" style="border:1px solid red; padding:30px; margin:20px;">
        Name: <input type="text" name="name">
        <span class="error" style="color: red;">* <?php echo $nameErr; ?></span>
        <br><br>
        E-mail: <input type="text" name="email">
        <span class="error" style="color: red;">* <?php echo $emailErr; ?></span>
        <br><br>
        Website: <input type="text" name="website">
        <span class="error"><?php echo $websiteErr; ?></span>
        <br><br>
        Comment: <textarea name="comment" rows="5" cols="40"></textarea>
        <br><br>
        Gender:
        <input type="radio" name="gender" value="female">Female
        <input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="other">Other
        <span class="error" style="color: red;">* <?php echo $genderErr; ?></span>
        <br><br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <h2>Your Input :</h2>
    <div style="color: blue;">
        <?php
        echo "";
        echo $name;
        echo "<br>";
        echo $email;
        echo "<br>";
        echo $website;
        echo "<br>";
        echo $comment;
        echo "<br>";
        echo $gender;

        ?>
    </div>

    <?php

    echo "Today is " . date("d/m/y") . "<br>";
    echo "Today is " . date("m/d/y") . "<br>";
    echo "Today is " . date("d") . "<br>";
    echo "Today is " . date("m/y") . "<br>";
    echo "Today is " . date("l") . "<br>";

    echo "<p>copyright date</p>";

    echo "<br>";

    echo "© 2023-" . date("Y");

    echo "<br>";

    // date_default_timezone_set("India");

    echo "The time is " . date("h:i:sa");

    echo "<br>";

    $d1 = strtotime("July 04");
    $d2 = ceil(($d1 - time()) / 60 / 60 / 24);
    echo "There are " . $d2 . " days until 4th of July.";


    ?>

    <!--file handling -->

    <div style="color:blue;">
        <?php include 'menu.php';
        echo "I have a " . $color . " " . $car;
        echo "<br>";
        // echo readfile("text.txt");
        echo "<br>";
        $myfile = fopen("text.txt", "r") or die("Unable to open file!");
        echo fread($myfile, filesize("text.txt"));
        fclose($myfile);

        $myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
        $txt = "John Doe\n";
        fwrite($myfile, $txt);
        $txt = "Jane Doe\n";
        fwrite($myfile, $txt);
        fclose($myfile);

        echo "<br><h3>Cookies</h3>";

        //Cookies

        if (count($_COOKIE) > 0) {
            echo "Cookies are enabled.";
        } else {
            echo "Cookies are disabled.";
        }

        echo "<br>";

        if (!isset($_COOKIE[$cookie_name])) {
            echo "Cookie named '" . $cookie_name . "' is not set!";
        } else {
            echo "Cookie '" . $cookie_name . "' is set!<br>";
            echo "Value is: " . $_COOKIE[$cookie_name];
        }

        echo "<br>";

        //filter

        $i = 10;
        if (!filter_var($i, FILTER_VALIDATE_INT) === false) {
            echo "Integer is valid";
        } else {
            echo "Integer is invalid";
        }

        echo "<br>";

        $i = "deepghoshal@gmail.com";

        // Remove all illegal characters from email
        $i = filter_var($i, FILTER_SANITIZE_EMAIL);
        // Validate e-mail
        if (!filter_var($i, FILTER_VALIDATE_EMAIL) === false) {
            echo "email is valid " . $i;
        } else {
            echo "email is invalid";
        }

        ?>
        <br>
        <br>

    </div>


    <?php
    //JSON

    $car = array("Honda", "Bmw", "audi", "suzuki");
    echo json_encode($car);

    echo "<br>";

    $jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';
    var_dump(json_decode($jsonobj));

    echo '<br>';

    $jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

    $obj = json_decode($jsonobj, true); //true is associative array by default false

    echo $obj["Peter"] . "<br>";
    echo $obj["Ben"] . "<br>";
    echo $obj["Joe"] . "<br><br>";

    $jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

    $obj = json_decode($jsonobj, true);

    foreach ($obj as $key => $value) {
        echo $key . " = " . $value . "<br>";
    }


    ?>

    <h3>OOPS</h3>

    <?php

    class fruit
    {
        public $name;
        public $color;

        function set_name($name)
        {
            $this->name = $name;
        }
        function get_name()
        {
            return $this->name;
        }
    }

    $apple = new fruit();
    $apple->set_name('apple');

    echo $apple->get_name();

    echo "<br>";

    //constructor

    class car
    {
        public $name;
        public $color;

        function __construct($name, $color)
        {
            $this->name = $name;
            $this->color = $color;
        }

        function get_name()
        {
            return $this->name;
        }

        function get_color()
        {
            return $this->color;
        }
    }

    $car = new car("Bmw", "red");
    echo $car->get_name();
    echo "<br>";
    echo $car->get_color();

    echo "<br>";


    class Ft
    {
        public $name;
        public $color;
        public function __construct($name, $color)
        {
            $this->name = $name;
            $this->color = $color;
        }
        public function intro()
        {
            echo "The fruit is {$this->name} and the color is {$this->color}.";
        }
    }

    // Strawberry is inherited from Fruit
    class Strawberry extends Ft
    {
        public function message()
        {
            echo "Am I a fruit or a berry? ";
        }
    }
    $strawberry = new Strawberry("Strawberry", "red");
    $strawberry->message();
    $strawberry->intro();

    echo "<br>";

    class goodbye
    {
        public const NAME = "Thank you for visiting !!";
    }

    echo goodbye::NAME;

    echo "<br><br>";

    abstract class ParentClass
    {
        // Abstract method with an argument
        abstract protected function prefixName($name);
    }

    class ChildClass extends ParentClass
    {
        public function prefixName($name)
        {
            if ($name == "John Doe") {
                $prefix = "Mr.";
            } elseif ($name == "Jane Doe") {
                $prefix = "Mrs.";
            } else {
                $prefix = "";
            }
            return "{$prefix} {$name}";
        }
    }

    $class = new ChildClass;
    echo $class->prefixName("John Doe");
    echo "<br>";
    echo $class->prefixName("Jane Doe");

    echo "<br>";

    //interface

    interface Animal
    {
        public function makesound();
    }

    class cat implements Animal
    {
        public function makesound()
        {
            echo "meow";
        }
        public function legs()
        {
            echo "4 legs";
        }
    }

    $animal = new cat();
    $animal->makesound();
    echo "<br>";
    $animal->legs();
    echo "<br><br>";

    //trait

    trait message
    {
        public function msg()
        {
            echo "Bye Bye";
        }
        public function msg2()
        {
            echo "Welcome";
        }
    }
    class bye
    {
        use message;
    }

    $obj = new bye();
    $obj->msg2();
    echo "<br>";
    $obj->msg();

    echo "<br>";

    trait message1
    {
        public function msg1()
        {
            echo "OOP is fun! ";
        }
    }

    trait message2
    {
        public function msg2()
        {
            echo "OOP reduces code duplication!";
        }
    }

    class Welcome
    {
        use message1;
    }

    class Welcome2
    {
        use message1, message2;
    }

    $obj = new Welcome();
    $obj->msg1();
    echo "<br>";


    $obj2 = new Welcome2();
    $obj2->msg1();
    $obj2->msg2();

    echo "<br>";

    // static 

    class A
    {
        public static function welcome()
        {
            echo "welcome";
        }
    }

    class B
    {
        public function msg1()
        {
            A::welcome();
        }
    }

    $obj = new B();
    $obj->msg1();


    echo "<br>";

    //iterables

    function printIterable(iterable $myIterable)
    {
        foreach ($myIterable as $item) {
            echo $item . "<br>";
        }
    }
    $arr = ["a", "b", "c"];
    printIterable($arr);

    ?>

</body>

</html>