<?php
include('connect.php');

$name = $_POST['name'];
$mobile = $_POST['mobile'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];
$address = $_POST['address'];

$image = $_FILES['photo']['name'];
$tmp_name = $_FILES['photo']['tmp_name'];

$role = $_POST['role'];

if ($password == $cpassword) {
    move_uploaded_file($tmp_name, "../uploads/".$image);

    $sql = "INSERT into user (name,mobile,password,address,photo,role,status,vote)values('$name','$mobile','$password','$address','$image','$role',0,0)";
   
    $insert = mysqli_query($connect, $sql);
    if ($insert) {
        echo '
    <script>
    alert("Registration succesfull");
    window.location= "../";
    </script> ';
    } 
    else {
        echo '
    <script>
    alert("some errer")
    window.location= "../route/regiter.html"
    </script> ';
    }
} else {
    echo '
    <script>
    alert("password did not match")
    window.location= "../route/regiter.html"
    </script> ';
}

?>