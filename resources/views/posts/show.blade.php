<x-layout>
    <section class="px-6 py-8">

        <main class="max-w-6xl mx-auto mt-10 lg:mt-20 space-y-6">
            <article class="max-w-4xl mx-auto lg:grid lg:grid-cols-12 gap-x-10">
                <div class="col-span-4 lg:text-center lg:pt-14 mb-10">
                    <img src="/images/illustration-1.png" alt="" class="rounded-xl">

                    <p class="mt-4 block text-gray-400 text-xs">
                        Published
                        <time>{{$post->created_at->diffForHumans()}}</time>
                    </p>

                    <div class="flex items-center lg:justify-center text-sm mt-4">
                        <img src="/images/lary-avatar.svg" alt="Lary avatar">
                        <div class="ml-3 text-left">
                            <h5 class="font-bold">{{$post->author->name}}</h5>
                        </div>
                    </div>
                </div>

                <div class="col-span-8">
                    <div class="hidden lg:flex justify-between mb-6">
                        <a href="/"
                           class="transition-colors duration-300 relative inline-flex items-center text-lg hover:text-red-500">
                            <svg width="22" height="22" viewBox="0 0 22 22" class="mr-2">
                                <g fill="none" fill-rule="evenodd">
                                    <path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z">
                                    </path>
                                    <path class="fill-current"
                                          d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z">
                                    </path>
                                </g>
                            </svg>

                            Back to Posts
                        </a>

                        <div class="space-x-2">
                            <x-category-label :category="$post->category"/>
                        </div>
                    </div>

                    <h1 class="font-bold text-3xl lg:text-4xl mb-10">
                        {{$post->title}}
                    </h1>

                    <div class="space-y-4 lg:text-lg leading-loose">
                        <p>
                            {{$post->body}}
                        </p>
                    </div>
                </div>

                <section class="col-span-12 mt-6 bg-gray-100 p-6 rounded-xl border border-gray-300">
                    @auth()
                        <form method="POST" action="/posts/{{$post->slug}}/comments">
                            @csrf
                            <header>
                                <h2>Add a comment!</h2>
                            </header>

                            <div class="mt-4">
                            <textarea
                                    name="body"
                                    class="p-4 w-full text-sm rounded-xl focus:outline-none focus:ring"
                                    id="body"
                                    cols="30"
                                    rows="10"
                                    placeholder="Add your comment here..."
                                    required
                            ></textarea>

                                @error('body')
                                    <span class="text-xs text-red-500">{{$message}}</span>
                                @enderror
                            </div>

                            <div class="mt-4 text-right">
                                <button type="submit" class="text-sm bg-red-500 rounded-xl py-2 px-4 text-white">Post
                                    comment
                                </button>
                            </div>
                        </form>
                </section>
                @else
                    <p><a href="/login" class="text-red-500">Log in</a> to leave a comment<!doctype html>
                        <html lang="en">
                        <head>
                            <meta charset="UTF-8">
                            <meta name="viewport"
                                  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
                            <meta http-equiv="X-UA-Compatible" content="ie=edge">
                            <title>Document</title>
                        </head>
                        <body>

                        </body>
                        </html>
                    </p>
                @endauth

                <section class="col-span-12 mt-6 bg-gray-100 p-6 rounded-xl border border-gray-300">
                    <h2 class="mb-4 font-bold text-xl">Comments:</h2>
                    @foreach($post->comments as $comment)
                        <x-post-comment :comment="$comment"/>
                    @endforeach
                </section>
            </article>
        </main>
    </section>
</x-layout>