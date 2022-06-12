<x-layout>
    <section class="px-6 py-8">
        <h1 class="text-2xl font-bold text-center mb-8">Create new blog post!</h1>
        <div class="max-w-xl mx-auto p-4 bg-gray-100 rounded-xl">
            <form action="/admin/posts" method="POST">
                @csrf

                <div class="mb-6">
                    <label for="title" class="block mb-2 font-bold   text-gray-700">
                        Title
                    </label>

                    <input class="border border-gray-400 p-2 w-full rounded-xl"
                           name="title"
                           id="title"
                           type="text"
                           placeholder="Blog post title"
                           required
                    >

                    @error('title')
                    <p class="text-xs text-red-500">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="excerpt" class="block mb-2 font-bold   text-gray-700">
                        Excerpt
                    </label>

                    <input class="border border-gray-400 p-2 w-full rounded-xl"
                           name="excerpt"
                           id="excerpt"
                           type="text"
                           placeholder="Blog excerpt"
                           required
                    >

                    @error('excerpt')
                    <p class="text-xs text-red-500">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="body" class="block mb-2 font-bold text-gray-700">
                        Blog content
                    </label>

                    <textarea class="border border-gray-400 p-2 w-full rounded-xl"
                           name="body"
                           id="body"
                           placeholder="Blog post content"
                           required
                    ></textarea>

                    @error('body')
                    <p class="text-xs text-red-500">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="category" class="block mb-2 font-bold text-gray-700">
                        Category
                    </label>

                    <select name="category" id="category">
                        @php
                            $categories = \App\Models\Category::all();
                        @endphp

                        @foreach($categories as $category)
                            <option value="{{$category->id}}">{{ucwords($category->name)}}</option>
                        @endforeach
                    </select>

                    @error('category')
                    <p class="text-xs text-red-500">{{$message}}</p>
                    @enderror
                </div>

                <button type="submit" class="font-semibold bg-red-500 py-1 px-4 text-white rounded-full">
                    Create post
                </button>
            </form>
        </div>
    </section>
</x-layout>