<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Data User</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body { font-family: 'Inter', sans-serif; background-color: #f3f4f6; }
    </style>
</head>
<body class="p-8">
    <div class="max-w-6xl mx-auto bg-white p-6 rounded-xl shadow-lg">
        <h1 class="text-3xl font-bold mb-6 text-gray-800 border-b pb-2">Daftar User (Tabel Data)</h1>

        @if ($data->isEmpty())
            <div class="bg-yellow-100 border-l-4 border-yellow-500 text-yellow-700 p-4 rounded-lg" role="alert">
                <p class="font-bold">Informasi</p>
                <p>Tidak ada data user yang ditemukan.</p>
            </div>
        @else
            <div class="overflow-x-auto shadow-md rounded-lg">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">User ID</th>
                            <th scope="col" class="px-6 py-3">Username</th>
                            <th scope="col" class="px-6 py-3">Nama Lengkap</th>
                            <th scope="col" class="px-6 py-3">Level ID</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- Menggunakan $data (lowercase) --}}
                        @foreach ($data as $d) 
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            {{-- Menggunakan user_id karena itu Primary Key di Model --}}
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $d->user_id }} 
                            </th>
                            <td class="px-6 py-4">{{ $d->username }}</td>
                            <td class="px-6 py-4">{{ $d->nama }}</td>
                            <td class="px-6 py-4">{{ $d->level_id }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
        
        <p class="mt-6 text-sm text-gray-500">
            *Pastikan Controller Anda menggunakan `UserModel::all()` untuk mengisi tabel ini.
        </p>
    </div>
</body>
</html>