<?php
session_start();
include 'config.php';
if (!isset($_SESSION['admin'])) {
    header("Location: index.php");
}
if (isset($_POST['save'])) {
    $name = $_POST['name'];
    $logo = $_POST['logo'];
    $link = $_POST['link'];
    $category = $_POST['category'];
    mysqli_query($conn, "INSERT INTO channels (name, logo, link, category) VALUES ('$name', '$logo', '$link', '$category')");
    echo "Channel Added!";
}
?>
<form method="POST">
  Name: <input type="text" name="name"><br><br>
  Logo URL: <input type="text" name="logo"><br><br>
  Stream Link: <input type="text" name="link"><br><br>
  Category: <input type="text" name="category"><br><br>
  <button type="submit" name="save">Save</button>
</form>
