<?php include "./admin/db.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Glendale Limo</title>
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="services.css" />
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
            <a href="about.php">About</a>
            <a href="services.php" class="is-active">Services</a>
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
  <h1 class="serviceHead">SERVICES</h1>
  <section>
    <div class="grid">
      <div class="gridItem">
        <div class="card">
          <img src="./images/airport.jpeg" class="cardImg"/>
          <div class="cardContent">
            <h1 class="cardHeader">Airport Transfer</h1>
            <p class="cardText">
            Your Chauffeur will arrive at the airport at 
            the time your flight lands. Limousines will be
            available outside the baggage claim area. 
            Your chauffeur and our beautiful stretch 
            limousines will provide on-time pick up and 
            drop offs to ensure a hassle-free spree to your
            final destination. Upon request, your chauffeur 
            will be happy to meet you at the carousel of 
            your flight inside baggage claim with a name 
            sign with your last name on it.
            </p>
            <button class="cardBtn">
              BOOK NOW
            </button>
          </div>
        </div>
      </div>
      <div class="gridItem">
        <div class="card">
          <img src="./images/special.jpeg" class="cardImg"/>
          <div class="cardContent">
            <h1 class="cardHeader">Special Events</h1>
            <p class="cardText">
            Your Chauffeur will arrive at the airport at 
            the time your flight lands. Limousines will be
            available outside the baggage claim area. 
            Your chauffeur and our beautiful stretch 
            limousines will provide on-time pick up and 
            drop offs to ensure a hassle-free spree to your
            final destination. Upon request, your chauffeur 
            will be happy to meet you at the carousel of 
            your flight inside baggage claim with a name 
            sign with your last name on it.
            </p>
            <button class="cardBtn">
              BOOK NOW
            </button>
          </div>
        </div>
      </div>
      <div class="gridItem">
        <div class="card">
          <img src="./images/wedding.jpeg" class="cardImg"/>
          <div class="cardContent">
            <h1 class="cardHeader">Weddings</h1>
            <p class="cardText">
            Need a wedding limo rental in the 
            Southern California? At Glendale Limo, 
            we know that your wedding day is one you 
            will always remember. We strive to give 
            you one less thing to worry about while 
            planning your special day. We guarantee 
            ultimate treatment on your wedding day 
            as you walk in and out of one of our 
            beautiful Californian stretch limousines.
            </p>
            <button class="cardBtn">
              BOOK NOW
            </button>
          </div>
        </div>
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
  <script src="scriptthree.js"></script>
</body>
</html>