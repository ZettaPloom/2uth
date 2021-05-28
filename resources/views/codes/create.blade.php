@extends('layouts.main')
@section('content')
    <h2>Create a code</h2>
    <form action="{{ route('codes.store') }}" method="post">
        @csrf
        <div>
            <label for="label">Type the code label</label>
            <input type="text" name="label" placeholder="Please enter a label" required>
            <br>
            <label for="user">Type the user used with the code</label>
            <input type="text" name="user" placeholder="Enter the user" required>
            <br>
            <label for="type">Select a OTP type (Default TOTP):</label>
            <select name="type" required>
                <option value="totp">TOTP</option>
                <option value="hotp">HOTP</option>
            </select>
            <br>
            <label for="algorithm">Select the algorithm (Default SHA1):</label>
            <select name="algorithm" required>
                <option value="sha1">SHA1</option>
                <option value="sha256">SHA256</option>
                <option value="sha512">SHA512</option>
            </select>
            <br>
            <label for="digits">Select the number of digits for the code (Default 6):</label>
            <select name="digits" required>
                <option value="6">6</option>
                <option value="8">8</option>
            </select>
            <br>
            <div data-show-if="type:HOTP">
                <label for="counter">Enter the counter (Default 0):</label>
                <input type="number" name="counter" value="0" required>
                <br>
            </div>
            <div data-show-if="type:TOTP">
                <label for="period">Enter the period of the TOTP code (Default 30):</label>
                <select name="period" required>
                    <option value="30">30</option>
                    <option value="60"></option>
                </select>
                <br>
            </div>
            <input type="text" name="secret" placeholder="Enter the Base32 secret">
            <input type="hidden" name="folder_id" value="{{ $folder_id }}" required>
        </div>
        <input type="submit" value="Create">
    </form>
@endsection
