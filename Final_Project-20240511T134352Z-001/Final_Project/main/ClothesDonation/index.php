<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Donate Clothes</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="style1.css">
    
</head>

<body>

<!-- Navigation-->
<!-- <?php include('C:\xampp\htdocs\Final_Project\donation.php') ?>

<br><br> -->

<div class="container">


      <div class="text">
         Donate to Golden Hearts
         <div class="underline"></div>
      </div>
      <form action="#" method="post" novalidate>

         <div class="form-row">

            <div class="input-data">
               <input type="text" name="name" required>
               <div class="underline"></div>
               <label for="name">Name on Certificate</label>
            </div>

         </div>

         <div class="form-row">
            <div class="input-data">
               <input type="text" name="size" required>
               <div class="underline"></div>
               <label for="size">Size of the item</label>
            </div>
         </div> 

         <div class="form-check">

         <label for="type" name="gender">Clothes Type</label>

            <div class="form-check">
               <input class="form-check-input" type="radio" name="type" id="flexRadioDefault1" checked>
               <label class="form-check-label" for="type" value="Shirt">
                  Shirt
               </label>
            </div>

            <div class="form-check">
               <input class="form-check-input" type="radio" name="type" id="flexRadioDefault2">
               <label class="form-check-label" for="type" value="Pant">
                  Pant
               </label>
            </div> 
            
            <div class="form-check">
               <input class="form-check-input" type="radio" name="type" id="flexRadioDefault3">
               <label class="form-check-label" for="type" value="Other">
                  Other
               </label>
            </div>  
            
         </div>

         <br>

         <div class="form-row">
            <label for="image">Upload Image</label>
            <div class="input-data">
               <input type="file" name="image" required>
            </div>
         </div> 
         
         <br>

         <div class="form-row submit-btn">
            <div class="input-data">
               <div class="inner"></div>
               <input type="submit" name="add" value="submit">
         </div>
         
      </form>
</div>

<br>

<!-- inserting data in database from form  -->
      
<?php

include('C:\xampp\htdocs\Final_Project\main\DatabaseConnect.php');

if(isset($_POST['add'])){

    $name = $_POST['name'];
    $size = $_POST['size'];
    $type = $_POST['type'];
    $image = $_FILES['image'];

    $query ="INSERT INTO `data`(`name`, `size`, `type`, `image`) VALUES ('$name', '$size', '$type', '$image')";

    $sql =mysqli_query($connect,$query);

}

?>  

</body>
</html>