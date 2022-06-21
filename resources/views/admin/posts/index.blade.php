<x-layout>

    <x-setting heading="Manage Posts">

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Post Title
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Status
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Category
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <span class="sr-only">Edit</span>
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <span class="sr-only">Delete</span>
                    </th>
                </tr>
                </thead>
                <tbody>
                    @foreach($posts as $post)
                        <tr class="bg-white dark:bg-gray-800">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                <a href="/posts/{{$post->slug}}">
                                    {{$post->title}}
                                </a>
                            </th>
                            <td class="px-6 py-4">
                                <span>Published</span>
                            </td>
                            <td class="px-6 py-4">
                                {{$post->category->name}}
                            </td>
                            <td class="px-6 py-4 text-right">
                                <a href="/admin/posts/{{$post->id}}/edit" class="font-medium text-blue-500 hover:text-blue-900 hover:underline">Edit</a>
                            </td>
                            <td class="px-6 py-4 text-right">
                                <form action="/admin/posts/{{$post->id}}/delete" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="font-medium text-red-500 hover:text-red-900 hover:underline">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </x-setting>

</x-layout>