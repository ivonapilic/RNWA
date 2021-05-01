<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <style>
	#form{
		width: 20%;
		background-color: pink;
		padding: 25px;
		text-align: center;
        border-radius: 50px;
	}
	#iznos{
		width: 63%;

	}
	#rezultat {
        width: 40%;

    }
	#valuta{
		padding: 10px ;
	}
		
  </style>
</head>
<body>

<?php

try{
	error_reporting(0);
	ini_set('soap.wsdl_cache_enabled',0);
	ini_set('soap.wsdl_cache_ttl',0);
	
	$endPointWSDL = "http://localhost/DZ003_001/pretvori.wsdl";
  
	$sClient = new SoapClient($endPointWSDL,
							array(
							'cache_wsdl'=>WSDL_CACHE_NONE,
							'trace' => 1)
							);
		
		$valuta 	= $_POST['valuta'];
		$iznos = $_POST['iznos'];
		
		$response = $sClient->pretvori($valuta, $iznos);
		
		echo "\n\n";
	
	
} catch(SoapFault $e){
  var_dump($e);
  echo $e;
 } 
	
?>

  
    <form id="form" action="./client.php" method="post">
		
		<input type="text" id="iznos" name="iznos" placeholder="Unesite iznos"><br />
		<div id="valuta" >
		  <input type="radio" name="valuta" value="BamToEur" checked>
			<label>BAM >> EUR</label><br />
		  <input type="radio" name="valuta" value="EurToBam">
			<label>EUR >> BAM</label>
		</div><br />
		<input id="button" type="submit" name="submit" value="Pretvori">
		<input type="text" id="rezultat" name="id" placeholder="Rezultat" value=" <?php echo  number_format($response, 2, '.', '');	?>" >
	
    </form>      
  


</body> 
</html>
