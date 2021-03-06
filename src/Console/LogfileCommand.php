<?php namespace Propa\BrowscapPHP\Console;

use BrowscapPHP\Command\LogfileCommand as Command;

/**
 * Wrap console command provided by browscap package to expose it to Laravel
 *
 * @author Pavel Kulbakin <p.kulbakin@gmail.com>
 */
class LogfileCommand extends Command
{
    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct(config('browscap.cache'));

        // allocate necessary resources for the possible pick usage during parsing/caching of browscap.ini database file
        ini_set('memory_limit', '512M');
    }
}
