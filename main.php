<?php
require __DIR__ . '/vendor/autoload.php';

$aimJsonPath = __DIR__ . '/credentials.json';

$client = new Google\Client();
$client->setApplicationName('Example Project');
// $client->addScope(Google_Service_Calendar::CALENDAR_EVENTS);
$client->setScopes(array(Google_Service_Calendar::CALENDAR));
$client->setSubject('owner@example.com'); // サービスアカウントの場合必要
$client->setAuthConfig($aimJsonPath);
print "Google Clinet Settings OK\n";

$service = new Google_Service_Calendar($client);
print "Google Service Calendar Settings OK\n";

$email = 'user@example.com';
$calendarId = $email;
print "calendarId: $calendarId.\n";

// options: 'timeZone' => 'Asia/Tokyo',
$event = new Google_Service_Calendar_Event(array(
  'summary' => 'PHP Google Calendar API Test',
  'description' => 'PHP Google Calendar API Test',
  'start' => array(
    'date' => '2021-06-11',
  ),
  'end' => array(
    'date' => '2021-06-11',
  ),
));

$event = $service->events->insert($calendarId, $event);
printf('Event created: %s\n', $event->htmlLink);