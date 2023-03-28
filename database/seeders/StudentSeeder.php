<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [[
            'name' => 'Ikmal Faris Musyaffa',
            'number' => '15',
            'class' => 'TI-2G',
            'sin' => '2141720123',
            'birth' => 'Kediri, 07 Oktober 2002',
            'address' => 'Perumahan Tugurejo Indah G-4 Ds.Tugurejo Kec.Ngasem Kab.Kediri Jawa Timur Indonesia',
            'hobby' => 'Gacha, Game',
            'slug' => 'ikmal'
        ],
        [
            'name' => 'Arainal Aldiansyah',
            'number' => '05',
            'class' => 'TI-2G',
            'sin' => '2141720042',
            'birth' => 'Kediri, 01 Desember 2002',
            'address' => 'Mojo, Kediri, Jawa Timur',
            'hobby' => 'Game',
            'slug' => 'arainal'
        ]
    ];
        DB::table('students')->insert($data);
    }
}
