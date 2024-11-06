<?php
session_start();
if (!isset($_SESSION["userdata"])) {
    header("location:../");
}

$userdata = $_SESSION['userdata'];
$groupsdata = $_SESSION['groupsdata'];

if ($_SESSION['userdata']['status'] == 0) {
    $status = '<b style="color:red"> Not Voted</b>';
    echo $_SESSION['userdata']['status'] ;
} else {
    $status = '<b style="color:green">Voted</b>';
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../css/stylesheet.css">
    <style>
        #Profile {
            background-color: white;
            padding: 50px;
            border-radius: 12px;
            width: 25%;
            /* float: left; */
        }
        
        #Group{
            background-color: wheat;
            padding: 50px;
            border-radius: 12px;
            width: 45%;
            /* float: right; */
        }
        .middle {
            display: flex;
            justify-content: space-around;
        }

        img {
            border-radius: 50%;
        }
        #uper{
            display: flex;
            justify-content: space-around;
            margin-top: 20px;
        }
        #voted{
            background-color: green;
        }
    </style>
</head>

<body>
    <div id="mainDiv">
        <div id="uper">
        <a href="../"><button class="btn">Back</button></a>
        <h1>Online voting system</h1>
        <a href="logout.php"><button class="btn">Logout</button></a>
        </div>
        <hr>

        <div class="middle">
            <div id="Profile">
                <img src="../uploads/<?php echo $userdata['photo'] ?>" alt="User Image" height="100px" width="100px">
                <br><br> <b>Name :
                    <?php echo $userdata['name'] ?>
                </b><br><br>
                <b>Mobile :
                    <?php echo $userdata['mobile'] ?>
                </b><br><br>
                <b>Address :
                    <?php echo $userdata['address'] ?>
                </b><br><br>
                <b>Status :
                    <?php echo $status ?>
                </b><br><br>
            </div>

            <div id="Group">
                <?php
                if ($_SESSION['groupsdata']) {
                    for ($i = 0; $i < count($groupsdata); $i++) {
                        ?>
                        <div>
                            <img src="../uploads/<?php echo $groupsdata[$i]['photo'] ?>" alt="GroupImage" height="100px"
                                width="100px">
                            <br><br><b>GroupName :
                                <?php echo $groupsdata[$i]['name'] ?>
                            </b><br><br>
                            <b>Votes :
                                <?php echo $groupsdata[$i]['vote'] ?>
                            </b><br><br>
                            <form action="../api/vote.php" method="post">
                                <input type="hidden" name="gvotes" value="<?php echo $groupsdata[$i]['vote'] ?>" />
                                <input type="hidden" name="gid" value="<?php echo $groupsdata[$i]['id'] ?>" />
                                <?php
                                if($_SESSION['userdata']['status']==0){
                                    ?>
                                    <input type="submit" name="votebtn" value="vote" class="btn" />
                                    <?php
                                }
                                else{
                                    ?>
                                    <button class="btn" id="voted" disabled>Voted</button>
                                    <?php
                                }
                                ?>
                            </form>
                        </div>
                        <hr>
                        <?php
                    }
                }
                ?>
            </div>

        </div>
    </div>

</body>

</html>