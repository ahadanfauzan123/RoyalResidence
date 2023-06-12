@extends('layout.master')

@section('title')
    home
@endsection

@section('content')    
<div class="w-full max-w-7xl min-h-screen mx-auto flex flex-col gap-y-6">
    {{-- title --}}
<div>
    <h1 class="text-green-300 text-[3.2rem] font-bold">Royal<span class="text-white">RESIDENCE</span></h1>            
</div>
    @include('layout.header')
    @if (session()->has('berhasil'))
    <h2 class="font-semibold text-white text-green-400 text-lg text-center">{{ session('berhasil') }}</h2>
    @endif
    {{-- form --}}
    <form action="/booking" method="GET" class="mb-8">
        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
        {{-- show --}}
        <div class="flex items-center justify-center gap-x-3 text-white">
            <div class="flex flex-col gap-y-2">
                <label for="checkIn">Tanggal Check In</label>
                <input type="date" name="checkin" id="checkIn" class="w-[200px] h-[60px] px-5 rounded-xl ring-0 focus:ring-0 border-0 focus:border-0 text-green-400">
            </div>
            <div class="flex flex-col gap-y-2">
                <label for="checkOut">Tanggal Check Out</label>
                <input type="date" name="checkout" id="checkOut" class="w-[200px] h-[60px] px-5 rounded-xl ring-0 focus:ring-0 border-0 text-red-400">
            </div>
            <div class="flex flex-col gap-y-2">
                <label for="jumlahKamar">Jumlah Kamar</label>
                <input type="number" name="jumlahkamar" id="jumlahKamar" class="w-[100px] h-[60px] px-5 rounded-xl ring-0 focus:ring-0 border-0 text-black">
            </div>
            <div onclick="pesan()" class="cursor-pointer flex justify-center items-center h-[60px] rounded-full w-[120px] -mb-6 p-1 bg-green-400 text-lg ring-2 ring-white">Pesan</div>
        </div>
        {{-- book to show --}}
        <div id="show" class="flex flex-col gap-y-5 mt-5">
            {{-- title --}}
            <div class="w-[70%] mx-auto">
                <h1 class="text-white text-[1.9rem] font-bold">Form Pemesanan</h1>            
            </div>
            {{-- card --}}
            <div class="card gap-y-3">
                <div class="w-full flex justify-between items-center">
                    <label for="name">Nama Pemesan</label>
                    <input type="text" name="name" id="name" value="{{ auth()->user()->name }}" class="w-[220px] lg:w-[300px] h-[50px] text-lg border-2 border-gray-600 rounded-lg">
                </div>
                <div class="w-full flex justify-between items-center">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" value="{{ auth()->user()->email }}" class="w-[220px] lg:w-[300px] h-[50px] text-lg border-2 border-gray-600 rounded-lg">
                </div>
                <div class="w-full flex justify-between items-center">
                    <label for="notlp">No Handphone</label>
                    <input type="text" name="notlp" id="notlp" class="w-[220px] lg:w-[300px] h-[50px] text-lg border-2 border-gray-600 rounded-lg">
                </div>
                <div class="w-full flex justify-between items-center">
                    <label for="tamu">Nama tamu</label>
                    <input type="text" name="visitorname" id="tamu" class="w-[220px] lg:w-[300px] h-[50px] text-lg border-2 border-gray-600 rounded-lg">
                </div>
                <div class="w-full flex justify-between items-center">
                    <label for="tamu">Tipe Kamar</label>
                    <select name="type" id="" class="text-gray-600 w-[220px] lg:w-[300px] h-[50px] text-lg border-2 border-gray-600 rounded-lg">
                        <option value="superior">Superior</option>
                        <option value="deluxe">Deluxe</option>
                    </select>
                </div>
            </div>
            {{-- submit --}}
            <div class="relative w-[70%] mx-auto mt-3 flex space-x-3">
                <button type="submit" class="absolute right-0 text-white h-[60px] rounded-full w-[250px] -mb-6 p-1 bg-green-400 text-lg ring-2 ring-white">
                    Konfirmasi Pemesanan
                </button> 
            </div>
        </div>

    </form>
</div>
<script>
    const card = document.getElementById('show');
    card.style.display = 'none'
    function pesan() {
        card.style.display='block'
    }
    function hid() {
        card.style.display='none';
    }
</script>
@endsection