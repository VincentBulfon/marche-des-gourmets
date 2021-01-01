<?php

namespace Database\Seeders;

use App\Models\Exhibitor;
use App\Models\ExhibitorTag;
use App\Models\Tag;
use Illuminate\Database\Seeder;

class ExhibitorTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $exhibitors = Exhibitor::all();
        $tags = Tag::all();
        $tagsCount = $tags->count() - 3;
        foreach ($exhibitors as $exhibitor) {
            $nbrOfTags = mt_rand(2, $tagsCount);
            $exhibitorTags = $tags->random($nbrOfTags);
            foreach ($exhibitorTags as $exhibitorTag) {
                ExhibitorTag::create(['exhibitor_id' => $exhibitor->id,
                    'tag_id' => $exhibitorTag->id]);
            }
        }
    }
}
