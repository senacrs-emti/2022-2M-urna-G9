<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> Grafico </title>
<link href="styles/style.css" rel="stylesheet" type="text/css" />
</head>
<body id="apuracao">
<?php
  // definindo porcentagem
  $width1 = '25,26%';
  $width2 = '23,24%';
  $width3 = '15,59%';
  $width4 = '10,35%';
  $width5 = '9,42%';
  $width6 = '4,98%';
  $width7 = '3,42%';
  $width8 = '3,35%';
  $width9 = '2,90%';
  $width10 = '1,49%';
  
  $total  = 10; // total de barras
?>
<div id="principal">
  <p>Porcentagem de Acessos</p>
  <?php
    for($i=1;$i <= $total;$i++){
	$width = ${'width' . $i};
  ?>
	<div id="barras">
          <div class="barra<?=$i?>" style="width:<?=$width ?>" ><?=$width ?></div>
	</div>
  <?php } ?>
</div>
</body>
</html>