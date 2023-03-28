<?php
namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
//        DB::table('users')->insert([
//            'name'=>'user',
//            'email'=>'asburgess@outlook.com',
//            'password'=>'password',
//            'created_at' => Carbon::now(),
//        ]);

        DB::table('users')->insert([
            'name'=>'Ashton',
            'email'=>'ashton@example.ca',
            'password' => Hash::make('team4000'),
            'created_at' => Carbon::now(),
        ]);

    }
}
