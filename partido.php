<?php
// Include do Head e Header
include_once './includes/head.php';
include_once './includes/header.php';
?>

<div class="materialContainer">


<div class="box">

   <div class="title">PARTIDO</div>

   <div class="input">
      <label for="name">Nome</label>
      <input type="text" name="name" id="name">
      <span class="spin"></span>
   </div>

   <div class="input">
      <label for="pass">Sigla</label>
      <input type="password" name="pass" id="pass">
      <span class="spin"></span>
   </div>

   <div class="input">
      <label for="name">Cor</label>
      <input type="text" name="name" id="name">
      <span class="spin"></span>
   </div>

   <div class="input">
      <label for="name">Número</label>
      <input type="text" name="name" id="name">
      <span class="spin"></span>
   </div>

   <div class="button login">
      <button><span>ENVIAR</span> <i class="fa fa-check"></i></button>
   </div>
</div>
<?php

$arquivo = fopen("partidos.csv");

while ( $linha = fgetcsv($arquivo, 1000, ",") ) {
   if( $inha[0] != 'cod') {
      echo '<pre>';
      print_r($linha);
      echo '</pre>';
   }
}

fclose($arquivo);
?>