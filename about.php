<?php include "./admin/db.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Glendale Limo</title>
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="about.css" />
  <link rel="stylesheet" href="par.css" />
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
            <a href="index.php">Home</a>
            <a href="about.php" class="is-active">About</a>
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
  <div class="usAbout">
    <section class="aboutUsPart">
       <h3 data-text="ABOUT US...">ABOUT US...</h3>
    </section>
    <div class="theParPart">
        <p>
          Glendale Limo Limousine Service Ltd.
          provides first class executive style VIP 
          service around Los Angeles and Orange County.
          We also provide transportation to/from Los
          Angeles Airport and Burbank Airport. The fact
          that we are a unique and exclusive organization 
          allows us to negotiate more freely and take 
          the time necessary to assure our clients 
          experience a memorable occasion enriched 
          with service and amenities. We have a vast 
          fleet of Luxury Sedans and Luxury SUVs ready 
          to meet every ground transportation needed 
          by Glendale Limo services and Glendale Limo 
          rentals. Our experienced, courteous drivers will 
          make travel with us pleasant and worry 
          free. Please reserve online at www.glendalelimo.ca 
          or Call Us: 111-111-1111 and our friendly, 
          knowledgeable staff will assist you, 24 hours 
          a day, with your ground transportation needs.
        </p>
    </div>
  </div>
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
  <script src="scripttwo.js"></script>
</body>
</html>