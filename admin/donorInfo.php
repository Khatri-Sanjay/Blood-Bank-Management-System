<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/table.css">
    <title>Blood Donor Info</title>

</head>
<body>
    <?php include ('adminHeader.php')?>

    <div class="title">
        <h1>Blood Donor Information</h1>
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
                <th>CitizenShip_No</th>
                <th>BloodGroup</th>
                <th>Gender</th>
                <th>Contact</th>
                <th>Address</th>
                <th>Status</th>
                <th>Message</th>
                <th>Action</th>
            </tr>
        </thead>
    </div>

    <?php
    include "../connection/config.php";
    $selectQuery = "SELECT * FROM donor";

    $result = mysqli_query($conn, $selectQuery);  //

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
        <td><?php echo $row ['CitizenShip_No']?></td>
        <td><?php echo $row ['BloodGroup']?></td>
        <td><?php echo $row ['Gender']?></td>
        <td><?php echo $row ['Contact']?></td>
        <td><?php echo $row ['Address']?></td>
        <td>
            <?php
                if ($row['Status']==0){
                    echo
                    '<p>Pending...</p>';
                }else if ($row['Status']==1){
                    echo
                    '<p>Approved</p>';
                }else if($row['Status']==2){
                    echo
                    '<p>Rejected</p>';
                }
            ?>
        </td>
        <td><?php echo $row ['Message']?></td>
        <td>
            <button class="approve">
                <a href="../approveReject/donorStatus.php?requestId=<?php echo $row ['Id'];?>&status=1" onclick = "sendMail('<?php echo $row['Email'];?>')">Approve</a>
            </button>
            <button class="reject">
                <a href="../approveReject/donorStatus.php?requestId=<?php echo $row ['Id'];?>&status=2" onclick = "sendMail('<?php echo $row['Email'];?>')">Reject</a>
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

    <script>
      function sendMail(m){
         parent.location = "mailto:"+m;
      }
    </script> 
</body>
</html>