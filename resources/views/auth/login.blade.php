@extends('layout.master')

@section('title')
    login
@endsection

@section('content')
<div class="w-full max-w-2xl mx-auto flex items-center justify-center shadow-sm">
    <div class="bg-white rounded-xl p-4 w-full ">
        <div class=" flex items-center justify-center mx-auto space-x-2">
            <h1 class="text-3xl text-center text-gray-600 font-extrabold">Login to </h1>
            <h1 class="text-green-300 text-4xl font-extrabold">Royal<span class="text-blue-300">RESIDENCE</span></h1>
        </div>
        <div>
            <form action="/login" method="POST" class="flex flex-col space-y-6">
                @csrf
                @if(session()->has('login_gagal'))
                    <span class="mx-auto text-red-400 text-lg font-light">{{ session('login_gagal') }}</span>
                @endif
                @if(session()->has('register_sukses')) 
                    <span class="mx-auto text-green-300 text-lg font-light">{{ session('register_sukses') }}</span>
                @endif
                @if(session()->has('logout_sukses')) 
                    <span class="mx-auto text-green-300 text-lg font-light">{{ session('logout_sukses') }}</span>
                @endif
                <div class=" h-[75px] w-full flex flex-col space-y-2">
                    <div class="flex items-center space-x-2">
                        <h1 class="text-gray-600 text-xl font-bold">email</h1>
                        <span class="text-red-400 font-light text-sm animate-pulse -mb-1">@error('email') {{ $message }} @enderror</span>
                    </div>
                    <input type="text" name="email" value="{{ old('email') }}"
                        class="h-[50px] bg-gray-200 rounded-lg text-green-400 text-xl font-extrabold focus:ring-0 border-0 @error('email') border-2 border-red-400 @enderror" >
                </div>
                <div class=" h-[75px] w-full flex flex-col space-y-2">
                    <div class="flex items-center space-x-2">
                        <h1 class="text-gray-600 text-xl font-bold">password</h1>
                        <span class="text-red-400 font-light text-sm animate-pulse -mb-1">@error('password') {{ $message }} @enderror</span>
                    </div>
                    <input type="password" name="password"
                        class="h-[50px] bg-gray-200 rounded-lg text-green-400 text-xl font-extrabold focus:ring-0 border-0 @error('password') border-2 border-red-400 @enderror" >
                </div>
                <div class=" h-[50px] w-full flex items-center justify-between px-2">
                    <h1 class="text-gray-600 text-lg font-semibold"> Don't have any account?. <a class="text-blue-300 text-xl font-bold" href="/register">Register Now</a></h1>
                    <button type="submit" class="w-[150px] h-full bg-blue-400 text-white rounded-lg">login</button> 
                </div>
            </form>
        </div>

    </div>
</div>
@endsection