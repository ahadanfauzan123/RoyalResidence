@extends('layout.master')

@section('title')
    register
@endsection

@section('content')
<div class="w-full max-w-2xl mx-auto flex items-center justify-center">
    <div class="bg-white rounded-xl p-4 w-full ">
        <div class=" flex items-center justify-center mx-auto space-x-2">
            <h1 class="text-3xl text-center text-gray-600 font-extrabold">SignUp to </h1>
            <h1 class="text-green-300 text-4xl font-extrabold">Royal<span class="text-blue-300">RESIDENCE</span></h1>
        </div>
        <div>
            <form action="/register" method="POST" class="flex flex-col space-y-6">
                @csrf
                <div class=" h-[75px] w-full flex flex-col space-y-2">
                    <div class="flex items-center space-x-2">
                        <h1 class="text-gray-600 text-xl font-bold">username</h1>
                        <span class="text-red-400 text-sm -mb-1 font-light animate-pulse">@error('name') {{ $message }} @enderror</span>
                    </div>
                    <input type="text" name="name" autocomplete="none" class="h-[50px] bg-gray-300 rounded-lg text-green-400 text-xl font-extrabold focus:ring-0 border-0 @error('name') border-2 border-red-400 @enderror" >
                </div>
                <div class=" h-[75px] w-full flex flex-col space-y-2">
                    <div class="flex items-center space-x-2">
                        <h1 class="text-gray-600 text-xl font-bold">email</h1>
                        <span class="text-red-400 text-sm -mb-1 font-light animate-pulse">@error('email') {{ $message }} @enderror</span>
                    </div>
                    <input type="text" name="email" class="h-[50px] bg-gray-300 rounded-lg text-green-400 text-xl font-extrabold focus:ring-0 border-0 @error('email') border-2 border-red-400 @enderror" >
                </div>
                <div class=" h-[75px] w-full flex flex-col space-y-2">
                    <div class="flex items-center space-x-2">
                        <h1 class="text-gray-600 text-xl font-bold">password</h1>
                        <span class="text-red-400 text-sm -mb-1 font-light animate-pulse">@error('password') {{ $message }} @enderror</span>
                    </div>
                    <input type="text" name="password" autocomplete="none" class="h-[50px] bg-gray-300 rounded-lg text-green-400 text-xl font-extrabold focus:ring-0 border-0 @error('password') border-2 border-red-400 @enderror" autofocus >
                </div>
                <div class=" h-[50px] w-full flex items-center justify-between px-2">
                    <h1 class="text-gray-600 text-lg font-semibold"> Allready have an account?. <a class="text-blue-300 text-xl font-bold" href="/login">Login Now</a></h1>
                    <button type="submit" class="w-[150px] h-full bg-blue-400 text-white rounded-lg">Register</button>
                </div>
            </form>
        </div>

    </div>
</div>
@endsection