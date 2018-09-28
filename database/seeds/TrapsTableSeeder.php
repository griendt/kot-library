<?php

use Illuminate\Database\Seeder;
use App\Trap;

class TrapsTableSeeder extends Seeder {

    /**
    * Run the seed.
    *
    **/
    public function run() {
        DB::table('traps')->delete();
        $traps = [
            [
                'name'       => 'Saw',
                'identifier' => 1,
                'image_uri'  => 'traps/saw.png',
                'trap_type_identifier' => 1, // Stationary
            ],
            [
                'name'       => 'Red Guard',
                'identifier' => 2,
                'image_uri'  => 'traps/red_guard.png',
                'trap_type_identifier' => 3, // Moving
            ],
            [
                'name'       => 'Cannon',
                'identifier' => 3,
                'image_uri'  => 'traps/cannon.png',
                'trap_type_identifier' => 2, // Shooting
            ],
            [
                'name'       => 'Homing Cannon',
                'identifier' => 4,
                'image_uri'  => 'traps/homing_cannon.png',
                'trap_type_identifier' => 2,
            ],
            [
                'name'       => 'Seeker Bird',
                'identifier' => 5,
                'image_uri'  => 'traps/seeker_bird.png',
                'trap_type_identifier' => 3, // Moving
            ],
            [
                'name'       => 'Spinner',
                'identifier' => 6,
                'image_uri'  => 'traps/spinner.png',
                'trap_type_identifier' => 3, // Moving
            ],
            [
                'name'       => 'Ricochet',
                'identifier' => 7,
                'image_uri'  => 'traps/ricochet.png',
                'trap_type_identifier' => 1, // Stationary
            ],
            [
                'name'       => 'Lil\' Scorcer',
                'identifier' => 8,
                'image_uri'  => 'traps/lil_scorcher.png',
                'trap_type_identifier' => 1, // Stationary
            ],
            [
                'name'       => 'Roaster',
                'identifier' => 9,
                'image_uri'  => 'traps/roaster.png',
                'trap_type_identifier' => 1, // Stationary
            ],
            [
                'name'       => 'Warder',
                'identifier' => 10,
                'image_uri'  => 'traps/warder.png',
                'trap_type_identifier' => 4, // Stationary
            ],
            [
                'name'       => 'Bloodhound',
                'identifier' => 11,
                'image_uri'  => 'traps/bloodhound.png',
                'trap_type_identifier' => 3, // Stationary
            ],
        ];

        foreach ($traps as $trap) {
            Trap::create($trap);
        }
    }
}
