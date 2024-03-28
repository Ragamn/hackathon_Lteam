<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Seat;

class SeatsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'store_id' => '1',
            'name' => 'テーブル席1',
            'num' => '6',
            'seats_name' => 'テーブル',
        ];
        $product = new Seat;
        $product->fill($param)->save();

        $param = [
            'store_id' => '1',
            'name' => 'テーブル席2',
            'num' => '6',
            'seats_name' => 'テーブル',
        ];
        $product = new Seat;
        $product->fill($param)->save();

        $param = [
            'store_id' => '1',
            'name' => 'テーブル席3',
            'num' => '6',
            'seats_name' => 'テーブル',
        ];
        $product = new Seat;
        $product->fill($param)->save();

        $param = [
            'store_id' => '1',
            'name' => 'テーブル席4',
            'num' => '6',
            'seats_name' => 'テーブル',
        ];
        $product = new Seat;
        $product->fill($param)->save();

        $param = [
            'store_id' => '1',
            'name' => 'テーブル席5',
            'num' => '6',
            'seats_name' => 'テーブル',
        ];
        $product = new Seat;
        $product->fill($param)->save();

        $param = [
            'store_id' => '1',
            'name' => 'テーブル席6',
            'num' => '6',
            'seats_name' => 'テーブル',
        ];
        $product = new Seat;
        $product->fill($param)->save();

        $param = [
            'store_id' => '1',
            'name' => 'テーブル席7',
            'num' => '6',
            'seats_name' => 'テーブル',
        ];
        $product = new Seat;
        $product->fill($param)->save();

        $param = [
            'store_id' => '1',
            'name' => 'テーブル席8',
            'num' => '6',
            'seats_name' => 'テーブル',
        ];
        $product = new Seat;
        $product->fill($param)->save();

        $param = [
            'store_id' => '1',
            'name' => 'テーブル席9',
            'num' => '6',
            'seats_name' => 'テーブル',
        ];
        $product = new Seat;
        $product->fill($param)->save();

        $param = [
            'store_id' => '1',
            'name' => 'テーブル席10',
            'num' => '6',
            'seats_name' => 'テーブル',
        ];
        $product = new Seat;
        $product->fill($param)->save();

        $param = [
            'store_id' => '1',
            'name' => 'カウンター席1',
            'num' => '1',
            'seats_name' => 'カウンター',
        ];
        $product = new Seat;
        $product->fill($param)->save();

        $param = [
            'store_id' => '1',
            'name' => 'カウンター席2',
            'num' => '1',
            'seats_name' => 'カウンター',
        ];
        $product = new Seat;
        $product->fill($param)->save();

        $param = [
            'store_id' => '1',
            'name' => 'カウンター席3',
            'num' => '1',
            'seats_name' => 'カウンター',
        ];
        $product = new Seat;
        $product->fill($param)->save();

        $param = [
            'store_id' => '1',
            'name' => 'カウンター席4',
            'num' => '1',
            'seats_name' => 'カウンター',
        ];
        $product = new Seat;
        $product->fill($param)->save();

        $param = [
            'store_id' => '1',
            'name' => 'カウンター席5',
            'num' => '1',
            'seats_name' => 'カウンター',
        ];
        $product = new Seat;
        $product->fill($param)->save();

        $param = [
            'store_id' => '1',
            'name' => 'カウンター席6',
            'num' => '1',
            'seats_name' => 'カウンター',
        ];
        $product = new Seat;
        $product->fill($param)->save();

        $param = [
            'store_id' => '1',
            'name' => 'カウンター席7',
            'num' => '1',
            'seats_name' => 'カウンター',
        ];
        $product = new Seat;
        $product->fill($param)->save();

        $param = [
            'store_id' => '1',
            'name' => 'カウンター席8',
            'num' => '1',
            'seats_name' => 'カウンター',
        ];
        $product = new Seat;
        $product->fill($param)->save();

        $param = [
            'store_id' => '1',
            'name' => 'カウンター席9',
            'num' => '1',
            'seats_name' => 'カウンター',
        ];
        $product = new Seat;
        $product->fill($param)->save();

        $param = [
            'store_id' => '1',
            'name' => 'カウンター席10',
            'num' => '1',
            'seats_name' => 'カウンター',
        ];
        $product = new Seat;
        $product->fill($param)->save();
    }
}