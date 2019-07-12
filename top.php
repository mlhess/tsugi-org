<?php
use \Tsugi\Core\LTIX;

if ( ! defined('COOKIE_SESSION') ) define('COOKIE_SESSION', true);

require_once "tsugi/config.php";

// Do this early to allow sanity-db.php to check in more detail after
// Headers has been sent
$PDOX = false;
try {
    define('PDO_WILL_CATCH', true);
    $PDOX = LTIX::getConnection();
    $LAUNCH = LTIX::session_start();
} catch(PDOException $ex){
    $PDOX = false;  // sanity-db-will re-check this below
}

if ( $PDOX !== false ) LTIX::loginSecureCookie();

$OUTPUT->header();
?>
<style>
a[target="_blank"]:after {
    font-family: 'Font Awesome 5 Free';
    font-weight: 600;
    content: " \f35d";
}
.goog-te-banner-frame.skiptranslate {
    display: none !important;
    } 
body {
    top: 0px !important; 
    }
</style>
