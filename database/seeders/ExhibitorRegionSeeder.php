<?php

namespace Database\Seeders;

use App\Models\Exhibitor;
use App\Models\Region;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExhibitorRegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $exhibitors = Exhibitor::all();
        $regions = Region::all();
        foreach ($exhibitors as $exhibitor) {
            $exhibitorRegion = $regions->random(1);

            DB::table('exhibitor_region')->insert(['exhibitor_id' => $exhibitor->id,
                'region_id' => $exhibitorRegion->first()->id]);
        }
    }
}
