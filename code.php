<head>
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '400769672023456');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=400769672023456&ev=PageView&noscript=1"/></noscript>
</head>


<?php
$data = array( // main object  
    "data" => array( // data array
        array(
            "event_name" => "Purchase",
            "event_time" => time(),
               "user_data" => array(              
                "em" => '7932b2e116b076a54f452848eaabd5857f61bd957fe8a218faf216f24c9885bb',
                "ph" => '9876765456',
                "fbc" =>'',
                "fbp" =>''
                ),
                "custom_data" => array(
                "currency" => "USD",
                "value"    => '140.52',
                ),
       ),
    ),
    "access_token" => "{EAAPZC5DUQkHEBABmCZBkzZB4ryl0N799DQdMswkv49mlOGMSBnAcbEAaiRYRMrsnJUAmlFDFUPaL2ZAT0evIaZACZAIKtuXP8WHDqd7em4soDaTVqymJZAXq8l3CsAlRUa15edzL2GsJJdTrZBzTmMiUcFFLKdkJfJHkhUwt262KS8LMdyVPs1DlNtdWIJ96kFV71RQZACL5nM3dd8OtLiX3NaUNFj9XxOIvQz1ytj1fkgwsY4fUcaLQFRpjR35fKSZC6UGZCR7zTFZBaQZDZD}"

    );  
    
   // $response = $fb->get('/me?fields=id,name', $accessToken);
    //echo $response;
    $dataString = json_encode($data);                                                                                                              
    $ch = curl_init('https://graph.facebook.com/v14.0/684242939375861/events');                                                                      
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
    curl_setopt($ch, CURLOPT_POSTFIELDS, $dataString);                                                                  
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
        'Content-Type: application/json',                                                                                
        'Content-Length: ' . strlen($dataString))                                                                       
    );                                                                                                                                                                       
    $response = curl_exec($ch);
	
	print_r($response);
?>
