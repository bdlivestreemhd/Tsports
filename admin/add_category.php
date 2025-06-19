<?php
session_start();
include 'config.php';
if (!isset($_SESSION['admin'])) {
    header("Location: index.php");
}
if (isset($_POST['save'])) {
    $name = $_POST['name'];
    mysqli_query($conn, "INSERT INTO categories (name) VALUES ('$name')");
    echo "Category Added!";
}
?>
<form method="POST">
  Category Name: <input type="text" name="name"><br><br>
  <button type="submit" name="save">Save</button>
</form>
