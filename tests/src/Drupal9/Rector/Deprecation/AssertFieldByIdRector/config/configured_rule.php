<?php

declare(strict_types=1);

use DrupalRector\Drupal9\Rector\Deprecation\AssertFieldByIdRector;
use DrupalRector\Tests\Rector\Deprecation\DeprecationBase;
use Rector\Config\RectorConfig;

return static function (RectorConfig $rectorConfig): void {
    DeprecationBase::addClass(AssertFieldByIdRector::class, $rectorConfig, false);
};
