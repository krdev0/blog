<x-layout>

    <x-setting :heading="'Edit Post: ' . $post->title">
        <form action="/admin/posts/{{$post->id}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')

            <x-form.input name="title" :value="$post->title" placeholder="Post title"/>

            <x-form.input name="slug" :value="$post->slug" placeholder="Custom slug for post"/>

            <div>
                <x-form.input name="thumbnail" :value="$post->thumbnail" type="file"/>
                <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="" width="200" height="200" class="mt-4">
            </div>

            <x-form.textarea name="excerpt">
                {{ old('excerpt', $post->excerpt) }}
            </x-form.textarea>

            <x-form.textarea name="body">
                {{old('body', $post->body)}}
            </x-form.textarea>

            <x-form.field>
                <x-form.label name="category"/>

                <select name="category_id" id="category_id" class="p-2 rounded-xl">
                    @foreach(\App\Models\Category::all() as $category)
                        <option
                                value="{{$category->id}}"
                                {{old('category_id', $post->category_id) == $category->id ? 'selected' : ''}}>
                            {{ucwords($category->name)}}
                        </option>
                    @endforeach
                </select>

                <x-form.error name="category"/>
            </x-form.field>

            <x-form.submit-button>Update Post</x-form.submit-button>
        </form>
    </x-setting>

</x-layout>