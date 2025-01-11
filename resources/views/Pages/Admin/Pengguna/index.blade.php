@extends('Pages.Admin.index')
@section('content')
    <div class="p-4 sm:ml-64">

        @if (Session('Berhasil'))
            <script>
                Swal.fire({
                    icon: 'success',
                    title: 'Berhasil',
                    text: '{{ session('Berhasil') }}',
                    confirmButtonColor: '#3085d6',
                });
            </script>
        @endif

        <div class="p-4 rounded-lg bg-white dark:border-gray-700 mt-14">
            <h1 class="text-xl font-bold">Pengguna</h1>
        </div>

        <div class="p-4 rounded-lg bg-white dark:border-gray-700 mt-5 space-y-3">
            <div>
                <button class="px-3 py-2 bg-blue-500 hover:bg-blue-700 text-white rounded-lg" data-modal-target="popup-tambah"
                    data-modal-toggle="popup-tambah">
                    <i class="fa-solid fa-plus"></i> Tambah
                </button>

                <div id="popup-tambah" tabindex="-1"
                    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    <div class="relative p-4 w-full max-w-lg max-h-full">
                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                            <button type="button"
                                class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                data-modal-hide="popup-tambah">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                            <div class="p-4 md:p-5">
                                <h1 class="text-xl font-bold text-center">Tambah Pengguna</h1>

                                <div class="mt-2">
                                    <form action="{{ route('pengguna.store') }}" method="POST">
                                        @csrf
                                        <div class="mb-2">
                                            <label for="name"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                                            <input type="text" name="name" id="name" class="w-full rounded-lg"
                                                placeholder="Masukkan nama..." />
                                        </div>
                                        <div class="mb-2">
                                            <label for="password"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kata
                                                sandi</label>
                                            <input type="password" name="password" id="password" class="w-full rounded-lg"
                                                placeholder="Masukkan kata sandi..." />
                                        </div>
                                        <div class="mb-4">
                                            <label for="phone"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomer
                                                Telepon</label>
                                            <input type="text" name="phone" id="phone" class="w-full rounded-lg"
                                                placeholder="Masukkan nomer telepon..." />
                                        </div>
                                        <div>
                                            <button type="submit"
                                                class="px-3 py-2 rounded-lg bg-green-500 text-white hover:bg-green-800 hover:text-white">Simpan</button>
                                            <button type="button" data-modal-hide="popup-tambah"
                                                class="px-3 py-2 rounded-lg bg-red-500 text-white hover:bg-red-800 hover:text-white">Batal</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <td class="px-6 py-3">
                                No
                            </td>
                            <td class="px-6 py-3">
                                Nama
                            </td>
                            <td class="px-6 py-3">
                                Browser
                            </td>
                            <td class="px-6 py-3">
                                Device
                            </td>
                            <td class="px-6 py-3">
                                Aksi
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pengguna as $data)
                            <tr
                                class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $loop->iteration }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $data->name }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $data->browser }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $data->device }}
                                </td>
                                <td class="px-6 py-4">
                                    <button class="px-3 py-2 bg-yellow-300 hover:bg-yellow-900 text-white rounded-lg"
                                        data-modal-target="popup-update" data-modal-toggle="popup-update">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </button>

                                    <div id="popup-update" tabindex="-1"
                                        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                        <div class="relative p-4 w-full max-w-lg max-h-full">
                                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                <button type="button"
                                                    class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                    data-modal-hide="popup-update">
                                                    <svg class="w-3 h-3" aria-hidden="true"
                                                        xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 14 14">
                                                        <path stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="2"
                                                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                    </svg>
                                                    <span class="sr-only">Close modal</span>
                                                </button>
                                                <div class="p-4 md:p-5">
                                                    <h1 class="text-xl font-bold text-center">Ganti Password</h1>

                                                    <div class="mt-2">
                                                        <form action="{{ route('pengguna.update', $data->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('PUT')
                                                            <div class="mb-2">
                                                                <label for="password"
                                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kata
                                                                    sandi</label>
                                                                <input type="password" name="password" id="password"
                                                                    class="w-full rounded-lg"
                                                                    placeholder="Masukkan kata sandi..." />
                                                            </div>
                                                            <div>
                                                                <button type="submit"
                                                                    class="px-3 py-2 rounded-lg bg-green-500 text-white hover:bg-green-800 hover:text-white">Simpan</button>
                                                                <button type="button" data-modal-hide="popup-update"
                                                                    class="px-3 py-2 rounded-lg bg-red-500 text-white hover:bg-red-800 hover:text-white">Batal</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
