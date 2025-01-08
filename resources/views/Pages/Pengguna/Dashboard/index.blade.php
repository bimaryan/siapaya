@extends('Pages.Pengguna.index')

@section('content')
    <div class="w-full max-w-screen-xl p-4 space-y-4 mt-10">
        <div class="bg-gray-800 text-white rounded-lg shadow-lg p-6 w-full max-w-screen-xl text-center">
            <!-- Heading -->
            <h1 class="text-2xl font-bold mb-4">Bagikan Link Pesan Anonim Anda</h1>

            <!-- Link Display -->
            <div class="flex gap-2 items-center bg-gray-700 text-gray-300 px-4 py-3 rounded-md mb-6">
                <div class="w-full">
                    <input id="linkInput" type="text" value="{{ url(Auth::user()->name) }}"
                        class="bg-transparent text-sm w-full border-none focus:outline-none cursor-pointer" readonly>
                </div>
                <div>
                    <button id="copyButton" onclick="copyToClipboard()"
                        class="bg-gray-800 px-3 py-2 text-gray-400 hover:text-gray-200 rounded-md shadow-md flex items-center space-x-1">
                        <i class="fas fa-copy"></i>
                        <span class="hidden sm:inline">Salin</span>
                    </button>
                </div>
            </div>

            <!-- Instructions -->
            <p class="text-sm text-gray-400 mb-4">Salin link di atas dan bagikan ke teman-teman Anda untuk menerima pesan
                anonim!</p>
        </div>

        <!-- Feature Request Card -->
        <div class="bg-gray-800 text-white rounded-lg shadow-lg p-6 w-full max-w-screen-xl text-center">
            <h1 class="text-2xl font-bold mb-4">Minta Fitur Baru</h1>
            <p class="text-sm text-gray-400 mb-4">Apakah Anda memiliki ide fitur baru? Kirimkan permintaan fitur Anda
                melalui DM Instagram kami @bima_ryan23!</p>

            <!-- Instructions -->
            <p class="text-sm text-gray-400 mb-6">Kirimkan pesan Anda ke Instagram @bima_ryan23 untuk permintaan fitur.</p>

            <!-- Instagram DM Button -->
            <div>
                <a href="https://www.instagram.com/direct/new/?text=Halo,%20saya%20ingin%20mengajukan%20fitur%20baru%20untuk%20Siapaya!"
                    target="_blank"
                    class="bg-purple-600 hover:bg-purple-700 text-white rounded-md px-6 py-3 font-medium flex items-center justify-center space-x-2">
                    <i class="fab fa-instagram"></i>
                    <span>DM Instagram</span>
                </a>
            </div>
        </div>

        <div
            class="bg-gray-800 text-white rounded-lg shadow-lg p-6 w-full max-w-screen-xl text-center relative overflow-x-auto">
            <!-- Share Buttons -->
            <h1 class="text-2xl font-bold mb-4">Bagikan Link Media Sosial Anda</h1>
            <div class="flex flex-wrap justify-center gap-2">
                <!-- Facebook -->
                <div>
                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ url(Auth::user()->name) }}" target="_blank"
                        class="bg-blue-600 hover:bg-blue-700 text-white rounded-md px-4 py-2 text-sm flex items-center space-x-2">
                        <i class="fab fa-facebook"></i>
                        <span>Facebook</span>
                    </a>
                </div>
                <!-- Twitter -->
                <div>
                    <a href="https://twitter.com/intent/tweet?url={{ url(Auth::user()->name) }}" target="_blank"
                        class="bg-blue-500 hover:bg-blue-600 text-white rounded-md px-4 py-2 text-sm flex items-center space-x-2">
                        <i class="fab fa-twitter"></i>
                        <span>Twitter</span>
                    </a>
                </div>
                <!-- Instagram Story -->
                <div>
                    <a href="https://www.instagram.com/stories" target="_blank"
                        class="bg-pink-500 hover:bg-pink-600 text-white rounded-md px-4 py-2 text-sm flex items-center space-x-2">
                        <i class="fab fa-instagram"></i>
                        <span>Instagram</span>
                    </a>
                </div>
                <!-- WhatsApp -->
                <div>
                    <a href="https://wa.me/?text={{ urlencode('Cek pesan anonim saya di: ' . url(Auth::user()->name)) }}"
                        target="_blank"
                        class="bg-green-500 hover:bg-green-600 text-white rounded-md px-4 py-2 text-sm flex items-center space-x-2">
                        <i class="fab fa-whatsapp"></i>
                        <span>Whatsapp</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <script>
        function copyToClipboard() {
            const linkInput = document.getElementById('linkInput');
            const copyButton = document.getElementById('copyButton');

            linkInput.select();
            linkInput.setSelectionRange(0, 99999);

            navigator.clipboard.writeText(linkInput.value)
                .then(() => {
                    // Ubah teks dan ikon tombol untuk memberi tahu pengguna bahwa link telah disalin
                    copyButton.innerHTML =
                        '<i class="fas fa-check"></i><span class="hidden sm:inline">Tersalin!</span>';
                    copyButton.classList.remove('text-gray-400', 'hover:text-gray-200');
                    copyButton.classList.add('text-green-400');

                    // Kembalikan tombol ke tampilan awal setelah 2 detik
                    setTimeout(() => {
                        copyButton.innerHTML =
                            '<i class="fas fa-copy"></i><span class="hidden sm:inline">Salin</span>';
                        copyButton.classList.remove('text-green-400');
                        copyButton.classList.add('text-gray-400', 'hover:text-gray-200');
                    }, 2000);
                })
                .catch(() => {
                    alert('Gagal menyalin link. Silakan coba lagi.');
                });
        }
    </script>
@endsection