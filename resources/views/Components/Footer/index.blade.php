<footer class="fixed bottom-0 left-0 w-full bg-gray-800 text-white">
    <div class="flex justify-between container mx-auto items-center p-4">
        <!-- Beranda Button -->
        <a href="{{ route('dashboard.index') }}" class="flex flex-col items-center text-gray-300 hover:text-white">
            <i class="fas fa-home text-2xl"></i>
            <span class="text-xs">Beranda</span>
        </a>

        <!-- Pesan Button -->
        <a href="{{ route('semua-pesan.index') }}" class="flex flex-col items-center text-gray-300 hover:text-white">
            <i class="fas fa-comment-dots text-2xl"></i>
            <span class="text-xs">Semua Pesan</span>
        </a>

        <!-- Keluar Button -->
        <form action="{{ route('keluar.index') }}" method="POST" class="flex flex-col items-center">
            @csrf
            <button type="submit" class="flex flex-col items-center text-gray-300 hover:text-white">
                <i class="fas fa-sign-out-alt text-2xl"></i>
                <span class="text-xs">Keluar</span>
            </button>
        </form>
    </div>
</footer>
