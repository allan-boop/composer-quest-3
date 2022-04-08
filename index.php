<?php
require 'vendor/autoload.php';
use CowSay\Cow;

$bessie = new Cow('Hello, I am Bessie!');
$bessie->setEyes('^^')
    ->setTongue('V')
    ->setPoop('OOO')
    ->setUdder('WWW');
$output = $bessie->say();
echo $bessie;
