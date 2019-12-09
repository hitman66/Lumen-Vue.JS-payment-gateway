<?php
use Illuminate\Database\Seeder;
class Api_keyseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('api_key')->insert([
            'api_key' => 'e368ed39-c033-4cde-8007-438265e1d7e5',
        ]);
    }
}