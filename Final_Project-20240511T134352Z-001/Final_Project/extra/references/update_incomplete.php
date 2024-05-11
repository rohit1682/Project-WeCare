<!-- <?php

include('dbconnect.php');

    $delId = $_GET['id'];
    
    $query ="DELETE FROM data WHERE (id = '$delId')";

    $sql =mysqli_query($conn,$query);

    if($sql){
        header("location: Admin.php");
    }
?>  -->


<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>

<?php

include('dbcon.php');

$update = $_GET['id'];

$sql= "select * from student where id='$update'";
$query=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($query);



?>





<div class="container">
  <h1 class="bg bg-primary">Edit  Student</h1>
  <hr>
  <form action="" method="post">
  <div class="form-group">
    <label for="email">Student name:</label>
    <input type="text" class="form-control" id="email" name="name" value="<?php echo $row['name'];?>">
  </div>
  <div class="form-group">
    <label for="pwd">Student phone:</label>
    <input type="text" class="form-control" id="pwd" name="phone" value="<?php echo $row['phone'];?>">
  </div>
  <div class="form-group">
    <label for="pwd">Student Email id:</label>
    <input type="text" class="form-control" id="pwd" name="roll" value="<?php echo $row['email'];?>">
  </div>
   <div class="form-group">
    <label for="pwd">City:</label>
    <input type="text" class="form-control" id="pwd" name="class" value="<?php echo $row['city'];?>">
  </div>
  <button  type="submit" class="btn btn-success" name="add">Update</button>
</form>
</div>

<?php
include('dbcon.php');

if(isset($_POST['add'])){
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $roll = $_POST['roll'];
    $class = $_POST['class'];

    // $query ="INSERT INTO `student`(`name`, `phone`, `email`, `city`) VALUES ('$name', '$phone', '$roll', '$class')";

    $query ="update student set name='$name',phone='$phone',email='$roll',city='$class' where id='$update'";

    $sql =mysqli_query($conn,$query);
    if($sql){

        header('location:Admin.php');
    }
        
    else{
        echo"failed";
    }




}

?>

</body>
</html> -->