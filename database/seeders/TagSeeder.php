<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [ 'tag' => 'viennoiseries'],
            ['tag' => 'salaisons'],
            ['tag' => 'desserts'],
            ['tag' => 'fromages'],
            ['tag' => 'bières'],
            ['tag' => 'vins'],
            ['tag' => 'épices'],
        ];
        foreach ($data as $tag) {
            DB::table('tags')->insert($tag);
        }
    }
}
