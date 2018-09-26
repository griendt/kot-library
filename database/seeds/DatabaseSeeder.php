<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder::class);
        $this->call(BaseTableSeeder::class);
        $this->call(TrapTypesTableSeeder::class);
        $this->call(TrapsTableSeeder::class);
    }
}
