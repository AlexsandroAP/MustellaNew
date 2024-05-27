<x-app-layout>
<div class="py-12 text-white mt-20 mb-20 min-h-screen md:min-h-full">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="mb-4 md:mb-0 mx-10 md:mx-20 md:text-4xl text-3xl md:flex md:w-1/3">
                <h1>Poste Seus Conteúdos</h1>
            </div>

            <div class="md:flex bg-high-purplle shadow-sm mx-10 md:mx-0 flex-col md:flex-row ">
                
                <!-- div da imagem do post do usuario -->
                <div class="flex justify-center items-center rounded-extra-lg md:flex bg-purplle p-20 md:mx-20 md:my-10 text-black md:w-1/3 md:mb-3 md:h-22rem h-20rem"></div>

                <div class="flex flex-col md:w-2/3 md:my-5rem mt-5">

                    <div class="overflow-auto">
                        <p class="text-2xl">Modelo TCP/IP e tipos de rede</p>
                        <p class="text-orange text-lg">#TI #redesdecomputadores</p>
                    </div>

                    <div>
                        <a href="{{route('enviarPost')}}">
                            <button class="bg-orange rounded-full px-8 py-2 mt-5 text-high-purplle">Postar
                            </button>
                        </a>
                    </div>
                
                </div>
            </div>
        </div>
    </div>
</x-app-layout>