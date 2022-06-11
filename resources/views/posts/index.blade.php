<x-layout>
    @include('posts._header')

    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        @if ($posts->isNotEmpty())
            @if ($posts->count() > 1)
                <div class="lg:grid lg:grid-cols-6">
                    @foreach ($posts as $post)
                        <x-article-card :post="$post" class="{{'col-span-2'}}" />
                    @endforeach
                </div>

                {{$posts->links()}}
            @endif

        @endif
    </main>
</x-layout>