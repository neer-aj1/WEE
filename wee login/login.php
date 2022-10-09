<?php      
    include('connection.php');  
    $username = $_POST['user'];  
    $password = $_POST['pass'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select *from login where username = '$username' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            echo "<h1><center> Login successful </center></h1>";  
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }     
?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="loginstyle.css">
    <title>Login Page</title>
</head>
<body>
    <div class="login">
        <body>
          <!-- partial:index.partial.html -->
          <div class="box-form">
            <div class="left">
              <div class="overlay">
                  <h1>WEE</h1>
                <p class="left-des">
                  WEE is a platform which provides emegents women enterprenuers to
                  access funding to investors as well as share their inspiratonal
                  journey.
                </p>
              </div>
            </div>
    
            <div class="right">
              <h5 class="right-heading">Login</h5>
              
              <div class="inputs">
                <input type="text" placeholder="User name" name="user"/>
                <br />
                <input type="password" placeholder="Password" name="pass"/>
              </div>
    
              <br /><br />
    
              <div class="forget-password">
                <p>Forget Password?</p>
              </div>
              
              <br />
              <button>Login</button>
              <br> <br> <br>
              <p class="right-des">
                Don't have an account?<br> <a href="../signup/signup.html" target="_blank"> Create your Account</a> it takes
                less than a minute.
              </p>
            </div>
          </div>
          <!-- partial -->
        </body>
      </div>
</body>
</html>