<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactFormRequest extends FormRequest
{
   public function rules()
   {
      return [
         'first_name' => 'required|string|max:255',
         'last_name' => 'required|string|max:255',
         'phone' => 'required|string|max:255',
         'email' => 'required|string|max:255',
         'service' => 'required|string|max:255',
         'specialMessage' => 'required|string|max:255',
      ];
   }
}
