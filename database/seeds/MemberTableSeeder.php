<?php

use Illuminate\Database\Seeder;

class MemberTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('members')->insert(array(
            array(
                'username' => 'stephen',
                'password' => bcrypt('123456'),
                'email' => 'stephen@admin.com',
                'phone' => '13500286939',
                'avatar' => null,
                'alias' => 'stephen',
                'type' => 2,
                'last_logined_ip' => 0,
                'last_logined_at' => \Carbon\Carbon::now(),
                'logined_counts' => 0,
                'status' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ),
            array(
                'username' => 'curry',
                'password' => bcrypt('123456'),
                'email' => 'curry@admin.com',
                'phone' => '13500286938',
                'avatar' => null,
                'alias' => 'curry',
                'type' => 1,
                'last_logined_ip' => 0,
                'last_logined_at' => \Carbon\Carbon::now(),
                'logined_counts' => 0,
                'status' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ),
        ));
    }
}
