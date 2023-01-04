<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Sara',
            'email' => 'saragiraldo483@gmail.com',
            'password' => bcrypt('12345678')
        ]);

        $user->assignRole('admin');

        User::factory(99)->create();

    }
}
