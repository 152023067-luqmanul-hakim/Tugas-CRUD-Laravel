<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />

    <title>Data Buku</title>
</head>

<body>
    <div class="w-full h-screen p-6 bg-gray-100">
        <div class="shadow-md p-5 text-white bg-blue-700 rounded-lg mb-2">
            <p class="font-semibold text-xl ">Data Buku</p>
        </div>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg p-5 bg-white">
            <a href="{{ route('add')}}">
                <button
                    class="text-white bg-blue-500 hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Tambah
                    Data</button>
            </a>
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 ">
                <thead class="text-xs text-white uppercase bg-blue-500 dark:bg-gray-700 dark:text-gray-400 ">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            ISBN
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Judul
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Genre
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Jumlah Halaman
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Tahun Terbit
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Stok
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($buku as $d)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50">
                            <td class="px-6 py-4">
                                {{ $d->isbn}}
                            </td>
                            <td class="px-6 py-4">
                                {{ $d->judul}}
                            </td>
                            <td class="px-6 py-4">
                                {{ $d->genre}}
                            </td>
                            <td class="px-6 py-4">
                                {{ $d->jumlah_halaman}}
                            </td>
                            <td class="px-6 py-4">
                                {{ $d->tahun_terbit}}
                            </td>
                            <td class="px-6 py-4">
                                {{ $d->stok}}
                            </td>
                            <td class="px-6 py-4 flex">
                                <a href="{{route('edit',$d->isbn)}}" class="text-blue-600 hover:text-blue-800 font-medium">Edit</a>
                                <p>|</p>
                                <form action="{{ route('delete',$d->isbn)}}" method="post">
                                    @csrf
                                    <button type="submit" class="text-red-500 hover:text-red-700 font-medium"> Delete</button>
                                     </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</body>

</html>