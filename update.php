<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Page</title>
    <link rel="icon" type="image/x-icon" href="happy-face.png">
    <link rel="stylesheet" href="index.css">

</head>

<body>
    <div class="container">
        <p>Update</p>
        <form action="/phplearn/updateValue.php" method="post">
            <input type="number" class="fname" placeholder="Enter Unique Id to updtae" name="id"><br>
            <input type="text" class="fname" placeholder="First Name" name="fname">
            <input type="text" class="fname" placeholder="Last Name" name="lname"><br>
            <input type="email" class="fname" placeholder="Email" name="email">
            <input type="number" class="fname" placeholder="Phone" name="phone"><br>
            <input type="text" class="fname" placeholder="Address" size="49" name="address"><br>
            <input type="text" class="fname" placeholder="Type Your Message Here" size="49" name="messege"><br>
            <button type="submit">Submit</button>
        </form>
    </div>
</body>

</html>