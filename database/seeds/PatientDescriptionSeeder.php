<?php

use Illuminate\Database\Seeder;
use App\PatientDescription;

class PatientDescriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(PatientDescription::class, 10)->create();
    }
}
