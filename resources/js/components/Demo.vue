<script>
export default {
    name: "App",
    data() {
        return {
            check: "/img/check.png",
        };
    },
};
</script>
<template>
    <main>
        <section>
            <div
                class="flex 2xl:items-start w-full 2xl:justify-start 2xl:p-8 gap-5 2xl:flex-row p-5 bg-gray-800 flex-col justify-center items-center"
            >
                <div
                    class="2xl:h-64 h-96 w-auto flex justify-end items-start shadow-lg"
                >
                    <img
                        class="h-full w-full rounded-lg object-cover pointer-events-none"
                        src="https://images.pexels.com/photos/10182194/pexels-photo-10182194.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                        alt=""
                    />
                    <div class="absolute p-2">
                        <img class="w-8" :src="check" alt="" />
                    </div>
                </div>
                <div class="pt-2 flex flex-col gap-2">
                    <div class="">
                        <h2 class="text-2xl text-white font-semibold">
                            Jéssica Gomes, 29
                        </h2>
                    </div>
                    <div class="flex items-center gap-3 text-white">
                        <div class="">
                            <h4 class="text-md font-light">
                                <i
                                    class="fa-solid fa-location-dot pr-2 text-red-600"
                                ></i
                                >Rio de janeiro,Rj
                            </h4>
                        </div>
                        <div class="">
                            <span>|</span>
                        </div>
                        <div class="">
                            <h4 class="text-md font-light">Mulher</h4>
                        </div>
                    </div>
                    <div class="">
                        <p class="text-base font-light text-white">
                            Lorem ipsum dolor, sit amet consectetur adipisicing
                            elit. Sequi blanditiis amet voluptatum in fuga
                            accusantium similique, est exercitationem unde velit
                            quos laborum, ab rem natus aliquam ipsum placeat ex.
                            Itaque.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div
                class="flex items-center justify-center gap-3 pb-5 bg-gray-800"
            >
                <div class="">
                    <button
                        class="pt-2 pb-2 pl-5 pr-5 rounded-md bg-red-600 text-white font-medium text-base"
                    >
                        R$ 240/H
                    </button>
                </div>
                <div class="">
                    <button
                        class="pt-2 pb-2 pl-5 pr-5 rounded-md bg-white font-medium text-base"
                    >
                        <i class="fa-brands fa-whatsapp pr-2"></i>Conversar
                    </button>
                </div>
                <div class="">
                    <button
                        class="pt-2 pb-2 pl-5 pr-5 rounded-md bg-white font-medium text-base"
                    >
                        <i class="fa-solid fa-ellipsis-vertical pr-2"></i>
                        Detalhes
                    </button>
                </div>
            </div>
        </section>
        <section>
            <div
                class="w-full m-auto columns-1 gap-3 2xl:columns-6 p-3 xl:columns-5 md:columns-4 sm:columns-3"
            >
                <div class="mb-2.5 w-full break-inside-avoid">
                    <img
                        class="max-w-full rounded-xl"
                        src="https://images.pexels.com/photos/4672597/pexels-photo-4672597.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                        alt=""
                    />
                </div>

                <div class="mb-2.5 w-full break-inside-avoid">
                    <img
                        class="max-w-full rounded-xl"
                        src="https://images.pexels.com/photos/4672597/pexels-photo-4672597.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                        alt=""
                    />
                </div>
                <div class="mb-2.5 w-full break-inside-avoid">
                    <img
                        class="max-w-full rounded-xl"
                        src="https://images.pexels.com/photos/2752088/pexels-photo-2752088.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                        alt=""
                    />
                </div>
                <div class="mb-2.5 w-full break-inside-avoid">
                    <img
                        class="max-w-full rounded-xl"
                        src="https://images.pexels.com/photos/4672580/pexels-photo-4672580.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                        alt=""
                    />
                </div>
                <div class="mb-2.5 w-full break-inside-avoid">
                    <img
                        class="max-w-full rounded-xl"
                        src="https://images.pexels.com/photos/15378994/pexels-photo-15378994/free-photo-of-lindo-bonito-atraente-elegante.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                        alt=""
                    />
                </div>
                <div class="mb-2.5 w-full break-inside-avoid">
                    <img
                        class="max-w-full rounded-xl"
                        src="https://images.pexels.com/photos/2309344/pexels-photo-2309344.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                        alt=""
                    />
                </div>
                <div class="mb-2.5 w-full break-inside-avoid">
                    <img
                        class="max-w-full rounded-xl"
                        src="https://images.pexels.com/photos/6003752/pexels-photo-6003752.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                        alt=""
                    />
                </div>
                <div class="mb-2.5 w-full break-inside-avoid">
                    <img
                        class="max-w-full rounded-xl"
                        src="https://images.pexels.com/photos/4672597/pexels-photo-4672597.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                        alt=""
                    />
                </div>
                <div class="mb-2.5 w-full break-inside-avoid">
                    <img
                        class="max-w-full rounded-xl"
                        src="https://images.pexels.com/photos/4672597/pexels-photo-4672597.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                        alt=""
                    />
                </div>
                <div class="mb-2.5 w-full break-inside-avoid">
                    <img
                        class="max-w-full rounded-xl"
                        src="https://images.pexels.com/photos/4672597/pexels-photo-4672597.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                        alt=""
                    />
                </div>
                <div class="mb-2.5 w-full break-inside-avoid">
                    <img
                        class="max-w-full rounded-xl"
                        src="https://images.pexels.com/photos/4672597/pexels-photo-4672597.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                        alt=""
                    />
                </div>
                <div class="mb-2.5 w-full break-inside-avoid">
                    <img
                        class="max-w-full rounded-xl"
                        src="https://images.pexels.com/photos/4672597/pexels-photo-4672597.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                        alt=""
                    />
                </div>
                <div class="mb-2.5 w-full break-inside-avoid">
                    <img
                        class="max-w-full rounded-xl"
                        src="https://images.pexels.com/photos/4672597/pexels-photo-4672597.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                        alt=""
                    />
                </div>
            </div>
        </section>
    </main>
</template>
