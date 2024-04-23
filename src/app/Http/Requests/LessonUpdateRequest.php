<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class LessonUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        $user = Auth::user();

        foreach ($user->roles as $role) {
            foreach ($role->permissions as $permission) {
                if ($permission->name == 'can_lesson_update') {
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
            'goal' => ['string', 'max:255'],
            'status' => ['string', 'max:255'],
            'start_date' => ['date'],
            'end_date' => ['date'],
            'day_of_month' => ['date'],
            'address' => ['string', 'max:255'],
        ];
    }
}
