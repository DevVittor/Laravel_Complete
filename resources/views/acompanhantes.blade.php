@extends('layouts.main')
@section('title','ABRIME - Acompanhantes')

@section('content')

    <main class="font-inter bg-fundoBlack">
        <section>
            <div class="h-bannerxl flex justify-center items-center">
                <img class="h-full w-full object-cover" src="https://images.pexels.com/photos/230986/pexels-photo-230986.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="">
            </div>
        </section>
        <section>
            <div class="flex items-center justify-between pt-5 pb-5 pr-10 pl-10 bg-white">
                <div class="flex flex-col gap-2">
                    <h2 class="text-black text-2xl font-semibold">Buscando por: {{$search}}</h2>
                    <span class="text-black text-lg font-light">Resultados: {{count($profile)}}</span>
                </div>
                <div class="flex justify-center items-center flex-col h-auto pb-5 gap-5">
                    <div class="">
                        <ul class="flex items-center gap-5">
                            <li class="pr-5 pl-5 pt-2 pb-2 bg-black text-white font-semibold"><a href="#">Woman</a></li>
                            <li><a href="#">Man</a></li>
                            <li><a href="#">Trans</a></li>
                        </ul>
                    </div>
                    <div class="">
                        <form action="/acompanhantes" method="GET">
                            <input class="focus:outline-none focus:border-none focus:border-0 outline-none h-10 border-gray-200 focus:border-red-500 border-t-2 border-b-2 border-l-2 border-r-0 pr-2.5 pl-2.5 text-base font-normal" type="search" name="search" id=""><input class="hover:cursor-pointer  h-10 border-gray-200 border-t-2 border-b-2 border-l-0 border-r-2 pr-2.5 pl-2.5 text-base font-normal" type="submit" value="Buscar">
                        </form>
                    </div>
                </div>
                <div class="">
                    <h2 class="text-black font-bold text-xl"><i class="bi bi-filter pr-2"></i>Filtrar</h2>
                </div>
            </div>
        </section>
        <section>
            <div class="w-full m-auto columns-1 gap-3 2xl:columns-6 p-3 xl:columns-5 md:columns-4 sm:columns-3">
                @foreach($profile as $items)
                <a href="/events/{{$items->user_id}}">
                    <div class="mb-2.5 w-full break-inside-avoid">
                        <img class="max-w-full rounded-xl" src="/img/profileImg/{{$items->imageProfile}}" alt="">
                    </div>
                </a>
                @endforeach
            </div>
        </section>
    </main>

@endsection
