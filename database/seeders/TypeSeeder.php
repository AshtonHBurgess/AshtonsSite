<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('types')->insert([
            'name'=>'Type1',
            'description'=>'Type1 description',
            'created_at'=>Carbon::now()
        ]);

        DB::table('types')->insert([
            'name'=>'Type2',
            'description'=>'Type2 description',
            'created_at'=>Carbon::now()
        ]);
        DB::table('types')->insert([
            'name'=>'Type3',
            'description'=>'Type2 description',
            'created_at'=>Carbon::now()
        ]);
    }
}
