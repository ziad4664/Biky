<?php
include('connection.php');
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "select * from login where Email = '$email' and password = '$password'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);

    if($count==1) {
   header("Location:welcome.php");
   
    }
    else {
        echo '<script>
        window.location.href = "http://localhost/phpLoginForm/";
        alert("Login Failed. Invalid Username Or Password !!!")
        </script>';
    }
?>