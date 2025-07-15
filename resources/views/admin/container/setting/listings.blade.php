@extends('layouts.admin')

@section('title', $title ?? 'Default Title')

@section('content')
   <div class="p-5">
      <div class="w-full flex items-center justify-between gap-4 border-b border-black/15 pb-3">
        <div class="flex flex-col">
          <h1 class="text-black text-4xl font-bold leading-tight tracking-tight">Edit Setting</h1>
          <p class="text-black/50 text-md font-normal leading-tight tracking-tight">Edit Setting.</p>
        </div>
      </div>
      <form action={{ route('admin.container.setting.update', $user->id) }} method="post"
        class="w-full flex flex-col gap-5 py-8" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="flex flex-col gap-1.5">
          <label for="name">
            <p class="text-black text-md font-normal leading-tight tracking-tight">Name</p>
          </label>
          <input id="name" name="name" value="{{ $user->name }}"
            class="w-full outline-none focus:border-black/50 px-3 py-1.5 text-black text-md bg-white font-normal rounded-lg border border-black/10 shadow-[0_0_1px_rgba(0,0,0,0.2)]"
            placeholder="Name" type="text" />
        </div>
        <div class="flex flex-col gap-1.5">
          <label for="email">
            <p class="text-black text-md font-normal leading-tight tracking-tight">Email</p>
          </label>
          <input id="email" name="email" value="{{ $user->email }}"
            class="w-full outline-none focus:border-black/50 px-3 py-1.5 text-black text-md bg-white font-normal rounded-lg border border-black/10 shadow-[0_0_1px_rgba(0,0,0,0.2)]"
            placeholder="Email">
        </div>
        <div class="flex flex-col gap-1.5">
          <label for="image">
            <p class="text-black text-md font-normal leading-tight tracking-tight">Image</p>
          </label>
          <input id="image" name="image" accept="image/*"
            class="w-full outline-none focus:border-black/50 px-3 py-1.5 text-black text-md bg-white font-normal rounded-lg border border-black/10 shadow-[0_0_1px_rgba(0,0,0,0.2)]"
            type="file" onchange="previewImage(event)">
          <img id="adminImagePreview"
            src="{{ $user->image ? asset('storage/' . $user->image) : asset('assets/placeholder.png') }}" alt="Preview"
            class="mt-2 w-40 rounded-lg">
        </div>
        <div class="w-fit flex items-center gap-2 bg-black px-5 py-3 rounded-lg">
          <button type="submit" class="text-white text-lg font-normal leading-tight tracking-tight">Update</button>
        </div>
      </form>
   </div>

   <script>
      function previewImage(event) {
        const file = event.target.files[0];
        const preview = document.getElementById('adminImagePreview');
        if (file) {
          const reader = new FileReader();
          reader.onload = function (e) {
            preview.src = e.target.result;
          };
          reader.readAsDataURL(file);
        } else {
          preview.src = "{{ $user->image ? asset('storage/' . $user->image) : asset('assets/placeholder.png') }}";
        }
      }
   </script>

@endsection