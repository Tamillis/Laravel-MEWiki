<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //this is a dummy user
        DB::table('users')->updateOrInsert(
            [
                'username' => 'Racoon'
            ],
            [
                'password' => Hash::make('trashpanda'),
                'created_at' => now(),
            ]
        );

        //this is a another dummy user
        DB::table('users')->updateOrInsert([
            'username' => 'Fox'
        ], [
            'password' => Hash::make('inthehole'),
            'created_at' => now(),
        ]);

        //this is a another dummy user
        DB::table('users')->updateOrInsert([
            'username' => 'Owl'
        ], [
            'password' => Hash::make('whatahoot'),
            'created_at' => now(),
        ]);
    }
}
