<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class artikel_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('users')->insert([
        //     'tile' => 'title 1',
        //     'content' => 'Sunt sint ipsum culpa commodo ullamco. 1',
        // ]);
        $data = [];

        for ($i = 1; $i <= 12; $i++) {
            $data[] = [
                'title' => 'Artikel ' . $i,
                'content' => 'Sunt sint ipsum culpa commodo ullamco. ' . $i,
            ];
        }
        DB::table('artikel')->insert($data);
    }
}
