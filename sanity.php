<?php

require __DIR__ . '/vendor/autoload.php';

use Sanity\Client as SanityClient;

$sanity = new SanityClient([
    'projectId' => 'jw4752tu',
     'useCdn' => false,
    'dataset' => 'production',
     'apiVersion' => '2022-03-07',
    'token' => 'sk9maFrsxT0GGNKoavBW8j61Zxjs7503hCBWx4X8yby8YRO8jzQqiXxJ0RjdyKoRScAxZ9Hy5FJ1RpBZVI1xuvS4JoixwX9kpRunEV62t9FMcFIMIQYIAoCIfFtsFs9c6pirGF2Cd6FNvRS9VR841ApmSKM6HkekURH6DYqcWTTQ6M8nVHoP',
    ]);


$jsonAbout  = $sanity->fetch('*[_type == "abouts"]');
$jsonProjects  = $sanity->fetch('*[_type == "works"]');


