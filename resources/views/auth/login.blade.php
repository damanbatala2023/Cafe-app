<!-- resources/views/auth/login.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="flex justify-center items-center h-screen bg-gray-100">
        <div class="bg-white p-8 rounded shadow-md w-full sm:w-96">
            <h1 class="text-3xl font-semibold text-center mb-4">Login</h1>

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}"
                           class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                </div>

                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input id="password" type="password" name="password"
                           class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                </div>

              <span><a href="#">forget password?</a></span>

                <div class="flex items-center justify-between">
                    <button type="submit"
                            class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded focus:outline-none focus:ring focus:ring-blue-200 focus:ring-opacity-50">Login</button>
                            <br>

                        <span>New user?<a href="register">Register here</a></span>
                    <hr>
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900"
                           href="{{ route('password.request') }}">
                            Forgot your password?
                        </a>
                    @endif
                </div>
            </form>
        </div>
    </div>
@endsection
