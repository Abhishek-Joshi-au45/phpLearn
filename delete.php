<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Page</title>
    <link rel="icon" type="image/x-icon" href="happy-face.png">
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <div class="container">
        <p>Get In Touch</p>
        <form action="/phplearn/delete.php" method="post">
            <input type="number" class="fname" placeholder="Enter Unique Id to delete" name="id"><br>
            <button type="submit">Submit</button>
        </form>
    </div>
    <?php
     $servername = "localhost";
     $username = "root";
     $password = "";  
   
   
     if ($_SERVER["REQUEST_METHOD"] == "POST") {
       $id = $_POST['id'];
          
       // Create connection
       $conn = new mysqli($servername, $username, $password, "form");
   
       // Check connection
       if ($conn) {
        //  echo 'Connection Succesfull.<br><br>';
         $sql = "DELETE FROM data WHERE id=$id";
       //   $sql = "UPDATE data SET [fname,lname,email,phone,address,messege] = ['$fname','$lname','$email','$phone','$address','$messege']  WHERE id=$id";
         $result = mysqli_query($conn, $sql);
         if ($conn->query($sql) === TRUE) {
            // echo "Record deleted successfully";
            header('location:select.php');
          } else {
            echo "Error deleting record: " . $conn->error;
          }
          $conn->close();
       } else {
         die(mysqli_error($conn));
       }
     }
   
     ?>
</body>

</html>