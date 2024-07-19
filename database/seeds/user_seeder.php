<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class user_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'google_id' => mt_rand(100000, 999999),
                'name'  => 'admin 1',
                'email' => 'admin1@example.com',
                'password' => Hash::make('password'),
                'type' => 'A',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'google_id' => mt_rand(100000, 999999),
                'name'  => 'admin 2',
                'email' => 'admin2@example.com',
                'password' => Hash::make('password'),
                'type' => 'A',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'google_id' => mt_rand(100000, 999999),
                'name'  => 'admin 3',
                'email' => 'admin3@example.com',
                'password' => Hash::make('password'),
                'type' => 'B',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'google_id' => mt_rand(100000, 999999),
                'name'  => 'admin 4',
                'email' => 'admin4@example.com',
                'password' => Hash::make('password'),
                'type' => 'B',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'google_id' => mt_rand(100000, 999999),
                'name'  => 'admin 5',
                'email' => 'admin5@example.com',
                'password' => Hash::make('password'),
                'type' => 'C',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'google_id' => mt_rand(100000, 999999),
                'name'  => 'admin 6',
                'email' => 'admin6@example.com',
                'password' => Hash::make('password'),
                'type' => 'C',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        DB::table('users')->insert($users);
    }
}
