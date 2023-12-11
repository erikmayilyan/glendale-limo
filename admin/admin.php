<?php include "db.php"; ?>
<?php session_start(); ?>
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
  <div class="adminPart">
    <h3 class="adminTitle">ADMIN SECTION</h3>
    <?php
      if (isset($_SESSION['user_role'])) {
        if($_SESSION['user_role'] !== 'admin') {
          header("Location: ../login.php");
        }
      }
    ?>
    <a href="vehicles.php" class="small">Post Vehicles</a>
    <a href="view_vehicles.php" class="small">View Vehicles</a>
    <a href="#" class="small">Post Services</a>
    <a href="#" class="small">View Services</a>
    <a href="#" class="small">View Bookings</a>
    <a href="view_contacts.php" class="small">View Contacts</a>
    <a href="../logout.php" class="small">Log Out</a>
  </div>
  <div class="bestText">
    <?php

    if(isset($_POST['login'])) {
      $username = $_POST['username'];
      $password = $_POST['password'];
      $username = mysqli_real_escape_string($connection, $username);
      $password = mysqli_real_escape_string($connection, $password);
      $query = "SELECT * FROM users WHERE username = '{$username}' ";
      $select_user_query = mysqli_query($connection, $query);
      if(!$select_user_query) {
        die("QUERY FAILED" . mysqli_error($connection));
      }
      while ($row = mysqli_fetch_array($select_user_query)) {
        $db_user_id = $row['user_id'];
        $db_username = $row['username'];
        $db_user_firstname = $row['user_firstname'];
        $db_user_lastname = $row['user_lastname'];
        $db_user_password = $row['user_password'];
        $db_user_role = $row['user_role'];
      }
      if ($username !== $db_username) {
        header("Location: ../login.php ");
      } 
      if ($password !== $db_user_password) {
        header("Location: ../login.php ");
      }
      else if ($username == $db_username && $password == $db_user_password) {
        $_SESSION['username'] = $db_username;
        header("Location: ../admin/admin.php");
      }
    }

    ?>
  </div>
  <h1 class="theWelcomePage">Welcome, <?php echo $_SESSION['username'] ?></h1>
</body>
</html>