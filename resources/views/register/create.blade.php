<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto">
            <form action="/register" method="POST">
                <h1 class="font-bold text-3xl mb-8">Register</h1>
                <div class="mb-6">
                    <label for="name" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                        Name
                    </label>

                    <input type="text" class="border border-gray-400 p-2 w-full"
                           name="name"
                           id="name"
                           required
                    >
                </div>
                <div class="mb-6">
                    <label for="username" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                        Username
                    </label>

                    <input type="text" class="border border-gray-400 p-2 w-full"
                        name="username"
                           id="username"
                           required
                    >
                </div>
                <div class="mb-6">
                    <label for="email" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                        Email
                    </label>

                    <input type="email" class="border border-gray-400 p-2 w-full"
                           name="email"
                           id="email"
                           required
                    >
                </div>
                <div class="mb-6">
                    <label for="password" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                        Password
                    </label>

                    <input type="password" class="border border-gray-400 p-2 w-full"
                           name="password"
                           id="password"
                           required
                    >
                </div>

                <div class="mb-6">
                    <button type="submit" class="px-4 py-2 bg-blue-500 rounded-full text-white">
                        Submit
                    </button>
                </div>

            </form>
        </main>
    </section>
</x-layout>