<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Buku Tamu</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100 dark:bg-gray-900 min-h-screen flex flex-col items-center justify-center px-4">
    @if (Route::has('login'))
        <div class="absolute top-6 right-6 z-10 space-x-4">
            @auth
                <a href="{{ url('/dashboard') }}"
                    class="text-sm font-semibold text-gray-700 hover:text-gray-900 dark:text-gray-300 dark:hover:text-white">Dashboard</a>
            @else
                <a href="{{ route('login') }}"
                    class="text-sm font-semibold text-gray-700 hover:text-gray-900 dark:text-gray-300 dark:hover:text-white">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}"
                        class="text-sm font-semibold text-gray-700 hover:text-gray-900 dark:text-gray-300 dark:hover:text-white">Register</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="w-full max-w-md bg-white dark:bg-gray-800 rounded-xl shadow-md p-6">
        <div class="flex flex-col items-center mb-6">
            <img src="{{ asset('img/smk.jpg') }}" alt="Logo SMK" class="w-20 h-20 object-contain mb-2">
            <h2 class="text-2xl font-bold text-center text-gray-800 dark:text-gray-100">Formulir Buku Tamu</h2>
        </div>

        @if (session('success'))
            <div class="mb-4 text-green-600 dark:text-green-400 text-center font-semibold">
                {{ session('success') }}
            </div>
        @endif

        <form method="POST" action="/guest" class="grid grid-cols-1 md:grid-cols-2 gap-4">
            @csrf
<div class="space-y-4">
    <div>
        <label for="name" class="block mb-1 text-sm text-gray-600 dark:text-gray-300">Nama</label>
        <input type="text" id="name" name="name" required
            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 dark:bg-gray-700 dark:text-white dark:border-gray-600">
    </div>

    <div>
        <label for="institution" class="block mb-1 text-sm text-gray-600 dark:text-gray-300">Instansi</label>
        <input type="text" id="institution" name="institution" required
            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 dark:bg-gray-700 dark:text-white dark:border-gray-600">
    </div>

    <div>
        <label for="phone" class="block mb-1 text-sm text-gray-600 dark:text-gray-300">No. HP</label>
        <input type="text" id="phone" name="phone" required
            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 dark:bg-gray-700 dark:text-white dark:border-gray-600">
    </div>
</div>

<div class="flex flex-col justify-between space-y-4">
    <div>
        <label for="purpose" class="block mb-1 text-sm text-gray-600 dark:text-gray-300">Keperluan</label>
        <textarea id="purpose" name="purpose" rows="6" required
            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 dark:bg-gray-700 dark:text-white dark:border-gray-600"></textarea>
    </div>

    <button type="submit"
        class="w-full py-2 bg-red-500 hover:bg-red-600 text-white rounded-lg font-semibold transition duration-200">Kirim</button>
</div>

        </form>
    </div>
</body>

</html>
