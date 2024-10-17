<!-- Signup Form -->
<!DOCTYPE HTML>
<html>
<head>
  <title>Sign Up</title>
</head>
<body>
  <form id="signupForm" action="/signup" method="POST">
    <h2>Sign Up</h2>
    
    <!-- Name -->
    <label for="name">Full Name:</label>
    <input type="text" id="name" name="name" required>

    <!-- Email -->
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <!-- Password -->
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>
    
    <!-- Submit Button -->
    <a href="./Includes/Signup.inc.php">
      <button type="submit">Sign up</button>
    </a>
  </form>
</body>

