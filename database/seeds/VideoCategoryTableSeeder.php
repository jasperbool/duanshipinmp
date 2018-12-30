<?php

use Illuminate\Database\Seeder;

class VideoCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('video_categories')->insert(array(
            array(
                'pid' => 0,
                'name' => '歌唱',
                'description' => '歌唱',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ),
            array(
                'pid' => 0,
                'name' => '段子',
                'description' => '段子',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ),
            array(
                'pid' => 0,
                'name' => '舞蹈',
                'description' => '舞蹈',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ),
        ));
    }
}
