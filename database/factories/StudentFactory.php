<?php
namespace Database\Factories;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;
/*
Factory
Factories are dummy data entered in database for testing purposes.
To create a new factory
php artisan make:factory UserFactory --model=User
To run a factory
php artisan tinker
$students=Student::factory()->count(10)->create();
it will insert 10 dummy data in User model
*/
class StudentFactory extends Factory
{
protected $model = Student::class;
public function definition()
{
return
[
'student_name'=>$this->faker->name,
];
}
}
