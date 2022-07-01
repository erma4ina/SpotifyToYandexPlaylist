<?php
$json = file_get_contents(__DIR__ . '/YourLibrary.json');

$data = json_decode($json, true);

const RESULTS_PATH = __DIR__ . '/outputListForYandexMusic.txt';

file_put_contents('outputListForYandexMusic.txt', '');

foreach ($data['tracks'] as $index => $trackArray) {
    file_put_contents(RESULTS_PATH, $trackArray['artist'] . ' - ' . $trackArray['track'] . PHP_EOL, FILE_APPEND);
}

foreach ($data['albums'] as $index => $albumArray) {
    file_put_contents(RESULTS_PATH, $albumArray['artist'] . ' - ' . $albumArray['album'] . PHP_EOL, FILE_APPEND);
}
