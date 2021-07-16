<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __("Todo") }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">
                <form action="{{ route("todo.store") }}" method="POST">
                    @csrf
                    <div class="w-full">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                            Todo
                        </label>
                        
                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 
                        border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none 
                        focus:bg-white focus:border-gray-500" type="text" name="todo">

                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit">
                            Save
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>