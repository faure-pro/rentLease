<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EtageRequest extends FormRequest
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
            'numero' => [ 'required','unique:etages','max:255' ],
            'nombreAppartements' => [ 'required','unique:etages' ],
            'description' => ['required'],
        ];
    }
    public function attribute(): array
        {
            return [
                'numero' => ['le numero' ],
                'nombreAppartements' => [ 'nombreAppartements' ],
                'description' => ['description'],
                
    
            ];
        }       
    }
