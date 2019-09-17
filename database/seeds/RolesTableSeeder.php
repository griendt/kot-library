<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;
use App\UserRole;

class RolesTableSeeder extends Seeder {

    /**
    * Run the seed.
    *
    **/
    public function run()
    {
        DB::table('roles')->delete();
        DB::table('user_roles')->delete();

        $roles = [
            ['identifier' => 'admin'],
            ['identifier' => 'moderator'],
            ['identifier' => 'user'],
            ['identifier' => 'restricted'],
            ['identifier' => 'banned']
        ];

        foreach ($roles as $role) {
            Role::create($role);
        }

        $aluce = User::whereUserName('Aluce')->first();
        if ($aluce) {
            UserRole::create([
                'user_id' => $aluce->id,
                'role_id' => Role::whereIdentifier('admin')->first()->id,
            ]);
        }
    }
}
