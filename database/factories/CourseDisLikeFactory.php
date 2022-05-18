<?php

namespace Database\Factories;

use App\Models\Course;
use App\Models\CourseDisLike;
use App\Models\Instructor;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

class CourseDisLikeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CourseDisLike::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'student_id'    => Student::inRandomOrder()->first()->id,
            'course_id'     => Course::inRandomOrder()->first()->id,
            'instructor_id' => Instructor::inRandomOrder()->first()->id,
        ];
    }
}
