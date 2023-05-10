<?php

namespace Database\Seeders;

use App\Models\User;
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
            'name' => 'John Doe',
            'email' => 'johndoe@example.com',
            'phone_number' => '1234567890',
        ]);

        User::create([
            'name' => 'Jane Doe',
            'email' => 'janedoe@example.com',
            'phone_number' => '0987654321',
        ]);
    }
}
