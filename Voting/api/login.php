<?php
session_start();
include('connect.php');

$mobile = $_POST['mobile'];
$password = $_POST['password'];
$role = $_POST['role'];

if($mobile and $password and $role) {



$sql = "SELECT * FROM user WHERE mobile='$mobile' and password='$password' and role='$role' ";
   
$check = mysqli_query($connect, $sql);

if (mysqli_num_rows($check) > 0) {
$userdata = mysqli_fetch_array($check);

$groups = mysqli_query($connect, "SELECT *FROM user WHERE role=2");
$groupsdata = mysqli_fetch_all($groups,MYSQLI_ASSOC);

$_SESSION["userdata"]["id"] = $userdata["id"];
echo $_SESSION["userdata"]["id"] ;
$_SESSION["groupsdata"] = $groupsdata;

echo '
    <script>
    window.location= "../route/dashboard.php"
    </script> ';

}
else
{
    echo '
    <script>
    alert("Invalid Credential or User is not registered ... Plz register")
    window.location= "../index.html"
    </script> ';
}

}
else{
    echo 'Enter all the required Inputs ';
}
?>