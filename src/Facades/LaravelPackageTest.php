<?php

namespace Webmapp\LaravelPackageTest\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Webmapp\LaravelPackageTest\LaravelPackageTest
 */
class LaravelPackageTest extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Webmapp\LaravelPackageTest\LaravelPackageTest::class;
    }
}
