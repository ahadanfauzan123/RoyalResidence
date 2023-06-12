<div class="sticky top-0 z-50 w-screen h-[80px] flex items-center justify-center bg-blue-500 shadow-lg">
    <div class="w-full max-w-7xl mx-auto flex justify-between items-center text-white h-[70px] gap-x-8">
        {{-- logo --}}
        <a href="">
            <h1 class="text-green-300 text-2xl font-bold">Royal<span class="text-white">RESIDENCE</span></h1>            
        </a>
        @auth
        {{-- list --}}
        <div class="text-white flex-1 flex items-center gap-x-3">
            @can('user')
            <h1 class="font-semibold text-lg"><a href="/">Home</a></h1>
            <h1 class="font-semibold text-lg"><a href="/kamar">Kamar</a></h1>
            <h1 class="font-semibold text-lg"><a href="/fasilitas">Fasilitas</a></h1>
            @endcan
            @can('admin')
            <h1 class="font-semibold text-lg"><a href="/dashboard/admin">Manage Kamar</a></h1>
            <h1 class="font-semibold text-lg"><a href="/fasilitaskamar">Fasilitas Kamar</a></h1>
            <h1 class="font-semibold text-lg"><a href="/fasilitashotel">Fasilitas Hotel</a></h1>
            @endcan
            @can('resepsionis')
            <h1 class="font-semibold text-lg"><a href="/dashboard/resepsionis">Tamu</a></h1>
            <h1 class="font-semibold text-lg"><a href="/fasilitaskamar">Fasilitas Kamar</a></h1>
            <h1 class="font-semibold text-lg"><a href="/fasilitashotel">Fasilitas Hotel</a></h1>
            @endcan
        </div>
        {{-- button --}}
        <div>
            <form action="/logout" method="POST">
                @csrf
                <button class="w-[100px] py-2 rounded-full ring-2 ring-white text-white flex items-center justify-center">Sign Out</button>
            </form>
        </div>
        @endauth

    </div>
</div>