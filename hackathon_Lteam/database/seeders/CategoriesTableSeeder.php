<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => '一品料理'
        ];
        DB::table('categories')->insert($param);

        $param = [
            'name' => '魚介'
        ];
        DB::table('categories')->insert($param);

        $param = [
            'name' => 'おつまみ'
        ];
        DB::table('categories')->insert($param);

        $param = [
            'name' => 'お酒（ビール）'
        ];
        DB::table('categories')->insert($param);

        $param = [
            'name' => 'お酒（焼酎）'
        ];
        DB::table('categories')->insert($param);

        $param = [
            'name' => 'お酒（ウィスキー）'
        ];
        DB::table('categories')->insert($param);

        $param = [
            'name' => 'お酒（日本酒）'
        ];
        DB::table('categories')->insert($param);

        $param = [
            'name' => 'お酒（果実酒）'
        ];
        DB::table('categories')->insert($param);

        $param = [
            'name' => 'お酒（サワー・カクテル）'
        ];
        DB::table('categories')->insert($param);

        $param = [
            'name' => 'お酒（ワイン）'
        ];
        DB::table('categories')->insert($param);

        $param = [
            'name' => 'ソフトドリンク'
        ];
        DB::table('categories')->insert($param);

        $param = [
            'name' => 'コース'
        ];
        DB::table('categories')->insert($param);

    }
}
