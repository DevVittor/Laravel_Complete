<script>
export default {
    name: "App",
    data() {
        return {
            btnNext: false,
            div01: true,
            div02: false,
            fotoPerfil: "/img/user.png",
        };
    },
    methods: {
        inputCheio(event) {
            this.btnNext = event.target.value.trim() !== "";
        },
        next() {
            this.div01 = false;
            this.div02 = true;
        },

        inputFoto(event) {
            const file = event.target.files[0];
            const reader = new FileReader();
            reader.onload = () => {
                this.fotoPerfil = reader.result;
            };
            reader.readAsDataURL(file);
        },
    },
};
</script>
<template>
    <section>
        <div class="h-alturamax flex justify-center items-center">
            <div
                v-show="div01"
                class="h-auto w-auto p-5 rounded-xl gap-5 flex flex-col justify-center items-center bg-white"
            >
                <div
                    class="border-2 border-gray-200 rounded-full h-64 w-64 flex justify-center items-center"
                >
                    <img
                        class="h-full w-full object-cover pointer-events-none rounded-full"
                        :src="fotoPerfil"
                        alt=""
                    />
                </div>
                <div class="">
                    <input
                        class="hidden"
                        type="file"
                        name=""
                        id="uploadImage"
                        @change="inputFoto"
                    />
                    <label
                        id="labelInputPhoto"
                        :class="{
                            'bg-azul': fotoPerfil !== '/img/user.png',
                            'bg-red-600': fotoPerfil === '/img/user.png',
                        }"
                        class="pr-5 pl-5 pt-2 pb-2 rounded-sm hover:cursor-pointer hover:shadow-xl text-white font-semibold text-base"
                        for="uploadImage"
                        ><i
                            class="bi bi-cloud-arrow-up-fill pr-2 text-white"
                        ></i
                        >Foto Perfil</label
                    >
                </div>
                <div class="">
                    <input
                        class="rounded-sm border-2 border-gray-100"
                        type="text"
                        name=""
                        id=""
                        placeholder="Digite seu nome"
                        @input="inputCheio"
                    />
                </div>
                <div class="" v-show="btnNext">
                    <button
                        @click="next"
                        class="bg-blue-500 outline-none rounded-sm pl-5 pr-5 pt-2 pb-2 font-semibold text-white text-lg"
                    >
                        Avançar
                    </button>
                </div>
            </div>
            <!--Etapa02-->
            <div class="flex justify-center items-center w-full" v-show="div02">
                <div class="bg-blue-500 h-96 w-3/5 rounded-xl">
                    <div class="">
                        <label for="">Data de nascimento</label>
                        <input type="date" name="" id="" />
                    </div>
                    <div class="">
                        <label for="">Estado</label>
                        <select name="estado" id="">
                            <option value="" selected disabled>Escolha</option>
                            <option value="Rio de Janeiro">
                                Rio de Janeiro
                            </option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>
