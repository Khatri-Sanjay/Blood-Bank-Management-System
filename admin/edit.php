<?php
    include "../connection/config.php";

    $id = $_GET['id'];

    $query = "SELECT * FROM donorhistory WHERE Id=$id";

    $result = mysqli_query($conn,$query);

    $row = mysqli_fetch_assoc($result);   //fetch single row

    // print_r($row);

    // exit();

?>


<?php

if(isset($_POST['submit'])) {
    $name = $_POST['Name'];
    $history = $_POST['History'];
    $email = $_POST['Email'];
    $age = $_POST['Age'];
    $bloodGroup = $_POST['BloodGroup'];
    $gender = $_POST['Gender'];
    $contact = $_POST['Contact'];
    $address = $_POST['Address'];

    $update = "UPDATE donorhistory SET Name='$name', Email='$email', BloodGroup='$bloodGroup', Gender='$gender', Contact='$contact', Address='$address', History='$history' WHERE Id=$id";

    if(mysqli_query($conn,$update)){
        echo '<script>alert("Update succesfully")</script>';
       
    } else {
        echo '<script>alert("Unable to Update")</script>';
    }
    
    header("Location: ../admin/admindonorHistory.php");
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/form.css">
    <link rel="stylesheet" href="../css/table.css">
    <title>Donate Blood Form</title>
</head>

<body>
    
    <?php include '../admin/adminHeader.php'?>

    <div class="title">
        <h1>Edit Donor History Information</h1>
    </div>

    <br>

    <center>
    <div class="container">
        <div class="content">
        <form action="" method="POST">
            <div class="user-details">

            <div class="input-box">
                <span class="details">Full Name</span>
                <input type="text" placeholder="Enter your name"  name="Name" 
                value=<?php echo $row['Name']?> maxlength = "40" required>
            </div>

            <div class="input-box">
                <span class="details">Email</span>
                <input type="email" placeholder="Enter your email" name="Email" 
                value=<?php echo $row['Email']?> required>
            </div>

            <div class="input-box">
                <span class="details">Phone Number</span>
                <input type="number" placeholder="Enter your number" name="Contact" 
                value=<?php echo $row['Contact']?> max = "9999999999" required>
            </div>

            <div class="input-box">
                <span class="details">Age</span>
                <input type="number" placeholder="Enter your age" name="Age" 
                value=<?php echo $row['Age']?> max="99" required>
            </div>

            <div class="input-box">
                <span class="details">History</span>
                <input type="text" placeholder="Enter donor history" name="History" 
                value=<?php echo $row['History']?> required>
            </div>

            <div class="input-box">
                <span class="details">Adderss</span>
                <input type="text" placeholder="Enter your address" name="Address" 
                value=<?php echo $row['Address']?> maxlength = "20" required>
            </div>

            <div class="input-box">
                <span class="details">Choose Blood Group</span>

                <select id="BloodGroup" name="BloodGroup" 
                value=<?php echo $row['BloodGroup']?> required>

                    <option value="A+ve"
                    <?php if($row['BloodGroup'] == 'A+ve'){ 
                        ?> selected <?php
                    } ?>
                    >A+ve</option>

                    <option value="A-ve"
                    <?php if($row['BloodGroup'] == 'A-ve'){ 
                        ?> selected <?php
                    } ?>
                    >A-ve</option>

                    <option value="B+ve"
                    <?php if($row['BloodGroup'] == 'B+ve'){ 
                        ?> selected <?php
                    } ?>
                    >B+ve</option>

                    <option value="B-ve"
                    <?php if($row['BloodGroup'] == 'B-ve'){ 
                        ?> selected <?php
                    } ?>
                    >B-ve</option>

                    <option value="AB+ve"
                    <?php if($row['BloodGroup'] == 'AB+ve'){ 
                        ?> selected <?php
                    } ?>
                    >AB+ve</option>

                    <option value="AB-ve"
                    <?php if($row['BloodGroup'] == 'AB-ve'){ 
                        ?> selected <?php
                    } ?>
                    >AB-ve</option>

                    <option value="O+ve"
                    <?php if($row['BloodGroup'] == 'O+ve'){ 
                        ?> selected <?php
                    } ?>
                    >O+ve</option>

                    <option value="O-ve"
                    <?php if($row['BloodGroup'] == 'O-ve'){ 
                        ?> selected <?php
                    } ?>
                    >O-ve</option>

                </select>
            </div>

            <div class="input-box">
                <span class="details">Gender</span>
                <select name="Gender" id="Gender" 
                value=<?php echo $row['Gender']?> required>

                    <option value="Male"
                    <?php if($row['Gender'] == 'Male'){ 
                        ?> selected <?php
                    } ?>
                    >Male</option>

                    <option value="Female"
                    <?php if($row['Gender'] == 'Female'){ 
                        ?> selected <?php
                    } ?>
                    >Female</option>

                    <option value="Others"
                    <?php if($row['Gender'] == 'Others'){ 
                        ?> selected <?php
                    } ?>
                    >Others</option>

                </select>
            </div>

            </div>

            <div class="button">
                <input type="submit" value="Submit" name="submit">
            </div>

        </form>
        </div>
    </div>
    </center>

</body>
</html>