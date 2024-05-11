

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
      <th scope="col">Name</th>
      <th scope="col">Item Size</th>
      <th scope="col">Item Type</th>
      <th scope="col">Image</th>
      <!-- <th scope="col">Remarks</th>
      <th scope="col">Options</th> -->

    </tr>
  </thead>
  
  <tbody>
<?php
        include('C:\xampp\htdocs\Final_Project\main\DatabaseConnect.php');

        $sql="select * from data";
        $query=mysqli_query($conn,$sql);

        ?>

        <?php while($row=mysqli_fetch_assoc($query)) { ?>

        <tr>
            <td> <?php echo $row['name']; ?> </td>
            <td> <?php echo $row['size']; ?> </td>
            <td> <?php echo $row['type']; ?> </td>
            <td> <?php echo $row['image']; ?> </td>
            
            <td>
            <a href="delete.php? id=
            <?php
              echo $row['id'];
            ?>">
            <div class="form-row submit-btn">
               <div class="input-data">
                  <div class="inner">
                  <button class="button-42" name="delete" role="button">
                    Get
                </button>
                  </div>     
            </div>
            </a>

            <br>

            <!-- <a href="update.php? id=
            <?php
              echo $row['id'];
            ?>"> 
            <div class="form-row submit-btn">
               <div class="input-data">
                  <div class="inner">
                  <button class="button-41" name="update" role="button">
                    Update
                </button>
                  </div> -->
                  
            </div>

            </td>
            

        <?php 
    }?>
        </tr>
</tbody>

</table>

</body>
</html>

