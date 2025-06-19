<?php
session_start();
include 'config.php';
if (!isset($_SESSION['admin'])) {
    header("Location: index.php");
}
$result = mysqli_query($conn, "SELECT * FROM channels");
echo "<h1>All Channels</h1><table border='1'><tr><th>ID</th><th>Name</th><th>Logo</th><th>Link</th><th>Category</th></tr>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
    <td>{$row['id']}</td>
    <td>{$row['name']}</td>
    <td><img src='{$row['logo']}' width='50'></td>
    <td>{$row['link']}</td>
    <td>{$row['category']}</td>
    </tr>";
}
echo "</table>";
?>
