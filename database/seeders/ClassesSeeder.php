<?php

namespace Database\Seeders;

use App\Models\classes;
use Illuminate\Database\Seeder;

class ClassesSeeder extends Seeder
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
                'id'         => 1,
                'name'       => 'L01',
                'avatar'     => 'https://cdn.pixabay.com/photo/2012/04/23/15/20/one-38484_960_720.png',
                'status'     => 1,
                'userId'     => 1,
                'subjectId'  => 1,
                'created_at' => now(),
            ],
            [
                'id'         => 2,
                'name'       => 'L02',
                'avatar'     => 'https://thuocdongytot.com/wp-content/uploads/2020/04/number-2-icon-png-18.png',
                'status'     => 1,
                'userId'     => 3,
                'subjectId'  => 2,
                'created_at' => now(),
            ],
            [
                'id'         => 3,
                'name'       => 'L03',
                'avatar'     => 'https://cdn.pixabay.com/photo/2012/04/23/17/07/three-39116_960_720.png',
                'status'     => 1,
                'userId'     => 4,
                'subjectId'  => 3,
                'created_at' => now(),
            ],
            [
                'id'         => 4,
                'name'       => 'L04',
                'avatar'     => 'https://png.pngtree.com/png-clipart/20190612/original/pngtree-red-number-four-png-image_3396522.jpg',
                'status'     => 1,
                'userId'     => 5,
                'subjectId'  => 4,
                'created_at' => now(),
            ],
            [
                'id'         => 5,
                'name'       => 'L05',
                'avatar'     => 'https://img.lovepik.com/element/40076/5350.png_860.png',
                'status'     => 1,
                'userId'     => 6,
                'subjectId'  => 5,
                'created_at' => now(),
            ],
            [
                'id'         => 6,
                'name'       => 'L06',
                'avatar'     => 'https://img.lovepik.com/element/40075/9830.png_860.png',
                'status'     => 2,
                'userId'     => 7,
                'subjectId'  => 1,
                'created_at' => now(),
            ]
        ];
        classes::insert($data);
    }
}
