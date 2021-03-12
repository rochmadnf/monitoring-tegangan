<?php
  require_once('config.php');
?>

<!-- Core -->
<script src="<?=$base_url.$folder;?>/jquery/dist/jquery.min.js"></script>
<script src="<?=$base_url.$folder;?>/popper.js/dist/umd/popper.min.js"></script>
<script src="<?=$base_url.$folder;?>/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?=$base_url.$folder;?>/headroom.js/dist/headroom.min.js"></script>

<!-- Custom -->
<script>
  let batteryBar = $('#batteryBar');
  batteryBar.css("width", "100%");

  let batteryPercentage = $('#batteryPercentage');
  batteryPercentage.text("100%");
</script>