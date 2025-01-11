@extends('Pages.Admin.index')
@section('content')
    <div class="p-4 sm:ml-64">
        <div class="p-4 rounded-lg bg-white dark:border-gray-700 mt-14">
            <h1 class="text-xl font-bold">Dashboard</h1>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-2 mt-5">
            <div class="p-4 rounded-lg bg-white dark:border-gray-700">
                <div class="flex justify-between items-center">
                    <div>
                        <p class="text-lg font-semibold">Pengguna</p>
                        <p class="text-2xl font-semibold">{{ $pengguna }}</p>
                    </div>
                    <div>
                        <i class="fa-solid fa-user text-5xl text-blue-500"></i>
                    </div>
                </div>
            </div>

            <div class="p-4 rounded-lg bg-white dark:border-gray-700">
                <div class="flex justify-between items-center">
                    <div>
                        <p class="text-lg font-semibold">Pesan</p>
                        <p class="text-2xl font-semibold">{{ $pesan }}</p>
                    </div>
                    <div>
                        <i class="fa-solid fa-comment-dots text-5xl text-yellow-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
