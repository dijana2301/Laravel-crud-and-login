<?php

use Illuminate\Database\Seeder;


class ClubsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clubs')->insert([
            'name' => 'Crvena Zvezda',
            'address' => 'Marakana bb',
            'email' => 'marakanagmailcom',
            'website' => 'marakanacom'
        ]);
    }
}
