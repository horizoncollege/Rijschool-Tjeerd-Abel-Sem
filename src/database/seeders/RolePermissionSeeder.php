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
                'can_view_agenda',
                'can_edit_agenda',
                'can_delete_agenda',
                'can_create_agenda',
                'can_create_call_sick',
                'can_edit_call_sick',
                'can_delete_call_sick',
                'can_view_call_sick',
            ],
            'instructor' => [
                'can_view_users',
                'can_view_agenda',
                'can_create_call_sick',
                'can_view_call_sick',
            ],
            'leerling' => [
                'can_view_agenda',
                'can_create_call_sick',
                'can_view_call_sick',
            ],
        ];

        // Assign permissions to each role
        foreach ($rolePermissions as $roleName => $permissions) {
            $role = Role::where('roles', $roleName)->first();

            foreach ($permissions as $permissionName) {
                $permission = Permission::where('permissions', $permissionName)->first();

                if ($role && $permission) {
                    $role->permission()->attach($permission->id);
                }
            }
        }
    }
}
