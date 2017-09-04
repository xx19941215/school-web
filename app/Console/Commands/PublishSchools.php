<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\School; 
use Illuminate\Support\Facades\DB;
use App\Scopes\DraftScope;

class PublishSchools extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'publish-schools';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Publish some schools';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->publishSchools();        
    }

    public function publishSchools()
    {
        $schools = DB::table('schools')
                    ->where('is_draft', '=', 1)
                    ->take(50)
                    ->get();
        foreach ($schools as $school) {
            School::where('id', $school->id)
                    ->update([
                        'is_draft' => 0
                    ]);
        }
    }
}
