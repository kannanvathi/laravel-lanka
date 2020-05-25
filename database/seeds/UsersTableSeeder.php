<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'bharathikannan',
            'email' => 'bharathikannanp@dckap.com',
            'password' => Hash::make('Vickyshree123#')
        ]);
    }
}
