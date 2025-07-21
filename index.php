<?php
$conn = new mysqli("localhost", "root", "", "user");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$result = $conn->query("SELECT * FROM users_info");
?>

<!DOCTYPE html>
<html>
<head>
  <title>User Form</title>
</head>
<body>

<h2>Enter User Info</h2>
<form action="insert.php" method="POST">
  Name: <input type="text" name="name" required>
  Age: <input type="number" name="age" required>
  <input type="submit" value="Submit">
</form>

<h2>User List</h2>
<table border="1">
  <tr>
    <th>ID</th><th>Name</th><th>Age</th><th>Status</th><th>Action</th>
  </tr>
  <?php while($row = $result->fetch_assoc()): ?>
  <tr>
    <td><?= $row['id'] ?></td>
    <td><?= $row['name'] ?></td>
    <td><?= $row['age'] ?></td>
    <td><?= $row['status'] ?></td>
    <td>
      <form action="toggle.php" method="POST" style="display:inline;">
        <input type="hidden" name="id" value="<?= $row['id'] ?>">
        <input type="submit" value="Toggle">
      </form>
    </td>
  </tr>
  <?php endwhile; ?>
</table>

</body>
</html>