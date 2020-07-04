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
        // $this->call(UserSeeder::class);
        $this->call(UsersTableSeed::class);
        $this->call(InformationsTableSeeder::class);
        $this->call(CertificatesSeeder::class);
        $this->call(ExperiencesSeeder::class);
        $this->call(SkillsSeeder::class);
    }
}
