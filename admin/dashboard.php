<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: index.php");
}
?>
<h1>Admin Dashboard</h1>
<ul>
    <li><a href="add_channel.php">Add Channel</a></li>
    <li><a href="manage_channels.php">Manage Channels</a></li>
    <li><a href="add_category.php">Add Category</a></li>
    <li><a href="manage_categories.php">Manage Categories</a></li>
    <li><a href="logout.php">Logout</a></li>
</ul>
