<!DOCTYPE html>
<html>
<head>
  <title>Registration Form</title>
  <style>
    label {
      display: block;
      margin-top: 10px;
    }
  </style>
</head>
<body>
  <h2>Registration Form</h2>
  <form action="Activity4-preview.php" method="post">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>

    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>

    <label for="address">Address:</label>
    <textarea id="address" name="address" required></textarea>

    <label for="country">Country:</label>
    <select id="country" name="country" required>
      <option value="">Please select a country</option>
      <option value="USA">USA</option>
      <option value="Canada">Canada</option>
      <option value="UK">UK</option>
    </select>

    <label for="zipcode">ZIP Code:</label>
    <input type="text" id="zipcode" name="zipcode" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <label>Sex:</label>
    <input type="radio" id="male" name="sex" value="male" required>
    <label for="male">Male</label>
    <input type="radio" id="female" name="sex" value="female" required>
    <label for="female">Female</label>

    <label for="language">Language:</label>
    <select id="language" name="language" required>
      <option value="">Please select a language</option>
      <option value="English">English</option>
      <option value="Spanish">Spanish</option>
      <option value="French">French</option>
    </select>

    <label for="about">About:</label>
    <textarea id="about" name="about" required></textarea>

    <input type="submit" value="Submit">
  </form>
</body>
</html>
