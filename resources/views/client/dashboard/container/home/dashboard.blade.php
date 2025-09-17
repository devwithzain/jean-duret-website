@extends('layouts.user')

@section('title', $title ?? 'Default Title')

@section('content')
    <div class="w-full h-screen flex flex-col gap-5">
        <div class="w-full grid grid-cols-3 gap-5">
            <div
                class="w-full p-5 h-40 bg-white dark:bg-[#18181B] rounded-lg border dark:border-gray-700 border-black/20 shadow-[0_1px_1px_rgb(0,0,0,0.2)]">
                <div class="w-full h-full flex flex-col justify-between gap-4">
                    <div class="w-full flex items-center justify-between">
                        <h2 class="paragraph font-medium text-black dark:text-white">My
                            Loan Application</h2>
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
                        <h2 class="paragraph font-medium text-black dark:text-white">My
                            Inquries</h2>
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-layers2-icon lucide-layers-2 stroke-black dark:stroke-white">
                            <path
                                d="M13 13.74a2 2 0 0 1-2 0L2.5 8.87a1 1 0 0 1 0-1.74L11 2.26a2 2 0 0 1 2 0l8.5 4.87a1 1 0 0 1 0 1.74z" />
                            <path
                                d="m20 14.285 1.5.845a1 1 0 0 1 0 1.74L13 21.74a2 2 0 0 1-2 0l-8.5-4.87a1 1 0 0 1 0-1.74l1.5-.845" />
                        </svg>
                    </div>
                    <div>
                        <span class="text-3xl text-black dark:text-white  font-bold">
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
                        <h2 class="paragraph font-medium e text-black dark:text-white">Accepted
                            Application</h2>
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-dock-icon lucide-dock stroke-black dark:stroke-white">
                            <path d="M2 8h20" />
                            <rect width="20" height="16" x="2" y="4" rx="2" />
                            <path d="M6 16h12" />
                        </svg>
                    </div>
                    <div>
                        <span class="text-3xl text-black dark:text-white  font-bold">
                            +{{ 0 }}
                        </span>
                    </div>
                    <div class="flex items-center gap-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
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
        <div class="w-full flex flex-col gap-5">
            <div
                class="w-full p-6 bg-white dark:bg-[#18181B] rounded-lg border dark:border-gray-700 border-black/20 shadow-[0_1px_1px_rgb(0,0,0,0.2)]">
                <div class="flex flex-col gap-5">
                    <div class="w-full flex items-center justify-between gap-4 pb-2">
                        <div class="flex flex-col">
                            <h1 class="text-4xl font-bold ">My Inquries</h1>
                        </div>
                    </div>
                    <div
                        class="w-full rounded-lg border border-black/10 dark:border-gray-700 shadow-[0_0_1px_rgba(0,0,0,0.2)]">
                        @if ($bookings->isEmpty())
                            <p class="paragraph px-4 py-2.5 font-normal ">You haven't submitted
                                any inquiries
                                yet.
                            </p>
                        @else
                            <table class="w-full">
                                <thead>
                                    <tr class="border-b border-black/10 dark:border-gray-700">
                                        <th class="px-4 py-2 text-left paragraph font-normal ">
                                            Service
                                        </th>
                                        <th class="px-4 py-2 text-left paragraph font-normal ">
                                            Submited On
                                        </th>
                                        <th class="px-4 py-2 text-left paragraph font-normal ">
                                            Message
                                        </th>
                                        <th class="px-4 py-2 text-left paragraph font-normal ">
                                            Date
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($bookings as $booking)
                                        <tr class="border-b border-black/10 hover:bg-gray-50 dark:hover:bg-gray-900/70">
                                            <td class="px-4 py-2">{{ $booking->service->title ?? 'N/A' }}</td>
                                            <td class="px-4 py-2">{{ $booking->date }}</td>
                                            <td class="px-4 py-2">{{ Str::limit($booking->specialMessage, 50) }}</td>
                                            <td class="px-4 py-2">{{ $booking->created_at->format('d M Y') }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @endif
                    </div>
                </div>
            </div>
            <div
                class="w-full p-6 bg-white dark:bg-[#18181B] rounded-lg border dark:border-gray-700 border-black/20 shadow-[0_1px_1px_rgb(0,0,0,0.2)]">
                <div class="flex flex-col gap-5">
                    <div class="w-full flex items-center justify-between gap-4 pb-2">
                        <div class="flex flex-col">
                            <h1 class="text-4xl font-bold ">My Loan Application</h1>
                        </div>
                    </div>
                    <div
                        class="w-full rounded-lg border border-black/10 dark:border-gray-700 shadow-[0_0_1px_rgba(0,0,0,0.2)]">
                        @if ($loan_applications->isEmpty())
                            <p class="paragraph px-4 py-2.5 font-normal ">You haven't submitted
                                any loan
                                applications
                                yet.
                            </p>
                        @else
                            <table class="w-full">
                                <thead>
                                    <tr class="border-b border-black/10 dark:border-gray-700">
                                        <th class="px-4 py-2 text-left paragraph font-normal ">
                                            Compony Name
                                        </th>
                                        <th class="px-4 py-2 text-left paragraph font-normal ">
                                            Broker Name
                                        </th>
                                        <th class="px-4 py-2 text-left paragraph font-normal ">
                                            download pdf
                                        </th>
                                        <th class="px-4 py-2 text-left paragraph font-normal ">
                                            Submited On
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($loan_applications as $application)
                                        <tr class="border-b border-black/10 hover:bg-gray-50 dark:hover:bg-gray-900/70">
                                            <td class="px-4 py-2">{{ $application->company_name }}</td>
                                            <td class="px-4 py-2">{{ $application->broker_name }}</td>
                                            <td class="px-4 py-2"><a
                                                    href="{{ route('client.dashboard.container.my-loan.submission', $application->id) }}"
                                                    class="btn btn-primary">
                                                    Download PDF
                                                </a>
                                            </td>
                                            <td class="px-4 py-2">{{ $application->created_at->format('d M Y') }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection