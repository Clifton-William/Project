@extends('layouts.app')

@section('content')
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-10">
        <div class="bg-white dark:bg-gray-800 shadow-xl rounded-2xl p-6">
            <h2 class="text-2xl font-bold mb-6 text-gray-800 dark:text-gray-100 text-center">Data Tamu</h2>

            <form method="GET" class="flex flex-col md:flex-row gap-4 items-center justify-between mb-6">
                <div class="flex gap-2 flex-1">
                    <input type="date" name="date" value="{{ request('date') }}"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg dark:bg-gray-700 dark:text-white dark:border-gray-600">
                    <input type="text" name="search" placeholder="Cari nama" value="{{ request('search') }}"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg dark:bg-gray-700 dark:text-white dark:border-gray-600">
                </div>
                <div class="flex gap-2">
                    <button type="submit"
                        class="bg-blue-500 hover:bg-blue-600 text-white font-semibold px-4 py-2 rounded-lg">Filter</button>
                    <a href="{{ route('pdf.export') }}"
                        class="bg-red-500 hover:bg-red-600 text-white font-semibold px-4 py-2 rounded-lg">Cetak PDF</a>
                </div>
            </form>

            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                    <thead class="bg-gray-100 dark:bg-gray-700">
                        <tr>
                            <th class="px-4 py-3 text-left text-sm font-medium text-gray-700 dark:text-gray-300">Nama</th>
                            <th class="px-4 py-3 text-left text-sm font-medium text-gray-700 dark:text-gray-300">Instansi
                            </th>
                            <th class="px-4 py-3 text-left text-sm font-medium text-gray-700 dark:text-gray-300">No HP</th>
                            <th class="px-4 py-3 text-left text-sm font-medium text-gray-700 dark:text-gray-300">Keperluan
                            </th>
                            <th class="px-4 py-3 text-left text-sm font-medium text-gray-700 dark:text-gray-300">Waktu</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                        @forelse($guests as $guest)
                            <tr>
                                <td class="px-4 py-3 text-sm text-gray-900 dark:text-gray-100">{{ $guest->name }}</td>
                                <td class="px-4 py-3 text-sm text-gray-900 dark:text-gray-100">{{ $guest->institution }}
                                </td>
                                <td class="px-4 py-3 text-sm text-gray-900 dark:text-gray-100">{{ $guest->phone }}</td>
                                <td class="px-4 py-3 text-sm text-gray-900 dark:text-gray-100">{{ $guest->purpose }}</td>
                                <td class="px-4 py-3 text-sm text-gray-900 dark:text-gray-100">{{ $guest->visit_time }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center px-4 py-6 text-gray-500 dark:text-gray-400">Tidak ada
                                    data tamu.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
