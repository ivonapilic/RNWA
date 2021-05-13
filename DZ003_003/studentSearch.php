<?php
$s = $_REQUEST["s"];
try{
	error_reporting(0);

		$options = [
			'cache_wsdl'     => WSDL_CACHE_NONE,
			'trace'          => 1,
			'stream_context' => stream_context_create(
				[
					'ssl' => [
						'verify_peer'       => false,
						'verify_peer_name'  => false,
						'allow_self_signed' => true
					]
				]
			)
		];
		$wsdlUrl = 'https://localhost:44346/WebService1.asmx?WSDL';
		$client = new SoapClient($wsdlUrl, $options);
		$params = array("id" => $s);
		$result = $client->getInfoStudentJson($params);
		
		$value = get_object_vars($result)['getInfoStudentJsonResult'];
		$jsonObj = json_decode($value);
		$myStr1 = "<table id=\"novaTabela\"><thead>
	    <th>Broj indeksa</th> <th>Ime</th> <th>Prezime</th>
		<th>Kontakt</th> <th>Datum upisa</th></thead>
		<tbody>";
		$mystr2 = $myStr1 . "<tr> ";
		$mystr2 = $mystr2 . "<td> " . $jsonObj[0]->roll_num . "</td>";
		$mystr2 = $mystr2 . "<td> " . $jsonObj[0]->first_name . "</td>";
		$mystr2 = $mystr2 . "<td> " . $jsonObj[0]->last_name . "</td>";
		$mystr2 = $mystr2 . "<td> " . $jsonObj[0]->phone . "</td>";
		$mystr2 = $mystr2 . "<td> " . $jsonObj[0]->admission_date . "</td>";
		$mystr2 = $mystr2 . "</tr></tbody></table>";
		echo $mystr2;
		
	
} catch(SoapFault $e){
  var_dump($e);
  echo $e;
 }
 

	
?>