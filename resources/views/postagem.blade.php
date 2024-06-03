<x-app-layout>
    <div class="py-12 text-white mt-20 mb-20">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="mb-4 md:mb-0 mx-10 md:mx-20 md:text-4xl text-3xl md:flex md:w-1/3">
                <h1>Poste Seus Conteúdos</h1>
            </div>

            <div class="md:flex bg-high-purplle shadow-sm mx-10 md:mx-0 flex-col md:flex-row items-center">


                <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf


                    <div class="flex items-center justify-center w-full  rounded-extra-lg md:flex bg-purplle p-20 md:mx-20 md:my-10 text-black md:w-1/3 md:mb-3 aria-describedby=file_input_help">

                        <label for="image" class="flex  bg-purplle flex-col items-center justify-center w-full h-48  rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                            <div class="flex flex-col items-center justify-center pt-5 pb-6">



                                <p class="mt-4 	text-center text-semibold text-sm text-gray uppercase">clique ou arraste sua imagem</p>

                            </div>

                            <input type="file" id="image" name="image" required>
                        </label>
                    </div>




                <div class="flex flex-col md:w-2/3 md:my-5rem">
                    <div>
                        <label for="title">Title:</label>
                        <textarea
                        name="title"
                        id="title"
                        class="bg-purplle border-none rounded-xl placeholder-basic-gray mt-5 h-5rem w-full focus:ring-0 resize-none" placeholder="Título"></textarea>
                    </div>

                    <div>

                        <label for="title">Legenda:</label>
                        <textarea
                        name="caption"
                        id="caption"
                        class="bg-purplle border-none rounded-xl placeholder-basic-gray mt-5 h-5rem w-full focus:ring-0 resize-none" placeholder="Título"></textarea>
                    </div>

                    <div>
                        <x-primary-button type="submit"> <x-primary-button>
                    </div>

                </div>



                </form>

            </div>
        </div>
    </div>

</x-app-layout>
