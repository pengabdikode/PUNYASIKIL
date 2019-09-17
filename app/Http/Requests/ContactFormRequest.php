<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Http\Requests\ContactFormRequest;

class ContactFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|max: 255',
            'email' => 'required|max: 255',
            'message' => 'required'
        ];
    }
    protected $message;
    public function __construct(ContactFormRequest $message)
    {
        $this->message = $message;
    }
}
