<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(SystemTableSeeder::class);
    }
}

class SystemTableSeeder extends Seeder {
    public function run() {
        DB::table('system')->insert(['account' => 'admin1', 'name' => 'admin1', 'passwd' => '12345']);
    }
}
