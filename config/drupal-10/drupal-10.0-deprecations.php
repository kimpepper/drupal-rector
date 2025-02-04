<?php

declare(strict_types=1);

use DrupalRector\Rector\PHPUnit\ShouldCallParentMethodsRector;
use Rector\Config\RectorConfig;
use Rector\PHPUnit\Set\PHPUnitSetList;
use Rector\Symfony\Set\SymfonySetList;
use Rector\Symfony\Set\TwigSetList;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->sets([
        PHPUnitSetList::PHPUNIT_90,
        SymfonySetList::SYMFONY_62,
        TwigSetList::TWIG_240,
    ]);

    $rectorConfig->rule(ShouldCallParentMethodsRector::class);
};
