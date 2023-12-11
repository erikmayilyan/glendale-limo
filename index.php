<?php include "./admin/db.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Glendale Limo</title>
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>
<body>
  <div class="heder">
    <header>
      <nav>
        <div class="container" id="container">
          <h1 class="theTitle">GLENDALE LIMO</h1>
          <button class="hamburger">
            <span></span>
            <span></span>
            <span></span>
          </button>
    
          <div class="menu">
            <a href="index.php" class="is-active">Home</a>
            <a href="about.php">About</a>
            <a href="services.php">Services</a>
            <a href="book.php">Book Now</a>
            <a href="#" id="button">Contact Us</a>
          </div>
        </div>
      </nav>
    </header>
    <nav class="mobile-nav">
      <a href="index.php">Home</a>
      <a href="about.php">About</a>
      <a href="services.php">Services</a>
      <a href="book.php">Book Now</a>
      <a href="#" id="buttonSec">Contact Us</a>
    </nav>
  </div>
  <section class="banner">
    <div class="mainPart">
      <h1 class="maintitle">Your <span class="priority">comfort</span> <br class="hide-mob" />
        is our <span class="priority2">priority</span>
      </h1>
      <h3 class="online">Book online and get a discount</h3>
      <a href="book.php" class="button1">ORDER NOW</a>
    </div>
  </section>
  <div class="popup">
    <form action="" method="post" enctype="multipart/form-data">
      <div class="popup-content">
        <img src="./images/thex.png" alt="Close" class="closeTheButton">
        <h2 class="contactTitle">CONTACT US</h2>
        <p class="contactP">Send your message here and we will respond you by email!</p>
        <input type="text" name="name_contact" placeholder="Full Name" required>
        <input type="email" name="email_contact" placeholder="E-Mail" required>
        <textarea type="comment" name="contact_text" class="theTextArea" placeholder="Enter text here..." required></textarea>
        <input class="messageBtn" type="submit" name="send_contact" value="SEND">
      </div>
    </form>
    <?php
      if(isset($_POST['send_contact'])) {
        $name_contact = $_POST['name_contact'];
        $email_contact = $_POST['email_contact'];
        $text_contact = $_POST['contact_text'];

        $contact_query = "INSERT INTO contacts(contact_name, contact_email, contact_text) ";
        $contact_query .= "VALUES('{$name_contact}', '{$email_contact}', '{$text_contact}' ) ";
        $create_contact_query = mysqli_query($connection, $contact_query);
      } 
    ?>
  </div>
  <section class="sections" id="theSections">
    <div class="firstPart">
      <h3 class="firstAboutTitle">WHAT IS GLENDALE LIMO COMPANY?</h3>
      <div class="homeInfo">
        <div class="cadCen">
          <img src="images/cadilac.webp" alt="Cadillac" class="cadillacImg" />
        </div>  
        <div class="par">
          <h5 class="firstAboutTitle__header">WE ARE A CONVENIENT LIMOUSINE SERVICE!</h5>
          <p>Glendale Limo company is aconvenient limousinse service that offers affordable services across Southern California. We offer multiple types of affordable servies and we prioritize the needs of our customers first. You can book a service online and get a quote or by calling us!</p>
        </div>
      </div>
    </div>
  </section>
  <section class="theSection">
    <div class="vehicles">
      <h3 class="secondAboutTitle">OUR VEHICLES</h3>
      <?php 
        $query = "SELECT * FROM vehicles";
        $select_all_vehicles_query = mysqli_query($connection, $query);
        while ($row = mysqli_fetch_assoc($select_all_vehicles_query)) {
          $vehicle_image = $row['vehicle_image'];
          $vehicle_title = $row['vehicle_title'];
          $vehicle_content = $row['vehicle_content'];
      ?>
        <div class="theCar">
          <img src="images/<?php echo $vehicle_image; ?>" class="theCad" />
          <h4 class="importantTitle"><?php echo $vehicle_title ?></h4>
          <p class="theAmazingText"><?php echo $vehicle_content ?></p>
          <a href="#" class="button2">LEARN MORE</a>
        </div>
      <?php 
        }
      ?>
    </div>
  </section>
  <section class="address"> 
    <div class="theAddress">
      <h3 class="addressTitle">OUR OFFICE ADDRESS</h3>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1650.9967115135112!2d-118.25423734685403!3d34.146510384987344!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c0ffc927f98b%3A0x40b418c7884ba2a2!2sArtsakh%20Ave%2C%20Glendale%2C%20CA%2C%20USA!5e0!3m2!1sen!2sca!4v1651803104601!5m2!1sen!2sca" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      <div class="secondPart">
        <h3>1ST ARTSAKH AVENUE</h3>
        <h5 class="mek">GLENDALE, CA</h5>
        <p class="erku">Our office is open from monday to saturday 24/7. Feel free to visit us anytime!</p>
        <p class="erek">Phone: <a href="tel:111-111-1111">111-111-1111</a><p>
        <p class="chors">Email: <a href="mailto: glendalelimo@gmail.com">glendalelimo@gmail.com</a></p>
      </div>
    </div>
  </section>
  <footer>
    <div class="footer-content">
      <h3 class="theTitle">GLENDALE LIMO</h3>
      <p>Quality limousine services and more!</p>
      <ul class="socials">
        <li><a href="#"><i class="fa fa-facebook"></i></a><li>
        <li><a href="#"><i class="fa fa-twitter"></i></a><li>
        <li><a href="#"><i class="fa fa-instagram"></i></a><li>
        <li><a href="#"><i class="fa fa-youtube"></i></a><li>
        <li><a href="login.php"><i>♨︎</i></a><li>
      </ul>
    </div>
    <div class="footer-bottom">
      <p>Copyright &copy; 2022 Glendale Limo. Designed by <span>YOUNG </span><span class="devs"><b>DEVELOPERS</b></span>. All rights reserved.</p>
    </div>
  </footer>
  <script src="script.js"></script>
</body>
</html>

