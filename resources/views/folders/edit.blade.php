@extends('layouts.main')
@section('content')
    <section class="max-w-min p-6 mx-auto bg-white rounded-md shadow-md dark:bg-gray-800">
        <h2 class="text-lg font-semibold text-gray-700 dark:text-white">Change the folder name</h2>

        <form action="{{ route('folders.update', $folder->id) }}" method="post">
            @csrf
            @method('PATCH')
            <div>
                <label class="text-gray-700 dark:text-gray-200 flex mt-2" for="name">Folder name</label>
                <input type="text" name="name" placeholder="{{ $folder->name }}"
                    class="block px-4 py-2 mt-1 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>

            <div class="flex justify-end mt-6">
                <button
                    class="px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-gray-700 rounded-md hover:bg-gray-600 focus:outline-none focus:bg-gray-600">Save</button>
            </div>
        </form>
    </section>
@endsection
