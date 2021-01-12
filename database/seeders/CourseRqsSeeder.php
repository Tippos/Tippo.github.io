<?php

namespace Database\Seeders;

use App\Models\course_rqs;
use Illuminate\Database\Seeder;

class CourseRqsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $data = [];
        for ($i = 3; $i <= 57; $i++) {
            $data[] = [
                'id'               => $i,
                'frequency'        => rand(1, 3),
                'durationTime'     => DURATION_TIME[rand(0, 2)],
                'targetTop'        => rand(1, 3),
                'wishJob'          => rand(1, 3),
                'completeExercise' => rand(1, 3),
                'outCondition'     => rand(1, 3),
                'nowSkill'         => SKILL[rand(0, 2)],
                'mission'          => MISSION[rand(0, 2)],
                'userId'           => $i,
                'classId'          => rand(2, 6),
                'status'           => 3,
                'created_at'       => now(),
            ];
        };
        course_rqs::insert($data);
    }
}

