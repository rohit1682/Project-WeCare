

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>

    <link rel="stylesheet" href="style2.css">

</head>
<body>
<table>
  <caption>Data Collection Summary</caption>
  <thead>
    <tr>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Number</th>
      <th scope="col">Email</th>
      <th scope="col">Remarks</th>
      <th scope="col">Options</th>

    </tr>
  </thead>
  
  <tbody>
<?php
        include('dbconnect.php');

        $sql="select * from data";
        $query=mysqli_query($conn,$sql);

        ?>

        <?php while($row=mysqli_fetch_assoc($query)) { ?>

        <tr>
            <td> <?php echo $row['fname']; ?> </td>
            <td> <?php echo $row['lname']; ?> </td>
            <td> <?php echo $row['email']; ?> </td>
            <td> <?php echo $row['number']; ?> </td>
            <td> <?php echo $row['remarks']; ?> </td>
            
            <td>
            <a href="delete.php? id=
            <?php
              echo $row['id'];
            ?>">
            <div class="form-row submit-btn">
               <div class="input-data">
                  <div class="inner">
                  <button class="button-42" name="delete" role="button">
                    Delete
                </button>
                  </div>     
            </div>
            </a>

            <br>

            <a href="update.php? id=
            <?php
              echo $row['id'];
            ?>">
            <div class="form-row submit-btn">
               <div class="input-data">
                  <div class="inner">
                  <button class="button-41" name="update" role="button">
                    Update
                </button>
                  </div>
                  
            </div>

            </td>
            

        <?php 
    }?>
        </tr>
</tbody>

</table>

</body>
</html>

