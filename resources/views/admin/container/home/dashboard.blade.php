@extends('layouts.admin')

@section('title', $title ?? 'Default Title')

@section('content')
    <div class="w-full h-svh flex flex-col gap-5">
        <div class="w-full grid grid-cols-4 gap-5">
            <div
                class="w-full p-6 h-40 bg-white dark:bg-[#18181B] rounded-lg border dark:border-gray-700 border-black/20 shadow-[0_1px_1px_rgb(0,0,0,0.2)]">
                <div class="w-full h-full flex flex-col justify-between gap-4">
                    <div class="w-full flex items-center justify-between">
                        <h2 class="paragraph text-black dark:text-white">Total
                            Inquries</h2>
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
                        <span class="text-3xl text-black dark:text-white  font-bold">
                            +{{ $inquries->count() }}
                        </span>
                    </div>
                    <div class="flex items-center gap-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                            fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-arrow-up-icon lucide-arrow-up stroke-green-500">
                            <path d="m5 12 7-7 7 7" />
                            <path d="M12 19V5" />
                        </svg>
                        <span class="paragraph font-thin text-black dark:text-white"><span
                                class="paragraph font-thin text-green-500">0%
                            </span>from last month</span>
                    </div>
                </div>
            </div>
            <div
                class="w-full p-6 h-40 bg-white dark:bg-[#18181B] rounded-lg border dark:border-gray-700 border-black/20 shadow-[0_1px_1px_rgb(0,0,0,0.2)]">
                <div class="w-full h-full flex flex-col justify-between gap-4">
                    <div class="w-full flex items-center justify-between">
                        <h2 class="paragraph text-black dark:text-white">Total
                            Applications
                        </h2>
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                            fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-dock-icon lucide-dock stroke-black dark:stroke-white">
                            <path d="M2 8h20" />
                            <rect width="20" height="16" x="2" y="4" rx="2" />
                            <path d="M6 16h12" />
                        </svg>
                    </div>
                    <div>
                        <span class="text-3xl text-black dark:text-white  font-bold">
                            +{{ $loan_applications->count() }}
                        </span>
                    </div>
                    <div class="flex items-center gap-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                            fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-arrow-up-icon lucide-arrow-up stroke-green-500">
                            <path d="m5 12 7-7 7 7" />
                            <path d="M12 19V5" />
                        </svg>
                        <span class="paragraph font-thin text-black dark:text-white"><span
                                class="paragraph font-thin text-green-500">0%
                            </span>from last month</span>
                    </div>
                </div>
            </div>
            <div
                class="w-full p-6 h-40 bg-white dark:bg-[#18181B] rounded-lg border dark:border-gray-700 border-black/20 shadow-[0_1px_1px_rgb(0,0,0,0.2)]">
                <div class="w-full h-full flex flex-col justify-between gap-4">
                    <div class="w-full flex items-center justify-between">
                        <h2 class="paragraph text-black dark:text-white">Total
                            Services</h2>
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                            fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-server-icon lucide-server stroke-black dark:stroke-white">
                            <rect width="20" height="8" x="2" y="2" rx="2" ry="2" />
                            <rect width="20" height="8" x="2" y="14" rx="2" ry="2" />
                            <line x1="6" x2="6.01" y1="6" y2="6" />
                            <line x1="6" x2="6.01" y1="18" y2="18" />
                        </svg>
                    </div>
                    <div>
                        <span class="text-3xl text-black dark:text-white  font-bold">
                            +{{ $services->count() }}
                        </span>
                    </div>
                    <div class="flex items-center gap-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                            fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-arrow-up-icon lucide-arrow-up stroke-green-500">
                            <path d="m5 12 7-7 7 7" />
                            <path d="M12 19V5" />
                        </svg>
                        <span class="paragraph font-thin text-black dark:text-white"><span
                                class="paragraph font-thin text-green-500">0%
                            </span>from last month</span>
                    </div>
                </div>
            </div>
            <div
                class="w-full p-6 h-40 bg-white dark:bg-[#18181B] rounded-lg border dark:border-gray-700 border-black/20 shadow-[0_1px_1px_rgb(0,0,0,0.2)]">
                <div class="w-full h-full flex flex-col justify-between gap-4">
                    <div class="w-full flex items-center justify-between">
                        <h2 class="paragraph text-black dark:text-white">Total
                            Subscriber</h2>
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                            fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-server-icon lucide-server stroke-black dark:stroke-white">
                            <rect width="20" height="8" x="2" y="2" rx="2" ry="2" />
                            <rect width="20" height="8" x="2" y="14" rx="2" ry="2" />
                            <line x1="6" x2="6.01" y1="6" y2="6" />
                            <line x1="6" x2="6.01" y1="18" y2="18" />
                        </svg>
                    </div>
                    <div>
                        <span class="text-3xl text-black dark:text-white  font-bold">
                            +{{ $newsletterSubscriber->count() }}
                        </span>
                    </div>
                    <div class="flex items-center gap-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                            fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-arrow-up-icon lucide-arrow-up stroke-green-500">
                            <path d="m5 12 7-7 7 7" />
                            <path d="M12 19V5" />
                        </svg>
                        <span class="paragraph font-thin text-black dark:text-white"><span
                                class="paragraph font-thin text-green-500">0%
                            </span>from last month</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full flex-1 grid grid-cols-2 gap-5">
            <div
                class="flex-1 bg-white dark:bg-[#18181B] rounded-lg border dark:border-gray-700 border-black/20 shadow-[0_1px_1px_rgb(0,0,0,0.2)]">
                <div class="flex flex-col">
                    <div
                        class="flex flex-1 flex-col justify-center gap-1 p-6 border-b dark:border-gray-700 border-black/20">
                        <h1 class="paragraph text-black dark:text-white">
                            Applications
                        </h1>
                        <h1 class="paragraph text-black dark:text-white">User Loan
                            Applications
                        </h1>
                    </div>
                    <div class="flex flex-col">
                        @if ($loan_applications->isEmpty())
                            <p class="px-4 py-2.5 font-normal ">No applications yet.
                            </p>
                        @else
                            <div class="rounded-b-md">
                                <table class="w-full paragraph text-left border-collapse">
                                    <thead class="bg-white dark:bg-[#18181B]">
                                        <tr>
                                            <th class="px-4 py-2 border-b dark:border-gray-700 border-black/20">
                                                Compony Name
                                            </th>
                                            <th class="px-4 py-2 border-b dark:border-gray-700 border-black/20">
                                                Broker Name
                                            </th>
                                            <th class="px-4 py-2 border-b dark:border-gray-700 border-black/20">
                                                Download pdf
                                            </th>
                                            <th class="px-4 py-2 border-b dark:border-gray-700 border-black/20">
                                                Submited On
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($loan_applications as $application)
                                            <tr
                                                class="border-b border-black/10 hover:bg-gray-50 dark:hover:bg-gray-900/70">
                                                <td class="px-4 py-2 border-b dark:border-gray-700 border-black/20">
                                                    {{ $application->company_name }}</td>
                                                <td class="px-4 py-2 border-b dark:border-gray-700 border-black/20">
                                                    {{ $application->broker_name }}</td>
                                                <td class="px-4 py-2 border-b dark:border-gray-700 border-black/20"><a
                                                        href="{{ route('admin.container.application.submission', $application->id) }}"
                                                        class="btn btn-primary">
                                                        Download PDF
                                                    </a>
                                                </td>
                                                <td class="px-4 py-2 border-b dark:border-gray-700 border-black/20">
                                                    {{ $application->created_at->format('d M Y') }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            <div
                class="flex-1 bg-white dark:bg-[#18181B] rounded-lg border dark:border-gray-700 border-black/20 shadow-[0_1px_1px_rgb(0,0,0,0.2)]">
                <div class="flex flex-col">
                    <div
                        class="flex flex-1 flex-col justify-center gap-1 p-6 border-b dark:border-gray-700 border-black/20">
                        <h1 class="paragraph text-black dark:text-white">Users
                        </h1>
                        <h1 class="paragraph text-black dark:text-white">Website
                            Users
                        </h1>
                    </div>
                    <div class="flex flex-col">
                        <div class="rounded-b-md">
                            <table class="w-full paragraph text-left border-collapse">
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
                                    @foreach ($users as $user)
                                        <tr class="hover:bg-gray-50 dark:hover:bg-gray-900/70">
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
                                        @if (!$users)
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
