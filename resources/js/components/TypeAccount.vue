<!--
<script>
export default {
    name: "App",
    data() {
        return {
            selectAccount: true,
            div2: true,
            etapa01: true,
            link: "https://twitter.com/MindWisdomMoney/status/1676469802049699840/photo/1",
            selectedCard: null,
            showNewDiv: false,
        };
    },
    methods: {
        typeaccount(cardPosition) {
            this.selectAccount = false;
            this.selectedCard = cardPosition;
        },
        reset() {
            this.selectAccount = true;
            this.selectedCard = null;
            this.showNewDiv = false;
        },
        next() {
            this.selectAccount = false;
            this.div2 = false;
            this.etapa01 = false;
            this.showNewDiv = true;
        },
    },
};
</script>
<template>
    <div>
        <div
            v-show="selectAccount"
            class="flex items-center justify-center gap-5 h-alturamax sm:h-auto md:h-auto lg:h-alturamax xl:h-alturamax 2xl:h-alturamax pb-5 pt-5 flex-wrap"
        >
            <div
                @click="typeaccount(1)"
                class="h-96 w-64 rounded-xl flex items-end justify-center hover:cursor-pointer"
            >
                <img
                    class="h-full w-full object-cover rounded-xl"
                    src="/img/woman.jpg"
                    alt=""
                />
                <div class="absolute pb-5">
                    <h2
                        class="pr-5 pl-5 pt-2 pb-2 bg-white rounded-full shadow-lg"
                    >
                        Mulher
                    </h2>
                </div>
            </div>
            <div
                @click="typeaccount(2)"
                class="h-96 w-64 rounded-xl flex items-end justify-center hover:cursor-pointer"
            >
                <img
                    class="h-full w-full object-cover rounded-xl"
                    src="/img/man.jpg"
                    alt=""
                />
                <div class="absolute pb-5">
                    <h2
                        class="pr-5 pl-5 pt-2 pb-2 bg-white rounded-full shadow-lg"
                    >
                        Homem
                    </h2>
                </div>
            </div>
            <div
                @click="typeaccount(3)"
                class="h-96 w-64 rounded-xl flex items-end justify-center hover:cursor-pointer"
            >
                <img
                    class="h-full w-full object-cover rounded-xl"
                    src="/img/typewoman.jpg"
                    alt=""
                />
                <div class="absolute pb-5">
                    <h2
                        class="pr-5 pl-5 pt-2 pb-2 bg-white rounded-full shadow-lg"
                    >
                        Trans
                    </h2>
                </div>
            </div>
        </div>

        <div
            v-show="!selectAccount && div2"
            class="flex items-center flex-col justify-center gap-10 h-alturamax"
        >
            <div
                v-show="selectedCard === 1"
                @click="typeaccount(1)"
                class="h-96 w-64 bg-red-500 rounded-xl flex items-end justify-center"
            >
                <img
                    class="h-full w-full object-cover rounded-xl"
                    src="/img/woman.jpg"
                    alt=""
                />
                <div class="absolute pb-5">
                    <h2
                        class="pr-5 pl-5 pt-2 pb-2 bg-white rounded-full shadow-lg"
                    >
                        Mulher
                    </h2>
                </div>
            </div>
            <div
                v-show="selectedCard === 2"
                @click="typeaccount(2)"
                class="h-96 w-64 bg-white rounded-xl flex items-end justify-center"
            >
                <img
                    class="h-full w-full object-cover rounded-xl"
                    src="/img/man.jpg"
                    alt=""
                />
                <div class="absolute pb-5">
                    <h2
                        class="pr-5 pl-5 pt-2 pb-2 bg-white rounded-full shadow-lg"
                    >
                        Homem
                    </h2>
                </div>
            </div>
            <div
                v-show="selectedCard === 3"
                @click="typeaccount(3)"
                class="h-96 w-64 bg-black rounded-xl flex items-end justify-center"
            >
                <img
                    class="h-full w-full object-cover rounded-xl"
                    src="/img/typewoman.jpg"
                    alt=""
                />
                <div class="absolute pb-5">
                    <h2
                        class="pr-5 pl-5 pt-2 pb-2 bg-white rounded-full shadow-lg"
                    >
                        Trans
                    </h2>
                </div>
            </div>
            <div
                class="flex flex-col items-center"
                v-show="selectedCard !== null"
            >
                <h2 class="text-2xl pb-5 font-semibold text-white">
                    Deseja Continuar?
                </h2>
                <div class="flex items-center gap-5">
                    <button
                        class="bg-red-600 font-semibold text-white pr-5 pl-5 pt-1.5 pb-1.5 rounded-sm text-lg flex items-center gap-2.5"
                        @click="reset"
                    >
                        <i class="bi bi-x"></i>
                        Voltar
                    </button>
                    <button
                        @click="next"
                        class="font-semibold text-white text-lg pr-5 pl-5 pt-1.5 pb-1.5 bg-blue-500 rounded-sm"
                    >
                        Continuar
                    </button>
                </div>
            </div>
        </div>

        <div
            v-show="showNewDiv"
            class="flex items-center justify-center h-alturamax"
        >
            <div
                v-if="selectedCard == 1"
                class="h-96 w-3/5 bg-red-500 rounded-xl"
            >
                <h1>Cliente</h1>
            </div>
            <div
                v-if="selectedCard == 2"
                class="h-96 w-3/5 bg-white rounded-xl p-5"
            >
                <h1>Acomp</h1>
            </div>
        </div>
    </div>
</template>
-->
