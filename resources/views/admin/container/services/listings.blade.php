@extends('layouts.admin')

@section('title', $title ?? 'Default Title')

@section('content')
    <div class="px-5"">
                <div class=" w-full flex items-center justify-between gap-4 border-b border-black/15 pb-3">
        <div class="flex flex-col">
            <h1 class="text-black text-4xl font-bold leading-tight tracking-tight">Services</h1>
            <p class="text-black/50 text-md font-normal leading-tight tracking-tight">Manage Services for
                your website.</p>
        </div>
        <a href={{ route('create') }}
            class="text-white text-lg font-normal leading-tight tracking-tight flex items-center gap-2 bg-black px-5 py-3 rounded-lg">
            <svg xmlns="http://www.w3.org/2000/svg" class="text-white" width="18" height="18" viewBox="0 0 24 24"
                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="lucide lucide-plus-icon lucide-plus">
                <path d="M5 12h14" />
                <path d="M12 5v14" />
            </svg>
            Add
            new</a>
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
                    <th class="px-4 py-2 text-left text-[#71717b] text-md font-normal leading-tight tracking-tight">
                        Title
                    </th>
                    <th class="px-4 py-2 text-left text-[#71717b] text-md font-normal leading-tight tracking-tight">
                        Description
                    </th>
                    <th class="px-4 py-2 text-left text-[#71717b] text-md font-normal leading-tight tracking-tight">
                        Image
                    </th>
                    <th class="px-4 py-2 text-left text-[#71717b] text-md font-normal leading-tight tracking-tight">
                        Date
                    </th>
                    <th class="px-4 py-2 text-left text-[#71717b] text-md font-normal leading-tight tracking-tight">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @if($services)
                @foreach($services as $service)
                    <tr class="border-b border-black/10 hover:bg-gray-50">
                        <td class="px-4 py-2">{{ $service->title }}</td>
                        <td class="px-4 py-2">{{ $service->description }}</td>
                        <td class="px-4 py-2">
                            <img src="{{ asset('storage/' . $service->image) }}" alt="{{ $service->title }}" width="100"
                                height="100">
                        </td>
                        <td class="px-4 py-2">{{ $service->created_at->format('d/m/Y') }}</td>
                        <td class="px-4 py-2">
                            <div class="relative" x-data="{ open: false }">
                                <button type="button"
                                    class="p-2 bg-white rounded-lg border border-black/20 shadow-[0_1px_1px_rgb(0,0,0,0.2)] flex items-center"
                                    @click="open = !open" @click.away="open = false" aria-haspopup="true"
                                    :aria-expanded="open.toString()">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="lucide lucide-ellipsis-vertical-icon lucide-ellipsis-vertical">
                                        <circle cx="12" cy="12" r="1" />
                                        <circle cx="12" cy="5" r="1" />
                                        <circle cx="12" cy="19" r="1" />
                                    </svg>
                                </button>
                                <div x-show="open" x-transition:enter="transition ease-out duration-100"
                                    x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
                                    x-transition:leave="transition ease-in duration-75"
                                    x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95"
                                    class="absolute top-full right-0 z-50 mt-2 w-32 bg-white rounded-lg border border-black/20 shadow-[0_1px_1px_rgb(0,0,0,0.2)]"
                                    style="display: none;" @click.away="open = false">
                                    <a href="{{ route('admin.container.services.edit', $service->id) }}"
                                        class="block w-full px-4 py-2 text-left hover:bg-gray-100 border-b border-black/20">Edit</a>
                                    <form action="{{ route('admin.container.services.destroy', $service->id) }}" method="POST"
                                        class="w-full">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="w-full px-4 py-2 text-left text-red-600 hover:bg-gray-100">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
                @endif
            </tbody>
        </table>
    </div>
    </div>
@endsection