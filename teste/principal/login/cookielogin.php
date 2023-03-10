<?php
if (isset($_COOKIE['mensagem'])) {
  echo "<script>alert('" . $_COOKIE['mensagem'] . "');</script>";
  setcookie('mensagem', '', time() - 3600); // apaga o cookie


} else {
  $mensagem = '';
}
?>

