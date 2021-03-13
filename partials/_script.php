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
  let batteryPercentage = $('#batteryPercentage');
  let batteryIcon = $('#batteryIcon');

  let voltLabel = $('#voltLabel > strong');

  let lampIcon = $('#lampIcon');
  let lampLabel = $('#lampLabel > strong');

  let scroll = 0;
  let illustration = $('#illustration');

  function loadDoc() {
      setInterval(function() {
        let dataAntares;

        var data = JSON.stringify({});

        var xhr = new XMLHttpRequest();
        xhr.withCredentials = true;

        xhr.addEventListener("readystatechange", function() {
          if (this.readyState === 4) {
            dataAntares = this.response.split("-");
            $('#loadingInfo').slideUp("fast");
            baterai(dataAntares[0]);
            tegangan(dataAntares[1]);
            lampu(dataAntares[2]);
            if (scroll == 0) {
              window.scrollTo(0, 500);
              scroll = 1;
            }
          }
        });

        xhr.open("GET", "<?=URL_GET_DATA?>");
        xhr.send(data);
      }, 10000);
  }

  function baterai(nilai) {
    batteryBar.css("width", nilai+"%");
    batteryPercentage.text(nilai+"%");
    batteryIcon.removeClass();
    if (nilai > 0 && nilai <= 25) {
      batteryIcon.addClass("fas fa-battery-quarter text-red-5");
    }else if(nilai > 25 && nilai <= 50){
      batteryIcon.addClass("fas fa-battery-half text-amber-4");
    }else if(nilai > 50 && nilai <= 75){
      batteryIcon.addClass("fas fa-battery-three-quarters text-emerald-5");
    }else if(nilai > 75 && nilai <= 100){
      batteryIcon.addClass("fas fa-battery-full text-indigo-5");
    }else{
      batteryIcon.addClass("fas fa-battery-empty text-red-5");
    }
  }

  function tegangan(nilai) {
    voltLabel.text(nilai+"V");
  }

  function lampu(nilai) {
    lampIcon.removeClass("text-dark text-orange-5");
    if (nilai == 0) {
      lampIcon.addClass("text-dark");
      lampLabel.text("Padam");
    }else{
      lampIcon.addClass("text-orange-5");
      lampLabel.text("Nyala");
    }
  }
    loadDoc();
</script>