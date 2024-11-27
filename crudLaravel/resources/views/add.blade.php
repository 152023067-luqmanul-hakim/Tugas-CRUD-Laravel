<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />

    <title>Form Tambah Data</title>
</head>

<body class="bg-gray-100">
    <div class="max-w-xl mx-auto px-6 py-1">
        <div class="bg-white p-5 rounded-lg">
            <a href="{{route('index')}}">
                <div class="flex gap-3 items-center mb-2 hover:text-blue-600">
                    <img src="{{ asset('assets/arrow.png')}}" alt="arrow back" class="w-5 h-5">
                    <p class="font-medium">Kembali</pc>
                </div>
            </a>
            <h1 class="font-semibold text-2xl mb-5">Form Tambah Data Buku</h1>
            <form class="mx-auto" action="{{route('store')}}" method="post">
                @csrf
                <div class="mb-5">
                    <label for="isbn" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ISBN</label>
                    <input type="text" name="isbn" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required>
                </div>
                <div class="mb-5">
                    <label for="judul" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Judul</label>
                    <input type="text" name="judul"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                        required />
                </div>
                <div class="mb-5">
                    <label for="genre" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Genre</label>
                    <input type="text" name="genre"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                        required />
                </div>
                <div class="mb-5">
                    <label for="jumlah_halaman" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Jumlah Halaman</label>
                    <input type="number" name="jumlah_halaman"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                        required />
                </div>
                <div class="mb-5">
                    <label for="tahun_terbit" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Tahun Terbit</label>
                    <input type="number" name="tahun_terbit"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                        required />
                </div>
                <div class="mb-5">
                    <label for="stok" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Stok</label>
                    <input type="number" name="stok"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                        required />
                </div>
             
                <button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
            </form>
        </div>
    </div>
</body>

</html>