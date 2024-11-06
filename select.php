<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get</title>
</head>
<body>
    
<button><a href="Form.php">Add User</a></button>
<button><a href="update.php">Update User</a></button>



<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password, "form");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Perform a SELECT query to fetch all data from the 'data' table
$sql = "SELECT * FROM data";
$result = $conn->query($sql);

// Check if there are rows in the result set
if ($result->num_rows > 0) {
    echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Message</th>
            </tr>";

    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['fname']}</td>
                <td>{$row['lname']}</td>
                <td>{$row['email']}</td>
                <td>{$row['phone']}</td>
                <td>{$row['address']}</td>
                <td>{$row['messege']}</td>
            </tr>";
    }

    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();





if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
       
    // Create connection
    $conn = new mysqli($servername, $username, $password, "form");

    // Check connection
    if ($conn) {
    //   echo 'Connection Succesfull.<br><br>';
      $sql = "DELETE FROM data WHERE id=$id";
      $result = mysqli_query($conn, $sql);
      if ($conn->query($sql) === TRUE) {
        //  echo "Record deleted successfully";
        header('location:select.php');
       } else {
         echo "Error deleting record: " . $conn->error;
       }
    } else {
      die(mysqli_error($conn));
    }
  }
//   $conn->close();

?>


<div class="container">
        <p>Deleting </p>
        <form action="/phplearn/select.php" method="post">
            <input type="number" class="fname" placeholder="Enter Unique Id to delete" name="id"><br>
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>