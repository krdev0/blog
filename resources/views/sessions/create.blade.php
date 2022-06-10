<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto">
            <form action="/register" method="POST" class="p-6 bg-gray-100 rounded-xl">
                @csrf
                <h1 class="font-bold text-3xl mb-8 text-center">Log In</h1>
            </form>
        </main>
    </section>
</x-layout>