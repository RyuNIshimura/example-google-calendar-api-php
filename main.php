<?php
require __DIR__ . '/vendor/autoload.php';

try {
  $aimJsonPath = __DIR__ . '/credentials.json';
  $ownerAccount = 'owner@example.com';
  $userAccount = 'user@example.com';

  $client = new Google\Client();
  $client->setApplicationName('project name');
  $client->setScopes(array(Google_Service_Calendar::CALENDAR));
  $client->setSubject($ownerAccount); // Required for service accounts
  $client->setAuthConfig($aimJsonPath);

  $service = new Google_Service_Calendar($client);

  $email = $userAccount;
  $calendarId = $email;

  date_default_timezone_set('Asia/Tokyo'); // scope is the lifetime of the executing script
  // RFC3339
  $start = date("Y-m-d\TH:i:sP"); // Now
  $end = date("Y-m-d\TH:i:sP",strtotime("+2 hour")); // 2 hours later

  $event = new Google_Service_Calendar_Event(array(
    'summary' => 'PHP Google Calendar API Test Title',
    'description' => "PHP Google Calendar API Test description1.\nPHP Google Calendar API Test description2.",
    'start' => array(
      'dateTime' => $start,
      'timeZone' => 'Asia/Tokyo',
    ),
    'end' => array(
      'dateTime' => $end,
      'timeZone' => 'Asia/Tokyo',
    ),
    'colorId' => '11', // 1 ~ 11
    "overrides" => array(
      "method" => "popup", // or email
      "minutes" =>  "10" // 10 minutes ago. 0 ~ 40320 (4 weeks in minutes).
    )
  ));

  $event = $service->events->insert($calendarId, $event);
  printf('success!');
} catch (Exception $e) {
  printf('failed!' . $e);
}