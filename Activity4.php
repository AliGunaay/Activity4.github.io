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

  // Process the form data (e.g. store in a database, send an email, etc.)
  

  
  exit();
}
?>


<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
  <label for="name">Name:</label>
  <input type="text" id="name" name="name"><br><br>
  <label for="username">Username:</label>
  <input type="text" id="username" name="username"><br><br>
  <label for="password">Password:</label>
  <input type="password" id="password" name="password"><br><br>
  <label for="address">Address:</label>
  <textarea id="address" name="address"></textarea><br><br>
  <label for="country">Country:</label>
  <select id="country" name="country">
    <option value="usa">USA</option>
    <option value="canada">Canada</option>
    <option value="uk">UK</option>
    <option value="australia">Australia</option>
  </select><br><br>
  <label for="zipcode">ZIP Code:</label>
  <input type="text" id="zipcode" name="zipcode"><br><br>
  <label for="email">Email:</label>
  <input type="email" id="email" name="email"><br><br>
  <label for="sex">Sex:</label>
  <input type="radio" id="male" name="sex" value="male">
  <label for="male">Male</label>
  <input type="radio" id="female" name="sex" value="female">
  <label for="female">Female</label><br><br>
  <label for="language">Language:</label>
  <select id="language" name="language">
    <option value="english">English</option>
    <option value="french">French</option>
    <option value="spanish">Spanish</option>
    <option value="german">German</option>
  </select><br><br>
  <label for="about">About:</label>
  <textarea id="about" name="about"></textarea><br><br>
  <input type="submit" value="Submit">
</form>
