<?php
require_once __DIR__ . '/../../config.php';
require_once __DIR__ . '/../../vendor/autoload.php';

$keypair = new \Nexmo\Client\Credentials\Keypair(file_get_contents(NEXMO_APPLICATION_PRIVATE_KEY_PATH), NEXMO_APPLICATION_ID);
$client = new \Nexmo\Client($keypair);

$talk = $client->calls[NEXMO_CALL_UUID]->talk();
$talk->setText(TEXT);
$talk->setVoiceName('Kimberly');
$talk->put();
