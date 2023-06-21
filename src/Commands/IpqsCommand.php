<?php

namespace Astrogoat\Ipqs\Commands;

use Illuminate\Console\Command;

class IpqsCommand extends Command
{
    public $signature = 'ipqs';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
