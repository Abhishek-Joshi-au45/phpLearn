<?php

session_start();
include('../api/connect.php');
if (!isset($_SESSION["userdata"])) {
    header("location:../");
}


$sqlG = "SELECT * FROM user WHERE vote = (SELECT MAX(vote) FROM user)";
$checkG = mysqli_query($connect, $sqlG);
$groupsdata = mysqli_fetch_array($checkG);

// print_r($groupsdata);
// echo $groupsdata['name'];

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #Profile {
            background-color: wheat;
            padding: 50px;
            border-radius: 12px;
            width: 25%;
            margin: 0 auto;
            text-align: center;
        }
        #total{
            background-color: red;
            padding: 10px;
            font-size: 22px;
            color: wheat;
        }
    </style>
</head>

<body>
    <div id="Profile">
        <p id="total">Total Votes :
            <?php 
                $sql = "SELECT sum(vote) FROM user";
                $check = mysqli_query($connect, $sql);
                $total_votes = mysqli_fetch_array($check);
              //  print_r($total_votes);
                echo $total_votes[0];
            ?>
        </p><br><br>
        <img src="../uploads/<?php echo $groupsdata['photo'] ?>" alt="User Image" height="100px" width="100px">
        <br><br> <b>Name :
            <?php echo $groupsdata['name'] ?>
        </b><br><br>
        <b>Mobile :
            <?php echo $groupsdata['mobile'] ?>
        </b><br><br>
        <b>Address :
            <?php echo $groupsdata['address'] ?>
        </b><br><br>
        <b>Votes Gets:
            <?php echo $groupsdata['vote'] ?>
        </b><br><br>
        
    </div>
</body>

</html>