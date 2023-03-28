<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('contents')->insert([
            'name'=>'Post1',
            'image'=>null,
            'description'=>'post one depiction',
            'type_id'=>1,
            'created_at'=>Carbon::now()
        ]);
        DB::table('contents')->insert([
            'name'=>'Post2',
            'image'=>'ashtons_assets/images/bus.png',
            'description'=>'post two depiction',
            'type_id'=>2,
            'created_at'=>Carbon::now()
        ]);

        DB::table('contents')->insert([
            'name'=>'Post3',
            'image'=>'ashtons_assets/images/cav.jpg',
            'description'=>'post two depiction',
            'type_id'=>2,
            'created_at'=>Carbon::now()
        ]);

        DB::table('contents')->insert([
            'name'=>'Post4',
            'image'=>null,
            'description'=>'post two depiction',
            'type_id'=>2,
            'created_at'=>Carbon::now()
        ]);
    }
}
