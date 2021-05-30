@extends('layouts.main')
@section('content')
    <section class="w-max p-6 mx-auto bg-white rounded-md shadow-md dark:bg-gray-800">
        <h2 class="text-center text-lg font-semibold text-gray-700 capitalize dark:text-white mb-2">Create a OTP</h2>

        <form action="{{ route('codes.store') }}" method="post">
            @csrf
            <label class="text-gray-700 dark:text-gray-200" for="label">OTP Label</label>
            <input type="text" name="label" placeholder="Type a label"
                class="w-full block px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">

            <label class="text-gray-700 dark:text-gray-200" for="user">User</label>
            <input type="text" name="user" placeholder="Type the OTP user"
                class="block px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">


            <label class="text-gray-700 dark:text-gray-200" for="user">Select the OTP type (Default TOTP):</label>
            <select
                class="w-full block w-52 text-gray-700 py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-primary-500 focus:border-primary-500"
                name="type">
                <option value="totp">TOTP</option>
                <option value="hotp">HOTP</option>
            </select>

            <label class="text-gray-700 dark:text-gray-200" for="algorithm">Select the algorithm (Default SHA1):</label>
            <select
                class="w-full block w-52 text-gray-700 py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-primary-500 focus:border-primary-500"
                name="algorithm">
                <option value="sha1">SHA1</option>
                <option value="sha256">SHA256</option>
                <option value="sha512">SHA512</option>
            </select>

            <label class="text-gray-700 dark:text-gray-200" for="digits">Select the number of digits for the code (Default
                6):</label>
            <select
                class="w-full block w-52 text-gray-700 py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-primary-500 focus:border-primary-500"
                name="digits">
                <option value="6">6</option>
                <option value="8">8</option>
            </select>

            <div data-show-if="type:HOTP">
                <label class="text-gray-700 dark:text-gray-200" for="counter">Enter the counter (Default 0):</label>
                <input type="number" name="counter" value="0"
                    class="w-full block px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>

            <div data-show-if="type:TOTP">
                <label class="text-gray-700 dark:text-gray-200" for="period">Enter the period of the TOTP code (Default
                    30):</label>
                <select
                    class="w-full block w-52 text-gray-700 py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-primary-500 focus:border-primary-500"
                    name="period">
                    <option value="30">30</option>
                    <option value="60">60</option>
                </select>
            </div>

            <label class="text-gray-700 dark:text-gray-200" for="secret">Base32 secret</label>
            <input type="text" name="secret" placeholder="Enter the Base32 secret"
                class="w-full block px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            <input type="hidden" name="folder_id" value="{{ $folder_id }}" required>

            <div class="flex justify-end mt-6">
                <button
                    class="w-full px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-gray-700 rounded-md hover:bg-gray-600 focus:outline-none focus:bg-gray-600">Create</button>
            </div>
        </form>
    </section>
@endsection
