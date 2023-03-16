<?php

require "vendor/autoload.php";

$m = new Maizhijian\Wecom();

$m->test();
$m->test2();
$m->testGitPush();

$m2 = new \Maizhijian\Test();
$m2->test();