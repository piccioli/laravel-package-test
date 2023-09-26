<?php

namespace Webmapp\LaravelPackageTest\Commands;

use Illuminate\Console\Command;

class LaravelPackageTestCommand extends Command
{
    public $signature = 'laravel-package-test';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
