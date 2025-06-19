<?php
include 'admin/config.php';
$result = mysqli_query($conn, "SELECT * FROM channels");
echo "<h1>Live TV Channels</h1><ul>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<li onclick=\"playChannel('{$row['link']}')\"><img src='{$row['logo']}' width='50'> {$row['name']}</li>";
}
echo "</ul>";
?>
<video id="player" width="640" height="360" controls autoplay></video>
<script>
function playChannel(link) {
  var player = document.getElementById('player');
  player.src = link;
  player.play();
}
</script>
