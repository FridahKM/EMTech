<!-- Signin Form -->
<!DOCTYPE HTML>
<html>
<head>
  <title>Sign In</title>
</head>
<body>
<form id="signinForm" action="/signin" method="POST">
  <h2>Sign In</h2>
  
  <!-- Email -->
  <label for="email">Email:</label>
  <input type="email" id="email" name="email" required>

  <!-- Password -->
  <label for="password">Password:</label>
  <input type="password" id="password" name="password" required>

  <!-- Submit Button -->
  <a href="./Includes/Signin.inc.php">
    <button type="submit">Sign In</button>
  </a>
</form>
