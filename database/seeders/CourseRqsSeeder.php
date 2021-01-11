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
        $duration_time = ["5400", "7200", "9000"];
        $skill = ["Java,PHP,C", "C,C++,Java", "JS,SQL,OOP"];
        $mission = [
            "Hoan thanh bai tap day du",
            "Hua se theo den cung",
            "Danh nhieu thoi gian hoc"
        ];
        $data = [];
        for ($i = 3; $i <= 57; $i++) {
            $data[] = [
                'id'               => $i,
                'frequency'        => rand(1, 3),
                'durationTime'     => $duration_time[rand(0, 2)],
                'targetTop'        => rand(1, 3),
                'wishJob'          => rand(1, 3),
                'completeExercise' => rand(1, 3),
                'outCondition'     => rand(1, 3),
                'nowSkill'         => $skill[rand(0, 2)],
                'mission'          => $mission[rand(0, 2)],
                'userId'           => $i,
                'classId'          => rand(2, 6),
                'status'           => 3,
                'created_at'       => now(),
            ];
        };
        course_rqs::insert($data);
    }
}

