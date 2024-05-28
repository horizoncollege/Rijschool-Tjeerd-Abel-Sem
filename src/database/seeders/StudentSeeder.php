<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use App\Models\Role;
use App\Models\User;



class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       
        $role = Role::where('role', 'leerling')->first();

        $user = User::factory()->count(5)->create();

        $user->each(function ($user, $key) use ($role){
            $user->roles()->attach($role['id']);
        });


    }
}
