<?php include "db.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Glendale Limo</title>

  <link rel="stylesheet" href="../style.css" />
</head>
<body>
  <header>
    <div class="adminPart">
      <h3 class="adminTitle">ADMIN SECTION</h3>
      <a href="vehicles.php" class="small">Post Vehicles</a>
      <a href="view_vehicles.php" class="small">View Vehicles</a>
      <a href="#" class="small">Post Services</a>
      <a href="#" class="small">View Services</a>
      <a href="#" class="small">View Bookings</a>
      <a href="view_contacts.php" class="small">View Contacts</a>
      <a href="../logout.php" class="small">Log Out</a>
    </div>
  </header>
  <?php
    if(isset($_POST['create_post'])) {
      $vehicle_image = $_FILES['vehicle_image']['name'];
      $vehicle_image_temp = $_FILES['vehicle_image']['tmp_name'];
      $vehicle_title = $_POST['vehicle_title'];
      $vehicle_content = $_POST['vehicle_content'];
    
      move_uploaded_file($vehicle_image_temp, "../images/$vehicle_image");
    
      $query = "INSERT INTO vehicles(vehicle_image, vehicle_title, vehicle_content) ";
      $query .= "VALUES('{$vehicle_image}', '{$vehicle_title}', '{$vehicle_content}' ) ";
      $create_vehicle_query = mysqli_query($connection, $query);
      
    }
  ?>
  <section class="theFormOne">
    <form action="" method="post" enctype="multipart/form-data">

      <div class="formGroup">
        <label for="title">Vehicle Title</label>
        <input type="text" name="vehicle_title" class="form-control">
      </div>
      
      <div class="formGroup">
        <label for="vehicle_image">Vehicle Image</label>
        <input type="file" name="vehicle_image">
      </div>

      <div class="formGroup">
        <label for="vehicle_content">Post Content</label>
        <br />
        <textarea class="form-control" name="vehicle_content" id="" cols="30" rows="10"></textarea>
      </div>

      <div class="formGroup">
          <input class="postBtn" type="submit" name="create_post" value="Publish Post">
      </div>

      <br />

      <?php 
          if(!$result) {
            die("QUERY FAILED " . mysqli_error($connection));
          }
      ?>

    </form>
  </section>
</body>
</html>