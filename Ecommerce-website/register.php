<?php

include('config.php'); // Include connection details

// Get form data (sanitize inputs)
$username = mysqli_real_escape_string($conn, $_POST['username']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

// Hash password for secure storage
$hashed_password = password_hash($password, PASSWORD_BCRYPT);

// Check if username or email already exists
$sql_check = "SELECT * FROM users WHERE username = '$username' OR email = '$email'";
$result_check = mysqli_query($conn, $sql_check);

if (mysqli_num_rows($result_check) > 0) {
  $error = "Username or email already exists";
} else {
  // Insert new user into database
  $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$hashed_password')";
  if (mysqli_query($conn, $sql)) {
    $success = "Registration successful! Please login.";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<body>

<?php if (isset($error)) { ?>
  <p style="color: red;"><?php echo $error; ?></p>
<?php } elseif (isset($success)) { ?>
  <p style="color: green;"><?php echo $success; ?></p>
<?php } ?>

<h2>Register</h2>

<form action="register.php" method="post">
  <label for="username">Username:</label>
  <input type="text" id="username" name="username"><br><br>
  <label for="email">Email:</label>
  <input type="email" id="email" name="email"><br><br>
  <label for="password">Password:</label>
  <input type="password" id="password" name="password"><br><br>
  <input type="submit" value="Register">
</form>

</body>
</html>
