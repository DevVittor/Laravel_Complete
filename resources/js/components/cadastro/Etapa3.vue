<template>
    <section>
        <div class="bg-yellow-300 h-alturamax flex justify-center items-center">
            <div
                class="flex justify-center bg-white flex-col p-5 gap-3 max-w-xl w-auto flex-wrap h-auto shadow-md border-2 border-gray-100 p-5x 2xl:rounded-xl"
            >
                <div class="">
                    <h2 class="font-semibold text-2xl">Etapa 02</h2>
                </div>
                <div class="pb-5">
                    <h3 class="text-lg font-light">Detalhes Pessoais</h3>
                </div>
                <div class="">
                    <div class="flex items-center gap-3 flex-wrap">
                        <div class="flex flex-col">
                            <label for="data_de_nascimento"
                                >Data de Nascimento:</label
                            >
                            <input type="date" name="" id="" />
                        </div>
                        <div class="flex flex-col">
                            <label for="">Gênero:</label>
                            <select name="" id="">
                                <option value="" selected disabled>
                                    Escolha
                                </option>
                                <option value="">Mulher</option>
                                <option value="">Homem</option>
                                <option value="">Trans</option>
                            </select>
                        </div>
                        <div class="flex flex-col">
                            <label for="etnia">Etnia:</label>
                            <select id="etnia" name="etnia" required>
                                <option value="" selected disabled>
                                    Escolha
                                </option>
                                <option value="branca">Branca</option>
                                <option value="negra">Negra</option>
                                <option value="parda">Parda</option>
                                <option value="amarela">Amarela</option>
                                <option value="indigena">Indígena</option>
                                <option value="asiatica">Asiática</option>
                                <option value="mestiça">Mestiça</option>
                                <option value="outra">Outra</option>
                            </select>
                        </div>
                        <div class="flex flex-col">
                            <label for="">Whatsapp:</label>
                            <input
                                type="tel"
                                id="telefone"
                                name="telefone"
                                pattern="[0-9]{10}"
                                placeholder="(xx)xxxxx-xxxx"
                                required
                            />
                        </div>
                        <div class="flex flex-col">
                            <label for="altura">Altura:</label>
                            <select id="altura" name="altura" required>
                                <option value="" selected disabled>
                                    Escolha
                                </option>
                                <option value="menor-150">
                                    Abaixo de 150 cm
                                </option>
                                <option value="150-160">150-160 cm</option>
                                <option value="160-170">160-170 cm</option>
                                <option value="170-180">170-180 cm</option>
                                <option value="180-190">180-190 cm</option>
                                <option value="190-200">190-200 cm</option>
                                <option value="maior-2m">
                                    Acima de 200 cm
                                </option>
                            </select>
                        </div>
                        <div class="flex flex-col">
                            <label for="peso">Peso:</label>
                            <select id="peso" name="peso" required>
                                <option value="" selected disabled>
                                    Escolha
                                </option>
                                <option value="menor-50">
                                    Abaixo de 50 kg
                                </option>
                                <option value="50-60">50-60 kg</option>
                                <option value="60-70">60-70 kg</option>
                                <option value="70-80">70-80 kg</option>
                                <option value="80-90">80-90 kg</option>
                                <option value="90-100">90-100 kg</option>
                                <option value="maior-100">
                                    Acima de 100 kg
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class=""></div>
                </div>
                <div class="pt-5">
                    <button
                        class="bg-azul flex items-center pr-5 pl-5 pt-2 pb-2 text-white font-semibold text-base rounded-md"
                    >
                        Avançar
                        <i class="fa-regular fa-hand-point-right pl-2"></i>
                    </button>
                </div>
            </div>
        </div>
    </section>
</template>
