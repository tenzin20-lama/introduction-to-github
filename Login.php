<?php
$conn = mysqli_connect("127.0.0.1", "root", "Freetibet1959$", "mac272");
?>

<!DOCTYPE html>
<html>
<head>
   <title>Login Page</title>
</head>
<body>

<?php
if (isset($_GET['msg'])) {
    echo "<p style='color:green;'>" . htmlspecialchars($_GET['msg']) . "</p>";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $username = mysqli_real_escape_string($conn, $_POST["username"]);
   $password = $_POST["password"];

   $result = mysqli_query($conn, "SELECT * FROM users WHERE username='$username'");
   if ($row = mysqli_fetch_assoc($result)) {
       if (password_verify($password, $row["password"])) {
           header("Location: home.php?msg=User found");
           exit();
       } else {
           echo "<p style='color:red;'>Incorrect password.</p>";
       }
   } else {
       echo "<p style='color:red;'>User not found.</p>";
   }
}
?>

<h2>Login</h2>
<form method="POST" action="">
   Username: <input type="text" name="username" required><br><br>
   Password: <input type="password" name="password" required><br><br>
   <input type="submit" value="Login"><br>
</form>

</body>
</html>
