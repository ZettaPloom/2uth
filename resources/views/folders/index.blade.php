@extends('layouts.main')
@section('content')
    <div class="relative bg-white dark:bg-gray-800 float-left">
        <div class="flex flex-col sm:flex-row sm:justify-around">
            <div class="w-80 h-screen">
                <div class="flex items-center justify-start mx-6 mt-10">
                    <span class="text-gray-600 dark:text-gray-300 ml-4 text-2xl font-bold">
                        Folders
                    </span>
                </div>
                <nav class="mt-10 px-0 grid ">
                    @foreach ($folders as $folder)
                        <div class="inline-flex">
                            <inertia-link class="hover:text-gray-800 hover:bg-gray-100 flex items-center p-2 my-6 transition-colors dark:hover:text-white dark:hover:bg-gray-600 duration-200  text-gray-600 dark:text-gray-400 rounded-lg "
                                href="#{{ $folder->id }}" onclick="return show('{{ $folder->id }}')">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z">
                                    </path>
                                </svg>
                                <span class="mx-4 text-lg font-normal">
                                    {{ $folder->name }}
                                </span>
                            </inertia-link>
                            <div class="inline-flex absolute right-0">
                                <a class="hover:text-gray-800 hover:bg-gray-100 flex items-center p-2 my-6 transition-colors dark:hover:text-white dark:hover:bg-gray-600 duration-200  text-gray-600 dark:text-gray-400 rounded-lg "
                                    href="{{ route('folders.edit', $folder->id) }}">
                                    <span class="mx-4 text-lg font-normal">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                        </svg>
                                    </span>
                                </a>
                                <form action="{{ route('folders.destroy', $folder->id) }}" method="post"
                                    id="destroy{{ $folder->id }}">
                                    @csrf
                                    @method('DELETE')
                                </form>
                                <a class="hover:text-gray-800 hover:bg-gray-100 flex items-center p-2 my-6 transition-colors dark:hover:text-white dark:hover:bg-gray-600 duration-200  text-gray-600 dark:text-gray-400 rounded-lg "
                                    href="javascript:{}"
                                    onclick="document.getElementById('destroy{{ $folder->id }}').submit();">
                                    <span class="mx-4 text-lg font-normal">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                    @endforeach
                    <button>
                        <a class="hover:text-gray-800 hover:bg-gray-100 flex items-center p-2 my-6 transition-colors dark:hover:text-white dark:hover:bg-gray-600 duration-200  text-gray-600 dark:text-gray-400 rounded-lg "
                            href="{{ route('folders.create') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span class="mx-4 text-lg font-normal">
                                New Folder
                            </span>
                        </a>
                    </button>
                </nav>
            </div>
        </div>
    </div>
    @foreach ($folders as $folder)
        @include('folders.show', ['codes'=>$folder->codes, 'folder_id' => $folder->id])
    @endforeach
    <script>
        const hide = document.getElementsByClassName("otpcode");
        for (let i = 0; i < hide.length; i++) {
            hide[i].style.display = "none";
        }

        function show(shown) {
            const divsToHide = document.getElementsByClassName("otpcode");
            for (let i = 0; i < divsToHide.length; i++) {
                divsToHide[i].style.display = "none";
            }
            document.getElementById(shown).style.display = 'flex';
        }

    </script>
@endsection
