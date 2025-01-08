<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Masuk - Siapaya</title>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
</head>

<body class="bg-gray-900 flex items-center justify-center h-screen">
    <div class="w-full max-w-md bg-gray-800 rounded-lg shadow-md p-6">
        <h2 class="text-2xl font-bold text-center text-white">Siapaya</h2>
        <form action="{{ route('masuk.store') }}" method="POST" class="space-y-6 mt-4">
            @csrf
            <!-- Email -->
            <div>
                <label for="name" class="block text-sm font-medium text-gray-300">Nama</label>
                <input type="name" name="name" id="name"
                    class="w-full mt-1 px-3 py-2 bg-gray-700 text-white rounded-md focus:outline-none focus:ring-2 focus:ring-gray-500"
                    placeholder="Masukkan nama">
                @error('name')
                    <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                @enderror
            </div>

            <!-- Password -->
            <div>
                <label for="password" class="block text-sm font-medium text-gray-300">Kata Sandi</label>
                <input type="password" name="password" id="password"
                    class="w-full mt-1 px-3 py-2 bg-gray-700 text-white rounded-md focus:outline-none focus:ring-2 focus:ring-gray-500"
                    placeholder="Masukkan password">
                @error('password')
                    <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                @enderror
            </div>

            <!-- Remember Me -->
            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <input type="checkbox" id="remember" name="remember"
                        class="h-4 w-4 text-gray-600 border-gray-300 rounded focus:ring-gray-500">
                    <label for="remember" class="ml-2 text-sm text-gray-300">Ingat Saya</label>
                </div>
                <a href="{{route('daftar.index')}}" class="text-sm text-gray-400 hover:underline">Daftar sekarang!</a>
            </div>

            <!-- Submit Button -->
            <div>
                <button type="submit"
                    class="w-full py-2 px-4 bg-gray-700 text-white font-semibold rounded-md hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-gray-500">
                    Masuk
                </button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
</body>
