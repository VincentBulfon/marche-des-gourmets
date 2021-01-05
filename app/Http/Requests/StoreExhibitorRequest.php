<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreExhibitorRequest extends FormRequest
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
     *
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
            'company_name.required' => 'Le nom de l\'entreprise est requis.',
            'company_name.unique' => 'Cet exposant à déjà été enregistré, si il sagit d\'une erreur veuillez nous contacter via la section contact.',
            'company_link.url' => 'Le lien doit être dans un format valide (ex: "http://www.exemple.com").',
            'company_link.unique' => 'Le lien vers ce site/page facebook à déjà été enregistré, si il sagit d\'une erreur veuillez nous contacter via la section contact.',
            'selectedCountry.required' => 'Vous devez indiquer le pays d\'origine de votre entreprise.',
            'region.required' => 'Vous devez indiquer la région d\'origine de votre entreprise.',
            'about.max' => 'Le texte ne doit pas dépasser 100 charcatères'
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $this->redirect = url()->previous() . '#became';

        return [
            'name' => 'required',
            'firstname' => 'required',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:9',
            'email' => 'required|email',
            'company_name' => 'required|unique:exhibitors,company_name',
            'company_link' => 'required|url|unique:exhibitors,link',
            'country' => 'required',
            'region' => 'required',
            'about' => 'required|max:100',
        ];
    }
}
