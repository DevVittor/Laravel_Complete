@extends('layouts.main')
@foreach($dados as $nameProfile)
@section('title',$nameProfile->nome)
@endforeach

@section('content')

    <main class="font-inter bg-dark">
        <section>
            <div class="flex justify-center items-center h-auto md:p-0 lg:pt-10 lg:pb-10 2xl:pt-5 2xl:pb-5">
                <div class="flex items-center flex-col md:flex-col xl:flex-row 2xl:flex-row justify-between h-auto w-bannerPerfil md:rounded-none lg:rounded-xl 2xl:rounded-xl lg:p-5 2xl:p-10 pt-10 pb-10  gap-5 bg-divs ">
                    <div class="flex items-end justify-center h-64 w-64 rounded-full cursor-pointer">
                        @foreach($dados as $user)
                            <img class="h-full w-full object-cover rounded-full pointer-events-none" src="/img/profileImg/{{$user->imageProfile}}" alt="">
                        @endforeach
                        <div class="absolute ml-36 ">
                            <img class="pointer-events-none h-10 shadow-md" src="/img/check.png" alt="icon_verificada" title="Conta Verificada">
                        </div>
                    </div>
                    <div class="flex flex-col items-center lg:items-start 2xl:items-start md:items-center justify-start h-full w-3/5 text-white">
                        <div class="">
                            @foreach($dados as $user)
                                <h2 class="text-xl md:text-2xl 2xl:text-3xl text-white font-semibold capitalize">{{$user->nome  }}, 24</h2>
                            @endforeach
                        </div>
                        <div class="flex items-center gap-3 pt-2 text-gray-300">
                            @foreach($dados as $user)
                                <h4 class="font-medium text-sm">Homem</h4>
                                <span class="">|</span>
                                <h4 class="font-medium text-sm"><i class="bi bi-geo-alt-fill pr-2 text-red-600"></i>{{$user->Estado}}</h4>
                            @endforeach
                        </div>
                        <div class="pt-5 text-center md:text-center lg:text-left 2xl:text-left">
                            @foreach($dados as $user)
                                <p class="font-light text-base">{{$user->description}}</p>
                            @endforeach
                        </div>
                        <div class="w-full">
                            <nav>
                                <ul class="flex items-center justify-center md:justify-center  lg:justify-start 2xl:justify-start gap-3 pt-5 text-white text-xl hover:cursor-pointer">
                                    <li><a target="_blank" href="#"><i class="bi bi-facebook"></i></a></li>
                                    <li><a target="_blank" href="#"><i class="bi bi-instagram"></i></a></li>
                                    <li><a target="_blank" href="#"><i class="bi bi-twitter"></i></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="flex flex-row md:flex-row lg:flex-col 2xl:flex-col gap-5 items-center justify-center">
                        <div class=" w-full flex justify-center items-center bg-white rounded-full pr-10 pt-2 pb-2 pl-10">
                            <h2>Detalhes</h2>
                        </div>
                        <div class="w-full flex justify-center items-center bg-white rounded-full pr-10 pt-2 pb-2 pl-10">
                            <h2>Corpo</h2>
                        </div>
                        <div class="w-full flex justify-center items-center bg-white rounded-full pr-10 pt-2 pb-2 pl-10">
                            <h2>Menu</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="w-full flex justify-center items-center pb-5 md:bg-divs 2xl:bg-dark">
                <div class="w-2/5 flex flex-row md:flex-row text-white 2xl:flex-row gap-5 items-center justify-center">
                    <div class="border-2 border-white w-full hover:cursor-pointer flex justify-center items-center bg-divs rounded-sm pr-10 pt-2 pb-2 pl-10">
                        <h2 class="font-semibold text-lg">Fotos</h2>
                    </div>
                    <div class="border-2 border-white w-full hover:cursor-pointer flex justify-center items-center bg-divs rounded-sm pr-10 pt-2 pb-2 pl-10">
                        <h2 class="font-semibold text-lg">Vídeos</h2>
                    </div>
                    <div class="border-2 border-white w-full hover:cursor-pointer flex justify-center items-center bg-divs rounded-sm pr-10 pt-2 pb-2 pl-10">
                        <h2 class="font-semibold text-lg">Local</h2>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="w-full m-auto bg-divs md:bg-dark 2xl:bg-divs columns-1 gap-3 2xl:columns-6 p-3 xl:columns-5 md:columns-4 sm:columns-3 ">
                <div class="mb-2.5 w-full break-inside-avoid">
                    <img class="pointer-events-none max-w-full rounded-xl" src="https://images.pexels.com/photos/2085247/pexels-photo-2085247.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="">
                </div>
                <div class="mb-2.5 w-full break-inside-avoid">
                    <img class="pointer-events-none max-w-full rounded-xl" src="https://images.pexels.com/photos/3936894/pexels-photo-3936894.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="">
                </div>
                <div class="mb-2.5 w-full break-inside-avoid">
                    <img class="pointer-events-none max-w-full rounded-xl" src="https://images.pexels.com/photos/1999503/pexels-photo-1999503.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="">
                </div>
                <div class="mb-2.5 w-full break-inside-avoid">
                    <img class="pointer-events-none max-w-full rounded-xl" src="https://images.pexels.com/photos/2479146/pexels-photo-2479146.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="">
                </div>
                <div class="mb-2.5 w-full break-inside-avoid">
                    <img class="pointer-events-none max-w-full rounded-xl" src="https://images.pexels.com/photos/2467393/pexels-photo-2467393.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="">
                </div>
                <div class="mb-2.5 w-full break-inside-avoid">
                    <img class="pointer-events-none max-w-full rounded-xl" src="https://images.pexels.com/photos/3290405/pexels-photo-3290405.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="">
                </div>
                <div class="mb-2.5 w-full break-inside-avoid">
                    <img class="pointer-events-none max-w-full rounded-xl" src="https://images.pexels.com/photos/2946828/pexels-photo-2946828.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="">
                </div>
            </div>
        </section>
    </main>

@endsection