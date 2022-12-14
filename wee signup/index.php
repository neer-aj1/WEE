<?php
$insert = false;
if(isset($_POST['name'])){
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password);

    // Check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    // echo "Success connecting to the db";

    $full_name = $_POST['full_name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phonenum = $_POST['phonenum'];
    $password = $_POST['password'];
    $confirmpass = $_POST['confirmpass'];
    $category = $_POST['category'];
    $gender = $_POST['gender'];
    $sql = "INSERT INTO `hmm`.`hmm` ( `full_name`,`username`, `email`, `phonenum`, `password`, 'confirmpass', 'category', 'gender') VALUES ('$full_name', '$username', '$email', '$phonenum', '$password','$confirmpass','$category','$gender');";
    // echo $sql;

    // Execute the query
    if($con->query($sql) == true){
        // echo "Successfully inserted";

        // Flag for successful insertion
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    // Close the database connection
    $con->close();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="signupstyle.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- GOOGLE FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap%27);"
        rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" href="signupstyle.css">
</head>

<body>
    <div class="storage">
        <div class="title">Registration</div>
        <div class="content">
            <form action="#">
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">Full Name</span>
                        <input class="inp-box" type="text" placeholder="Enter your name" required name="full_name" />
                    </div>
                    <div class="input-box">
                        <span class="details">Username</span>
                        <input class="inp-box" type="text" placeholder="Enter your username" required name="username" />
                    </div>
                    <div class="input-box">
                        <span class="details">Email</span>
                        <input class="inp-box" type="text" placeholder="Enter your email" required name="email" />
                    </div>
                    <div class="input-box">
                        <span class="details">Phone Number</span>
                        <input class="inp-box" type="text" placeholder="Enter your number" required name="phonenum" />
                    </div>
                    <div class="input-box">
                        <span class="details">Password</span>
                        <input class="inp-box" type="text" placeholder="Enter your password" required name="password" />
                    </div>
                    <div class="input-box">
                        <span class="details">Confirm Password</span>
                        <input class="inp-box" type="text" placeholder="Confirm your password" required
                            name="confirmpass" />
                    </div>
                    <label for="category-select" class="details"> Select Category:</label>
                    <select class="opt-select" name="category" id="category-select">
                        <option class="opt" value="">Please choose an option</option>
                        <option value="Education">Education</option>
                        <option value="Agriculture">Agriculture</option>
                        <option value="IT">IT</option>
                        <option value="Entertainment">Entertainment</option>
                        <option value="MSME">MSME</option>
                    </select>
                </div>
                <div class="full_name-details">
                    <input type="radio" name="gender" id="dot-1" value="m" />
                    <input type="radio" name="gender" id="dot-2" value="f" />
                    <input type="radio" name="gender" id="dot-3" value="n " />
                    <span class="gender">Gender</span>
                    <div class="category">
                        <label for="dot-1">
                            <span class="dot one"></span>
                            <span class="gender">Male</span>
                        </label>
                        <label for="dot-2">
                            <span class="dot two"></span>
                            <span class="gender">Female</span>
                        </label>
                        <label for="dot-3">
                            <span class="dot three"></span>
                            <span class="gender">Prefer not to say</span>
                        </label>
                    </div>
                </div>
                <div class="button">
                    <input type="submit" value="Register" />
                </div>
            </form>
        </div>
    </div>
    <script src="index.js"></script>
</body>

</html>