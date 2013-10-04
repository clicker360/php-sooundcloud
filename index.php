<?php 

require_once 'Services/Soundcloud.php';
$sc_client_id = "57af796c4b37011fd36335f74b90fc04"; 
$sc_secret = "22ae5d25caad69e9fd59d87756146f99";
$sc_user = "iramgutzglez";
$sc_pass = "sofiia";
// create client object and set access token
$client = new Services_Soundcloud($sc_client_id, $sc_secret);
// login
$client->credentialsFlow($sc_user, $sc_pass);

$track = json_decode($client->post('tracks', array(
    'track[title]' => 'test',
    'track[asset_data]' => '/home/clickerdev/sites/dev.clicker360.com/public_html/php-soundcloud/test.mp3'
)));

// print track link
print $track->permalink_url;
?>

