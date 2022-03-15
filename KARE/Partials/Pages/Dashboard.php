<!DOCTYPE html>
<html>
<?php
use Firebase\Auth\Token\Exception\InvalidToken;
include '../includes/dbconfig.php';

session_start();
include '../includes/dbconfig.php';
echo($_SESSION['uid']);

echo '<pre>';
var_dump($_SESSION);
echo '</pre>';

?>
    <head>

    </head>
    <body>


    </body>
</html>