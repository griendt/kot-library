<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder {

    /**
    * Run the seed.
    *
    **/    
    public function run() {
        DB::table('users')->delete();
        User::create([
            'name' => 'Alex van de Griendt',
            'username' => 'Aluce',
            'email' => 'avdg.lucerna@gmail.com',
            'password' => Hash::make('Aw3someSauce'),
        ]);
    }
}
