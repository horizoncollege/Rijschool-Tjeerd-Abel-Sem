<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use App\Models\Lesson;

class LessonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where('name', 'admin')->first();

        $lessons = Lesson::factory()
            ->count(10)
            ->create();

        $user->lessons()->attach($lessons);
    }
}
