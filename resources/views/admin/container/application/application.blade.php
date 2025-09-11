@extends('layouts.admin')

@section('title', $title ?? 'Default Title')

@section('content')
    <div>
        <div class="w-full flex items-center justify-between gap-4 border-b border-black/15 dark:border-gray-700 pb-3">
            <div class="flex flex-col">
                <h1 class="text-4xl font-bold ">Loan Applications</h1>
            </div>
        </div>
        <div class="w-full py-8">
            <input
                class="w-[400px] px-5 py-1 text-xl bg-white dark:bg-black rounded-lg border border-black/10 dark:border-gray-700 shadow-[0_0_1px_rgba(0,0,0,0.2)]"
                placeholder="Search..." type="text" />
        </div>
        <div class="w-full rounded-lg border border-black/10 dark:border-gray-700 shadow-[0_0_1px_rgba(0,0,0,0.2)]">
            @if ($loan_applications->isEmpty())
                <p class="text-md px-4 py-2.5 font-normal ">No applications yet.
                </p>
            @else
                <table class="w-full">
                    <thead>
                        <tr class="border-b border-black/10 dark:border-gray-700">
                            <th class="px-4 py-2 text-left text-md font-normal ">
                                Compony Name
                            </th>
                            <th class="px-4 py-2 text-left text-md font-normal ">
                                Broker Name
                            </th>
                            <th class="px-4 py-2 text-left text-md font-normal ">
                                download pdf
                            </th>
                            <th class="px-4 py-2 text-left text-md font-normal ">
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
                                        href="{{ route('admin.container.application.submission', $application->id) }}"
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
@endsection