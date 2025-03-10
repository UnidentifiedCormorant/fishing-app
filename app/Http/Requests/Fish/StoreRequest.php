<?php

namespace App\Http\Requests\Fish;

use App\Domain\Enums\Fish\RatingEnum;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Enum;

class StoreRequest extends FormRequest
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
            'title' => 'string|required',
            'size' => 'decimal:2|required',
            'weight' => 'decimal:2|required',
            'rating' => [new Enum(RatingEnum::class)],
        ];
    }
}
