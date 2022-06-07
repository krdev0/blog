<header class="max-w-xl mx-auto mt-20 text-center">
    <h1 class="text-4xl">
        Latest <span class="text-blue-500">Laravel From Scratch</span> News
    </h1>

        <div class="space-y-2 lg:space-y-0 lg:space-x-4 mt-4">
        <!--  Category -->
        <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl">
            <x-dropdown>
                <x-slot name="trigger">
                    <button
                        class="inline-flex items-center justify-between py-2 px-3 text-sm font-semibold w-32 text-left"
                    >
                        {{isset($currentCategory) ? ucwords($currentCategory->name) : 'Categories'   }}

                        <svg class="transform -rotate-90 absolute pointer-events-none" style="right: 12px;" width="22" height="22"
                             viewBox="0 0 22 22">
                            <g fill="none" fill-rule="evenodd">
                                <path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z">
                                </path>
                                <path fill="#222" d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z">
                                </path>
                            </g>
                        </svg>
                    </button>

                </x-slot>

                <div x-show="open" class="absolute w-full bg-gray-100 mt-1 rounded-xl z-50" style="display:none;">

                    <x-dropdown-item href="/">All</x-dropdown-item>

                    @foreach($categories as $cat)
                        <x-dropdown-item
                            href="/?category={{$cat->slug}}"
                            :active="isset($currentCategory) && $currentCategory->is($cat)"
                        >
                            {{ucwords($cat->name)}}
                        </x-dropdown-item>
                    @endforeach
                </div>
            </x-dropdown>
        </div>

        <!-- Search -->
        <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl px-3 py-2">
            <form method="GET" action="#">
                <input type="text" name="search" placeholder="Find something"
                    class="bg-transparent placeholder-black font-semibold text-sm">
            </form>
        </div>
    </div>
</header>
