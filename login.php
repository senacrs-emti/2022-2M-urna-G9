<?php
// Include do Head e Header
include_once './includes/head.php';
include_once './includes/header.php';
?>

<div class="materialContainer">


<div class="box">

   <div class="title">LOGIN</div>

   <div class="input">
      <label for="name">Usuário</label>
      <input type="text" name="name" id="name">
      <span class="spin"></span>
   </div>

   <div class="input">
      <label for="pass">Senha</label>
      <input type="password" name="pass" id="pass">
      <span class="spin"></span>
   </div>

   <div class="button login">
      <button><span>ENTRAR</span> <i class="fa fa-check"></i></button>
   </div>

</div>

<div class="overbox">
   <div class="material-button alt-2"><span class="shape"></span></div>

   <div class="title">REGISTRAR</div>

   <div class="input">
      <label for="regname">Usuário</label>
      <input type="text" name="regname" id="regname">
      <span class="spin"></span>
   </div>

   <div class="input">
      <label for="regpass">Senha</label>
      <input type="password" name="regpass" id="regpass">
      <span class="spin"></span>
   </div>

   <div class="input">
      <label for="reregpass">Repita a Senha</label>
      <input type="password" name="reregpass" id="reregpass">
      <span class="spin"></span>
   </div>

   <div class="button">
      <button><span>PROSSEGUIR</span></button>
   </div>


</div>

</div>

<?php
// Include do Footer
include_once './includes/footer.php';
?>