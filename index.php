<?php

require __DIR__ . '/vendor/autoload.php';

use CowSay\Cow;

$cow = new Cow('Hello Baptiste !');

$cow->setTongue('U');

echo $cow->say();