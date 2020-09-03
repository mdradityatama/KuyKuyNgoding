<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Carbon\Carbon;

class InformationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create("id_ID");

        DB::table("Informations")->insert([
            "Name"          => $faker->name,
            "Title"         => $faker->jobTitle,
            "City"          => $faker->city,
            "Religion"      => "Islam",
            "Nationality"   => $faker->country,
            "PhotoProfile"  => "masih_kosong_gais.png",
            "Summery"       => $faker->text,
            "User_ID"       => 1,
            "created_at"    => Carbon::now(),
            "updated_at"    => Carbon::now()
        ]);
    }
}
