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
        <th class="two">Full Name</th>
        <th class="threetwo">Email</th>
        <th class="four">Text</th>
        <th class="five">Delete</th>
      </tr>
    </thead>
    <tbody>
      <?php
        $query = "SELECT * FROM contacts";
        $select_all_contacts_query = mysqli_query($connection, $query);
        while ($row = mysqli_fetch_assoc($select_all_contacts_query)) {
          $contact_id = $row['contact_id'];
          $contact_name = $row['contact_name'];
          $contact_email = $row['contact_email'];
          $contact_text = $row['contact_text'];
     
          echo "<tr>";
          echo "<td>$contact_id</td>";
          echo "<td>$contact_name</td>";
          echo "<td><a href='mailto:".$contact_email."'>$contact_email</td>";
          echo "<td>$contact_text</td>";
          echo "<td><a href='view_contacts.php?delete={$contact_id}'>Delete</a></td>";
          echo "</tr>";
        } 
      ?>
    </tbody>
  </table>
  <?php
    if(isset($_GET['delete'])) {
      $the_contact_id = $_GET['delete'];
      $the_query = "DELETE FROM contacts WHERE contact_id = {$the_contact_id}";
      $delete_query = mysqli_query($connection, $the_query);
    }
  ?>
</body>
</html>