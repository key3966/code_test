<?php

namespace Database\Factories;

use App\Models\Person;
use Illuminate\Database\Eloquent\Factories\Factory;

class PersonFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Person::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $gender = $this->faker->randomElement(['male', 'female', 'non-binary']);
        $date = $this->faker->date($format = 'Y-m-d', $max = 'now');
        if (now()->diff($date)->y > 25) {
            $children = $this->faker->randomElement([0,1,2,3]);
        } else {
            $children = 0;
        }
        if (now()->diff($date)->y > 17) {
            $is_driver = $this->faker->boolean;
            $occupation = $this->faker->jobTitle;
        } else {
            $is_driver = false;
            $occupation = "child";
        }
        return [
            'name' => $this->faker->name($gender),
            'birthday' => $date,
            'occupation' => $occupation,
            'gender' => $gender,
            'children' => $children,
            'is_driver' => $is_driver
        ];
    }
}
