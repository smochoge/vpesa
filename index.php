<?php

include "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST["action"] == "create") {
  // ... your Create logic here ...

  // Example: After processing, redirect back to contact form (optional)
  header("Location: contact.html");
  exit();
}

// ... rest of your index.php code (read functionality, etc.) ...

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>JBL - Live Loud</title>
  <link rel="stylesheet" href="C:\xampp\htdocs\vpesa\style.css">
</head>
<body>

</nav>
  <header>
    <h1><img src="C:\xampp\htdocs\vpesa\images\download (1).png" alt="JBL Logo"> </h1>
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


  <section class="hero">
    <img src="C:\xampp\htdocs\vpesa\images\enjoyment of music.jpeg" alt=>
    <h2>Experience sound that moves you.</h2>
    <a href="products.html">Explore Products</a>
  </section>

  <section class="featured-products">
    <h2>Featured Products</h2>
    <div class="product-card">
      <img src="C:\xampp\htdocs\vpesa\images\charge 5 featured.jpeg" alt=>
      <h4>Portable Bluetooth Speaker</h4>
      <p>Crystal clear sound, wherever you go.</p>
      <a href="#">Learn More</a>
    </div>
    <div class="product-card">
      <img src="C:\xampp\htdocs\vpesa\images\headphones lineup.jpeg" alt=>
      <h4>Wireless Noise-Cancelling Headphones</h4>
      <p>Immerse yourself in your music.</p>
      <a href="#">Learn More</a>
    </div>
  </section>

  <footer>
    <p>&copy; JBL 2024</p>
  </footer>
 
</body>
</html>
