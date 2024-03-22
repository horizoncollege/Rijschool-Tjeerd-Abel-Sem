<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('permissions')->insert(
            [
                ['permissions' => 'can_view_users'],
                ['permissions' => 'can_edit_users'],
                ['permissions' => 'can_delete_users'],
                ['permissions' => 'can_create_users'],
                ['permissions' => 'can_view_agenda'],
                ['permissions' => 'can_edit_agenda'],
                ['permissions' => 'can_delete_agenda'],
                ['permissions' => 'can_create_agenda'],
                ['permissions' => 'can_create_call_sick'],
                ['permissions' => 'can_edit_call_sick'],
                ['permissions' => 'can_delete_call_sick'],
                ['permissions' => 'can_view_call_sick'],
            ]
        // Add more permissions as needed
        );
    }
}
