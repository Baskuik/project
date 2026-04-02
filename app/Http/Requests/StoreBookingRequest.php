<?php

namespace App\Http\Requests;

use App\Models\Stay;
use Illuminate\Foundation\Http\FormRequest;

class StoreBookingRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return $this->user() !== null;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, array<int, string>>
     */
    public function rules(): array
    {
        return [
            'stay_id' => ['required', 'exists:stays,id'],
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email:rfc,dns', 'max:255'],
            'phone_number' => ['required', 'string', 'max:30', 'regex:/^\+?[0-9\s\-()]{8,20}$/'],
            'arrive_date' => ['required', 'date', 'after_or_equal:today'],
            'leaving_date' => ['required', 'date', 'after:arrive_date'],
            'number_adults' => ['required', 'integer', 'min:1'],
            'number_kids' => ['required', 'integer', 'min:0'],
            'special_wish' => ['required', 'string', 'max:2000'],
            'extras' => ['nullable', 'array'],
            'extras.*' => ['integer', 'exists:extras,id'],
        ];
    }

    public function withValidator($validator): void
    {
        $validator->after(function ($validator) {
            $stay = Stay::query()->find($this->input('stay_id'));

            if (! $stay) {
                return;
            }

            if ((int) $this->input('number_adults') > $stay->max_adults) {
                $validator->errors()->add('number_adults', "Deze verblijfslocatie is geschikt voor maximaal {$stay->max_adults} volwassenen.");
            }

            if ((int) $this->input('number_kids') > $stay->max_kids) {
                $validator->errors()->add('number_kids', "Deze verblijfslocatie is geschikt voor maximaal {$stay->max_kids} kinderen.");
            }
        });
    }
}
