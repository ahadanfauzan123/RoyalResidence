@extends('layout.master')

@section('title')
    home
@endsection

@section('content')
<div class="w-full max-w-6xl mx-auto flex flex-col gap-y-5">
    {{-- title --}}
    <div class="w-full flex justify-between items-center">
        <h1 class="text-green-300 text-[3.2rem] font-bold">Royal<span class="text-white">RESIDENCE</span></h1> 
        <h2 class="text-gray-200 text-3xl font-semibold">Resepsionis</h2>          
    </div>
    {{-- form --}}
    <div>

    </div>
    {{-- table --}}
    <div class="card w-[80%]">
        <table class="w-full border-2 border-gray-300">
            <thead class="">
                <th>Nama Tamu</th>
                <th>Tanggal Check In</th>
                <th>Tanggal Check Out</th>
                <th>Aksi</th>
            </thead>
            <tbody class="text-center">
                @foreach ($data as $d)
                    <tr>
                        <td>{{ $d->visitorname }}</td>
                        <td>{{ $d->checkin }}</td>
                        <td>{{ $d->checkout }}</td>
                        <td>check in</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
    
@endsection