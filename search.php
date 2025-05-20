<?php
$conn = mysqli_connect("127.0.0.1", "root", "Freetibet1959$", "mac272");
$results = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $search = mysqli_real_escape_string($conn, $_POST["search"]);
    $query = "SELECT * FROM draftuser WHERE name LIKE '%$search%'";
    $result = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_assoc($result)) {
        $results[] = $row;
    }
}
?>

<h2>Search Research</h2>
<form method="POST">
    Search Term: <input type="text" name="search" required>
    <input type="submit" value="Search">
</form>

<?php if (!empty($results)): ?>
    <h3>Results:</h3>
    <table border="1">
        <tr><th>Name</th><th>Username</th><th>Email</th></tr>
        <?php foreach ($results as $row): ?>
            <tr>
                <td><?= htmlspecialchars($row["name"]) ?></td>
                <td><?= htmlspecialchars($row["username"]) ?></td>
                <td><?= htmlspecialchars($row["email"]) ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
<?php endif; ?>
