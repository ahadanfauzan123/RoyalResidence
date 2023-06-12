@extends('layout.master')

@section('title')
    home
@endsection

@section('content')
<div class="w-full max-w-6xl mx-auto flex flex-col gap-y-5">
    {{-- title --}}
    <div class="w-full flex justify-between items-center">
        <h1 class="text-green-300 text-[3.2rem] font-bold">Royal<span class="text-white">RESIDENCE</span></h1> 
        <h2 class="text-gray-200 text-3xl font-semibold">Admin</h2>          
    </div>
    {{-- form --}}
    <div>

    </div>
    {{-- table --}}
    <div class="card w-[80%]">
        <table class="w-full border-2 border-gray-300">
            <thead class="">
                <th>Tipe Kamar</th>
                <th>Jumlah Kamar</th>
                <th>aksi</th>
            </thead>
            <tbody class="text-center">
                @foreach ($data as $d)
                <tr>
                    <td>{{ $d->name }}</td>
                    <td>{{ $d->value }}</td>
                    <td>Ubah | Lihat</td>
                </tr>
                    
                @endforeach
            </tbody>
        </table>
    </div>
</div>
    
@endsection