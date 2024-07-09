<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>JBL - View Contacts</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>


</div>
  <header>
    <h1><img src="images/download (1).png" alt="JBL Logo"></h1>
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
      <a href="view_messages.php">View messages</a>
</ul>
</nav>
<?php
include_once ("config.php"); 
if(isset($_GET["DelId"])){
    $DelId = mysqli_real_escape_string($conn, $_GET["DelId"]);

    $delete_message = "DELETE FROM messages WHERE messageId='$DelId' LIMIT 1";

    if ($conn->query($delete_message) === TRUE) {
        header("Location: view_messages.php");
    } else {
        echo "Error updating record: " . $conn->error;
    }
}
 ?>
        <div class="banner">
            <h1>View Contacts</h1>
        </div>
        <div class="row">
            <div class="content">
    <h1>Contacts</h1>

<table>
    <thead>
        <tr>
            <th>Fullname</th>
            <th>Email</th>
            <th>Subject Line</th>
            <th>Time</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
<?php

$select_messages = "SELECT * FROM messages ORDER BY datecreated DESC";
$sel_mes_res = $conn->query($select_messages);

if ($sel_mes_res->num_rows > 0) {
  // output data of each row
  while($sel_mes_row = $sel_mes_res->fetch_assoc()) {
?>
    <tr>
        <td><?php print $sel_mes_row["sender_name"]; ?></td>
        <td><?php print $sel_mes_row["sender_email"]; ?></td>
        <td><?php print $sel_mes_row["subject_line"] . " " . substr($sel_mes_row["message"], 0, 15) . "..."; ?></td>
        <td><?php print date("d-M-Y H:i", strtotime($sel_mes_row["datecreated"])); ?></td>
        <td>[ <a href="edit_mes.php?messageId=<?php print $sel_mes_row["messageId"]; ?>">Edit</a> ] [ <a href="?DelId=<?php print $sel_mes_row["messageId"]; ?>" onclick="return confirm('Are you sure you want to delete this message from the database permanently?');">Del</a> ]</td>
    </tr>
    <?php
  }
} else {
    echo "0 results";
}
?>

  
