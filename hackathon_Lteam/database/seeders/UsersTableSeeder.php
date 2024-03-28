<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use app\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => '盛岡駅前本店',
            'email' => 'moriokaeimae@gmail.com',
            'password' => '$2y$10$vACO7679c4IphDhFxzRJduoj8oy5FzjKrSlQpKlhiSORQnLYdA1iO',
        ];
        $user = new User;
        $user->fill($param)->save();

        $param = [
            'name' => '盛岡大通り店',
            'email' => 'moriokaoodoori@gmail.com',
            'password' => '$2y$10$uGXxkVxcSZuqEQqVvrIfhOhJTSpyNGNpmNyAJNT8A9P135wvEb4X.',
        ];
        $user = new User;
        $user->fill($param)->save();

        $param = [
            'name' => '盛岡駅前本店',
            'email' => 'yahabaekimae@gmail.com',
            'password' => '$2y$10$A.8NTT9MEg2bhf7ZBCyaju6PFRX51luf6wgpMBzftHpxN7XqpmOL.',
        ];
        $user = new User;
        $user->fill($param)->save();
    }
}
