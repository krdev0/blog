@props(['heading'])
<section class="px-6 py-8">
    <div class="max-w-screen-lg mx-auto">
        <h1 class="text-xl font-bold mb-8 border-b pb-2">{{$heading}}</h1>

        <div class="flex gap-8">
            <aside class="w-48 flex-shrink-0">
                <h3 class="font-semibold text-lg mb-4">Links</h3>
                <ul>
                    <li>
                        <a href="/admin/dashboard"
                           class="{{ request()->is('admin/dashboard') ? 'text-blue-500' : '' }}">Dashboard</a>
                    </li>
                    <li>
                        <a href="/admin/posts/create"
                           class="{{ request()->is('admin/posts/create') ? 'text-blue-500' : '' }}">New Post</a>
                    </li>
                    <li>
                        <a href="/admin/posts"
                           class="{{ request()->is('admin/posts') ? 'text-blue-500' : '' }}">All Posts</a>
                    </li>
                </ul>
            </aside>

            <main class="flex-1">
                    {{$slot}}
            </main>
        </div>
    </div>
</section>