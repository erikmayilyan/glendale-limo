<?php include "./admin/db.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Glendale Limo</title>
  <link rel="stylesheet" href="second.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>
<body>
  <h1 class="logInTitle">GLENDALE LIMO</h1>
  <form action="./admin/admin.php" method="post">
    <div class="logInMain">
      <h1>LOG IN</h1>
      <div class="theTextbox">
        <i class="fa fa-user"></i>
        <input type="text" placeholder="Enter Username" name="username" value=""> 
      </div>
      <div class="theTextbox">
        <i class="fa fa-lock"></i>
        <input type="password" placeholder="Enter Password" name="password" value=""> 
      </div>
      <span>
        <button class="dieBtn" type="submit" name="login">LOG IN</button>
      </span>
    </div>
  </form>
  <script src="script.js"></script>
</body>
</html>
