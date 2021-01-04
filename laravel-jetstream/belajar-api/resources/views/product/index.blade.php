<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Product') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">
                  <a href="{{ route('product.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                  Create Product
                  </a>
                  <table class="table-auto w-full mt-5">
                    <tr>
                        <th class="border px-4 py-2">ID</th>
                        <th class="border px-4 py-2">Nama Product</th>
                        <th class="border px-4 py-2">Harga Product</th>
                        <th class="border px-4 py-2">Foto Product</th>
                        <th class="border px-4 py-2">Penulis</th>
                        <th class="border px-4 py-2">Aksi</th>
                    </tr>
                    @forelse ($product as $products)
                    <tr>
                        <td class="border px-4 py-2">{{$products->id}}</td>
                        <td class="border px-4 py-2">{{$products->nama_product}}</td>
                        <td class="border px-4 py-2">{{$products->harga_product}}</td>
                        <td class="border px-4 py-2">{{$products->photo_path}}</td>
                        <td class="border px-4 py-2">{{$products->penulis}}</td>
                        <td class="border px-4 py-2">
                            <a href="{{ route('product.edit', $products->id)}}">Edit</a>
                            <form action="{{ route('product.destroy', $products->id)}}" method="POST" class="inline-block">
                                @csrf
                                @method('delete')
                                <button type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td coolspan="3" class="border px-4 py-2 text-center">
                        Tidak ada data
                        </td>
                    </tr>
                    @endforelse
                  </table>
            </div>
        </div>
    </div>
</x-app-layout>
