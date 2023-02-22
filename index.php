<!DOCTYPE html>
<html lang="en">
<head>
  <style>
      .main{
          width: 50%;
          height: auto;
             position: absolute;
    top:0;
    bottom: 0;
    left: 0;
    right: 0;
    
    margin: auto;
          padding: 2%;
          border: 5px solid black;
          border-radius: 10px;
         height: 25%;
          text-align: center;
          box-shadow: 1px 1px 20px rgb(0, 0, 0, 0.6);
          background-color: rgb(255, 255, 255, 0.85);
      }
      h1 {
           font-family: Arial, Helvetica, sans-serif;
            font-weight: 700;
      }
      body, html {
  height: 100%;
  max-height: 100px;
  margin: 0;
  padding: 0;
}

html { 
  background: url(cat2.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  height: 100%;
}
  </style>
  <title>Is it snowing?</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
</head>
<body>
<div class="main"><h1>Is it snowing?</h1>
<?php
require_once('geoplugin.class.php');
$geoplugin = new geoPlugin();
// If we wanted to change the base currency, we would uncomment the following line
// $geoplugin->currency = 'EUR';
 
$geoplugin->locate();
 
//echo "Geolocation results for {$geoplugin->ip}: <br />\n".
//	"City: {$geoplugin->city} <br />\n".
//	"Region: {$geoplugin->region} <br />\n".
//	"Region Code: {$geoplugin->regionCode} <br />\n".
//	"Region Name: {$geoplugin->regionName} <br />\n".
//	"DMA Code: {$geoplugin->dmaCode} <br />\n".
//	"Country Name: {$geoplugin->countryName} <br />\n".
//	"Country Code: {$geoplugin->countryCode} <br />\n".
//	"In the EU?: {$geoplugin->inEU} <br />\n".
//	"EU VAT Rate: {$geoplugin->euVATrate} <br />\n".
//	"Latitude: {$geoplugin->latitude} <br />\n".
//	"Longitude: {$geoplugin->longitude} <br />\n".
//	"Radius of Accuracy (Miles): {$geoplugin->locationAccuracyRadius} <br />\n".
//	"Timezone: {$geoplugin->timezone}  <br />\n".
//	"Currency Code: {$geoplugin->currencyCode} <br />\n".
//	"Currency Symbol: {$geoplugin->currencySymbol} <br />\n".
//	"Exchange Rate: {$geoplugin->currencyConverter} <br />\n";
 
$lat = $geoplugin->latitude;
$long = $geoplugin->longitude;

$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://weatherapi-com.p.rapidapi.com/current.json?q=$lat%2C%20$long",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
	
	],
]);

$response = curl_exec($curl);

$decoded_json = json_decode($response, true);

$concode = $decoded_json['current']['condition']['code'];


echo '<h1>';
if ($concode = "1000") {
  echo "NO";
} elseif ($concode = "1003") {
  echo "NO";
} elseif ($concode = "1006") {
  echo "NO";
} elseif ($concode = "1009") {
  echo "NO";
} elseif ($concode = "1030") {
  echo "NO";
} elseif ($concode = "1063") {
  echo "NO";
} elseif ($concode = "1066") {
  echo "YES";
} elseif ($concode = "1069") {
  echo "NO";
} elseif ($concode = "1072") {
  echo "NO";
} elseif ($concode = "1087") {
  echo "MAYBE";
} elseif ($concode = "1114") {
  echo "YES";
} elseif ($concode = "1117") {
  echo "YES";
} elseif ($concode = "1135") {
  echo "NO";
} elseif ($concode = "1147") {
  echo "NO";
} elseif ($concode = "1150") {
  echo "NO";
} elseif ($concode = "1153") {
  echo "NO";
} elseif ($concode = "1168") {
  echo "NO";
} elseif ($concode = "1171") {
  echo "NO";
} elseif ($concode = "1180") {
  echo "NO";
} elseif ($concode = "1183") {
  echo "NO";
} elseif ($concode = "1186") {
  echo "NO";
} elseif ($concode = "1189") {
  echo "NO";
} elseif ($concode = "1192") {
  echo "NO";
} elseif ($concode = "1195") {
  echo "NO";
} elseif ($concode = "1198") {
  echo "NO";
} elseif ($concode = "1201") {
  echo "NO";
} elseif ($concode = "1204") {
  echo "NO";
} elseif ($concode = "1207") {
  echo "NO";
} elseif ($concode = "1210") {
  echo "YES";
} elseif ($concode = "1213") {
  echo "YES";
} elseif ($concode = "1216") {
  echo "YES";
} elseif ($concode = "1219") {
  echo "YES";
} elseif ($concode = "1222") {
  echo "YES";
} elseif ($concode = "1225") {
  echo "YES";
} elseif ($concode = "1237") {
  echo "NO";
} elseif ($concode = "1240") {
  echo "NO";
} elseif ($concode = "1243") {
  echo "NO";
} elseif ($concode = "1246") {
  echo "NO";
} elseif ($concode = "1249") {
  echo "NO";
} elseif ($concode = "1252") {
  echo "NO";
} elseif ($concode = "1255") {
  echo "YES";
} elseif ($concode = "1258") {
  echo "YES";
} elseif ($concode = "1261") {
  echo "NO";
} elseif ($concode = "1264") {
  echo "NO";
} elseif ($concode = "1273") {
  echo "NO";
} elseif ($concode = "1276") {
  echo "NO";
} elseif ($concode = "1279") {
  echo "YES";
} elseif ($concode = "1282") {
  echo "YES";
  } else {
  echo "MAYBE";
}
echo '</h1>';

echo '<div class="footer"><i>Your location has come up as ';
echo $decoded_json['location']['name'];
echo " ";
echo $decoded_json['location']['region'];
echo " ";
echo $decoded_json['location']['country'];
echo '</i>
echo '<p>Weather API by <a href="https://www.weatherapi.com/">WeatherAPI.com</a> Geolocation API by <a href="https://www.geoplugin.com/webservices/php">Geoplugin</a> and <a href=""
</div>';
?>
</div> <!--main -->
</body>
</html>
