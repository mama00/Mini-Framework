<?php

namespace Framework\Kernel\FormRequest;

use Framework\Kernel\Utilities\Functions\View;

abstract class BaseFormRequest
{
    protected $redirectTo;
    public function authorize()
    {
        return true; 
    }
    abstract public function rules();

    abstract public function messages();

    private function verify($constraint,$key,$request)
    {
        $constraint=explode(':',$constraint);
        switch($constraint[0])
        {
            case 'required':
                return (!empty($request->$key)==true);
            break;
            case 'email':
                return filter_var($request->$key, FILTER_VALIDATE_EMAIL);
            break;
            case 'max':
                return (strlen($request->$key)<(int)$constraint[1]);
            break;
            case 'min':
                return (strlen($request->$key)>(int)$constraint[1]);
            break;
        }
        
    }

    public function validate($request)
    {
        if ($this->authorize())
        {
            $rules=$this->rules();
            $messages=$this->messages();
            $errors=[];
            foreach($rules as $key=>$value)
            {
                $constraints=explode('|',$value);
                    foreach($constraints as $constraint )
                        if(!$this->verify($constraint,$key,$request))
                        {
                            if(isset($messages[$key.'.'.$constraint]))
                            {
                                $errors[$key]=$messages[$key.'.'.$constraint];
                            }
                            else
                                $errors[$key]='failed on '.$key.'.'.$constraint;
                        }
                           

            }
            if(count($errors)!=0)
            {
                $old = json_decode(json_encode($request),true);
                View::View($this->redirectTo,compact('errors','old'));
                
            }
              

        }
        else
        {
            $errors['authorize']='you dont have permisson to access this';
            View::View($this->redirectTo,compact('errors'));
        }
        
    }
}