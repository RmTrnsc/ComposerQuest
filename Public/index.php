<?php

use App\AppWcs\Hello;
use HelloWorld\SayHello;

require '../vendor/autoload.php';
require_once '../Src/Wcs/Hello.php';

$hello = new Hello();

echo $hello->talk().'<br>';

$sayWorld = new SayHello();

echo $sayWorld->world();