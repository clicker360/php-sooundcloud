<?php
if( $_FILES){
    echo "<pre>";
    print_r($_FILES);
    echo "</pre>";
    
    require_once 'Services/Soundcloud.php';
    $sc_client_id = "801db1fa1ebf6447f220ebe09657a89e"; 
    $sc_secret = "3e9b2179343f27757c0dca3c000b30b2";
    $sc_user = "iramgutzglez";
    $sc_pass = "sofiia";

    $client = new Services_Soundcloud($sc_client_id, $sc_secret);
    $user = $client->credentialsFlow($sc_user, $sc_pass);

    $track = json_decode(
            $client->post(
                        'tracks', 
                        array(
                            'track[title]' => $_FILES['file']['name'],
                            'track[asset_data]' => $_FILES['file']['tmp_name']
                        )
                        )
            );
    echo "<pre>";
    print_r($track);
    echo "</pre>";
}
?>
<form method="post" enctype="multipart/form-data" action="" >
    <input type="file" name="file" />
    <input type="submit" value="Enviar" />
</form>


