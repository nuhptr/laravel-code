<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Product') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">
                  <form action="{{ route('product.store') }}" method="POST">
                  @csrf
                  <div class="w-full">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                    Product
                    </label>
                    <input type="text" name="nama_product" class="appearance-none block w-full rounded py-3 px-4 mb-3
                    bg-gray-200 text-gray-700 border focus:bg-white focus:border-gray-500
                    sm:text-sm border-gray-300" placeholder="Nama Product">

                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                    Harga Product
                    </label>
                    <input type="text" name="harga_product" class="appearance-none block w-full rounded py-3 px-4 mb-3
                    bg-gray-200 text-gray-700 border focus:bg-white focus:border-gray-500
                    sm:text-sm border-gray-300" placeholder="Harga Product">

                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                    url foto
                    </label>
                    <input type="text" name="photo_path" class="appearance-none block w-full rounded py-3 px-4 mb-3
                    bg-gray-200 text-gray-700 border focus:bg-white focus:border-gray-500
                    sm:text-sm border-gray-300" placeholder="url">

                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                    desc
                    </label>
                    <input type="text" name="desc" class="appearance-none block w-full rounded py-3 px-4 mb-3
                    bg-gray-200 text-gray-700 border focus:bg-white focus:border-gray-500
                    sm:text-sm border-gray-300" placeholder="desc">

                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                    penulis
                    </label>
                    <input type="text" name="penulis" class="appearance-none block w-full rounded py-3 px-4 mb-3
                    bg-gray-200 text-gray-700 border focus:bg-white focus:border-gray-500
                    sm:text-sm border-gray-300" placeholder="penulis">

                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                    penerbit
                    </label>
                    <input type="text" name="penerbit" class="appearance-none block w-full rounded py-3 px-4 mb-3
                    bg-gray-200 text-gray-700 border focus:bg-white focus:border-gray-500
                    sm:text-sm border-gray-300" placeholder="penerbit">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-5">
                    Save
                    </button>
                  </div>
                 
                  </form>
            </div>
        </div>
    </div>
</x-app-layout>
