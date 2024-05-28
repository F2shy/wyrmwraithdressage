<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = $_POST["exampleFormControlInput1"];
  $messenger = $_POST["exampleFormControlTextarea1"];
  $becenev = $_POST["exampleFormControlTextarea2"];
  $eletkor = $_POST["typeNumber"];
  $hobbik = $_POST["exampleFormControlTextarea3"];
  $magadról = $_POST["exampleFormControlTextarea4"];
  $instagram = $_POST["exampleFormControlTextarea5"];
  $discord = $_POST["exampleFormControlSelect1"];
  $ssonev = $_POST["exampleFormControlTextarea6"];
  $teamszett = $_POST["exampleFormControlSelect2"];
  $szandek = $_POST["exampleFormControlSelect3"];
  $miert = $_POST["exampleFormControlTextarea7"];

  $to = "tombenkov@gmail.com"; // Cím, ahova az e-mailt szeretnéd küldeni
  $subject = "Új jelentkezés";
  $message = "Email: $email\nMessenger: $messenger\nBecenev: $becenev\nÉletkor: $eletkor\nHobbik: $hobbik\nMagadról: $magadról\nInstagram: $instagram\nDiscord: $discord\nSSO név: $ssonev\nTeamszett: $teamszett\nSzándék: $szandek\nMiért: $miert";

  mail($to, $subject, $message);
}
?>
