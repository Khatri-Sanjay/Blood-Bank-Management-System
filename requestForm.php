<?php

if(isset($_POST['submit'])) {
    include ("connection/config.php");
    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $age = $_POST['Age'];
    $citizenShip_No = $_POST['CitizenShip_No'];
    $bloodGroup = $_POST['BloodGroup'];
    $bloodPound = $_POST['BloodPound'];
    $gender = $_POST['Gender'];
    $contact = $_POST['Contact'];
    $address = $_POST['Address'];
    $message = $_POST['Message'];
   
        $sqlquery = "INSERT INTO request (Name, Email, Age, CitizenShip_No, BloodGroup, BloodPound, Gender, Contact, Address, Message) VALUES ('$name', '$email','$age','$citizenShip_No','$bloodGroup','$bloodPound','$gender','$contact','$address','$message')";

        // echo $sqlquery;

        if (mysqli_query($conn, $sqlquery)){

            $success = "Request form submit succesfully";
          
            // echo '<script>alert("Request form submit succesfully")</script>';

        } else {
            echo "Error: " . $sqlquery . "<br>" . mysqli_error($conn);
        }
    // }
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/form.css">
    <title>Request Blood Form</title>

    <style>
        .success{
              display: flex;
              justify-content: center;
              color: green;
              font-weight: bold;
          }
    </style>
</head>

<body>
    
<?php include 'header.php'?>


    <marquee behavior="sliding" direction="left" loop="10">
        Donate Blood Save Life &emsp; &emsp; Donate Blood Save Life &emsp; &emsp; 
        Donate Blood Save Life &emsp; &emsp; Donate Blood Save Life &emsp; &emsp; 
        Donate Blood Save Life &emsp; &emsp; Donate Blood Save Life &emsp; &emsp; 
        Donate Blood Save Life &emsp; &emsp; Donate Blood Save Life &emsp; &emsp; 
    </marquee>

    <!-- Backgroud Image Section Starts From Here -->
    <section>
        <div class="image-container">
            <!-- <img src="./image/donate1.jpg" alt="Image"> -->
            <h1>रगत चाहियो ?</h1>
            <h3>Blood Request Form</h3>
        </div>
    </section>

    <div class="success">
    <?php 
    
    error_reporting(E_ERROR | E_PARSE);     

    echo $success; 
    
    ?>

    </div>

    <!-- Donation From Section Starts From Here -->
<center>
  <div class="container">
    <div class="title">Request Form</div>
    <div class="content">

      <form action="" name="regForm" method="POST" onsubmit="return formValidation()">
        <div class="user-details">

          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" placeholder="Enter your name" id="Name" name="Name">
            <span style="color:red" id="rNameErr"></span>
          </div>

          <div class="input-box">
            <span class="details">Email</span>
            <input type="email" placeholder="Enter your email" id="Email" name="Email">
            <span style="color:red" id="rEmailErr"></span>
          </div>

          <div class="input-box">
            <span class="details">Blood Pound</span>
            <input type="number" placeholder="Enter quantity of blood pound" id="BloodPound" name="BloodPound">
            <span style="color:red" id="rBloodPoundErr"></span>
          </div>

          <div class="input-box">
            <span class="details">CitizenShip No.</span>
            <input type="text" placeholder="Enter CitizenShip Number" id="CitizenShip_No" name="CitizenShip_No">
            <span style="color:red" id="rCitizenErr"></span>
          </div>

          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" placeholder="Enter your number" id="Contact" name="Contact">
            <span style="color:red" id="rContactErr"></span>
          </div>

          <div class="input-box">
            <span class="details">Age</span>
            <input type="number" placeholder="Enter your age" id="Age" name="Age">
            <span style="color:red" id="rAgeErr"></span>
          </div>

          <div class="input-box">
            <span class="details">Choose Blood Group</span>
            <select id="BloodGroup" name="BloodGroup">
            <option value="">None</option>
              <option value="A+ve">A+ve</option>
              <option value="A-ve">A-ve</option>
              <option value="B+ve">B+ve</option>
              <option value="B-ve">B-ve</option>
              <option value="AB+ve">AB+ve</option>
              <option value="AB-ve">AB-ve</option>
              <option value="O+ve">O+ve</option>
              <option value="O-ve">O-ve</option>
            </select>
            <br>
            <span style="color:red" id="rBloodGroupErr"></span>
          </div>

          <div class="input-box">
            <span class="details">Gender</span>
            <select id="Gender" name="Gender">
              <option value="">None</option>
              <option name= "Gender" value="Male">Male</option>
              <option name= "Gender" value="Female">Female</option>
              <option name= "Gender" value="Others">Others</option>
            </select>
            <br>
            <span style="color:red" id="rGenderErr"></span>
          </div>

          <div class="input-box">
            <span class="details">Adderss</span>
            <input type="text" placeholder="Enter your address" id="Address" name="Address">
            <span style="color:red" id="rAddressErr"></span>
          </div>

          <div class="input-box">
            <span class="details">Message</span>
            <textarea placeholder="Enter your message . . ." id="Message" name="Message" style="width: 330px;height: 100px; font-size: 16px;  padding-left: 15px; border-radius: 5px; border: 2px solid #ccc;"></textarea>
            <span style="color:red" id="rMessageErr"></span>
          </div>
        </div>

        <div class="button">
          <input type="submit" class="submit" value="Submit" name="submit">
          <!-- <button type="submit" name="submit" id="submit">Submit</button> -->
        </div>
      </form>

    </div>
    </div>
  </div>
</center>

<script src="./js/requestFormValidation.js"></script>

<?php include 'footer.php'?>
