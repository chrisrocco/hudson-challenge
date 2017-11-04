<?php

use Illuminate\Database\Seeder;

class DataSeeder extends Seeder {

    public function run() {
        $file = __DIR__ . "/../../resources/input_data.csv";
        $csv = array_map('str_getcsv', file($file));
        array_walk($csv, function(&$a) use ($csv) {
            $a = array_combine($csv[0], $a);
        });
        array_shift($csv); # remove column header


    }
}
