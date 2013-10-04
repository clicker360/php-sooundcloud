<?php 

require_once 'Services/Soundcloud.php';

$soundcloud = new Services_Soundcloud(
        '57af796c4b37011fd36335f74b90fc04', 
        '22ae5d25caad69e9fd59d87756146f99', 
        'http://dev.clicker.com/php-soundcloud'
        );
$authorizeUrl = $soundcloud->getAuthorizeUrl();

?>
<a href="<?php echo $authorizeUrl; ?>">Connect with SoundCloud</a>
