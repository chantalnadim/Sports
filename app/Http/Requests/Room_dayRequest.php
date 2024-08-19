<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Room_dayRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'start_time' => 'required|string|max:255',
            'end_time' => 'required|string|max:255',
            'room_id' => 'required|exists:rooms,id',
            'day_id' => 'required|exists:days,id',
        ];
    }
}
