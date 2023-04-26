<?php

date_default_timezone_set('Asia/Ho_Chi_Minh');

// First, retrieve the timestamp from the MySQL database
$stored_timestamp = "2023-03-13 11:39:00"; // this is just an example
$current_timestamp = time();
$formated_current_timestamp = date('Y-m-d H:i:s', $current_timestamp);
echo 'current timestamp: ' . $current_timestamp . '<br/>';
echo 'formated_current_timestamp: ' . $formated_current_timestamp . '<br/>';


// Next, create a DateTime object for the server's timezone
$server_datetime = new DateTime($stored_timestamp, new DateTimeZone('Asia/Ho_Chi_Minh'));

$server_datetime_string = $server_datetime->format('Y-m-d H:i:s');
echo 'stored datetime:' . $server_datetime_string . '</br />';



// Then, retrieve the user's preferred timezone from their user profile
$user_timezone = new DateTimeZone('Asia/Seoul'); // this is just an example

// Finally, convert the server datetime to the user's local timezone
$user_datetime = $server_datetime->setTimezone($user_timezone);

// You can then format the user_datetime object to display the time in the user's preferred format
$formatted_datetime = $user_datetime->format('Y-m-d H:i:s');
echo 'Seoul time of stored timestamp: ' . $formatted_datetime; // outputs 2023-03-13 09:30:00 (assuming the user is in New York)


$user_datetime = $server_datetime->setTimezone($user_timezone);
$formatted_datetime = $user_datetime->format('Y-m-d H:i:s');
echo 'Seoul time of current timestamp: ' . $formatted_datetime;
?>