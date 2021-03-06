<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersSeeder::class);
        $this->call(ProfilsSeeder::class);
        $this->call(KejuruansSeeder::class);
        $this->call(KategoriFasilitasSeeder::class);
        $this->call(KomponenSeeder::class);
    }
}
