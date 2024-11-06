<?php
include 'connect.php'
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container my-5">
        <button class="btn btn-primary">
            <a href="user.php" class="text-light">Add user</a>
        </button>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">sl no</th>
                    <th scope="col">Name</th>
                    <th scope="col">email</th>
                    <th scope="col">mobile</th>
                    <th scope="col">password</th>
                    <th scope="col">operation</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "select * from crud";
                $result = mysqli_query($con, $sql);
                if($result) {
                    // $row = mysqli_fetch_assoc($result);
                    // echo $row['name'];
                
                    while($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id'];
                        $name = $row['name'];
                        $email = $row['email'];
                        $mobile = $row['mobile'];
                        $password = $row['password'];
                        echo '<tr>
            <th scope="row">'.$id.'</th>
            <td>'.$name.'</td>
            <td>'.$email.'</td>
            <td>'.$mobile.'</td>
            <td>'.$password.'</td>
            <td>
                    <button class="btn btn-primary"><a href="update.php?updateid='.$id.'" class="text-light">Update</a></button>
                    <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light">Delete</a></button>
            </td>
          </tr>';
                    }
                }

                ?>

                
    </div>

</body>

</html>