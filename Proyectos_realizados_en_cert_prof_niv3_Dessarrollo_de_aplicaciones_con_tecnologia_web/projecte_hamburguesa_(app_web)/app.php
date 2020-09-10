<?php $capturarBarra2 = "0"; ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>

	<script src="jquery-3.3.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<script> 
	$(document).ready(function(){
	    $("#flip").click(function(){
	        $("#panel").slideToggle("slow");
	    });
	});

	$(document).ready(function(){
	    $("#flip2").click(function(){
	        $("#panel2").slideToggle("slow");
	    });
	});

	$(document).ready(function(){
	    $("#flip3").click(function(){
	        $("#panel3").slideToggle("slow");
	    });
	});


	//capturarBarra = "";

	function funcionCapturarBarra() {
    capturarBarra = $(document).scrollTop();

}
alert(capturarBarra);
$(document).ready(function(){
    $("#formulario").on("click", "input:checkbox", function(){
    	capturarBarra = $(document).scrollTop();
    	//$(document).scrollTop(capturarBarra);
    	//<?php $capturarBarra2 ?> = $(document).scrollTop();
    	//alert(capturarBarra);
        //$("#formulario").submit();
        //$(document).scrollTop(150);

        //return capturarBarra;
        //alert(capturarBarra);
        //return capturarBarra;
        //alert(capturarBarra);
    });
});
//$(document).ready(function(){
	funcionCapturarBarra();
	alert(capturarBarra);
	//});

//alert(capturarBarra);
	</script>

	<style> 
	#panel, #flip, #panel2, #flip2, #panel3, #flip3 {
	    padding: 5px 0;
	    text-align: center;
	    background-color: #e5eecc;
	    border: solid 1px #212F3C;
	    max-width:500px;
	    font-family: century gothic, arial;
	    font-size: 25px;
	    font-weight:bold;
	    -webkit-border-radius: 10px;
-moz-border-radius: 10px;
border-radius: 10px;
margin-bottom: 2px;
/*margin-left: 20px;*/
	}

	#panel, #panel2, #panel3 {
	    padding: 50px;
	    /*display: none;*/
	    margin-bottom:20px;
	    max-width:500px;
	    font-size:20px;
	}

	#flip, #flip2, #flip3{
		cursor: pointer;
	}

	#flip{
		background-color: #F8C471;
	}

	#panel{
		background-color: #FAD7A0;
	}

	#flip2{
		background-color: #5499C7;
	}

	#panel2{
		background-color: #A9CCE3;
	}

	#flip3{
		background-color: #27AE60;
	}

	#panel3{
		background-color: #7DCEA0;
	}
	div .mensajeresumen{
		height: 70px;
	}

	input[type="checkbox"] {
    display:none;
}
input[type="checkbox"] + label span {
    display:inline-block;
    width:19px;
    height:19px;
    margin:-4px 0px 0 0;
    vertical-align:middle;
    background:url(check_radio_sheet.png) left top no-repeat;
    cursor:pointer;
}
input[type="checkbox"]:checked + label span {
    background:url(check_radio_sheet.png) -19px top no-repeat;
}

/*input:checked + label { color: green; }*/

label{
	cursor:pointer;
	margin-right: 5px;
}

#c3{
	margin-right: 20px;
}

h3{
	font-family: arial;
}

#centrar{
	margin: auto;
	text-align:center;
	max-width:500px;
}

</style>
</head>
<body>

	<?php //echo $capturarBarra2 ?>

	<div id="centrar">

	<?php

	$mayonesa = false;

	$ternera = false;

	$tomate = false;

	$lechuga = false;



	$resumen = "Hamburguesa de ";


	if(!(empty($_POST['ingrediente']))){
			foreach($_POST['ingrediente'] as $ingrediente){
				//echo $ingrediente."<br>";

				if ($ingrediente == "Ternera"){
					$ternera=true;
					$resumen .= "ternera, ";

					echo "<script> $(document).ready(function(){
						$('#panel').show();
					}); </script>";

					/*$(document).ready(function(){
						$("#panel").show();
					});*/
					//document.getElementById("img_hamburguesa").src;

				}

				if ($ingrediente == "Mayonesa"){
					$mayonesa=true;
					$resumen .= "mayonesa, ";
					//document.getElementById("img_hamburguesa").src;

				}

				if ($ingrediente == "Tomate"){
					$tomate=true;
					$resumen .= "tomate, ";
					//document.getElementById("img_hamburguesa").src;

				}

				if ($ingrediente == "Lechuga"){
					$lechuga=true;
					$resumen .= "lechuga, ";
					//document.getElementById("img_hamburguesa").src;

				}

			}
		}


//¬¬ && 

	//$ternera=false;
	echo '<IMG class="img-fluid" id="img_hamburguesa" src="crear_imagen.php?ternera='.$ternera.'&mayonesa='.$mayonesa.'&lechuga='.$lechuga.'&tomate='.$tomate.'">';

	//echo "<br>Hamburguesa de ";

	//$resumen = trim($resumen, ',');

	echo "<div class='mensajeresumen'>";

	$resumen = substr($resumen, 0, -2);

	if($ternera||$mayonesa||$tomate||$lechuga){
		echo "<h3>$resumen</h3>";
	}
	else{
		echo "<h3> </h3> <br> ";
	}

	echo "</div>";

	//echo "<h3>$resumen</h3>";

	//?ternera=true

	 ?>

	<?php
	/*header( "Content-type: image/png"); 

	


    $pan_arriba =  imagecreatefrompng("img/pan_arriba.png");


    $imagen = imagecreate(400, 150); 



   $copiar_pan_arriba = imagecopy($imagen, $pan_arriba, 0, 0, 0, 100, 100, 100); 



    imagepng($imagen);


    imagedestroy($imagen);*/

    ?>

    <?php

	//echo '<IMG src="app.php">';

	 ?>

	 <script>

	 </script>


	<form action="app.php" method="post" id="formulario"> 


		<div id="flip">🍔 Carne 🍔</div>
		<div id="panel"><input type="checkbox" name="ingrediente[]" value="Ternera" id="c1" onclick="funcionEnviar()" <?php if($ternera) echo "checked"; ?>><label for="c1" onclick="funcionCheck()"><span></span> Ternera</label></div>

		<div id="flip2">🍔 Salsa 🍔</div>
		<div id="panel2"><input type="checkbox" name="ingrediente[]" value="Mayonesa" id="c2" onchange="document.getElementById('formulario').submit()" onclick="funcionCapturarBarra()" <?php if($mayonesa) echo "checked"; ?>><label for="c2"><span></span> Mayonesa</label></div>

		<div id="flip3">🍔 Guarnicion 🍔</div>
		<div id="panel3"><input type="checkbox" name="ingrediente[]" value="Tomate" id="c3" <?php if($tomate) echo "checked"; ?>><label for="c3"><span></span> Tomate</label>

		<input type="checkbox" name="ingrediente[]" value="Lechuga" id="c4" <?php if($lechuga) echo "checked"; ?>><label for="c4"><span></span> Lechuga</label></div>

		<!--<input type="submit">-->

	</form>



	<!--<form method='post' action='app.php'>
<input type='checkbox' name='checkbox' onChange='submit();'>
< ?php if($page->checkbox_state == 1) { echo 'checked' }; ?>
</form>-->

<?php
/*if(isset($_POST['checkbox'])) {
   // the checkbox has just been checked 
   // save the new state of the checkbox somewhere
   $page->checkbox_state == 1;
} else {
   // the checkbox has just been unchecked
   // if you have another form ont the page which uses than you should
     // make sure that is not the one thats causing the page to handle in input
     // otherwise the submission of the other form will uncheck your checkbox
   // so this this line is optional:
      if(!isset($_POST['submit'])) {
          $page->checkbox_state == 0;
      }
}*/
?>

	<script>

/*capturarBarra = "";

$(document).ready(function(){
    $("#formulario").on("click", "input:checkbox", function(){
    	capturarBarra = $(document).scrollTop();
    	$(document).scrollTop(capturarBarra);
    	alert(capturarBarra);
        //$("#formulario").submit();
        //$(document).scrollTop(150);

        //return capturarBarra;
    });
});*/



$(document).ready(function(){
    $("#formulario").on("change", "input:checkbox", function(){
        $("#formulario").submit();
    });
});

/*$(document).ready(
    function()
    {
        $("input:checkbox").change(
            function()
            {
                if( $(this).is(":checked") )
                {
                    $("#formulario").submit();
                }
            }
        )
    }
);*/

/*function funcionEnviar() {
    document.getElementById("formulario").submit();

    $(this).hide();


}*/

/*function funcionCheck() { 

}*/
</script>

	<?php

		/*if(!(empty($_POST['ingrediente']))){
			foreach($_POST['ingrediente'] as $ingrediente){
				echo $ingrediente."<br>";

				if ($ingrediente == "Ternera"){
					//document.getElementById("img_hamburguesa").src;

				}

			}
		}*/

	 ?>

	<!--<h1>Carne</h1>

	<input type="checkbox" value="Ternera"> <label> Ternera</label>

	<h1>Salsa</h1>

	<input type="checkbox" value="Mayonesa"> <label> Mayonesa</label>

	<h1>Guarnicion</h1>

	<input type="checkbox" value="Tomate"> <label> Tomate</label>

	<input type="checkbox" value="Lechuga"> <label> Lechuga</label>-->


	<?php





	/*if(!(empty($_POST['tema']))){	foreach($_POST['tema'] as $tema){		echo $tema."<br>";	}}*/

	  ?>


<!--<form action="app.php" method="post">

	<input type="checkbox" name="tema[]" value="Framework PHP CodeIgniter">Framework PHP CodeIgniter<input type="checkbox" name="tema[]" value="Introduccion php y mysql">Indroducción a PHP y Mysql<input type="checkbox" name="tema[]" value="AJAX">AJAX<input type="checkbox" name="tema[]" value="Programación orientada a objetos">Programación Orientada a Objetos<input type="checkbox" name="tema[]" value="Funciones">Funciones

	<input type="submit">

</form>-->



	<?php
	/*if(!(empty($_POST['tema']))){	foreach($_POST['tema'] as $tema){		echo $tema."<br>";	}}*/

	  ?>

	</div>
<script>
window.onload=function(){
var pos=window.name || 0;
window.scrollTo(0,pos);
}
window.onunload=function(){
window.name=self.pageYOffset || (document.documentElement.scrollTop+document.body.scrollTop);
}
</script>
</body>
</html>