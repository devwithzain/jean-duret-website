@extends('layouts.admin')

@section('title', $title ?? 'Default Title')

@section('content')
   <div>
      <div class="w-full flex items-center justify-between gap-4 border-b border-black/15 pb-3">
         <div class="flex flex-col">
            <h1 class="text-4xl font-bold ">Edit Service</h1>
            <p class="paragraph font-normal ">Edit a service.</p>
         </div>
      </div>
      <form action={{ route('admin.container.services.update', $service->id) }} method="post" enctype="multipart/form-data" class="w-full flex flex-col gap-5 py-8">
         @method('PUT')
         @csrf
         <div class="flex flex-col gap-1.5">
            <label for="title">
               <p class="paragraph font-normal ">Title</p>
            </label>
            <input id="title" name="title"
               class="w-full outline-none focus:border-black/50 px-3 py-1.5 paragraph bg-white dark:bg-black font-normal rounded-lg border border-black/10 dark:border-gray-700 shadow-[0_0_1px_rgba(0,0,0,0.2)]"
               placeholder="Title" type="text" value="{{ $service->title }}" />
         </div>
         <div class="flex flex-col gap-1.5">
            <label for="short_description">
               <p class="paragraph font-normal ">Short Description</p>
            </label>
            <textarea id="short_description" name="short_description"
               class="w-full outline-none focus:border-black/50 px-3 py-1.5 paragraph bg-white dark:bg-black font-normal rounded-lg border border-black/10 dark:border-gray-700 shadow-[0_0_1px_rgba(0,0,0,0.2)]"
               placeholder="Short Description">{{ $service->short_description }}</textarea>
         </div>
         <div class="flex flex-col gap-1.5">
            <label for="description">
               <p class="paragraph font-normal ">Description</p>
            </label>
            <textarea id="description" name="description"
               class="w-full outline-none focus:border-black/50 px-3 py-1.5 paragraph bg-white dark:bg-black font-normal rounded-lg border border-black/10 dark:border-gray-700 shadow-[0_0_1px_rgba(0,0,0,0.2)]"
               placeholder="Description">{{ $service->description }}</textarea>
         </div>
         <div class="flex flex-col gap-1.5">
            <label for="image">
               <p class="paragraph font-normal ">Image</p>
            </label>
            <div class="relative w-full">
               <input id="image" name="image" accept="image/*" onchange="previewImage(this)"
                  class="absolute inset-0 w-full h-full opacity-0 cursor-pointer z-10" type="file">
               <label for="image"
                  class="block w-full px-3 py-1.5 paragraph bg-white dark:bg-black font-normal rounded-lg border border-black/10 dark:border-gray-700 shadow-[0_0_1px_rgba(0,0,0,0.2)] cursor-pointer">Choose
                  Image</label>
            </div>
            <img id="imagePreview" src="{{ asset('storage/' . $service->image) }}" alt="Preview" class="mt-2 max-w-xs rounded-lg">
         </div>
         <div class="w-fit flex items-center gap-2 bg-black px-5 py-3 rounded-lg border border-black/10 dark:border-gray-700">
            <button type="submit" class="text-white paragraph font-normal ">Update</button>
         </div>
      </form>
   </div>

   <script>
   function previewImage(event) {
       const file = event.target.files[0];
       const preview = document.getElementById('imagePreview');

       if (file) {
           const reader = new FileReader();
           reader.onload = function(e) {
               preview.src = e.target.result;
           }
           reader.readAsDataURL(file);
       }
   }
   </script>

@endsection