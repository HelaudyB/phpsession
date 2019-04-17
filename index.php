<?php
include 'includeeverything.php';
/*
$session = new Session();
$session->add('ezioruzeyir', 'etztzr');
$session->newattribut='eiuryze';
echo($session->value);
var_dump($session);
*/
$sessiondeux =new Session();
var_dump($sessiondeux);
$sessiondeux->name="sessionname";
echo $sessiondeux->name;