<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

//        for ($i = 0; $i < 10; $i++) {
//            DB::table('users')->insert([
//                'name' => $faker->name,
//                'email' => $faker->email,
//                'password' => $faker->password,
//                'phone' => $faker->phoneNumber(),
//                'birthday' => $faker->dateTimeThisCentury,
//                'address' => $faker->address(),
//                'second_address' => $faker->address(),
//                'created_at' => now(),
//                'updated_at' => now(),
//            ]);
//        }

        $role = Role::where('role', 'leerling')->first();

        $user = User::factory()->count(5)->create();

        $user->each(function ($user, $key) use ($role){
            $user->roles()->attach($role['id']);
        });
    }
}
