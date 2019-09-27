<?php

use App\User;
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
        // $this->call(UsersTableSeeder::class);
          // factory(User::class, 20)->create();
        $this->call(PostSeeder::class);
        // $this->call(Patientseeder::class);
        // $this->call(PatientDescriptionSeeder::class);
    }
}
