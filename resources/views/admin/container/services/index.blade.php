@extends('layouts.admin')

@section('title', $title ?? 'Default Title')

@section('content')
<div class="p-5">
   <div class="w-full flex items-center justify-between gap-4 border-b border-black/15 pb-3">
      <div class="flex flex-col">
         <h1 class="text-black text-4xl font-bold leading-tight tracking-tight">Services ({{ $services->count() }})</h1>
         <p class="text-black/50 text-md font-normal leading-tight tracking-tight">Manage Services for your website.</p>
      </div>
      <div class="flex items-center gap-2 bg-black px-5 py-3 rounded-lg">
         <svg xmlns="http://www.w3.org/2000/svg" class="text-white" width="18" height="18" viewBox="0 0 24 24"
            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
            class="lucide lucide-plus-icon lucide-plus">
            <path d="M5 12h14" />
            <path d="M12 5v14" />
         </svg>
         <a href={{ route('create') }} class="text-white text-lg font-normal leading-tight tracking-tight">Add
            new</a>
      </div>
   </div>
   <div class="w-full py-8">
      <input
         class="w-[400px] px-5 py-1 text-black text-lg bg-white rounded-lg border border-black/10 shadow-[0_0_1px_rgba(0,0,0,0.2)]"
         placeholder="Search..." type="text" />
   </div>
   <div class="w-full bg-white rounded-lg border border-black/10 shadow-[0_0_1px_rgba(0,0,0,0.2)]">
      <table class="w-full">
         <thead>
            <tr class="border-b border-black/10">
               <th class="px-4 py-2 text-left text-[#71717b] text-md font-normal leading-tight tracking-tight">Title
               </th>
               <th class="px-4 py-2 text-left text-[#71717b] text-md font-normal leading-tight tracking-tight">
                  Description
               </th>
               <th class="px-4 py-2 text-left text-[#71717b] text-md font-normal leading-tight tracking-tight">Image
               </th>
               <th class="px-4 py-2 text-left text-[#71717b] text-md font-normal leading-tight tracking-tight">Date
               </th>
            </tr>
         </thead>
         <tbody>
            <tr class="border-b border-black/10 hover:bg-gray-50">
               <td class="px-4 py-2">Light</td>
               <td class="px-4 py-2">Light</td>
               <td class="px-4 py-2">Light</td>
               <td class="px-4 py-2">Light</td>
            </tr>
            <tr class="border-b border-black/10 hover:bg-gray-50">
               <td class="px-4 py-2">Dark</td>
               <td class="px-4 py-2">-</td>
               <td class="px-4 py-2">-</td>
               <td class="px-4 py-2">-</td>
            </tr>
            <tr class="hover:bg-gray-50">
               <td class="px-4 py-2">System</td>
               <td class="px-4 py-2">-</td>
               <td class="px-4 py-2">-</td>
               <td class="px-4 py-2">-</td>
            </tr>
         </tbody>
      </table>
   </div>
</div>
@endsection