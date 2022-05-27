<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="../css/admin.css">
  
</head>

<body>
        <div class="signOut-buttons">
            <a href = "../logout.php" class="signOut">Sign out</a>            
        </div>

    <div class="side-nav">
        <header>BloodBank</header>
        <ul>
    
            <a href="#">
                <li><span class="menu">Dashboard</span></li>
            </a>
            <a href="donorInfo.php">
                <li><span class="menu">Donor Info</span></li>
            </a>
            <a href="requestInfo.php">
                <li><span class="menu">Request Info</span></li>
            </a>
            <a href="admindonorHistory.php">
                <li><span class="menu">Donor History</span></li>
            </a>
        
        </ul>  
    </div>
    <div class="content">
        
            <div class="header">
                Hello <?php 
                            echo $_SESSION['username']; 
                        ?>
            </div>
            <p>
                Welcome to Admin Dashboard
            </p>
    </div>

</body>
</html>