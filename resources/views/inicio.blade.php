@extends('layouts.main')
@section('title','ABRIME - Início')

@section('content')
    
    <main class="font-inter bg-black">
        <section>
            <App/>
        </section>
        <section>
            <div class="grid-banner">
                <div class="container-banner">
                    <div class="box-banner"></div>
                </div>
            </div>
        </section>
        <section>
            <div class="container-parceiros">
                <div class="card-parceiros"></div>
                <div class="card-parceiros"></div>
                <div class="card-parceiros"></div>
                <div class="card-parceiros"></div>
                <div class="card-parceiros"></div>
                <div class="card-parceiros"></div>
                <div class="card-parceiros"></div>
            </div>
        </section>
        <section class="section-sobre">
            <div class="container-sobre">
                <div class="box-img-sobre"></div>
                <div class="box-text-sobre">
                    <div class="card-sobre"></div>
                    <div class="card-sobre"></div>
                </div>
            </div>
        </section>
        <section>
            <div class="flex justify-center items-center w-full p-5 ">
                <div class="w-4/5 bg-white h-96"></div>
            </div>
        </section>
        <section class="section-sobre">
            <div class="container-sobre">
                <div class="box-text-sobre">
                    <div class="card-sobre"></div>
                    <div class="card-sobre"></div>
                </div>
                <div class="box-img-sobre"></div>
            </div>
        </section>
        <section>
            <div class="flex justify-center items-center w-full p-5 ">
                <div class="flex items-center gap-3 w-4/5 bg-white h-96">
                    <div class="bg-red-500 h-full w-1/2"></div>
                    <div class="bg-red-500 h-full w-1/2"></div>
                </div>
            </div>
        </section>
        <section>
            <div class="h-auto w-full flex justify-center p-5 gap-5">
                <div class=" h-96 w-full bg-white rounded-lg"></div>
                <div class="h-96 w-full bg-white rounded-lg"></div>
            </div>
        </section>
        <section class="p-5">
            <div class="bg-white rounded-lg h-32 w-full flex justify-center items-center">
                <div class="bg-blue-500 h-12 w-3/4"></div>
            </div>
        </section>
    </main>

@endsection
