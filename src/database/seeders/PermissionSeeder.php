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
                ['permissions' => 'can_view_roles'],
                ['permissions' => 'can_edit_roles'],
                ['permissions' => 'can_delete_roles'],
                ['permissions' => 'can_create_roles'],
                ['permissions' => 'can_view_permissions'],
                ['permissions' => 'can_edit_permissions'],
                ['permissions' => 'can_delete_permissions'],
                ['permissions' => 'can_create_permissions'],
                ['permissions' => 'can_index_course'],
                ['permissions' => 'can_store_course'],
                ['permissions' => 'can_destroy_course'],
                ['permissions' => 'can_edit_course'],
                ['permissions' => 'can_update_course'],
                ['permissions' => 'can_index_lesson'],
                ['permissions' => 'can_store_lesson'],
                ['permissions' => 'can_destroy_lesson'],
                ['permissions' => 'can_edit_lesson'],
                ['permissions' => 'can_update_lesson'],
            ]
        // Add more permissions as needed
        );
    }
}
