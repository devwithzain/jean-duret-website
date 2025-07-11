@extends('layouts.admin')

@section('title', $title ?? 'Default Title')

@section('content')
<div class="p-5">
   <div class="w-full flex items-center justify-between gap-4 border-b border-black/15 pb-3">
      <div class="flex flex-col">
         <h1 class="text-black text-4xl font-bold leading-tight tracking-tight">Create Service</h1>
         <p class="text-black/50 text-md font-normal leading-tight tracking-tight">Add a new service.</p>
      </div>
   </div>
   <form action={{ route('store') }} method="post" class="w-full flex flex-col gap-5 py-8"
      enctype="multipart/form-data">
      @csrf
      <div class="flex flex-col gap-1.5">
         <label for="title">
            <p class="text-black text-md font-normal leading-tight tracking-tight">Title</p>
         </label>
         <input id="title" name="title"
            class="w-full outline-none focus:border-black/50 px-3 py-1.5 text-black text-md bg-white font-normal rounded-lg border border-black/10 shadow-[0_0_1px_rgba(0,0,0,0.2)]"
            placeholder="Title" type="text" />
      </div>
      <div class="flex flex-col gap-1.5">
         <label for="short_description">
            <p class="text-black text-md font-normal leading-tight tracking-tight">Short Description</p>
         </label>
         <textarea id="short_description" name="short_description"
            class="w-full outline-none focus:border-black/50 px-3 py-1.5 text-black text-md bg-white font-normal rounded-lg border border-black/10 shadow-[0_0_1px_rgba(0,0,0,0.2)]"
            placeholder="Short Description"></textarea>
      </div>
      <div class="flex flex-col gap-1.5">
         <label for="description">
            <p class="text-black text-md font-normal leading-tight tracking-tight">Description</p>
         </label>
         <textarea id="description" name="description"
            class="w-full outline-none focus:border-black/50 px-3 py-1.5 text-black text-md bg-white font-normal rounded-lg border border-black/10 shadow-[0_0_1px_rgba(0,0,0,0.2)]"
            placeholder="Description"></textarea>
      </div>
      <div class="flex flex-col gap-1.5">
         <label for="image">
            <p class="text-black text-md font-normal leading-tight tracking-tight">Image</p>
         </label>
         <input id="image" name="image" accept="image/*" onchange="previewImage(this)"
            class="w-full outline-none focus:border-black/50 px-3 py-1.5 text-black text-md bg-white font-normal rounded-lg border border-black/10 shadow-[0_0_1px_rgba(0,0,0,0.2)]"
            type="file">
         <img id="imagePreview" src="#" alt="Preview" class="mt-2 hidden max-w-xs rounded-lg">
      </div>
      <div class="w-fit flex items-center gap-2 bg-black px-5 py-3 rounded-lg">
         <button type="submit" class="text-white text-lg font-normal leading-tight tracking-tight">Create</button>
      </div>
   </form>
</div>

<script>
function previewImage(input) {
   const preview = document.getElementById('imagePreview');
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