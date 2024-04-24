<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class LessonStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        $user = Auth::user();

        foreach ($user->roles as $role) {
            foreach ($role->permissions as $permission) {
                if ($permission->name == 'can_store_lesson') {
                    return true;
                }
            }
        }

        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'goal' => ['required', 'string', 'max:255'],
            'status' => ['required', 'string', 'max:255'],
            'start_date' => ['required', 'date'],
            'end_date' => ['required', 'date'],
            'day_of_month' => ['required', 'date'],
            'address' => ['required', 'string', 'max:255'],
        ];
    }
}
