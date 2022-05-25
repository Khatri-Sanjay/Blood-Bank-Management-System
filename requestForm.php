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
            echo '<script>alert("Request form submit succesfully")</script>';
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

  <br>
    <!-- Donation From Section Starts From Here -->
<center>
  <div class="container">
    <div class="title">Request Form</div>
    <div class="content">
      <form action="" method='POST'>
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" placeholder="Enter your name" name="Name" maxlength="40" required >
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" placeholder="Enter your email" name="Email" required>
          </div>
          <div class="input-box">
            <span class="details">Blood Pound</span>
            <input type="number" placeholder="Enter how many pound of blood do you need" name="BloodPound" min="1" max="10" required>
          </div>
          <div class="input-box">
            <span class="details">CitizenShip No.</span>
            <input type="text" placeholder="Enter CitizenShip Number" name="CitizenShip_No" required>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="number" placeholder="Enter your number" name="Contact" max="9999999999" required>
          </div>
          <div class="input-box">
            <span class="details">Age</span>
            <input type="number" name="Age" placeholder="Enter your age" max="99" required>
          </div>
          <div class="input-box">
            <span class="details">Choose Blood Group</span>
            <select id="bGroup" name="BloodGroup" required>
              <option value="A+ve">A+ve</option>
              <option value="A-ve">A-ve</option>
              <option value="B+ve">B+ve</option>
              <option value="B-ve">B-ve</option>
              <option value="AB+ve">AB+ve</option>
              <option value="AB-ve">AB-ve</option>
              <option value="O+ve">O+ve</option>
              <option value="O-ve">O-ve</option>
              <option value="None" selected>None</option>
            </select>
          </div>
          <div class="input-box">
            <span class="details">Gender</span>
            <select  name="Gender" required >
              <option name= "Gender" value="Male">Male</option>
              <option name= "Gender" value="Female">Female</option>
              <option name= "Gender" value="Others">Others</option>
              <option value="None" selected>None</option>
            </select>
          </div>
          <div class="input-box">
            <span class="details">Adderss</span>
            <input type="text" placeholder="Enter your address" name="Address" required>
          </div>
          <div class="input-box">
            <span class="details">Message</span>
            <textarea rows="4" cols="40" placeholder="Enter your message" name="Message" required></textarea>
          </div>
        </div>
        <div class="button">
          <input type="submit" value="Submit" name="submit">
          <!-- <button type="submit" name="submit" id="submit">Submit</button> -->
        </div>
      </form>
    </div>
  </div>
</center>
<br>

<?php include 'footer.php'?>

<script>
  
</script>

</body>

</html>