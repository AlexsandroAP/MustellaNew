<x-app-layout>
    <div class="py-12 text-white flex justify-center items-center min-h-screen md:min-h-auto mt-20 mb-20">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-sm">
                <div class="container mx-auto">
                    <h1 class="text-2xl font-bold">Images</h1>
                    <div class="grid md:grid-cols-3 gap-4 mt-4">
                        @foreach($posts as $post)
                            <div class="max-w-sm rounded overflow-hidden shadow-lg">
                                <img class="w-full text-purplle" src="{{ asset('storage/' . $post->image_path) }}" alt="{{ $post->title }}">
                                <div class="px-6 py-4">
                                    <div class="font-bold text-xl mb-2 php artisan  text-purplle storage:link
                                    ">{{ $post->title }}</div>
                                    <p class=" text-base php artisan storage:link text-purplle
                                    ">{{ $post->caption }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

