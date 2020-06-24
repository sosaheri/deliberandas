<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'cid' => '0',
            'name' => 'Admin',
            'email' => 'admin@deliberandas.com',
            'email_verified_at' => now(),
            'password' => Hash::make('thesecret'),
            'role' => 0,
            'created_at' => now(),
            'updated_at' => now(),
            'fullProfile' => true
        ]);
    }
}
