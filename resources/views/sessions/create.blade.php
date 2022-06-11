<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto">
            <form action="/login" method="POST" class="p-6 bg-gray-100 rounded-xl">
                @csrf
                <h1 class="font-bold text-3xl mb-8 text-center">Log In</h1>

                <div class="mb-6">
                    <label for="email" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                        Email
                    </label>

                    <input type="email" class="border border-gray-200 rounded-xl p-2 w-full"
                           name="email"
                           id="email"
                           value="{{old('email')}}"
                           required
                    >

                    @error('email')
                    <p class="text-red-500 text-xs mt-2">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="password" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                        Password
                    </label>

                    <input type="password" class="border border-gray-200 rounded-xl p-2 w-full"
                           name="password"
                           id="password"
                           required
                    >
                </div>

                <div class="mb-6">
                    <button type="submit" class="px-4 py-2 bg-red-500 rounded-full text-white">
                        Submit
                    </button>
                </div>
            </form>
        </main>
    </section>
</x-layout>