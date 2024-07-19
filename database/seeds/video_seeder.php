<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class video_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [];

        for ($i = 1; $i <= 12; $i++) {
            $data[] = [
                'title' => 'video ' . $i,
                'description' => 'Sunt sint ipsum culpa commodo ullamco. ' . $i,
            ];
        }
        DB::table('video')->insert($data);
    }
}
