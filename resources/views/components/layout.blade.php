<!doctype html>

<title>Laravel From Scratch Blog</title>
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
<style>
    html {
        scroll-behavior: smooth;
    }
</style>
<body style="font-family: Open Sans, sans-serif">
<section class="px-6 py-8">
    <nav class="md:flex md:justify-between md:items-center">
        <div>
            <a href="/" class="text-3xl font-bold">
                <span class="text-red-500">Blog</span>ify
            </a>
        </div>

        <div class="mt-8 md:mt-0 flex items-center gap-4">
            @auth
                <x-dropdown>
                    <x-slot name="trigger">
                        <button>Welcome Back, {{auth()->user()->name}}</button>
                    </x-slot>

                    <x-dropdown-item href="/admin/dashboard">
                        Dashboard
                    </x-dropdown-item>
                    <x-dropdown-item href="/admin/posts/create">
                        New Post
                    </x-dropdown-item>
                    <x-dropdown-item href="/admin/posts">
                        All Posts
                    </x-dropdown-item>
                </x-dropdown>

                <form action="/logout" method="POST" class="flex items-center text-red-500">
                    @csrf
                    <button type="submit" class="flex gap-2 text-sm items-center">
                        Logout
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                        </svg>
                    </button>
                </form>
            @else
                <a href="/register" class="text-xs font-bold uppercase">Register</a>
                <a href="/login" class="text-xs font-bold uppercase">Login</a>
            @endauth
        </div>
    </nav>

    {{$slot}}

    <footer id="newsletter"
            class="bg-gray-100 border border-black border-opacity-5 rounded-xl text-center py-16 px-10 mt-16">
        <img src="/images/email.png" alt="" class="mx-auto mb-6" style="width: 100px;">
        <h5 class="text-3xl">Stay in touch with the latest posts</h5>
        <p class="text-sm mt-3">Your inbox will be clean. No spam.</p>

        <div class="mt-10">
            <div class="relative inline-block mx-auto">

                <form method="POST" action="/newsletter" class="lg:flex text-sm flex-col">
                    @csrf
                    <div class="flex lg:bg-gray-200 rounded-full">
                        <div class="lg:py-3 lg:px-5 flex items-center">
                            <label for="email" class="hidden lg:inline-block">
                                <img src="/images/mailbox-icon.svg" alt="mailbox letter">
                            </label>

                            <input id="email" type="text" name="email" placeholder="Your email address"
                                   class="lg:bg-transparent py-2 lg:py-0 pl-4 focus-within:outline-none">
                        </div>

                        <button type="submit"
                                class="transition-colors duration-300 bg-red-500 hover:bg-blue-600 mt-4 lg:mt-0 lg:ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-8">
                            Subscribe
                        </button>
                    </div>

                    @error('email')
                    <div class="text-xs text-red-500 mt-2 text-left">{{$message}}</div>
                    @enderror
                </form>
            </div>
        </div>
    </footer>
</section>

<x-flash/>
</body>
