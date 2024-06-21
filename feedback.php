<?php
include "connect.php";

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $rating = $_POST['rating'];
    $feedback = $_POST['feedback'];

    // Prepare and execute SQL statement to insert data into the database
    $stmt = $conn->prepare("INSERT INTO feedback (name, email, rating, feedback) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $rating, $feedback);

    if ($stmt->execute()) {
        // Feedback submitted successfully
        echo "<script> alert('Thank you for your feedback!'); </script>";
        
    } else {
        // Error occurred while submitting feedback
        echo "Error: " . $conn->error;
    }

    // Close statement and database connection
    $stmt->close();
    $conn->close();
} else {
    // If the form is not submitted, redirect back to the form page
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <body>
    <style>
      body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
  background-color: #deaa42;
}

.container {
  width: 80%;
  margin: 0 auto;
  padding: 20px;
  background-color:rgb(147, 156, 67);
  border-radius: 8px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h1 {
  text-align: center;
  margin-bottom: 20px;
}

.form-group {
  margin-bottom: 15px;
}

label {
  display: block;
  margin-bottom: 5px;
  font-weight: bold;
}

input[type="text"],
input[type="email"],
select,
textarea {
  width: 100%;
  padding: 8px;
  border-radius: 5px;
  border: 1px solid #1d878b;
}

button {
  padding: 10px 20px;
  background-color: #4e1d1d;
  color: #fff;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  font-size: 20px;
}

button:hover {
  background-color: #c8521b;
}
      </style>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Restaurant Feedback Form</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body style=" background-color: #deaa42;">
  <?php include "header.php"; ?>
 <br><br>
  <div class="container mt-5 pt-5">
    <h1>Restaurant Feedback Form</h1>
    <form action="" method="POST">
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="rating">Rating:</label>
        <select id="rating" name="rating" required>
          <option value="">Select a rating</option>
          <option value="excellent">Excellent</option>
          <option value="good">Good</option>
          <option value="average">Average</option>
          <option value="poor">Poor</option>
        </select>
      </div>
      <div class="form-group">
        <label for="feedback">Feedback:</label>
        <textarea id="feedback" name="feedback" rows="4" required></textarea>
      </div>
      <center><button type="submit">Submit</button></center>
    </form>
  </div>
</body>
</html>
