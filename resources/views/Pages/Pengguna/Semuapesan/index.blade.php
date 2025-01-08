@extends('Pages.Pengguna.index')

@section('content')
    <!-- Daftar Pesan -->
    <div class="w-full max-w-screen-xl p-4 space-y-4 mt-10">
        <div class="bg-gray-800 text-white rounded-lg shadow-lg p-4 w-full max-w-screen-xl text-center">
            <h1 class="text-2xl font-bold">Semua Pesan</h1>
        </div>

        @forelse ($pesan as $item)
            <div class="bg-gray-800 text-white p-4 rounded-lg shadow-md">
                <p class="mt-2 text-xl text-gray-100">{{ $item->pesan }}</p>
                <p class="text-sm text-gray-300">{{ $item->created_at->format('d M Y, H:i') }}</p>
            </div>
        @empty
            <div class="text-center text-gray-400">
                <p>Tidak ada pesan anonim untuk saat ini.</p>
            </div>
        @endforelse

        <div class="mt-3">
            {{ $pesan->links() }}
        </div>
    </div>

    <script>
        setInterval(function() {
            window.location.reload();
        }, 5000);
    </script>
@endsection
