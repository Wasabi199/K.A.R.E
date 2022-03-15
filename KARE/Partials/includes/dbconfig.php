<?php

require __DIR__ . '/vendor/autoload.php';

use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;


// $serviceAccount = ServiceAccount::fromJsonFile(__DIR__. 'react-ebe8e-firebase-adminsdk-edc3p-3832332702.json');
$firebase = (new Factory)
    ->withServiceAccount(__DIR__ . '/kare-dafc1-firebase-adminsdk-qp5mv-738a8e0d45.json')
    ->withDatabaseUri('https://kare-dafc1-default-rtdb.firebaseio.com/');

$database = $firebase->createDatabase();
