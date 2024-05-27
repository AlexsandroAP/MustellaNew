<x-app-layout>
    <div class="py-12 text-white mt-20 mb-20">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="mb-4 md:mb-0 mx-10 md:mx-20 md:text-4xl text-3xl md:flex md:w-1/3">
                <h1>Poste Seus Conteúdos</h1>
            </div>

            <div class="md:flex bg-high-purplle shadow-sm mx-10 md:mx-0 flex-col md:flex-row items-center">


                <div class="flex items-center justify-center w-full  rounded-extra-lg md:flex bg-purplle p-20 md:mx-20 md:my-10 text-black md:w-1/3 md:mb-3 aria-describedby=file_input_help">

                    <label for="dropzone-file" class="flex  bg-purplle flex-col items-center justify-center w-full h-48  rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                        <div class="flex flex-col items-center justify-center pt-5 pb-6">

                            <svg width="64px" height="64px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>plus-circle</title> <desc>Created with Sketch Beta.</desc> <defs> </defs> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage"> <g id="Icon-Set-Filled" sketch:type="MSLayerGroup" transform="translate(-466.000000, -1089.000000)" fill="#ffffff"> <path d="M488,1106 L483,1106 L483,1111 C483,1111.55 482.553,1112 482,1112 C481.447,1112 481,1111.55 481,1111 L481,1106 L476,1106 C475.447,1106 475,1105.55 475,1105 C475,1104.45 475.447,1104 476,1104 L481,1104 L481,1099 C481,1098.45 481.447,1098 482,1098 C482.553,1098 483,1098.45 483,1099 L483,1104 L488,1104 C488.553,1104 489,1104.45 489,1105 C489,1105.55 488.553,1106 488,1106 L488,1106 Z M482,1089 C473.163,1089 466,1096.16 466,1105 C466,1113.84 473.163,1121 482,1121 C490.837,1121 498,1113.84 498,1105 C498,1096.16 490.837,1089 482,1089 L482,1089 Z" id="plus-circle" sketch:type="MSShapeGroup"> </path> </g> </g> </g></svg>

                            <p class="mt-4 	text-center text-semibold text-sm text-gray uppercase">clique ou arraste sua imagem</p>

                        </div>

                        <input id="dropzone-file" type="file" class="hidden" />
                    </label>
                </div>



                <div class="flex flex-col md:w-2/3 md:my-5rem">
                    <div>
                        <textarea class="bg-purplle border-none rounded-xl placeholder-basic-gray mt-5 h-5rem w-full focus:ring-0 resize-none" placeholder="Título"></textarea>
                    </div>

                    <div>
                        <textarea class="bg-purplle border-none rounded-xl placeholder-basic-gray mt-5 h-10rem w-full focus:ring-0 resize-none" placeholder="Legenda"></textarea>
                    </div>
                    <div>
                        <textarea class="bg-purplle border-none rounded-xl placeholder-basic-gray mt-5 h-5rem w-full focus:ring-0 resize-none" placeholder="Tags"></textarea>
                    </div>

                    <div>
                        <a href="{{route('confirmarPost')}}">
                            <button class="bg-orange rounded-full px-8 py-2 mt-5 text-high-purplle ">Avançar
                            </button>
                        </a>
                    </div>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>
