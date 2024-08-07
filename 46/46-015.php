<?php
function getToken() {
  $s = openssl_random_pseudo_byte(24);
  return base64_encode($s);
}

  session_start();
  $token = getToken();
  setcokkie('token', $token); 
  $_SESSION['toke'] = $token;
