<?php
include("connection/config.php");
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $myusername = $_POST['Uname'];
    $mypassword = md5($_POST['Pass']);

    $sql = "SELECT id, username FROM admin WHERE Username = '$myusername' and Password = '$mypassword'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);

    $count = mysqli_num_rows($result);

    if($count == 1) {
        $username = $row['username'];
        $_SESSION['username'] = $username;

        header("location: admin/adminDashboard.php");
    }else {

        echo '<script>alert("Your Admin Login Name or Password is invalid")</script>';
    }
}
?>

<!DOCTYPE html>    
<html>    
<head>    
    <title>Login Form</title>    
    <link rel="stylesheet" href="css/login.css">   
</head>    
<body>
    <div class="homePage">
        <a href="index.php">
            <button>Go to home page</button>
        </a>
    </div>

    <h1>Login Page</h1><br>

    <div class="login">    
    <form action="" method="POST">    
        <label><b>User Name</b></label>    
        <input type="text" name="Uname" id="Uname" placeholder="Username">    
        <br><br>    
        <label><b>Password</b></label>    
        <input type="Password" name="Pass" id="Pass" placeholder="Password">    
        <br><br>
        <button type="submit" id="log" name="submit">Log In Here</button>
    </form> 
    </div>

</body>    
</html>     