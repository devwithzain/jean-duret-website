<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServiceRequest extends FormRequest
{
   public function rules(): array
   {
      return [
         'title' => 'required|string|max:258',
         'short_description' => 'required|string',
         'description' => 'required|string',
         'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp',
      ];
   }
}