<?php

use Illuminate\Database\Seeder;
use App\TrapType;

class TrapTypesTableSeeder extends Seeder {

    /**
     * Run the seed.
     *
     **/
    public function run() {
        $trapTypes = [
            [
                'identifier' => 1,
                'type' => 'stationary',
            ],
            [
                'identifier' => 2,
                'type' => 'cannon',
            ],
            [
                'identifier' => 3,
                'type' => 'moving',
            ],
            [
                'identifier' => 4,
                'type' => 'other',
            ]
        ];

        foreach ($trapTypes as $trapType) {
            TrapType::updateOrCreate($trapType);
        }
    }
}
