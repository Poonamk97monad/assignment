<!DOCTYPE html>
<html>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $name = htmlspecialchars($_REQUEST['fname']); 
    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo $name;
    }
}
echo "<br><br>";
echo "My first PHP script!";

$x = 5 /* + 15 */ + 5;
echo $x;
$txt = "poonam";
$z = 5.6;
$y = 10;
echo $txt;
echo $z;
echo $y;

function myTest() {
    $a=4647;
    global $x, $y;
    $y = $x + $y;
    $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
    echo "<p>Variable x inside function is: $a  $y</p>";
} 
myTest();
echo $y;

echo "<p>Variable x outside function is: $x</p>";
function myTest2() {
    static $b = 0;
    echo $b;
    $b++;
}

myTest2();
myTest2();
myTest2();
$txt1 = "Learn PHP";
$txt2 = "W3Schools.com";


echo "<h2>" . $txt1 . "</h2>";
echo "Study PHP at " . $txt2 . "<br>";
echo $x + $y;
echo "<br>";

class Car {
    function Car() {
        $this->model = "VW";
    }

}
$herbie = new Car();

echo $herbie->model;



echo "<br>";
var_dump($x);
echo "<br>";
var_dump($z);
echo "<br>";
$cars = array("Volvo","BMW","Toyota");
var_dump($cars);

echo "<br>";
echo strlen("Hello world!");
echo "<br>";
echo strrev("Hello world!");
echo "<br>";
echo strpos("Hello world!", "world");
echo "<br>";
define("GREETING", "Welcome to W3Schools.com!");
echo GREETING;
echo "<br>";
$t = date("H");

if ($t < "10") {
    echo "Have a good morning!";
} elseif ($t < "20") {
    echo "Have a good day!";
} else {
    echo "Have a good night!";
}
echo "<br>";
$favcolor = "red";

switch ($favcolor) {
    case "red":
        echo "Your favorite color is red!";
        break;
    case "blue":
        echo "Your favorite color is blue!";
        break;
    case "green":
        echo "Your favorite color is green!";
        break;
    default:
        echo "Your favorite color is neither red, blue, nor green!";
}
echo "<br>";
function setHeight($minheight = 50) {
    echo "The height is : $minheight <br>";
}

setHeight(350);
setHeight(); // will use the default value of 50
setHeight(135);
setHeight(80);
echo "<br>";
$numbers = array(4, 6, 2, 22, 11);
sort($numbers);

echo "<br>";

$myfile = fopen("try.php", "r");
// some code to be executed....
fclose($myfile);
?>


</body>
</html>