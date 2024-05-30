<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\Permission;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Define the permissions for each role
        $rolePermissions = [
            'admin' => [
                'can_view_users',
                'can_edit_users',
                'can_delete_users',
                'can_create_users',
                'can_view_roles',
                'can_edit_roles',
                'can_delete_roles',
                'can_create_roles',
                'can_view_permissions',
                'can_edit_permissions',
                'can_delete_permissions',
                'can_create_permissions',
                'can_index_course',
                'can_store_course',
                'can_destroy_course',
                'can_edit_course',
                'can_update_course',
                'can_index_lesson',
                'can_store_lesson',
                'can_destroy_lesson',
                'can_edit_lesson',
                'can_update_lesson',
            ],
            'instructeur' => [
                'can_view_users',
                'can_edit_users',
                'can_create_users',
                'can_view_roles',
                'can_view_permissions',
                'can_index_course',
                'can_store_course',
                'can_destroy_course',
                'can_edit_course',
                'can_update_course',
                'can_index_lesson',
                'can_store_lesson',
                'can_destroy_lesson',
                'can_edit_lesson',
                'can_update_lesson',
            ],
            'leerling' => [
                'can_view_users',
                'can_edit_users',
                'can_create_users',
                'can_view_roles',
                'can_view_permissions',
                'can_index_course',
                'can_index_lesson',
            ],
        ];

        // Assign permissions to each role
        foreach ($rolePermissions as $roleName => $permissions) {
            $role = Role::where('role', $roleName)->first();

            foreach ($permissions as $permissionName) {
                $permission = Permission::where('permissions', $permissionName)->first();

                if ($role && $permission) {
                    $role->permissions()->attach($permission->id);
                }
            }
        }
    }
}
