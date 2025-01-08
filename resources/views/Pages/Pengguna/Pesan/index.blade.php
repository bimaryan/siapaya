@extends('Pages.Pengguna.index')

@section('content')
    <div class="w-full max-w-screen-xl p-4 space-y-4 mt-10">
        <div class="bg-gray-800 text-white rounded-lg shadow-lg p-6 w-full max-w-screen-xl">
            <h1 class="text-2xl font-bold mb-4">Kirim Pesan ke {{ $name }}</h1>

            <!-- Pesan Form -->
            <form action="{{ route('Pesan.update', $name) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-4">
                    <label for="pesan" class="block text-sm text-gray-400 mb-2">Pesan Anda</label>
                    <textarea id="pesan" name="pesan" rows="4" maxlength="255"
                        class="w-full px-4 py-2 bg-gray-700 text-white border border-gray-600 rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none"
                        placeholder="Tulis pesan Anda di sini..." oninput="updateCharCount()"></textarea>
                    <div class="text-gray-400 text-sm mt-1">
                        <span id="charCount">255</span> karakter tersisa
                    </div>
                </div>

                <button type="submit"
                    class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-md px-6 py-2">
                    Kirim Pesan
                </button>
            </form>
        </div>
    </div>

    <!-- SweetAlert2 -->
    @if ($errors->any())
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                html: `{!! implode('<br>', $errors->all()) !!}`,
                confirmButtonColor: '#d33',
            });
        </script>
    @endif

    @if (session('Berhasil'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Berhasil',
                text: '{{ session('Berhasil') }}',
                confirmButtonColor: '#3085d6',
            });
        </script>
    @endif

    <!-- Character Count Script -->
    <script>
        function updateCharCount() {
            const textarea = document.getElementById('pesan');
            const charCount = document.getElementById('charCount');
            charCount.textContent = 255 - textarea.value.length;
        }
    </script>
@endsection
