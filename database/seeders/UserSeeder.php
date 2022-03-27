<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'shemita Remix',
            'email' => 'shemarodriguez1406@gmail.com',
            'password' => bcrypt('123456'),
        ]);

        user::factory(16)->create();
    }
}
