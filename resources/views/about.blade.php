@extends('master.app')
@section('isi')
<li><a class="nav-link  scrollto" href="{{ route('welcome') }}">Home</a></li>
<li><a class="nav-link  scrollto" href="{{ route('about') }}">About</a></li>

@if (Route::has('login'))
    <ul class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
        @auth
            <a href="{{ url('/dashboard') }}"
                class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
        @else
            <li class="getstarted scrollto p-2 px-3" style="background-color: #39A7FF;">
                <a href="{{ route('login') }}"
                    class="font-semibold p-1 text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log
                    in</a>
            </li>
            @if (Route::has('register'))
                <li class="getstarted scrollto p-2 mx-2 text-white">
                    <a href="{{ route('register') }}"
                        class="ml-4 p-1 text-white font-semibold text-white-600 hover:text-white-900 dark:text-white-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                </li>
            @endif
        @endauth
    </ul>
@endif
@endsection
@section('konten')
    
@endsection