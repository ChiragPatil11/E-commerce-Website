<?php

include('config.php'); // Include connection details

// Get form data (sanitize inputs)
$username = mysqli_real_escape_string($conn, $_POST['username']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

// Prepare SQL query to check user credentials
$sql = "SELECT * FROM users WHERE username = '$username'";
$result = mysqli_query($conn, $sql); // Ensure closing parenthesis

if (mysqli_num_rows($result) > 0) {
  $row = mysqli_fetch_assoc($result);
  if (password_verify($password, $row['password'])) {
    // Password matches, start user session
    session_start();
    $_SESSION['username'] = $username;
    $_SESSION['logged_in'] = true;

    // Redirect to a secure page or display welcome message
    // ... (your logic here)
  } else {
    $error = "Invalid username or password";
  }
} else {
  $error = "Invalid username or password";
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<body>

<?php if (isset($error)) { ?>
  <p style="color: red;"><?php echo $error; ?></p>
<?php } ?>

<h2>Login</h2>

<form action="login.php" method="post">
  <label for="username">Username:</label>
  <input type="text" id="username" name="username"><br><br>
  <label for="password">Password:</label>
  <input type="password" id="password" name="password"><br><br>
  <input type="submit" value="Login">
</form>

</body>
</html>
