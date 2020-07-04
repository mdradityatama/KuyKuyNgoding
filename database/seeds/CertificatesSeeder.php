<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Carbon\Carbon;

class CertificatesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for ($i=0; $i < 5; $i++) {
            DB::table('Certificates')->insert([
                'Title'         => $faker->companySuffix,
                'Description'   => $faker->text($maxNbChars = 200),
                'Year'          => $faker->dateTimeBetween($startDate = '-5 years', $endDate = 'now', $timezone = null) ,
                'Publisher'     => $faker->company,
                'Information_ID'=> 1,
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
            ]);
        }
    }
}
