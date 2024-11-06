<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <link rel="icon" type="image/x-icon" href="happy-face.png">
  <link rel="stylesheet" href="index.css">
  
</head>
<body>

  <h1>My first PHP page</h1>

  <?php
  $servername = "localhost";
  $username = "root";
  $password = "";


  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $messege = $_POST['messege'];


    // Create connection
    $conn = new mysqli($servername, $username, $password, "form");

    // Check connection
    if ($conn) {
      // echo 'Connection Succesfull';
      $sql = "insert into data (fname,lname,email,phone,address,messege)values('$fname','$lname','$email','$phone','$address','$messege')";
      $result = mysqli_query($conn, $sql);
      if ($result) {
        header('location:select.php');
        // echo 'Date inserted succesfull';
           $conn->close();
      } else {
        die(mysqli_error($conn));
      }
    } else {
      die(mysqli_error($conn));
    }
  }

  // $conn->close();
  ?>

<div class="container">
    <p>Get In Touch</p>
    <form action="/phplearn/index.php" method="post">
      <input type="text" class="fname"  placeholder="First Name" name="fname">
      <input type="text" class="fname" placeholder="Last Name" name="lname"><br>
      <input type="email" class="fname" placeholder="Email" name="email">
      <input type="number" class="fname" placeholder="Phone" name="phone"><br>
      <input type="text" class="fname" placeholder="Address" size="49" name="address" ><br>
      <input type="text" class="fname" placeholder="Type Your Message Here" size="49" name="messege"><br>
      <button type="submit">Submit</button>
    </form>
  </div>
</body>

</html>