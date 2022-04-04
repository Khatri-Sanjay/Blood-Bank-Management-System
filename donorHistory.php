<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/table.css">
    <title>Donor History </title>
    <style>
        .main{
            font-size: 20px;
        }
    </style>
</head>
<body>

    <?php include 'header.php'?>
    <div class="title">
        <h1>Donor History</h1>
    </div>
    
    <div class="main">
    <table class="content-table">
        <thead>
            <tr>
                <th>S.N</th>
                <th>Name</th>
                <th>Email</th>
                <th>Age</th>
                <th>Gender</th>
                <!-- <th>BloodGroup</th> -->
                <!-- <th>Contact</th> -->
                <th>Address</th>
            </tr>
        </thead>
    </div>

    <?php
    include "connection/config.php";

    $selectQuery = "SELECT * FROM donorHistory";

    $result = mysqli_query($conn, $selectQuery);  //

    if(mysqli_num_rows($result)){
        $i = 1;
        while($row = mysqli_fetch_assoc($result)){
        

?>
    <tbody>
    <tr>
        <td><?php echo $i;?></td>
        <td><?php echo $row ['Name']?></td>
        <td><?php echo $row ['Email']?></td>
        <td><?php echo $row ['Age']?></td>
        <td><?php echo $row ['Gender']?></td>
        <!-- <td><?php echo $row ['BloodGroup']?></td> -->
        <!-- <td><?php echo $row ['Contact']?></td> -->
        <td><?php echo $row ['Address']?></td>
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