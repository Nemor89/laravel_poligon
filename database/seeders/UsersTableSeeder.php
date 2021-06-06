<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'Автор не известен',
                'email' => 'author_unknown@gmail.com',
                'password' => Hash::make(Str::random(16)),
            ],
            [
                'name' => 'Автор',
                'email' => 'author@gmail.com',
                'password' => Hash::make(123123)
            ]
        ];

        \DB::table('users')->insert($data);
    }
}
