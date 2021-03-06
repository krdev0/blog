@props(['post'])
<article {{$attributes->merge(['class' => 'h-full transition-colors duration-300 border bg-gray-50 rounded-xl'])}}">
    <div class="py-6 px-5 lg:flex flex-col h-full">
        <div class="w-full h-52">
            <img src="{{ $post->thumbnail ? asset('storage/' . $post->thumbnail) : asset('images/placeholder.jpg')}} " alt="Blog Post illustration" class="rounded-xl object-cover w-full h-full">
        </div>

        <div class="flex-1 flex flex-col justify-between">
            <header class="mt-8 lg:mt-0">
                <div class="space-x-2 mt-4">
                    <x-category-label :category="$post->category" />
                </div>

                <div class="mt-4">
                    <h1 class="text-2xl">
                        {{$post->title}}
                    </h1>

                    <span class="mt-2 block text-gray-400 text-xs">
                        Published <time>{{ $post->created_at->diffForHumans() }}</time>
                    </span>
                </div>
            </header>

            <div class="text-sm mt-2">
                <p>
                    {{\Illuminate\Support\Str::limit($post->excerpt, 100)}}
                </p>
            </div>

            <footer class="flex justify-between items-center mt-8">
                <div class="flex items-center text-sm">
                    <div class="ml-3">
                        <h5 class="font-bold text-xs">
                            <a class="text-red-500" href="/?author={{$post->author->username}}">
                                By {{ $post->author->name}}
                            </a>
                        </h5>
                    </div>
                </div>

                <div class="hidden lg:block">
                    <a href="/posts/{{ $post->slug }}"
                        class="transition-colors duration-300 text-xs font-semibold bg-gray-200 hover:bg-gray-300 rounded-full py-2 px-8">Read
                        More</a>
                </div>
            </footer>
        </div>
    </div>
</article>
