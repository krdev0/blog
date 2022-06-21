<x-layout>
    <section class="px-6 py-8">
        <h1 class="text-2xl font-bold text-center mb-8">Create new blog post!</h1>
        <div class="max-w-xl mx-auto p-4 bg-gray-100 rounded-xl">
            <form action="/admin/posts" method="POST" enctype="multipart/form-data">
                @csrf

                <x-form.input name="title" placeholder="Post title" />
                <x-form.input name="slug" placeholder="Custom slug for post" />
                <x-form.input name="thumbnail" type="file" />
                <x-form.textarea name="excerpt" />
                <x-form.textarea name="body" />

                <x-form.field>
                    <x-form.label name="category" />

                    <select name="category_id" id="category_id">
                        @foreach(\App\Models\Category::all() as $category)
                            <option
                                    value="{{$category->id}}"
                                    {{old('category_id') == $category->id ? 'selected' : ''}}>
                                {{ucwords($category->name)}}
                            </option>
                        @endforeach
                    </select>

                    <x-form.error name="category" />
                </x-form.field>

                <x-form.submit-button>Create Post</x-form.submit-button>
            </form>
        </div>
    </section>
</x-layout>