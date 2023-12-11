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
  <table class="theTable">
    <thead>
      <tr>
        <th class="one">Id</th>
        <th class="two">Image</th>
        <th class="three">Title</th>
        <th class="four">Content</th>
        <th class="five">Delete</th>
      </tr>
    </thead>
    <tbody>
      <?php
        $query = "SELECT * FROM vehicles";
        $select_all_vehicles_query = mysqli_query($connection, $query);
        while ($row = mysqli_fetch_assoc($select_all_vehicles_query)) {
          $vehicle_id = $row['vehicle_id'];
          $vehicle_image = $row['vehicle_image'];
          $vehicle_title = $row['vehicle_title'];
          $vehicle_content = $row['vehicle_content'];
     
          echo "<tr>";
          echo "<td>$vehicle_id</td>";
          echo "<td><img class='imgResponsive' src='../images/$vehicle_image' alt='image'></td>";
          echo "<td>$vehicle_title</td>";
          echo "<td>$vehicle_content</td>";
          echo "<td><a href='view_vehicles.php?delete={$vehicle_id}'>Delete</a></td>";
          echo "</tr>";
        } 
      ?>
    </tbody>
  </table>
  <?php
    if(isset($_GET['delete'])) {
      $the_vehicle_id = $_GET['delete'];
      $the_query = "DELETE FROM vehicles WHERE vehicle_id = {$the_vehicle_id}";
      $delete_query = mysqli_query($connection, $the_query);
    }
  ?>
</body>
</html>