@extends('layouts.admin')

@section('title', $title ?? 'Default Title')

@section('content')
   <div>
      <div class="w-full flex items-center justify-between gap-4 border-b border-black/15 pb-3">
         <div class="flex flex-col">
            <h1 class="text-4xl font-bold ">Create Service</h1>
            <p class="text-md font-normal ">Add a new service.</p>
         </div>
      </div>
      <form action={{ route('store') }} method="post" class="w-full flex flex-col gap-5 py-8"
         enctype="multipart/form-data">
         @csrf
         <div class="flex flex-col gap-1.5">
            <label for="title">
               <p class="text-md font-normal ">Title</p>
            </label>
            <input id="title" name="title"
               class="w-full outline-none focus:border-black/50 px-3 py-1.5 text-md bg-white dark:bg-black font-normal rounded-lg border border-black/10 dark:border-gray-700 shadow-[0_0_1px_rgba(0,0,0,0.2)]"
               placeholder="Title" type="text" />
         </div>
         <div class="flex flex-col gap-1.5">
            <label for="short_description">
               <p class="text-md font-normal ">Short Description</p>
            </label>
            <textarea id="short_description" name="short_description" rows="4"
               class="w-full outline-none focus:border-black/50 px-3 py-1.5 text-md bg-white dark:bg-black font-normal rounded-lg border border-black/10 dark:border-gray-700 shadow-[0_0_1px_rgba(0,0,0,0.2)]"
               placeholder="Short Description"></textarea>
         </div>
         <div class="flex flex-col gap-1.5">
            <label for="description">
               <p class="text-md font-normal ">Description</p>
            </label>
            <textarea id="description" name="description" rows="7"
               class="w-full outline-none focus:border-black/50 px-3 py-1.5 text-md bg-white dark:bg-black font-normal rounded-lg border border-black/10 dark:border-gray-700 shadow-[0_0_1px_rgba(0,0,0,0.2)]"
               placeholder="Description"></textarea>
         </div>
         <div class="flex flex-col gap-1.5">
            <label for="image">
               <p class="text-black text-md font-normal ">Image</p>
            </label>
            <input id="image" name="image" accept="image/*" onchange="previewImage(this)"
               class="w-full outline-none focus:border-black/50 px-3 py-1.5 text-black text-md bg-white font-normal rounded-lg border border-black/10 shadow-[0_0_1px_rgba(0,0,0,0.2)]"
               type="file">
            <img id="serviceImagePreview" src="#" alt="Preview" class="mt-2 hidden max-w-xs rounded-lg">
         </div>
         <div class="w-fit flex items-center gap-2 bg-black px-5 py-3 rounded-lg border border-black/10 dark:border-gray-700">
            <button type="submit" class="text-white text-xl font-normal ">Create</button>
         </div>
      </form>
   </div>

   <script>
   function previewImage(input) {
      const preview = document.getElementById('serviceImagePreview');
      if (input.files && input.files[0]) {
         const reader = new FileReader();
         reader.onload = function(e) {
            preview.src = e.target.result;
            preview.classList.remove('hidden');
         }
         reader.readAsDataURL(input.files[0]);
      }
   }
   </script>
@endsection