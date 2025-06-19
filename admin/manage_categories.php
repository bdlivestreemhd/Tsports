<?php
session_start();
include 'config.php';
if (!isset($_SESSION['admin'])) {
    header("Location: index.php");
}
$result = mysqli_query($conn, "SELECT * FROM categories");
echo "<h1>All Categories</h1><table border='1'><tr><th>ID</th><th>Name</th></tr>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td>{$row['id']}</td><td>{$row['name']}</td></tr>";
}
echo "</table>";
?>
