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

  function loadDoc() {
      setInterval(function() {
        let data;
        let batteryBar = $('#batteryBar');
        let batteryPercentage = $('#batteryPercentage');

        var data = JSON.stringify({});

        var xhr = new XMLHttpRequest();
        xhr.withCredentials = true;

        xhr.addEventListener("readystatechange", function() {
          if (this.readyState === 4) {
            data = this.response.split("-");
            console.log(data);
            // $('#loadingInfo').remove();
          }
        });

        xhr.open("GET", URL_GET_DATA);
        xhr.send(data);
      }, 10000);
    }
    loadDoc();
</script>