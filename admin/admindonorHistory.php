<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/table.css">
    <script src="https://kit.fontawesome.com/3dbbd58a4c.js" crossorigin="anonymous"></script>
    <title>Admin Donor History </title>
    <style>
        .addInfo{
            display: inline-block;
            margin-left: 100px;
        }
        .search{
            display: inline-block;
            float: right;
            margin-right: 100px;
        }
    </style>
</head>
<body>
    <?php include ('adminHeader.php')?>
    <div class="title">
        <h1>Donor History</h1>
    </div>
    <div class="addInfo">
        <h4>Add Donor Information:</h4>
        <button class="add"><a href="add.php">Add</a></button>
    </div>
    <div class="search">
        <h4>Search</h4>
        <input type="search" value="">
        <i class="fa-solid fa-magnifying-glass"></i>
    </div>
    
    <div class="main">
    <table class="content-table">
        <thead>
            <tr>
                <th>S.N</th>
                <!-- <th>Id</th> -->
                <th>Name</th>
                <th>Email</th>
                <th>Age</th>
                <th>Gender</th>
                <th>BloodGroup</th>
                <th>History</th>
                <th>Contact</th>
                <th>Address</th>
                <th>Action</th>
            </tr>
        </thead>
    </div>

    <?php

    include "../connection/config.php";

    $data_per_page = 5;

    if(isset($_GET['pages'])){
        $page = $_GET["pages"];
    }else{
        $page = 1;
    }

    $start_form = ($page-1)*$data_per_page;
    $selectQuery = "SELECT * FROM `donorhistory` limit $start_form,$data_per_page";

    

    // $selectQuery = "SELECT * FROM donorhistory";

    $result = mysqli_query($conn, $selectQuery); 

    if(mysqli_num_rows($result)){
        $i = 1;
        while($row = mysqli_fetch_assoc($result)){
        

?>
    <tbody>
    <tr>
        <td><?php echo $i;?></td>
        <!-- <td><?php echo $row ['Id'];?></td> -->
        <td><?php echo $row ['Name']?></td>
        <td><?php echo $row ['Email']?></td>
        <td><?php echo $row ['Age']?></td>
        <td><?php echo $row ['Gender']?></td>
        <td><?php echo $row ['BloodGroup']?></td>
        <td><?php echo $row ['History']?></td>
        <td><?php echo $row ['Contact']?></td>
        <td><?php echo $row ['Address']?></td>
        <td>   
            <button class="edit">
                <a href="edit.php?id=<?php echo $row['Id'];?>">Edit</a>
            </button> 
            <button class="delete">
                <a href="delete.php?id=<?php echo $row['Id'];?>" onclick="return confirm('Do you want to delete ?')";>Delete</a>
            </button>
        </td>
    </tr>
        <?php
        $i++;
        }
    }
        ?>
    </tbody>
    </table>
</body>
</html>