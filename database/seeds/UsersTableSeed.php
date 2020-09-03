<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;

class UsersTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("Users")->insert([
            "Name" => "admin",
            "Username" => "admin",
            "Phone" => "",
            "Email" => "me@admin.com",
            "Password" => Hash::make("password0!"),
            "created_at"    => Carbon::now(),
            "updated_at"    => Carbon::now()
        ]);
    }
}