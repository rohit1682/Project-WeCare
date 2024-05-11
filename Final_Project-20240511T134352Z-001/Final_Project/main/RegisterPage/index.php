<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Register</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="style1.css">
    
</head>

<body>

<div class="container">

      <div class="text">
         Welcome to Golden Hearts
         <div class="underline"></div>
      </div>
      <form action="#" method="post" novalidate>

         <div class="form-row">

            <div class="input-data">
               <input type="text" name="fname" required>
               <div class="underline"></div>
               <label for="fname">First Name</label>
            </div>

            <div class="input-data">
               <input type="text" name="lname" required>
               <div class="underline"></div>
               <label for="lname">Last Name</label>
            </div>
         </div>

         <div class="form-row">
            <div class="input-data">
               <input type="email" name="email" required>
               <div class="underline"></div>
               <label for="email">Email Address</label>
            </div>

            <div class="input-data">
               <input type="number" name="number" required>
               <div class="underline"></div>
               <label for="number">Phone Number</label>
            </div>
         </div>

         <div class="form-check">

         <label for="type" name="gender">Gender</label>

            <div class="form-check">
               <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault1" checked>
               <label class="form-check-label" for="gender" value="Male">
                  Male
               </label>
            </div>

            <div class="form-check">
               <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault2">
               <label class="form-check-label" for="gender" value="Female">
                  Female 
               </label>
            </div> 
            
            <div class="form-check">
               <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault3">
               <label class="form-check-label" for="gender" value="Other">
                  Other
               </label>
            </div>  
            
         </div>

         <br>

         <div class="form-check">
         
            <label for="type" name="userType">How do you wish to serve?</label>

            <div class="form-check">
               <input class="form-check-input" type="radio" name="userType" id="flexRadioDefault1">
               <label class="form-check-label" for="Donor" value="Donor">
                  Donor
               </label>
            </div>

            <div class="form-check">
               <input class="form-check-input" type="radio" name="userType" id="flexRadioDefault2" checked>
               <label class="form-check-label" for="Receiver" value="Receiver">
                  Receiver 
               </label>
            </div>

         </div>

         <div class="form-row">
            <!-- <div class="input-data textarea">
            <textarea rows="8" cols="80" name="message" required></textarea>
            <br>
            <div class="underline"></div>
            <label for="message">Your Objective With Us</label> -->

            <div class="form-row submit-btn">
               <div class="input-data">
                  <div class="inner"></div>
                  <input type="submit" name="add" value="submit">
            </div>
         </div>

      </form>
</div>

<!-- inserting data in database from form  -->
      
<?php

include('C:\xampp\htdocs\Final_Project\main\DatabaseConnect.php');


if(isset($_POST['add'])){

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $type = $_POST['userType'];
    $gender = $_POST['gender'];

    $query ="INSERT INTO `users`(`fname`, `lname`, `email`, `number`, `gender`, `type`) VALUES ('$fname', '$lname', '$email', '$number', '$gender', '$type')";

    $sql =mysqli_query($connect,$query);

   header("Location: C:\xampp\htdocs\Final_Project\main\ClothesDonation\index.php");
}

?> 

</body>
</html>