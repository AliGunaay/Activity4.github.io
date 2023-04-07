<!DOCTYPE html>
<html>
<head>
  <title>Registration Form - Preview</title>
</head>
<body>
  <?php
  // Check if the form was submitted
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $name = $_POST["name"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $address = $_POST["address"];
    $country = $_POST["country"];
    $zipcode = $_POST["zipcode"];
    $email = $_POST["email"];
    $sex = $_POST["sex"];
    $language = $_POST["language"];
    $about = $_POST["about"];

    // Display the form data
    echo "<h2>Registration Form - Preview</h2>";
    echo "<p><strong>Name:</strong> " . $name . "</p>";
    echo "<p><strong>Username:</strong> " . $username . "</p>";
    echo "<p><strong>Password:</strong> " . $password . "</p>";
    echo "<p><strong>Address:</strong> " . $address . "</p>";
    echo "<p><strong>Country:</strong> " . $country . "</p>";
    echo "<p><strong>ZIP Code:</strong> " . $zipcode . "</p>";
    echo "<p><strong>Email:</strong> " . $email . "</p>";
    echo "<p><strong>Sex:</strong> " . $sex . "</p>";
    echo "<p><strong>Language:</strong> " . $language . "</p>";
    echo "<p><strong>About:</strong> " . $about . "</p>";
  }
  ?>
</body>
</html>
