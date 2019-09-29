<?php
namespace App\Request;

use Framework\Kernel\FormRequest\BaseFormRequest;

class FormRequest extends BaseFormRequest
{
    protected $redirectTo='formulaire.html';

    public function rules()
    {
        return ['titre'=>'email','texte'=>'required'];
    }
    public function messages()
    {
        return ['titre.email'=>'Email non valide','texte.required'=>'texte requis'];
    }
}