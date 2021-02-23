<!DOCTYPE html>
<html>
<head>
	<title>Rastreador</title>
	<meta charset="utf-8">



	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	



</head>
<body>

	<form action="recebe_loc.php" method="POST" id="ajax">
		
		<p>Latitude:</p>
		<input type="text" name="latitude" id="latitude">
		<br>
		<p>Longitude</p>
		<input type="text" name="longitude" id="longitude">

		<button type="submit" id="enviar">Enviar</button> 

	</form>
		<button id="botao" onclick="PegarLocalizacao()">pegar localizacao</button>

	<script>

		
	
	</script>
	<script>
		
		var latitude = document.getElementById("latitude");
		var longitude = document.getElementById("longitude");

		function PegarLocalizacao(){
			if (navigator.geolocation)
				navigator.geolocation.watchPosition(enviaPosicao);
			else{
				alert("O seu navegador não suporta Geolocalização.");
				}
			
		}
		function enviaPosicao(position){

			document.getElementById('latitude').value = position.coords.latitude;
			document.getElementById('longitude').value = position.coords.longitude;
		}

	</script>


<script>
	var botao = document.getElementById('botao');
	botao.click();

	var delay=3000; //1 seconds
	setTimeout(function(){
        var enviar = document.getElementById('enviar');
		enviar.click();
	},delay);
	
</script>

</body>
</html>