@extends('layouts.admin')

@section('title', $title ?? 'Default Title')

@section('content')
    <div class="px-5">
        <div class="w-full flex items-center justify-between gap-4 border-b border-black/15 pb-3">
            <div class="flex flex-col">
                <h1 class="text-black text-4xl font-bold leading-tight tracking-tight">All Inquries</h1>
            </div>
        </div>
        <div class="w-full py-8">
            <input
                class="w-[400px] px-5 py-1 text-black text-lg bg-white rounded-lg border border-black/10 shadow-[0_0_1px_rgba(0,0,0,0.2)]"
                placeholder="Search..." type="text" />
        </div>
        <div class="w-full bg-white rounded-lg border border-black/10 shadow-[0_0_1px_rgba(0,0,0,0.2)]">
            @if($bookings->isEmpty())
                <p>No inquiries yet.</p>
            @else
                <table class="w-full">
                    <thead>
                        <tr class="border-b border-black/10">
                            <th class="px-4 py-2 text-left text-[#71717b] text-md font-normal leading-tight tracking-tight">
                                Service
                            </th>
                            <th class="px-4 py-2 text-left text-[#71717b] text-md font-normal leading-tight tracking-tight">
                                Name
                            </th>
                            <th class="px-4 py-2 text-left text-[#71717b] text-md font-normal leading-tight tracking-tight">
                                Email
                            </th>
                            <th class="px-4 py-2 text-left text-[#71717b] text-md font-normal leading-tight tracking-tight">
                                Submited On
                            </th>
                            <th class="px-4 py-2 text-left text-[#71717b] text-md font-normal leading-tight tracking-tight">
                                Message
                            </th>
                            <th class="px-4 py-2 text-left text-[#71717b] text-md font-normal leading-tight tracking-tight">
                                Date
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($bookings as $booking)
                            <tr class="border-b border-black/10 hover:bg-gray-50">
                                <td class="px-4 py-2">{{ $booking->service->title ?? 'N/A' }}</td>
                                <td class="px-4 py-2">{{ $booking->name ?? 'N/A' }}</td>
                                <td class="px-4 py-2">{{ $booking->email ?? 'N/A' }}</td>
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