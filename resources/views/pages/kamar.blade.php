@extends('layout.master')
@section('title')
    home
@endsection

@section('content')
<div class="w-full max-w-7xl min-h-screen mx-auto flex flex-col gap-y-6">
    {{-- title --}}
<div>
    <h1 class="text-green-300 text-[3.2rem] font-bold">HOTEL<span class="text-white">HEBAT</span></h1>            
</div>
    @include('layout.header')
    <div class="flex w-[80%] space-x-4 mx-auto">
        <div class="w-[300px] h-[200px] rounded-xl bg-gray-400">
        </div>
        <div class="text-white">
            {{-- title --}}
            <h1 class="text-white text-3xl font-semibold">Tipe Superior</h1>
            {{-- fasilitas --}}
            <h2 class="text-lg font-bold">Fasilitas</h2>
            <ul>
                <li>Kamar berukuran</li>
                <li>kamar mandi</li>
                <li>Coffee maker</li>
                <li>LED TV 32 inch</li>
                <li>AC</li>
            </ul>
        </div>
    </div>
    <div class="flex w-[80%] space-x-4 mx-auto">
        <div class="w-[300px] h-[200px] rounded-xl bg-gray-400">
        </div>
        <div class="text-white">
            {{-- title --}}
            <h1 class="text-white text-3xl font-semibold">Tipe Superior</h1>
            {{-- fasilitas --}}
            <h2 class="text-lg font-bold">Fasilitas</h2>
            <ul>
                <li>Kamar berukuran</li>
                <li>kamar mandi</li>
                <li>Coffee maker</li>
                <li>LED TV 32 inch</li>
                <li>AC</li>
            </ul>
        </div>
    </div>
</div>
@endsection