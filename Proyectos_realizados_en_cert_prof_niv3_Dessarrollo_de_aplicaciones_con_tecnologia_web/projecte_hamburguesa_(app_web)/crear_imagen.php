<?php
	header( "Content-type: image/png"); 

	if (isset($_GET['ternera'])) $ternera=($_GET['ternera']);
	if (isset($_GET['mayonesa'])) $mayonesa=($_GET['mayonesa']);
	if (isset($_GET['lechuga'])) $lechuga=($_GET['lechuga']);
	if (isset($_GET['tomate'])) $tomate=($_GET['tomate']);


    $pan_arriba =  imagecreatefrompng("img/pan_arriba.png");
    $carne = imagecreatefrompng("img/carne.png");
    $salsa = imagecreatefrompng("img/salsa.png");
    $tomate2 = imagecreatefrompng("img/tomate.png");
    $lechuga2 = imagecreatefrompng("img/lechuga.png");
    $pan_abajo = imagecreatefrompng("img/pan_abajo.png");



    $altura_cuadrado = 350;

    if ($mayonesa==true) $altura_cuadrado += 20;

    if ($carne==true) $altura_cuadrado += 50;



    $imagen = imagecreatetruecolor(500, 420); 

    $blanco = imagecolorallocate($imagen, 255, 255, 255);

    ImageFilledRectangle($imagen,0,0,500,600,$blanco);

    //$imagenPan = imagecreate(450, 300);

    //$imagenLechuga = imagecreate(450, 300);

    $copiar_pan_arriba = imagecopy($imagen, $pan_arriba, 20, 0, 0, 0, 432, 181);




    $altura = 95;
   	//echo "prova: $ternera";

   	if ($mayonesa==true){
   	//$altura += 95;
   	$copiar_salsa = imagecopy($imagen, $salsa, 10, $altura, 0, 0, 441, 100);
   	$altura += 25;

   }

   if ($ternera==true){
   	//$altura += 25;
   	$copiar_carne = imagecopy($imagen, $carne, 0, $altura, 0, 0, 461, 157); 
   	$altura += 50;

   }
   /*if ($mayonesa==true){
   	$altura += 130;
   	$copiar_salsa = imagecopy($imagen, $salsa, 10, 95, 0, 0, 441, 100);

   }*/
   	//$copiar_salsa = imagecopy($imagen, $salsa, 10, 95, 0, 0, 441, 100);

   	//$copiar_carne = imagecopy($imagen, $carne, 0, 100, 0, 0, 461, 157);

   /*if ($lechuga==true){
   	//$altura += 130;
   	$copiar_lechuga = imagecopy($imagen, $lechuga2, 75, 125, 0, 0, 214, 172);

   }*/

   if ($tomate==true){
   	//$altura += 55;
   	$copiar_tomate = imagecopy($imagen, $tomate2, 25, $altura, 0, 0, 437, 134);
   	//$altura += 55;

   }

   //$copiar_tomate = imagecopy($imagen, $tomate2, 25, 175, 0, 0, 437, 134);

   


   if ($lechuga==true){
   	//$altura -= 50;
   	$altura_lechuga = $altura - 45;
   	$copiar_lechuga = imagecopy($imagen, $lechuga2, 75, $altura_lechuga, 0, 0, 214, 172);

   }

$altura += 30;

   $copiar_pan_abajo = imagecopy($imagen, $pan_abajo, 25, $altura, 0, 0, 447, 205);


//$tamanyo_caja = $altura + 30;






   	//$copiar_lechuga = imagecopy($imagen, $lechuga, 75, 125, 0, 0, 214, 172);

   	//$color_azul = ImageColorAllocate($imagen,0,0,255);

   	//ImageFilledRectangle($imagen,0,0,400,150,$color_azul);

   	//$copiar_lechuga2 = imagecopyresized($imagenLechuga, $lechuga, 0, 0, 0, 0, 215, 172, 215, 172);


   	//$copiar = imagecopy($imagen, $imagenLechuga, 0, 0, 0, 0, 210, 172);

   

//imagecopy(id. destino, id. origen, x destino, y destino, x origen, y origen, anchura origen, altura origen)


   	//imagecopyresized(id. destino, id. origen, x destino, y destino, x origen, y origen, anchura origen, altura origen, anchura destino, altura destino)



    imagejpeg($imagen);


    imagedestroy($imagen);

    ?>