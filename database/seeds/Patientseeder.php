<?php

use Illuminate\Database\Seeder;
use App\Patient;

class Patientseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Patient::class, 20)->create();
    }
}
