@extends('layouts.user')

@section('title', $title ?? 'Default Title')

@section('content')
    <div>
        <div class="w-full flex items-center justify-between gap-4 border-b border-black/15 dark:border-gray-700 pb-3">
            <div class="flex flex-col">
                <h1 class="text-4xl font-bold ">My Inquries</h1>
            </div>
        </div>
        <div class="w-full py-8">
            <input
                class="w-[400px] px-5 py-1 paragraph bg-white dark:bg-black rounded-lg border border-black/10 dark:border-gray-700 shadow-[0_0_1px_rgba(0,0,0,0.2)]"
                placeholder="Search..." type="text" />
        </div>
        <div class="w-full rounded-lg border border-black/10 dark:border-gray-700 shadow-[0_0_1px_rgba(0,0,0,0.2)]">
            @if ($bookings->isEmpty())
                <p class="paragraph px-4 py-2.5 font-normal ">You haven't submitted any inquiries
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
@endsection