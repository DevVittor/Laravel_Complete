@extends('layouts.main')

@section('title','Criar Perfil')

@section('content')


    @foreach($ids as $event)
    <h1 class="text-white">{{ $event->id }}</h1>
    @if($user_id == $event->id)
    <h1 class="text-white">O usuario logado tem um perfil criado</h1>
    @else
    <h1 class="text-white">O usuario logado não tem um perfil criado </h1>
    <a class="text-white" href="/events/create">Criar Perfil</a>
    @endif
    @endforeach

    <main class="font-inter bg-gray"> 
        <section>
            <form action="/events" method="post" enctype="multipart/form-data">
            @csrf
            <div class="flex flex-col  justify-center items-center gap-8 h-auto w-full p-8">

                <div class="h-auto w-3/5 p-8 bg-white rounded-lg flex flex-col gap-8 hover:shadow-card hover:transition-all hover:delay-150">
                    <div class="flex items-center justify-between">
                        <div class="">
                            <h2 class="font-semibold text-xl hover:underline">Crie seu Perfil</h2>
                        </div>
                        <div class="">
                            <i class="bi bi-caret-up-fill text-2xl hover:cursor-pointer"></i>
                        </div>
                    </div>
                        <div class="flex items-center w-full justify-between flex-col gap-5">
                            <div class="flex justify-center items-center h-96 w-3/5 flex-col gap-3">
                                <div class="flex justify-center items-center  h-full w-full">
                                    <label class="border-4 border-gray-200 border-dashed flex justify-center items-center text-2xl font-extrabold hover:border-blue-500 delay-150 transition-all hover:cursor-pointer h-full w-full " for="inputImage"><span>Carregar Imagem</span></label>
                                    <input class="hidden" type="file" accept="image/jpg,image/jpeg,image/png" name="imageProfile" id="inputImage">
                                    <img class="h-full w-full object-contain hidden" src="" alt="">
                                </div> 
                                <span>Foto em jpg até 2mb</span>
                            </div>
                            <div class="flex flex-col w-full gap-3">
                                <h4 class="">Sobre Mim</h4>
                                <textarea class="resize-none border-2 p-5 border-gray-200 max-h-72 outline-none text-black font-medium text-base rounded-lg" name="description" id="" cols="70" rows="10"></textarea>
                            </div>
                        </div>

                        <div class="flex justify-between items-center pt-10 w-full">
                            <div class="flex flex-col gap-3 w-1/5">
                                <label for="">Nome Completo</label>
                                <input class="rounded-full pl-3.5 pr-3.5 pt-1.5 border-2 focus:border-gray-400 focus:outline-2 border-gray-100 pb-1.5 outline-none" type="text" name="nome" id="" minlength="1" maxlength="25"> 
                            </div> 
                            <div class="flex flex-col gap-3 w-1/5">
                                <label for="">Preço/H</label>
                                <input class="rounded-full pl-3.5 pr-3.5 pt-1.5 border-2 focus:border-gray-400 focus:outline-2 border-gray-100 pb-1.5 outline-none" type="text" name="" id=""> 
                            </div>
                            <div class="flex flex-col gap-3 w-1/5">
                                <label for="">Moedas Aceitas</label>
                                <select name=" moedas" id="">
                                    <option value="" selected disabled>Escolha</option>
                                    <option value="Real">Real</option>
                                    <option value="Dolar">Dolar</option>
                                    <option value="Euro">Euro</option>
                                    <option value="Libra">Libra</option>
                                    <option value="Yene">Yene</option>
                                    <option value="Bitcoin">Bitcoin</option>
                                    <option value="Peso">Peso</option>
                                </select> 
                            </div>
                            <div class="flex flex-col gap-3 w-1/5">
                                <label for="">Formas de Pagamento</label>
                                <select name="formas_pagamento" id="">
                                    <option value="" selected disabled>Escolha</option>
                                    <option value="Pix">Pix</option>
                                    <option value="Dinheiro">Dinheiro</option>
                                    <option value="Credito">Credito</option>
                                    <option value="Débito">Débito</option>
                                    <option value="Transf_bancaria">Transferência Bancária</option>
                                    <option value="TED">TED</option>
                                </select>
                            </div>
                            
                        </div>
                        <div class="flex justify-between items-center pt-5 w-full">
                            
                            <div class="flex flex-col gap-3 w-1/5">
                                <label for="">Categoria</label>
                                <select name="categoria" id="">
                                    <option value="" selected disabled>Escolha</option>
                                    <option value="Heterosexual">Acompanhante</option>
                                    <option value="Heterosexual">Modelos</option>
                                    <option value="Heterosexual">Massagista Sexual</option>
                                    <option value="Heterosexual">Cam Girl</option>
                                    <option value="Heterosexual">Packs</option>
                                </select>
                            </div>
                            <div class="flex flex-col gap-3 w-1/5">
                                <label for="">E-mail</label>
                                <input class="rounded-full pl-3.5 pr-3.5 pt-1.5 border-2 focus:border-gray-400 focus:outline-2 border-gray-100 pb-1.5 outline-none" type="text" name="" id=""> 
                            </div>
                            <div class="flex flex-col gap-3 w-1/5">
                                <label for="">Celular/Whatsapp</label>
                                <input class="rounded-full pl-3.5 pr-3.5 pt-1.5 border-2 focus:border-gray-400 focus:outline-2 border-gray-100 pb-1.5 outline-none" type="text" name="" id=""> 
                            </div>
                            <div class="flex flex-col gap-3 w-1/5">
                                <label for="">Estado/Cidade</label>
                                <input class="rounded-full pl-3.5 pr-3.5 pt-1.5 border-2 focus:border-gray-400 focus:outline-2 border-gray-100 pb-1.5 outline-none" type="text" name="Estado" id=""> 
                            </div>
                        </div>
                </div>

                <div class=" h-auto w-3/5 p-8 bg-white rounded-lg flex flex-col gap-8">
                    <div class="flex items-center justify-between">
                        <div class="">
                            <h2 class="font-semibold text-xl hover:underline">Corpo</h2>
                        </div>
                        <div class="">
                            <i class="bi bi-caret-up-fill text-2xl hover:cursor-pointer"></i>
                        </div>
                    </div>
                    <div class="flex justify-between items-center w-full gap-3">
                        <div class="flex flex-col w-1/5 gap-3">
                            <label for="">Etinia</label>
                            <select name="Etinia" id="">
                                <option value="" selected disabled>Escolha</option>
                                <option value="Heterosexual">Heterosexual</option>
                                <option value="Heterosexual">Heterosexual</option>
                                <option value="Heterosexual">Heterosexual</option>
                                <option value="Heterosexual">Heterosexual</option>
                                <option value="Heterosexual">Heterosexual</option>
                            </select>
                        </div>
                        <div class="flex flex-col w-1/5 gap-3">
                            <label for="">Estilo do Corpo</label>
                            <select name="estilo_corpo" id="">
                                <option value="" selected disabled>Escolha</option>
                                <option value="">Magra</option>
                                <option value="">Normal</option>
                                <option value="">Corpão</option>
                                <option value="">Sarada</option>
                                <option value="">Musculosa</option>
                                <option value="">Gordinha</option>
                                <option value="">Gorda</option>
                            </select>
                        </div>
                        <div class="flex flex-col w-1/5 gap-3">
                            <label for="">Altura</label>
                            <input class="rounded-full pl-3.5 pr-3.5 pt-1.5 border-2 focus:border-gray-400 focus:outline-2 border-gray-100 pb-1.5 outline-none" type="text" name="" id="">
                        </div>
                        <div class="flex flex-col w-1/5 gap-3">
                            <label for="">Peso</label>
                            <input class="rounded-full pl-3.5 pr-3.5 pt-1.5 border-2 focus:border-gray-400 focus:outline-2 border-gray-100 pb-1.5 outline-none" type="text" name="" id="">
                        </div>
                    </div>
                    <div class="flex justify-between items-center w-full gap-3">
                        <div class="flex flex-col w-1/5 gap-3">
                            <label for="">Deficiência</label>
                            <select name="Deficiencia" id="">
                                <option value="" selected disabled>Escolha</option>
                                <option value="Heterosexual">Nenhuma</option>
                                <option value="Heterosexual">Visual</option>
                                <option value="Heterosexual">Física</option>
                                <option value="Heterosexual">Mental</option>
                            </select>
                        </div>
                        <div class="flex flex-col w-1/5 gap-3">
                            <label for="">Gênero</label>
                            <select name="Genero" id="">
                                <option value="" selected disabled>Escolha</option>
                                <option value="Heterosexual">Mulher</option>
                                <option value="Heterosexual">Homem</option>
                                <option value="Heterosexual">Transgênero</option>
                            </select>
                        </div>
                        <div class="flex flex-col w-1/5 gap-3">
                            <label for="">Sexualidade</label>
                            <select name="sexualidade" id="">
                                <option value="" selected disabled>Escolha</option>
                                <option value="Heterosexual">Hétero</option>
                                <option value="Heterosexual">Homosexual</option>
                                <option value="Heterosexual">Bissexual</option>
                            </select>
                        </div>
                        <div class="flex flex-col w-1/5 gap-3">
                            <label for="">Data de nascimento</label>
                            <input class="rounded-full pl-3.5 pr-3.5 pt-1.5 border-2 focus:border-gray-400 focus:outline-2 border-gray-100 pb-1.5 outline-none" type="date" name="" id="">
                        </div>
                    </div>
                    <div class="flex justify-between items-center w-full gap-3">
                        <div class="flex flex-col w-1/5 gap-3">
                            <label for="">Cicatriz</label>
                            <select name="cicatriz" id="">
                                <option value="" selected disabled>Escolha</option>
                                <option value="0">Não</option>
                                <option value="1">Sim</option>
                            </select>
                        </div>
                        <div class="flex flex-col w-1/5 gap-3">
                            <label for="">Cor dos olhos</label>
                            <select name="cor_olhos" id="">
                                <option value="" selected disabled>Escolha</option>
                                <option value="Heterosexual">Preto</option>
                                <option value="Heterosexual">Castanho</option>
                                <option value="Heterosexual">Verde</option>
                                <option value="Heterosexual">Azul</option>
                                <option value="Heterosexual">Azul-esverdeado</option>
                                <option value="Avelã">Avelã (castanhos-esverdeados)</option>
                                <option value="Cinza">Cinza</option>
                                <option value="Heterocromia">Heterocromia</option>
                                <option value="Âmbar">Âmbar</option>
                                <option value="">Vermelho (albinismo)</option>
                            </select>
                        </div>
                        <div class="flex flex-col w-1/5 gap-3">
                            <label for="">Cor do cabelo</label>
                            <select name="cor_cabelo" id="">
                                <option value=""selected disabled>Escolha</option>
                                <option value="">Castanho</option>
                                <option value="">Preto</option>
                                <option value="">Louro</option>
                                <option value="">Branco</option>
                                <option value="">Crizalho</option>
                                <option value="">Vermelho</option>
                                <option value="">Outros</option>
                            </select>
                        </div>
                        <div class="flex flex-col w-1/5 gap-3">
                            <label for="">Estilo do cabelo</label>
                            <select name="estilo_cabelo" id="">
                                <option value=""selected disabled>Escolha</option>
                                <option value="">liso</option>
                                <option value="">ondulado</option>
                                <option value="">cacheado</option>
                                <option value="">crespo</option>
                                <option value="">afro</option>
                                <option value="">curto</option>
                                <option value="">médio</option>
                                <option value="">longo</option>
                                <option value="">repicado</option>
                                <option value="">com camadas</option>
                                <option value="">com franja</option>
                                <option value="">com mechas</option>
                                <option value="">colorido</option>
                                <option value="">trançado</option>
                                <option value="">Careca</option>
                                <option value="">com coque</option>
                                <option value="">com rabo de cavalo</option>
                                <option value="">com topete</option>
                                <option value="">com dreadlocks</option>
                                <option value="">com tranças africanas</option>
                                <option value="">com beach waves (ondas de praia)</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class=" h-auto w-3/5 p-8 bg-white rounded-lg flex flex-col gap-8">
                    <div class="flex items-center justify-between">
                        <div class="">
                            <h2 class="font-semibold text-xl hover:underline">Atributos</h2>
                        </div>
                        <div class="">
                            <i class="bi bi-caret-up-fill text-2xl hover:cursor-pointer"></i>
                        </div>
                    </div>
                    <div class="flex justify-between items-center w-full gap-3">
                        <div class="flex flex-col w-1/5 gap-3">
                            <label for="">Tatuagens</label>
                            <select name="tatuagem" id="">
                                <option value="" selected disabled>Escolha</option>
                                <option value="1">Sim</option>
                                <option value="0">Não</option>
                            </select>
                            
                        </div>
                        <div class="flex flex-col w-1/5 gap-3">
                            <label for="">Piercing</label>
                            <select name="piercing" id="">
                                <option value="" selected disabled>Escolha</option>
                                <option value="1">Sim</option>
                                <option value="0">Não</option>
                            </select>
                        </div>
                        <div class="flex flex-col w-1/5 gap-3">
                            <label for="">Ôculos</label>
                            <select name="Ôculos" id="">
                                <option value="" selected disabled>Escolha</option>
                                <option value="1">Sim</option>
                                <option value="0">Não</option>
                            </select>
                        </div>
                        <div class="flex flex-col w-1/5 gap-3">
                            <label for="">Silicone</label>
                            <select name="piercing" id="">
                                <option value="" selected disabled>Escolha</option>
                                <option value="">Não Tenho</option>
                                <option value="">Peito</option>
                                <option value="">Bunda</option>
                                <option value="">Peito e Bunda</option>
                            </select>
                        </div>
                    </div>
                    <div class="flex justify-between items-center w-full gap-3">
                        <div class="flex flex-col w-1/5 gap-3">
                            <label for="">Tamanho dos peitos</label><!--Vai ter todas as opções apenas no peito apenas na bunda peito e bunda -->
                            <input class="rounded-full pl-3.5 pr-3.5 pt-1.5 border-2 focus:border-gray-400 focus:outline-2 border-gray-100 pb-1.5 outline-none" type="text" name="" id="">
                        </div>
                        <div class="flex flex-col w-1/5 gap-3">
                            <label for="">Estilo do peito</label><!--Gigante,Grande,Médio,Pequeno,Nenhum-->
                            <input class="w-auto rounded-full pl-3.5 pr-3.5 pt-1.5 border-2 focus:border-gray-400 focus:outline-2 border-gray-100 pb-1.5 outline-none" type="text" name="" id="">
                        </div>
                        <div class="flex flex-col w-1/5 gap-3">
                            <label for="">Tamanho da bunda</label><!--Empinados,Moles,Naturais,Nenhum-->
                            <input class="rounded-full pl-3.5 pr-3.5 pt-1.5 border-2 focus:border-gray-400 focus:outline-2 border-gray-100 pb-1.5 outline-none" type="text" name="" id="">
                        </div>
                        <div class="flex flex-col w-1/5 gap-3">
                            <label for="">Estilo da bunda</label><!--Gigante,Grande,Média,Normal,Pequena-->
                            <input class="rounded-full pl-3.5 pr-3.5 pt-1.5 border-2 focus:border-gray-400 focus:outline-2 border-gray-100 pb-1.5 outline-none" type="text" name="" id="">
                        </div>
                    </div>
                    <div class="flex justify-between items-center w-full gap-3">
                        <div class="flex flex-col w-1/5 gap-3">
                            <label for="">Fumante</label>
                            <select name="fumante" id="">
                                <option value="" selected disabled>Escolha</option>
                                <option value="1">Sim</option>
                                <option value="0">Não</option>
                            </select>
                        </div>
                        <div class="flex flex-col w-1/5 gap-3">
                            <label for="">Viagem</label><!--Disponível,Ausente,Depende-->
                            <select name="viagem" id="">
                                <option value="" selected disabled>Escolha</option>
                                <option value="1">Sim</option>
                                <option value="0">Não</option>
                            </select>
                        </div>
                        <div class="flex flex-col w-1/5 gap-3">
                            <label for="">Tirar Foto</label>
                            <select name="tirar_foto" id="">
                                <option value="" selected disabled>Escolha</option>
                                <option value="1">Sim</option>
                                <option value="0">Não</option>
                            </select>
                        </div>
                        <div class="flex flex-col w-1/5 gap-3">
                            <label for="">Gravar Vídeo</label>
                            <select name="gravar_video" id="">
                                <option value="" selected disabled>Escolha</option>
                                <option value="1">Sim</option>
                                <option value="0">Não</option>
                            </select>
                        </div>
                    </div>
                </div>



                <div class="bg-white h-96 w-3/5 p-8 rounded-lg">
                    <div class="flex justify-center hover:cursor-pointer items-center h-full w-full border-8 border-dashed border-gray-200 ">
                        <h2 class="flex flex-col justify-center items-center gap-3 text-3xl font-extrabold text-gray-500"><i class="bi bi-cloud-arrow-up-fill text-blue-400"></i>Upload Vídeo</h2>
                    </div>
                </div>



                <div class="bg-white h-auto w-3/5 p-8 rounded-lg flex flex-col gap-8">
                    <div class="">
                        <div class="flex items-center justify-between">
                            <div class="">
                                <h2 class="font-semibold text-xl hover:underline">Horários de Atendimento</h2>
                            </div>
                            <div class="">
                                <i class="bi bi-caret-up-fill text-2xl hover:cursor-pointer"></i>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center justify-between h-full w-full bg-white">
                        <div class="flex flex-col w-1/5 gap-3">
                            <label for="">Domingo</label><!--Vai ter todas as opções apenas no peito apenas na bunda peito e bunda -->
                            <input class="rounded-full pl-3.5 pr-3.5 pt-1.5 border-2 focus:border-gray-400 focus:outline-2 border-gray-100 pb-1.5 outline-none" type="text" name="" id="">
                        </div>
                        <div class="flex flex-col w-1/5 gap-3">
                            <label for="">Segunda-Feira</label><!--Gigante,Grande,Médio,Pequeno,Nenhum-->
                            <input class="w-auto rounded-full pl-3.5 pr-3.5 pt-1.5 border-2 focus:border-gray-400 focus:outline-2 border-gray-100 pb-1.5 outline-none" type="text" name="" id="">
                        </div>
                        <div class="flex flex-col w-1/5 gap-3">
                            <label for="">Terça-Feira</label><!--Empinados,Moles,Naturais,Nenhum-->
                            <input class="rounded-full pl-3.5 pr-3.5 pt-1.5 border-2 focus:border-gray-400 focus:outline-2 border-gray-100 pb-1.5 outline-none" type="text" name="" id="">
                        </div>
                        <div class="flex flex-col w-1/5 gap-3">
                            <label for="">Quarta-Feira</label><!--Gigante,Grande,Média,Normal,Pequena-->
                            <input class="rounded-full pl-3.5 pr-3.5 pt-1.5 border-2 focus:border-gray-400 focus:outline-2 border-gray-100 pb-1.5 outline-none" type="text" name="" id="">
                        </div>
                    </div>
                    <div class="flex items-center justify-between h-full w-full bg-white">
                        <div class="flex flex-col w-1/5 gap-3">
                            <label for="">Quinta-Feira</label><!--Vai ter todas as opções apenas no peito apenas na bunda peito e bunda -->
                            <input class="rounded-full pl-3.5 pr-3.5 pt-1.5 border-2 focus:border-gray-400 focus:outline-2 border-gray-100 pb-1.5 outline-none" type="text" name="" id="">
                        </div>
                        <div class="flex flex-col w-1/5 gap-3">
                            <label for="">Sexta-Feira</label><!--Gigante,Grande,Médio,Pequeno,Nenhum-->
                            <input class="w-auto rounded-full pl-3.5 pr-3.5 pt-1.5 border-2 focus:border-gray-400 focus:outline-2 border-gray-100 pb-1.5 outline-none" type="text" name="" id="">
                        </div>
                        <div class="flex flex-col w-1/5 gap-3">
                            <label for="">Sábado</label><!--Empinados,Moles,Naturais,Nenhum-->
                            <input class="rounded-full pl-3.5 pr-3.5 pt-1.5 border-2 focus:border-gray-400 focus:outline-2 border-gray-100 pb-1.5 outline-none" type="text" name="" id="">
                        </div>
                        <div class="flex flex-col w-1/5 gap-3">
                            <label for="">Feriados</label><!--Gigante,Grande,Média,Normal,Pequena-->
                            <input class="rounded-full pl-3.5 pr-3.5 pt-1.5 border-2 focus:border-gray-400 focus:outline-2 border-gray-100 pb-1.5 outline-none" type="text" name="" id="">
                        </div>
                    </div>
                </div>


                <!--Serviços-->
                <div class="bg-red-500 h-96 w-3/5 p-8 rounded-lg"></div>

                <!--Local de Encontro-->
                <div class="bg-red-500 h-96 w-3/5 p-8 rounded-lg"></div>

                <!--Rede Social-->
                <div class="bg-red-500 h-96 w-3/5 p-8 rounded-lg"></div>

                <div class="">
                    <input class="bg-blue-500 text-white pt-3 pb-3 pr-5 pl-5 rounded-sm text-lg font-semibold hover:cursor-pointer" type="submit" value="Publicar Perfil">
                </div>

            </div>
        </section>
    </form>
    </main>
    <script>
    let inputImg = document.getElementById('inputImage');
    inputImg.addEventListener("change", (e, limite = 2048) => {
    let file = inputImg.files[0];
        if (file.size > limite ) {
            console.log(`Upload Completo!`);
        } else {
            console.log(`Só é permitido imagem com mais de 2Mb de tamanho e a sua imagem tem ${file.size}`);
        };
    });

    </script>
@endsection