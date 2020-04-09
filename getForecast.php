<?php
header("Access-Control-Allow-Origin: *");
ini_set('memory_limit', '-1');
//$time_start = microtime(true);
//Open our CSV file using the fopen function.
$fh = fopen('forecast_data.csv', "r");
 
//Setup a PHP array to hold our CSV rows.
$csvData = array();
 
//Loop through the rows in our CSV file and add them to
//the PHP array that we created above.
while (($row = fgetcsv($fh, 0, ",")) != FALSE) 
{
	foreach(array_keys($row) as $key)
	{
		$row[$key] = mb_convert_encoding($row[$key], "utf8", "big5");
	}
    $csvData[] = $row ;
}
//Finally, encode our array into a JSON string format so that we can print it out.
//print_r(json_encode($csvData, JSON_UNESCAPED_UNICODE));
//data out to json file.
//print_r($csvData);
echo json_encode($csvData, JSON_UNESCAPED_UNICODE);
//file_put_contents('parseresult.json', json_encode($csvData, JSON_UNESCAPED_UNICODE));
//date_default_timezone_set('Asia/Taipei'); 
//echo date("Y-m-d H:i:s"); 
//$time_end = microtime(true);
//$time = $time_end - $time_start;
//if($time > 30)
//{
//	echo 'time out';
//}
//var_dump($time); 
?>