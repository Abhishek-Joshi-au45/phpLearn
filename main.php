<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php
// $servername = "localhost";
// $username = "root";
// $password = "";

// Create connection
// $conn = new mysqli($servername, $username, $password,"form");

// Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//   $fname = $_POST['fname'];
//   $lname = $_POST['lname'];
//   $email = $_POST['email'];
//   $phone = $_POST['phone'];
//   $address = $_POST['address'];
//   $messege = $_POST['messege'];
//   }
  
// $sql = "insert into 'data'(fname,lname,email,phone,address,messege)values('$fname','$lname','$email','$phone','$address','$messege')";
//   $result = mysqli_query($conn,$sql);
//   if($result){
//     echo 'Date inserted succesfull';
//   }else{
//   die("Connection failed: " . $conn->connect_error);
//   }
// echo "Connected successfully";


// if ($_SERVER["REQUEST_METHOD"] == "POST") {
// $fname = $_POST['fname'];
// $lname = $_POST['lname'];
// $email = $_POST['email'];
// $phone = $_POST['phone'];
// $address = $_POST['address'];
// $messege = $_POST['messege'];
// }

// if($conn){
//   $sql = "insert into 'data'(fname,lname,email,phone,address,messege)values('$fname','$lname','$email','$phone','$address','$messege')";
//   $result = mysqli_query($conn,$sql);
//   if($result){
//     echo 'Date inserted succesfull';
//   }else{
//   die("Connection failed: " . $conn->connect_error);
//   }
// }


// echo ($fname);
// echo "<br>";
// echo ($lname);
// echo "<br>";
// echo ($email);
// echo "<br>";
// echo ($phone);
// echo "<br>";
// echo ($address);
// echo "<br>";
// echo ($messege);
// echo "<br>";
// }
// echo "Hello World My name is $name and my age is $age";
// echo $x+$y;


// function myTest() {
//   global $x, $y;
//   $y = $x + $y;
// }

// myTest();
// echo $y; // outputs 15


// function myTest() {
//     $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
//   }
  
//   myTest();
//   echo $y; // outputs 15




// function myTest() {
//     static $x = 0;
//     echo $x;
//     $x++;
//   }
  
//   myTest();
//   myTest();
//   myTest(); 


// $cars = array("Volvo","BMW","Toyota");
// var_dump($cars);


// var_dump(is_int($x));
// echo (is_int($name));   

// echo (rand()) . "<br>" ; 

// echo ($x <=> $y);


// $t = 10;

// if ($t < 20) {
//   echo "less than 20 <br>";
// }
// elseif ($t < 30){
//     echo "less than 30 <br>";
// }elseif($t == 50) {
//     echo '50';
// }else{
//     echo "Greater than 50 <br>";
// }


// echo date("H");
// echo "<br>";
// $a = 23;

// if ($a > 10) {
//   echo "Above 10";
//   if ($a > 20) {
//     echo " and also above 20";
//   } else {
//     echo " but not above 20";
//   }
// }


// echo "<br><br> ";
// $favcolor = "blue";

// switch ($favcolor) {
//   case "red":
//     echo "Your favorite color is red!";
//     break;
//   case "blue":
//     echo "Your favorite color is blue!";
//     break;
//   case "green":
//     echo "Your favorite color is green!";
//     break;
//   default:
//     echo "Your favorite color is neither red, blue, nor green!";
// }


// echo "<br><br> ";
// $x = 1;

// while($x <= 5) {
//   echo "The number is: $x <br>";
//   $x++;
// }


// echo "<br><br> ";
// $y = 1;
// do {
//   echo "The number is: $y <br>";
//   $y++;
// } while ($y <= 5);


// echo "<br><br> ";
// for ($x = 0; $x <= 10; $x++) {
//     echo "The number is: $x <br>";
//   }



// echo "<br><br> ";
// $colors = array("red", "green", "blue", "yellow");

// foreach ($colors as $value) {
//    echo "$value <br>";
// }


// echo "<br><br> ";
// $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

// foreach($age as $x => $val) {
//   echo "$x = $val<br>";
// }

// echo "<br><br> ";
// function sum($x, $y) {
//   $z = $x + $y;
//   return $z;
// }

// echo "5 + 10 = " . sum(5, 10) . "<br>";
// echo "7 + 13 = " . sum(7, 13) . "<br>";
// echo "2 + 4 = " . sum(2, 4);


// echo "<br><br> ";
// function sumMyNumbers(...$x) {
//   $n = 0;
//   $len = count($x);
//   for($i = 0; $i < $len; $i++) {
//     $n += $x[$i];
//   }
//   return $n;
// }

// $a = sumMyNumbers(5, 2, 6, 2, 7, 7);
// echo $a;



// echo "<br><br> ";
// $x = 75;
// $y = 25;
 
// function addition() {
//   $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
// }
 
// addition();
// echo $z . "<br><br> ";

// echo $_SERVER['PHP_SELF'];

// if($_SERVER['REQUEST_METHOD']== "POST"){
//   $x =$_POST['number1'];
//   $y =$_POST['number2'];
//   $z =$x + $y;
//   echo ($z);
// }

echo date("Y/m/d")."<br><br>.";
echo date("Y-m-d")."<br><br>.";
echo date("Y.m.d")."<br><br>.";
echo date('M-d-Y')."<br><br>";
echo "The time is " . date("h:i:sa");

?>

<!-- <form action="/phplearn/index.php" method="post">
Number First : <input type="number" name="number1"><br>
Number Seconf : <input type="number" name="number2"><br>
<input type="submit">
</form> -->


</body>
</html>