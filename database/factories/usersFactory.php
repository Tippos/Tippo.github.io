<?php

namespace Database\Factories;

use App\Models\users;
use Illuminate\Database\Eloquent\Factories\Factory;

class usersFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = users::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $avt_arr = [
            "https://vsmcamp.com/wp-content/uploads/2020/11/JaZBMzV14fzRI4vBWG8jymplSUGSGgimkqtJakOV.jpeg",
            "https://scr.vn/wp-content/uploads/2020/07/%E1%BA%A2nh-%C4%91%E1%BA%A1i-di%E1%BB%87n-FB-m%E1%BA%B7c-%C4%91%E1%BB%8Bnh-n%E1%BB%AF.jpg"
        ];
        return [
            'fullName'    => $this->faker->name,
            'birthday'    => $this->faker->unixTime,
            'email'       => $this->faker->unique()->safeEmail,
            'phoneNumber' => $this->faker->unique()->phoneNumber,
            'job'         => $this->faker->jobTitle,
            'avatar'      => $avt_arr[rand(0, 1)],
            'facebook'    => $this->faker->url,
            'gender'      => rand(1, 2),
            'country'     => $this->faker->country,
            'role'        => 2,
            'status'      => 4,
            'created_at'  => now(),
        ];
    }
}
