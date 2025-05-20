<?php
$conn = mysqli_connect("127.0.0.1", "root", "Freetibet1959$", "mac272");

if (isset($_GET["delete"])) {
   $id = intval($_GET["delete"]);
   mysqli_query($conn, "DELETE FROM users WHERE id = $id");
   header("Location: view.php?msg=User deleted");
   exit();
}

$result = mysqli_query($conn, "SELECT * FROM users");
?>

<!DOCTYPE html>
<html>
<head>
   <title>View Users</title>
</head>
<body>

<?php
if (isset($_GET['msg'])) {
   echo "<p style='color:green;'>" . htmlspecialchars($_GET['msg']) . "</p>";
}
?>

<h2>All Registered Users</h2>

<table border="1" cellpadding="10">
<tr>
   <th>Name</th>
   <th>Username</th>
   <th>Email</th>
   <th>Actions</th>
</tr>
<?php while ($row = mysqli_fetch_assoc($result)) { ?>
<tr>
   <td><?= htmlspecialchars($row['name']) ?></td>
   <td><?= htmlspecialchars($row['username']) ?></td>
   <td><?= htmlspecialchars($row['email']) ?></td>
   <td>
       <a href="edit.php?id=<?= $row['id'] ?>">Edit</a>
       <a href="view.php?delete=<?= $row['id'] ?>" onclick="return confirm('Are you sure you want to delete this user?')">Delete</a>
   </td>
</tr>
<?php } ?>
</table>

<br>
<a href="registar.php">Back to Register</a>

</body>
</html
