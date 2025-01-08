<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar - Siapaya</title>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
</head>

<body class="bg-gray-900 flex items-center justify-center h-screen">
    <div class="w-full max-w-md bg-gray-800 rounded-lg shadow-md p-6">
        <h2 class="text-2xl font-bold text-center text-white">Siapaya</h2>
        <form action="{{ route('daftar.index') }}" method="POST" class="space-y-6 mt-4">
            @csrf
            <!-- Nama -->
            <div>
                <label for="name" class="block text-sm font-medium text-gray-300">Nama</label>
                <input type="text" name="name" id="name"
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

            <!-- Confirm Password -->
            <div>
                <label for="password_confirmation" class="block text-sm font-medium text-gray-300">Konfirmasi Kata
                    Sandi</label>
                <input type="password" name="password_confirmation" id="password_confirmation"
                    class="w-full mt-1 px-3 py-2 bg-gray-700 text-white rounded-md focus:outline-none focus:ring-2 focus:ring-gray-500"
                    placeholder="Konfirmasi password">
            </div>

            <!-- Submit Button -->
            <div>
                <button type="submit"
                    class="w-full py-2 px-4 bg-gray-700 text-white font-semibold rounded-md hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-gray-500">
                    Daftar
                </button>
            </div>
        </form>
        <p class="mt-4 text-sm text-center text-gray-400">
            Sudah punya akun? <a href="{{ route('masuk.index') }}" class="text-gray-300 hover:underline">Masuk</a>
        </p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
</body>

</html>
