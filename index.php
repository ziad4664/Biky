<?php
include("connection.php")
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./bike.css">
    <title>Document</title>
    <link rel="stylesheet" href="./index.css">
  </head>
  <body>
    <h1>Welcome!</h1>
    <form name="form" method="POST" action="login.php" onsubmit="return isValid()">
        <div class="container"> 
        <label for="txtbox1">Email</label>
        <input id="txtbox1" type="email" name="email" placeholder="Enter Email" required /><br>
        <label for="txtbox2">Password</label>
        <input id="txtbox2" type="password" placeholder="Enter password" name="password" required/> </br>
      <div class="submitionSection-section">
        <button type="submit">
          Login
        </button>
       <div>
        <label for="check">remember me</label>
        <input id ="check" type="checkbox">
       </div>
      </div>
      </form>
      <script>
        function isValid() {
            let userEmail = document.form.txtbox1.value;
            let userPass = document.form.txtbox2.value;

            if(userEmail.length === 0 && userPass.length === 0) {
                alert("Username and Password Fields Are Empty !!")
                return false;
            }else {
                if(userEmail.length === 0) {
                    alert("Username is Empty !!");
                    return false
                }
                if(userPass.length === 0) {
                    alert("userPassword is Empty !!");
                    return false
                }
            }
        }
      </script>
  </body>
</html>