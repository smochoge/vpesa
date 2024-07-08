<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>JBL - Contact Us</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<?php

include_once ("config.php");  // Include your database connection details
if(isset($_POST["Send Message"])){
  $name = $_POST["Name"];
  $email =  $_POST["Email"];
  $message = $_POST["Message"];

  $SQL = "INSERT INTO contacts (name,email,message)
  VALUES ('$name', '$email','$message)";

 if ($conn->query($SQL) === TRUE) {
 echo "New record created successfully";
 } else {
   echo "Error: " . $SQL . "<br>" . $conn->error;
  }
   }

$conn->close();
   ?>


?>



  <header>
    <h1><img src="images\download (1).png" alt="JBL Logo"> </h1>
    <p>Live Loud</p>
  </header>

  <nav>
      <ul>
      <a href="index.php">Home</a>
      <a href="about.php">About JBL</a>
      <a href="products.php">Products</a>
      <a href="technology.php">JBL Technology</a>
      <a href="news.php">News & Events</a>
      <a href="support.php">Support</a><
      <a href="contact.php">Contact Us</a>
</ul>
</nav>
  <section class="contact">
    <h2>Get in Touch</h2>
    <p>Have a question or need assistance? We're here to help! Fill out the form below or reach out to us via phone or email.</p>

    <form action="#">
      <label for="name">Name:</label>
      <input type="text" id="name" required>

      <label for="email">Email:</label>
      <input type="email" id="email" required>

      <label for="message">Message:</label>
      <textarea id="message" required></textarea>
      <input type="hidden" name="action" value="create">
      <button type="submit">Send Message</button>
   
    </form>
    
  


    <p>Phone: +254 746 786 168</p>
    <p>Email: <a href="mailto:support@jbl.com">support@jbl.com</a></p>
  </section>

  <footer>
    <p>&copy; JBL 2024</p>
  </footer>
</body>
</html>






