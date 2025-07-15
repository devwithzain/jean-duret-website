<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookServiceRequest extends FormRequest
{
   public function rules(): array
   {
      return [
         'date' => 'required|date',
         'email' => 'required|email',
         'name' => 'required|string|max:255',
         'phone' => 'required|string|max:20',
         'specialMessage' => 'required|string',
         'service_id' => 'required|exists:services,id',
         'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
      ];
   }
}
