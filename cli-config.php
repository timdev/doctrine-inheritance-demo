<?php
declare(strict_types=1);

$em = require __DIR__ . '/bootstrap.php';

return \Doctrine\ORM\Tools\Console\ConsoleRunner::createHelperSet($em);
