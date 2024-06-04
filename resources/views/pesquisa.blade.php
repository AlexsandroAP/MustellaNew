<x-app-layout>
    <div class="mt-20 py-12 text-white flex md:min-h-auto">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-transparent shadow-sm">
                <div class="container mx-auto">

                    <div class="grid md:grid-cols-3 gap-4">
                        @foreach($posts as $post)

                            <div class="max-w-sm rounded overflow-hidden shadow-lg sm:m-4">

                                <div class="mb-3">
                                    <div class="flex items-center">
                                        <!-- circuloPerfil -->
                                        <div class="w-10 h-10 bg-orange rounded-full"></div>

                                        <div class="ml-2 text-white">
                                            {{$post->user->name}}
                                        </div>
                                    </div>
                                    <div class="font-bold text-xl mb-2 php artisan  text-white storage:link
                                    ">{{ $post->title }}</div>
                                    <p class=" text-base php artisan storage:link text-orange
                                    ">{{ $post->caption }}</p>

                                </div>
                                <img class="w-full text-purplle rounded-xl" src="{{ asset('storage/' . $post->image_path) }}" alt="{{ $post->title }}">
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

