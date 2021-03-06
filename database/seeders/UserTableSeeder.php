<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Rakibul',
            'email' => 'rakib@gmail.com',
            'password' => \bcrypt('12345678'),
            'image' => 'image.jpg',
            'description' => 'some description',
            'slug' => 'rakibul-islam'
        ]);
    }
}
