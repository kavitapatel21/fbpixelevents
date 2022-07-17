<?php
$price  = '15.52';
$fullURL = 'www.google.com';
//$emailhased = hash('ripemd160', 'admin@gmail.com'); 
$emailhased = hash('SHA256', 'admin@gmail.com'); 
//echo $emailhased;
$time=time();
//echo $time;
//die;
$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://graph.facebook.com/v14.0/684242939375861/events?access_token=EAAKYCQBdU44BAABTDUHYd3ZCo1gOigWr1uNNqKWZCMIxKxhfqjEr11IuoM1NG698EBhOpOv6r2GhnNVbsbVNq4wTUy43r9W4MEEl1ZAJT4LZCUhZBZBO7vqqd2nZCejUiES3pdP6kCNEHb2qsBRagU4MZC5QKQFnZAhs0NRH1eyPicnZB7KsoZC17oK%0A',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'{
    "data": [
        {
		"action_source": "email",
		"event_name": "Purchase",
		"event_time": "'.$time.'",
		"custom_data": {
			"currency": "USD",
			"value": "'.$price.'",

		},
		"user_data": {
			
			"em": [
        "'.$emailhased.'"
			],
		},
		 "action_source" : "website",
         "event_source_url"  : "'.$fullURL.'",
        }
    ]
}',
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json'
  ),
));
$response = curl_exec($curl);
curl_close($curl);
echo $response;
?>