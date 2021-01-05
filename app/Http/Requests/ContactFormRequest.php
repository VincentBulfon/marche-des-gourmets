<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

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
     * Get the error messages for the defined validation rules.
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'Votre nom est requis.',
            'firstname.required' => 'Votre prénom est requis.',
            'phone.required' => 'Votre numéro de téléphone est requis.',
            'phone.regex' => 'Votre numéro de téléphone doit être dans les formats standards européens.',
            'phone.min' => 'Votre numéro de téléphone doit comporter au moins 9 carctères.',
            'email.required' => 'Votre adresse email est requise.',
            'email.email' => 'Votre adresse email doit être dans un format valide.',
            'message.required' => 'Votre message est ne doit pas être vide.',
            'message.min' => 'Le message doit avoir 20 charactères au minimum.'
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $this->redirect = url()->previous() . '#messageForm';

        return [
            'name' => 'required',
            'firstname' => 'required',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:9',
            'email' => 'required|email',
            'message' => 'required|min:20'
        ];
    }
}
