<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Lesson;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class UserController extends Controller
{

    public function index(Request $request)
    {
        $user = $request->user();

        // Load the user's roles and permissions
        $user->load('roles.permissions');

        // Format the user's data
        $userData = [
            'name' => $user->name,
            'email' => $user->email,
            'address' => $user->address,
            'second_address' => $user->second_address,
            'roles' => $user->roles->pluck('name'),
            'permissions' => $user->roles->map(function ($role) {
                return $role->permissions->pluck('permissions');
            })->collapse()->unique(),
        ];

        return response()->json($userData);
    }

    public function show(Request $request, $id)
    {
        $user = User::findOrFail($id);

        // Load the user's roles and permissions
        $user->load('roles.permissions');

        // Format the user's data
        $userData = [
            'name' => $user->name,
            'email' => $user->email,
            'address' => $user->address,
            'second_address' => $user->second_address,
            'roles' => $user->roles->pluck('name'),
        ];

        return response()->json($userData);
    }

    /**
     * Display the user's profile form.
     */
    public function edit(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $user->load('roles.permissions');

        // Format the user's data
        $userData = [
            'name' => $user->name,
            'email' => $user->email,
            'address' => $user->address,
            'second_address' => $user->second_address,
            'roles' => $user->roles->pluck('name'),
        ];

        return response()->json($userData);
    }

    /**
     * Update the user's profile information.
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();

        $user = User::findOrFail($id);
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->address = $data['address'];
        $user->second_address = $data['second_address'];
        if ($data['password']) {
            $user->password = bcrypt($data['password']);
        }
        $user->roles()->detach();

        // Attach new roles
        if (isset($data['roles'])) {
            foreach ($data['roles'] as $role) {
                $roleModel = Role::where('name', $role)->first();
                if ($roleModel) {
                    $user->roles()->attach($roleModel);
                }
            }
        }
        $update = $user->save();

        if ($update) {
            return response()->json(['message' => 'User updated successfully', 200]);
        } else {
            return response()->json(['error' => 'User not updated', 500]);
        }
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $delete = $user->delete();

        if ($delete) {
            return response()->json(['message' => 'User deleted successfully', 200]);
        } else {
            return response()->json(['error' => 'User not deleted', 500]);
        }
    }
}
