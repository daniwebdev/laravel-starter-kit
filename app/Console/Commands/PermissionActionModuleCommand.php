<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Permission\Models\Permission;

class PermissionActionModuleCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'permission:module {name} {actions?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $name = $this->argument('name');
        $actions = array_filter(explode(',', $this->argument('actions')), function($item) {
            return $item != "";
        });


        if(count($actions) == 0) {
            $actions = ['create', 'edit', 'read', 'delete'];
        }

        foreach($actions as $act) {
            $__name = strtolower($act . " " . $name);

            Permission::create(['name' => $__name]);

            $this->info("Permission ".$__name." created..!");

        }

        return Command::SUCCESS;
    }
}
