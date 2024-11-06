<?php
  $servername = "localhost";
  $username = "root";
  $password = "";


  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
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
      $sql = "UPDATE data SET fname='$fname', lname='$lname', email='$email', phone='$phone' , address='$address' , messege='$messege'   WHERE id=$id";
    //   $sql = "UPDATE data SET [fname,lname,email,phone,address,messege] = ['$fname','$lname','$email','$phone','$address','$messege']  WHERE id=$id";
      $result = mysqli_query($conn, $sql);
      if ($result) {
        // echo 'Date inserted succesfull';
        header('location:select.php');
      } else {
        die(mysqli_error($conn));
      }
    } else {
      die(mysqli_error($conn));
    }
  }

  ?>