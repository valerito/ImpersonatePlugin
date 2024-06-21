<?php

namespace Valerito\ImpersonatePlugin\Commands;

use Illuminate\Console\Command;

class ImpersonatePluginCommand extends Command
{
    public $signature = 'impersonateplugin';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
