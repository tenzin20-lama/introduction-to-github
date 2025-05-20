<?php
$conn = mysqli_connect("127.0.0.1", "root", "Freetibet1959$", "mac272");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $name = mysqli_real_escape_string($conn, $_POST["name"]);
   $username = mysqli_real_escape_string($conn, $_POST["username"]);
   $password = mysqli_real_escape_string($conn, $_POST["password"]);
   $email = mysqli_real_escape_string($conn, $_POST["email"]);

   if (empty($name) || empty($username) || empty($password) || empty($email)) {
       echo "All fields are required!";
   } else {
       $passwordHash = password_hash($password, PASSWORD_DEFAULT);
       $sql = "INSERT INTO users (name, username, password, email) VALUES ('$name', '$username', '$passwordHash', '$email')";
       if (mysqli_query($conn, $sql)) {
           header("Location: home.php?msg=Registration successful");
           exit();
       } else {
           echo "Error: " . mysqli_error($conn);
       }
   }
}
?>

<!DOCTYPE html>
<html>
<head>
   <title>Register Page</title>
</head>
<body>

<h2>Register</h2>
<form method="POST" action="">
   Name: <input type="text" name="name" required><br><br>
   Username: <input type="text" name="username" required><br><br>
   Password: <input type="password" name="password" required><br><br>
   Email: <input type="email" name="email" required><br><br>
   <input type="submit" value="Register"><br>
</form>

</body>
</html>
