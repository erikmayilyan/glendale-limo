<?php include "./admin/db.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Glendale Limo</title>
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="par.css" />
  <link rel="stylesheet" href="book.css" />
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
            <a href="services.php">Services</a>
            <a href="book.php" class="is-active">Book Now</a>
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
  <div class="thecontainer">
    <form id="form" type="multipart/form-data" class="contact_form" method="post" action="mailBook.php">
      <h3>BOOK NOW</h3>
      <input class="theName" type="text" placeholder="Your Full Name" name="name" id="name" required>
      <input class="theEmail" type="email" placeholder="Email Id" name="email" id="email" required>
      <label>Select the Service Type</label>
      <select class="theOptions" id="bookOpt" name="bookOpt" required>
        <option value="transfer">Airport Transfer</option>
        <option value="events">Special Events</option>
        <option value="weddings">Weddings</option>
      </select>
      <input class="thePhoneNum" name="phone" type="text" placeholder="Phone Number" id="phone" required>
      <textarea class="theMessage" name="message" id="message" row="4" placeholder="How can we help you?"></textarea>
      <button type="submit" name="submit" id="theButn">Send</button>
      <br/>
    </form>
  </div> 
</body>
</html>
 