@extends('layouts.admin')

@section('title', $title ?? 'Default Title')

@section('content')
  <div class="w-full h-svh flex flex-col gap-5">
    <div class="w-full grid grid-cols-3 gap-5">
      <div
        class="w-full p-6 h-40 bg-white dark:bg-[#18181B] rounded-lg border dark:border-gray-700 border-black/20 shadow-[0_1px_1px_rgb(0,0,0,0.2)]">
        <div class="w-full h-full flex flex-col justify-between gap-4">
          <div class="w-full flex items-center justify-between">
            <h2 class="text-xl font-medium leading-tight tracking-tighte text-black dark:text-white">Total Inquries</h2>
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
              class="lucide lucide-library-big-icon lucide-library-big stroke-black dark:stroke-white">
              <rect width="8" height="18" x="3" y="3" rx="1" />
              <path d="M7 3v18" />
              <path
                d="M20.4 18.9c.2.5-.1 1.1-.6 1.3l-1.9.7c-.5.2-1.1-.1-1.3-.6L11.1 5.1c-.2-.5.1-1.1.6-1.3l1.9-.7c.5-.2 1.1.1 1.3.6Z" />
            </svg>
          </div>
          <div>
            <span class="text-3xl text-black dark:text-white leading-tight tracking-tight font-bold">
              +{{ 12 }}
            </span>
          </div>
          <div class="flex items-center gap-1">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
              stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
              class="lucide lucide-arrow-up-icon lucide-arrow-up stroke-green-500">
              <path d="m5 12 7-7 7 7" />
              <path d="M12 19V5" />
            </svg>
            <span class="text-sm font-thin text-black dark:text-white"><span class="text-sm font-thin text-green-500">0%
              </span>from last month</span>
          </div>
        </div>
      </div>
      <div
        class="w-full p-6 h-40 bg-white dark:bg-[#18181B] rounded-lg border dark:border-gray-700 border-black/20 shadow-[0_1px_1px_rgb(0,0,0,0.2)]">
        <div class="w-full h-full flex flex-col justify-between gap-4">
          <div class="w-full flex items-center justify-between">
            <h2 class="text-xl font-medium leading-tight tracking-tighte text-black dark:text-white">Total Submissions
            </h2>
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
              class="lucide lucide-library-big-icon lucide-library-big stroke-black dark:stroke-white">
              <rect width="8" height="18" x="3" y="3" rx="1" />
              <path d="M7 3v18" />
              <path
                d="M20.4 18.9c.2.5-.1 1.1-.6 1.3l-1.9.7c-.5.2-1.1-.1-1.3-.6L11.1 5.1c-.2-.5.1-1.1.6-1.3l1.9-.7c.5-.2 1.1.1 1.3.6Z" />
            </svg>
          </div>
          <div>
            <span class="text-3xl text-black dark:text-white leading-tight tracking-tight font-bold">
              +20
            </span>
          </div>
          <div class="flex items-center gap-1">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
              stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
              class="lucide lucide-arrow-up-icon lucide-arrow-up stroke-green-500">
              <path d="m5 12 7-7 7 7" />
              <path d="M12 19V5" />
            </svg>
            <span class="text-sm font-thin text-black dark:text-white"><span class="text-sm font-thin text-green-500">0%
              </span>from last month</span>
          </div>
        </div>
      </div>
      <div
        class="w-full p-6 h-40 bg-white dark:bg-[#18181B] rounded-lg border dark:border-gray-700 border-black/20 shadow-[0_1px_1px_rgb(0,0,0,0.2)]">
        <div class="w-full h-full flex flex-col justify-between gap-4">
          <div class="w-full flex items-center justify-between">
            <h2 class="text-xl font-medium leading-tight tracking-tighte text-black dark:text-white">Total Services</h2>
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
              class="lucide lucide-library-big-icon lucide-library-big stroke-black dark:stroke-white">
              <rect width="8" height="18" x="3" y="3" rx="1" />
              <path d="M7 3v18" />
              <path
                d="M20.4 18.9c.2.5-.1 1.1-.6 1.3l-1.9.7c-.5.2-1.1-.1-1.3-.6L11.1 5.1c-.2-.5.1-1.1.6-1.3l1.9-.7c.5-.2 1.1.1 1.3.6Z" />
            </svg>
          </div>
          <div>
            <span class="text-3xl text-black dark:text-white leading-tight tracking-tight font-bold">
              +03
            </span>
          </div>
          <div class="flex items-center gap-1">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
              stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
              class="lucide lucide-arrow-up-icon lucide-arrow-up stroke-green-500">
              <path d="m5 12 7-7 7 7" />
              <path d="M12 19V5" />
            </svg>
            <span class="text-sm font-thin text-black dark:text-white"><span class="text-sm font-thin text-green-500">0%
              </span>from last month</span>
          </div>
        </div>
      </div>
    </div>
    <div class="w-full flex-1 grid grid-cols-2 gap-5">
      <div
        class="w-full bg-white dark:bg-[#18181B] rounded-lg border dark:border-gray-700 border-black/20 shadow-[0_1px_1px_rgb(0,0,0,0.2)]">
      </div>
      <di
        class="flex-1 bg-white dark:bg-[#18181B] rounded-lg border dark:border-gray-700 border-black/20 shadow-[0_1px_1px_rgb(0,0,0,0.2)]">
        <div class="flex flex-col">
          <div class="flex flex-1 flex-col justify-center gap-1 p-6 border-b dark:border-gray-700 border-black/20">
            <h1 class="text-lg font-medium leading-tight tracking-tighte text-black dark:text-white">Customers</h1>
            <h1 class="text-sm font-medium leading-tight tracking-tighte text-black dark:text-white">Website Customers
            </h1>
          </div>
          <div class="flex flex-col">
            <div class="rounded-b-md">
              <table class="w-full text-sm text-left border-collapse">
                <!-- Table Head -->
                <thead class="bg-white dark:bg-[#18181B]">
                  <tr>
                    <th class="px-4 py-2 border-b dark:border-gray-700 border-black/20">Name</th>
                    <th class="px-4 py-2 border-b dark:border-gray-700 border-black/20">Email</th>
                    <th class="px-4 py-2 border-b dark:border-gray-700 border-black/20">Role</th>
                    <th class="px-4 py-2 border-b dark:border-gray-700 border-black/20">Date</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($users as $user)
                    <tr class="hover:bg-gray-50 dark:hover:bg-gray-700">
                      <td class="px-4 py-2 border-b dark:border-gray-700 border-black/20">
                        {{ $user->name }}
                      </td>
                      <td class="px-4 py-2 border-b dark:border-gray-700 border-black/20">
                        {{ $user->email }}
                      </td>
                      <td class="px-4 py-2 border-b dark:border-gray-700 border-black/20">
                        {{ ucfirst($user->role) }}
                      </td>
                      <td class="px-4 py-2 border-b dark:border-gray-700 border-black/20">
                        {{ $user->created_at->format('F j, Y') }}
                      </td>
                    </tr>
                    @if(!$users)
                      <tr>
                        <td colspan="3" class="h-24 text-center text-gray-500">
                          No results.
                        </td>
                      </tr>
                    @endif
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
    </div>
  </div>
  </div>
@endsection