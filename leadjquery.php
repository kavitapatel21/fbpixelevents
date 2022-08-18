<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.1.1/crypto-js.min.js" integrity="sha512-E8QSvWZ0eCLGk4km3hxSsNmGWbLtSCSUcewDQPQWZF6pEU8GlT8a5fF32wOl1i8ftdMhssTrF/OhyGWwonTcXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
   
    var fn = CryptoJS.SHA256('kavita');
    //alert(fn);
    var ln = CryptoJS.SHA256('patel');
    //alert(ln);
    var em = CryptoJS.SHA256('kavita@gmail.com');
    //alert(em);
    var jsondata = JSON.stringify({
        "data": [{
            "action_source": 'email',
            "event_name": 'Lead',
            "event_time": 1659095051,
            "user_data": {
                "em": [
                    em.toString()
                ],
                "fn": [
                    fn.toString()
                ],
                "ln": [
                    ln.toString()
                ],
            },
            "custom_data": {
                "name": "Lead",
            }
        }]
    });
    console.log(jsondata);
    var settings = {

        "url": 'https://graph.facebook.com/v14.0/684242939375861/events?access_token=EAAKYCQBdU44BAABTDUHYd3ZCo1gOigWr1uNNqKWZCMIxKxhfqjEr11IuoM1NG698EBhOpOv6r2GhnNVbsbVNq4wTUy43r9W4MEEl1ZAJT4LZCUhZBZBO7vqqd2nZCejUiES3pdP6kCNEHb2qsBRagU4MZC5QKQFnZAhs0NRH1eyPicnZB7KsoZC17oK%0A',
        "method": 'POST',
        "timeout": 0,
        "headers": {
            "Content-Type": 'application/json'
        },

        "data": jsondata
    };
    jQuery.ajax(settings).done(function(response) {
        console.log(response);
        alert(response);
    });
</script>