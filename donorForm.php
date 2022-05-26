

<?php

error_reporting(E_ERROR | E_PARSE);  

if(isset($_POST['submit'])) {
    include ("connection/config.php");
    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $age = $_POST['Age'];
    $citizenShip_No = $_POST['CitizenShip_No'];
    $bloodGroup = $_POST['BloodGroup'];
    $gender = $_POST['Gender'];
    $contact = $_POST['Contact'];
    $address = $_POST['Address'];
    $message = $_POST['Message'];
   
        $sqlquery = "INSERT INTO donor (Name, Email, Age, CitizenShip_No, BloodGroup, Gender, Contact, Address, Message) VALUES ('$name', '$email','$age','$citizenShip_No','$bloodGroup','$gender','$contact','$address','$message')";

        // echo $sqlquery;

        if (mysqli_query($conn, $sqlquery)){
            echo '<script>alert("Donate Form submit succesfully")</script>';
        } else {
            echo "Error: " . $sqlquery . "<br>" . mysqli_error($conn);
        }
    
}

?>

<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/form.css">
    <title>Donate Blood Form</title>
    
    
</head>

<body>
    
  <?php include 'header.php'?>

    <marquee behavior="sliding" direction="left" loop="10">
        Donate Blood Save Life &emsp; &emsp; Donate Blood Save Life &emsp; &emsp; 
        Donate Blood Save Life &emsp; &emsp; Donate Blood Save Life &emsp; &emsp; 
        Donate Blood Save Life &emsp; &emsp; Donate Blood Save Life &emsp; &emsp; 
        Donate Blood Save Life
    </marquee>

    <!-- Backgroud Image Section Starts From Here -->
    <section>
        <div class="image-container">
            <!-- <img src="./image/donate1.jpg" alt="Image"> -->
            <h1>रक्तदान जीवनदान</h1>
            <h3>Donate Blood, Save life</h3>
        </div>
    </section>

  <br>
    <!-- Donation From Section Starts From Here -->
<center>
  <div class="container">
    <div class="title">Donate Form</div>
    <div class="content">

      <form action="" name="regForm" method="POST" onsubmit="return formValidation()">

        <div class="user-details">

          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" placeholder="Enter your name" id="Name" name="Name" required>
            <span style="color:red" id="rNameErr"></span>
          </div>

          <div class="input-box">
            <span class="details">Email</span>
            <input type="email" placeholder="Enter your email" id="Email" name="Email" required>
            <span style="color:red" id="rEmailErr"></span>
          </div>

          <div class="input-box">
            <span class="details">CitizenShip No.</span>
            <input type="text" placeholder="Enter CitizenShip Number" id="CitizenShip_No" name="CitizenShip_No" required>
            <span style="color:red" id="rCitizenErr"></span>
          </div>

          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" placeholder="Enter your number" id="Contact" name="Contact"  required>
            <span style="color:red" id="rContactErr"></span>
          </div>

          <div class="input-box">
            <span class="details">Age</span>
            <input type="text" placeholder="Enter your age" id="Age" name="Age" required>
            <span style="color:red" id="rAgeErr"></span>
          </div>

          <div class="input-box">
            <span class="details">Adderss</span>
            <input type="text" placeholder="Enter your address" id="Address" name="Address" required>
            <span style="color:red" id="rAddressErr"></span>
          </div>

          <div class="input-box">
            <span class="details">Choose Blood Group</span>
            <select id="BloodGroup" name="BloodGroup" required>
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
            <span style="color:red" id="rBloodGroupErr"></span>
          </div>

          <div class="input-box">
            <span class="details">Gender</span>
            <select id="Gender" name="Gender" required>
              <option value="">None</option>
              <option value="Male">Male</option>
              <option value="Female">Female</option>
              <option value="Others">Others</option>
            </select>
            <span style="color:red" id="rGenderErr"></span>
          </div>

          <div class="input-box">
            <span class="details">Message</span>
            <textarea id="Message" name="Message" placeholder="Enter your message . . ."   
            style="width: 350px;height: 100px; font-size: 16px;  padding-left: 15px; border-radius: 5px; border: 2px solid #ccc;" required></textarea>
          </div>

        </div>

        <div class="button">
          <input type="submit" class="submit" value="Submit" name="submit">
        </div>

      </form>

    </div>
    </div>
  </div>
</center>


<br>

<?php include 'footer.php'?>

<script src="./js/formValidation.js "></script>

</body>
</html>
