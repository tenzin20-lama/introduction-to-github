<?php
$conn = mysqli_connect("127.0.0.1", "root", "Freetibet1959$", "mac272");

$id = intval($_GET["id"]);
$user = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM users WHERE id = $id"));

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $name = mysqli_real_escape_string($conn, $_POST["name"]);
   $username = mysqli_real_escape_string($conn, $_POST["username"]);
   $email = mysqli_real_escape_string($conn, $_POST["email"]);

   mysqli_query($conn, "UPDATE users SET name='$name', username='$username', email='$email' WHERE id=$id");
   header("Location: view.php?msg=User updated");
   exit();
}
?>

<!DOCTYPE html>
<html>
<head>
   <title>Update User</title>
</head>
<body>

<h2>Edit User</h2>
<form method="POST">
   Name: <input type="text" name="name" value="<?= htmlspecialchars($user['name']) ?>" required><br><br>
   Username: <input type="text" name="username" value="<?= htmlspecialchars($user['username']) ?>" required><br><br>
   Email: <input type="email" name="email" value="<?= htmlspecialchars($user['email']) ?>" required><br><br>
   <input type="submit" value="Update"><br>
</form>

</body>
</html>
