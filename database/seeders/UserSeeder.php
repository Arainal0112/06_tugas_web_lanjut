<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [[
            'username' => 'ikmal',
            'name' => 'Ikmal Faris Musyaffa',
            'email' => 'ikmalfaris50@gmail.com',
            'password' => Hash::make('ikmal123')
        ]
    ];
        DB::table('users')->insert($data);
    }
}
