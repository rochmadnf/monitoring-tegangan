<?php
    $base_url = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? "https" : "http");
    $base_url .= "://".$_SERVER['HTTP_HOST'];
    $base_url .= str_replace(basename($_SERVER['SCRIPT_NAME']),"",$_SERVER['SCRIPT_NAME']);

    $folder = "vendor";

    define("URL_ANTARES", "YOUR_URL");
    define("API_KEY_ANTARES", "YOUR_API_KEY");
    define("URL_GET_DATA", "YOUR_URL");